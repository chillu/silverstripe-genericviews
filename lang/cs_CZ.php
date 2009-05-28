<?php

/**
 * Czech (Czech Republic) language pack
 * @package modules: genericviews
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericviews', 'en_US');

global $lang;

if(array_key_exists('cs_CZ', $lang) && is_array($lang['cs_CZ'])) {
	$lang['cs_CZ'] = array_merge($lang['en_US'], $lang['cs_CZ']);
} else {
	$lang['cs_CZ'] = $lang['en_US'];
}

$lang['cs_CZ']['CollectionController.ss']['ADDNEWRECORD'] = 'Přidat nový záznam';
$lang['cs_CZ']['CollectionController.ss']['SEARCH'] = 'Hledat';
$lang['cs_CZ']['CollectionController_Results.ss']['NEXT'] = 'Další';
$lang['cs_CZ']['CollectionController_Results.ss']['NORESULTSFOUND'] = 'Nenalezeny žádné záznamy';
$lang['cs_CZ']['CollectionController_Results.ss']['PREV'] = 'Předcházející';
$lang['cs_CZ']['CollectionController_Results.ss']['RESULTS'] = 'Výsledky';
$lang['cs_CZ']['CollectionPage']['db_CollectionControllerClass'] = 'CollectionControllerClass';
$lang['cs_CZ']['CollectionPage']['db_CollectionModelClass'] = 'CollectionModelClass';
$lang['cs_CZ']['CollectionPage']['plural_name'] = '(žádný)';
$lang['cs_CZ']['CollectionPage']['singular_name'] = '(žádný)';
$lang['cs_CZ']['RecordController']['DELETE'] = 'Smazat';
$lang['cs_CZ']['RecordController']['DELETESUCCESS'] = 'Záznam byl úspěšně odstraněn.';
$lang['cs_CZ']['RecordController']['SAVE'] = 'uložit';
$lang['cs_CZ']['RecordController']['SAVESUCCESS'] = 'Uložit záznam';

?>