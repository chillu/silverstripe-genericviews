<?php
/**
 * @package genericviews
 * @author Ingo Schommer, SilverStripe Ltd. (<firstname>@silverstripe.com)
 * @author Sam Minnée, SilverStripe Ltd. (<firstname>@silverstripe.com)
 */
class RecordController extends Controller {
	protected $parentController;
	protected $currentRecord;

	static $allowed_actions = array('edit','view','delete','EditForm','ViewForm','DeleteForm');

	function __construct($parentController, $request) {
		$this->parentController = $parentController;
		$modelName = $parentController->getModelClass();

		if(is_numeric($request->latestParam('Action'))) {
			$this->currentRecord = DataObject::get_by_id($this->parentController->getModelClass(), $request->latestParam('Action'));
		}

		parent::__construct();
	}

	/**
	 * Overloading __get() to support nested controllers,
	 * e.g. to get the main site menu.
	 */
	public function __get($field) {
		if($this->hasMethod($funcName = "get$field")) {
			return $this->$funcName();
		} else if($this->hasField($field)) {
			return $this->getField($field);
		} else if($this->failover) {
			return $this->failover->$field;
		} elseif($this->parentController) {
			return $this->parentController->__get($field);
		}
	}

	function __call($funcName, $args) {
		if($this->hasMethod($funcName)) {
			return call_user_func_array(array(&$this, $funcName), $args);
		} elseif($this->parentController->hasMethod($funcName)) {
			return call_user_func_array(array(&$this->parentController, $funcName), $args);
		}
	}

	function init() {
		parent::init();

		Requirements::themedCSS('layout');
		Requirements::themedCSS('typography');
		Requirements::themedCSS('form');
	}

	/**
	 * Link fragment - appends the current record ID to the URL.
	 *
	 */
	function Link() {
		return Controller::join_links($this->parentController->Link(), "/{$this->currentRecord->ID}");
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////////

	function index($request) {
		return $this->view($request);
	}

	/**
	 * Edit action - shows a form for editing this record
	 */
	function edit($request) {
		if(!$this->currentRecord) {
			return $this->httpError(404);
		}
		if(!$this->currentRecord->canEdit(Member::currentUser())) {
			return $this->httpError(403);
		}

		return $this->render(array(
			'Form' => $this->EditForm(),
			'ExtraForm' => $this->DeleteForm()
		));
	}

	/**
	 * Returns a form for editing the attached model
	 */
	public function EditForm() {
		$fields = $this->currentRecord->getFrontendFields();
		$fields->push(new HiddenField("ID"));

		$validator = ($this->currentRecord->hasMethod('getValidator')) ? $this->currentRecord->getValidator() : new RequiredFields();

		$actions = new FieldSet(
			new FormAction("doEdit", _t('RecordController.SAVE', 'save'))
		);

		$form = new Form($this, "EditForm", $fields, $actions, $validator);
		$form->loadDataFrom($this->currentRecord);

		return $form;
	}

	public function DeleteForm() {
		if(!$this->currentRecord->canDelete(Member::currentUser())) {
			return false;
		}

		$form = new Form($this,
			"DeleteForm",
			new FieldSet(),
			new FieldSet(new FormAction('doDelete', _t('RecordController.DELETE', 'Delete')))
		);

		return $form;
	}

	/**
	 * Postback action to save a record
	 *
	 * @param array $data
	 * @param Form $form
	 * @param HTTPRequest $request
	 * @return mixed
	 */
	function doEdit($data, $form, $request) {
		if(!$this->currentRecord->canEdit(Member::currentUser())) {
			return $this->httpError(403);
		}

		$form->saveInto($this->currentRecord);
		$this->currentRecord->write();

		$form->sessionMessage(
			_t('RecordController.SAVESUCCESS','Saved record'),
			'good'
		);

		Director::redirectBack();
	}

	/**
	 * Delete the current record
	 */
	public function doDelete($data, $form, $request) {
		if(!$this->currentRecord->canDelete(Member::currentUser())) {
			return $this->httpError(403);
		}

		$this->currentRecord->delete();
		$form->sessionMessage(
			_t('RecordController.DELETESUCCESS','Successfully deleted record'),
			'good'
		);

		// Redirect to overview
		return $this->redirect($this->parentController->Link('index'));
	}

	/**
	 * Delete the current record
	 */
	function delete() {
		if(!$this->currentRecord->canDelete(Member::currentUser())) {
			return $this->httpError(403);
		}

		$this->currentRecord->delete();
		$form->sessionMessage(
			_t('RecordController.DELETESUCCESS','Successfully deleted record'),
			'good'
		);

		// Redirect to overview
		return $this->redirect($this->parentController->Link('index'));
	}


	/////////////////////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * Renders the record view template.
	 *
	 * @param HTTPRequest $request
	 * @return mixed
	 */
	function view($request) {
		if(!$this->currentRecord) {
			return $this->httpError(404);
		}
		if(!$this->currentRecord->canView(Member::currentUser())) {
			return $this->httpError(403);
		}

		return $this->render(array(
			'Form' => $this->ViewForm()
		));
	}

	/**
	 * Returns a form for viewing the attached model
	 *
	 * @return Form
	 */
	public function ViewForm() {
		$fields = $this->currentRecord->getFrontendFields();
		$form = new Form($this, "EditForm", $fields, new FieldSet());
		$form->loadDataFrom($this->currentRecord);
		$form->makeReadonly();
		return $form;
	}


	////////////////////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * @return string
	 */
	public function ModelNameSingular() {
		return singleton($this->parentController->getModelClass())->i18n_singular_name();
	}

	/**
	 * @return string
	 */
	public function ModelNamePlural() {
		return singleton($this->parentController->getModelClass())->i18n_plural_name();
	}

	public function templateIdentifier() {
		return $this->parentController->getModelClass();
	}

	/**
	 * If a parentcontroller exists, use its main template,
	 * and mix in specific collectioncontroller subtemplates.
	 */
	function getViewer($action) {
		if($this->parentController) {
			$viewer = $this->parentController->getViewer($action);

			// generic template with template identifier, e.g. themes/mytheme/templates/Layout/MyModel.ss
			$layoutGenericTemplate = SSViewer::getTemplateFileByType($this->templateIdentifier(), 'Layout');
			if($layoutGenericTemplate) $layoutTemplate = $layoutGenericTemplate;

			// action-specific template with template identifier, e.g. themes/mytheme/templates/Layout/MyModel_view.ss
			$layoutActionTemplate = SSViewer::getTemplateFileByType($this->templateIdentifier() . '_' . $action, 'Layout');
			if($layoutActionTemplate) $layoutTemplate = $layoutActionTemplate;

			// fallback to controller classname, e.g. genericviews/templates/Layout/CollectionController.ss
			if(!isset($layoutTemplate)) $layoutTemplate = SSViewer::getTemplateFileByType($this->class, 'Layout');

			$viewer->setTemplateFile('Layout', $layoutTemplate);

			return $viewer;
		} else {
			return parent::getViewer($action);
		}
	}
}
?>