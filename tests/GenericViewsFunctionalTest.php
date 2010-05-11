<?php
/**
 * @package genericviews
 * @subpackage tests
 */
class GenericViewsFunctionalTest extends FunctionalTest {

	static $fixture_file = 'genericviews/tests/GenericViewsFunctionalTest.yml';
	
	protected $extraDataObjects = array(
		'GenericViewsFunctionalTest_JobCategory'
	);
	
	function setUp() {
		parent::setUp();
		
		$page = $this->objFromFixture('CollectionPage', 'jobcategory_page');
		$page->publish('Stage', 'Live');
	}
	
	function testList() {
		$page = $this->objFromFixture('CollectionPage', 'jobcategory_page');
		
		$response = $this->get($page->URLSegment);
		$this->assertEquals($response->getStatusCode(), 200);
		$this->assertContains('Category 1', $response->getBody());
		$this->assertContains('Category 2', $response->getBody());
	}
	
	function testSearch() {
		$page = $this->objFromFixture('CollectionPage', 'jobcategory_page');
		
		$response = $this->get($page->URLSegment);
		
		$response = $this->submitForm('Form_SearchForm', null, array('Title'=>'Category 1'));
		$this->assertEquals($response->getStatusCode(), 200);
		$this->assertContains('Category 1', $response->getBody());
		$this->assertNotContains('Category 2', $response->getBody());
	}
	
	function testView() {
		$page = $this->objFromFixture('CollectionPage', 'jobcategory_page');
		$cat1 = $this->objFromFixture('GenericViewsFunctionalTest_JobCategory', 'cat1');
		$url = sprintf('%s/%s/%s/%s',
			$page->URLSegment, 
			'/GenericViewsFunctionalTest_JobCategory', 
			$cat1->ID, 
			'view'
		);
		
		$response = $this->get($url);
		$this->assertEquals($response->getStatusCode(), 200);
		$this->assertContains('Category 1', $response->getBody());
		$this->assertContains('Description 1', $response->getBody());
	}
	
	function testEdit() {
		$page = $this->objFromFixture('CollectionPage', 'jobcategory_page');
		$cat1 = $this->objFromFixture('GenericViewsFunctionalTest_JobCategory', 'cat1');
		$admin = $this->objFromFixture('Member', 'admin');
		
		$url = sprintf('%s/%s/%s/%s',
			$page->URLSegment, 
			'/GenericViewsFunctionalTest_JobCategory', 
			$cat1->ID, 
			'edit'
		);
		
		// without login
		$response = $this->get($url);
		$this->assertEquals($response->getStatusCode(), 403);
		
		// with login
		$admin->logIn();
		$response = $this->get($url);
		$this->assertEquals($response->getStatusCode(), 200);
		$this->assertContains('Category 1', $response->getBody());
		$this->assertContains('Description 1', $response->getBody());
		
		// change values
		$this->submitForm('Form_EditForm', null, array('Title'=>'Category 1 Modified'));
		$cat1Modified = DataObject::get_by_id('GenericViewsFunctionalTest_JobCategory', $cat1->ID);
		$this->assertEquals($cat1Modified->Title, 'Category 1 Modified');
	}
	
	function testDelete() {
		$page = $this->objFromFixture('CollectionPage', 'jobcategory_page');
		$cat1 = $this->objFromFixture('GenericViewsFunctionalTest_JobCategory', 'cat1');
		$admin = $this->objFromFixture('Member', 'admin');

		$url = sprintf('%s/%s/%s/%s',
			$page->URLSegment, 
			'/GenericViewsFunctionalTest_JobCategory', 
			$cat1->ID, 
			'edit'
		);

		// with login
		$admin->logIn();
		$response = $this->get($url);

		// delete entry
		$this->submitForm('Form_DeleteForm');
		$cat1Deleted = DataObject::get_by_id('GenericViewsFunctionalTest_JobCategory', $cat1->ID);
		$this->assertFalse($cat1Deleted);
	}
}

/**
 * @package genericviews
 * @subpackage tests
 */
class GenericViewsFunctionalTest_JobCategory extends DataObject implements TestOnly {
	static $db = array(
		'Title' => 'Varchar', 
		'Description' => 'Text', 
	);
	
	function canView() {
		return true;
	}
	
	function canEdit() {
		return Permission::check('ADMIN');
	}
	
	function canDelete() {
		return Permission::check('ADMIN');
	}
}