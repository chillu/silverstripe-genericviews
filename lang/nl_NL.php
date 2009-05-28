<?php

/**
 * Dutch (Netherlands) language pack
 * @package modules: genericviews
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericviews', 'en_US');

global $lang;

if(array_key_exists('nl_NL', $lang) && is_array($lang['nl_NL'])) {
	$lang['nl_NL'] = array_merge($lang['en_US'], $lang['nl_NL']);
} else {
	$lang['nl_NL'] = $lang['en_US'];
}

$lang['nl_NL']['CollectionController.ss']['ADDNEWRECORD'] = 'Nieuw record toevoegen';
$lang['nl_NL']['CollectionController.ss']['SEARCH'] = 'Zoeken';
$lang['nl_NL']['CollectionController_Results.ss']['NEXT'] = 'Volgende';
$lang['nl_NL']['CollectionController_Results.ss']['NORESULTSFOUND'] = 'Geen records gevonden';
$lang['nl_NL']['CollectionController_Results.ss']['PREV'] = 'Vorig';
$lang['nl_NL']['CollectionController_Results.ss']['RESULTS'] = 'Resultaten';
$lang['nl_NL']['CollectionPage']['db_CollectionControllerClass'] = 'CollectionControllerClass';
$lang['nl_NL']['CollectionPage']['db_CollectionModelClass'] = 'CollectionModelClass';
$lang['nl_NL']['CollectionPage']['plural_name'] = '(geen)';
$lang['nl_NL']['CollectionPage']['singular_name'] = '(geen)';
$lang['nl_NL']['RecordController']['DELETE'] = 'Verwijderen';
$lang['nl_NL']['RecordController']['SAVE'] = 'opslaan';
$lang['nl_NL']['RecordController']['SAVESUCCESS'] = 'Record opgeslagen';

?>