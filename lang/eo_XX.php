<?php

/**
 * Esperanto language pack
 * @package modules: genericviews
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericviews', 'en_US');

global $lang;

if(array_key_exists('eo_XX', $lang) && is_array($lang['eo_XX'])) {
	$lang['eo_XX'] = array_merge($lang['en_US'], $lang['eo_XX']);
} else {
	$lang['eo_XX'] = $lang['en_US'];
}

$lang['eo_XX']['CollectionController.ss']['ADDNEWRECORD'] = 'Aldoni novan rikordon';
$lang['eo_XX']['CollectionController.ss']['SEARCH'] = 'Serĉi';
$lang['eo_XX']['CollectionController_Results.ss']['NEXT'] = 'Sekva';
$lang['eo_XX']['CollectionController_Results.ss']['NORESULTSFOUND'] = 'Neniu rikordo trovita';
$lang['eo_XX']['CollectionController_Results.ss']['PREV'] = 'Antaŭa';
$lang['eo_XX']['CollectionController_Results.ss']['RESULTS'] = 'Rezultoj';
$lang['eo_XX']['CollectionPage']['db_CollectionControllerClass'] = 'CollectionControllerClass';
$lang['eo_XX']['CollectionPage']['db_CollectionModelClass'] = 'CollectionModelClass';
$lang['eo_XX']['CollectionPage']['GENERICVIEWTAB'] = 'Komunaj Vidigoj';
$lang['eo_XX']['CollectionPage']['plural_name'] = '(neniu)';
$lang['eo_XX']['CollectionPage']['singular_name'] = '(neniu)';
$lang['eo_XX']['RecordController']['DELETE'] = 'Forigi';
$lang['eo_XX']['RecordController']['DELETESUCCESS'] = 'Sukcesis forigi rikordon';
$lang['eo_XX']['RecordController']['SAVE'] = 'konservi';
$lang['eo_XX']['RecordController']['SAVESUCCESS'] = 'Konservis rikordon';

?>