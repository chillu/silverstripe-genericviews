<?php

/**
 * Italian (Italy) language pack
 * @package modules: genericviews
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericviews', 'en_US');

global $lang;

if(array_key_exists('it_IT', $lang) && is_array($lang['it_IT'])) {
	$lang['it_IT'] = array_merge($lang['en_US'], $lang['it_IT']);
} else {
	$lang['it_IT'] = $lang['en_US'];
}

$lang['it_IT']['CollectionController.ss']['ADDNEWRECORD'] = 'Aggiungi nuovo record';
$lang['it_IT']['CollectionController.ss']['SEARCH'] = 'Ricerca';
$lang['it_IT']['CollectionController_Results.ss']['NEXT'] = 'Successivo';
$lang['it_IT']['CollectionController_Results.ss']['NORESULTSFOUND'] = 'Nessun record trovato';
$lang['it_IT']['CollectionController_Results.ss']['PREV'] = 'Prec';
$lang['it_IT']['CollectionController_Results.ss']['RESULTS'] = 'Risultati';
$lang['it_IT']['CollectionPage']['db_CollectionControllerClass'] = 'CollectionControllerClass';
$lang['it_IT']['CollectionPage']['db_CollectionModelClass'] = 'CollectionModelClass';
$lang['it_IT']['CollectionPage']['GENERICVIEWTAB'] = 'Viste Generiche';
$lang['it_IT']['CollectionPage']['plural_name'] = '(nessuno)';
$lang['it_IT']['CollectionPage']['singular_name'] = '(nessuno)';
$lang['it_IT']['RecordController']['DELETE'] = 'Elimina';
$lang['it_IT']['RecordController']['DELETESUCCESS'] = 'Record eliminato correttamente';
$lang['it_IT']['RecordController']['SAVE'] = 'salva';
$lang['it_IT']['RecordController']['SAVESUCCESS'] = 'Record salvato';

?>