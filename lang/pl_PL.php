<?php

/**
 * Polish (Poland) language pack
 * @package modules: genericviews
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericviews', 'en_US');

global $lang;

if(array_key_exists('pl_PL', $lang) && is_array($lang['pl_PL'])) {
	$lang['pl_PL'] = array_merge($lang['en_US'], $lang['pl_PL']);
} else {
	$lang['pl_PL'] = $lang['en_US'];
}

$lang['pl_PL']['CollectionController.ss']['ADDNEWRECORD'] = 'Dodaj nowy rekord';
$lang['pl_PL']['CollectionController.ss']['SEARCH'] = 'Szukaj';
$lang['pl_PL']['CollectionController_Results.ss']['NEXT'] = 'Następny';
$lang['pl_PL']['CollectionController_Results.ss']['NORESULTSFOUND'] = 'Nie znaleziono żadnych rekordów';
$lang['pl_PL']['CollectionController_Results.ss']['PREV'] = 'Poprzedni';
$lang['pl_PL']['CollectionController_Results.ss']['RESULTS'] = 'Wyniki';
$lang['pl_PL']['CollectionPage']['db_CollectionControllerClass'] = 'CollectionControllerClass';
$lang['pl_PL']['CollectionPage']['db_CollectionModelClass'] = 'CollectionModelClass';
$lang['pl_PL']['CollectionPage']['GENERICVIEWTAB'] = 'Unikalne Odsłony';
$lang['pl_PL']['CollectionPage']['plural_name'] = '(brak)';
$lang['pl_PL']['CollectionPage']['singular_name'] = '(brak)';
$lang['pl_PL']['RecordController']['DELETE'] = 'Usuń';
$lang['pl_PL']['RecordController']['DELETESUCCESS'] = 'Poprawnie usunięto rekord';
$lang['pl_PL']['RecordController']['SAVE'] = 'zapisz';
$lang['pl_PL']['RecordController']['SAVESUCCESS'] = 'Zapisano rekord';

?>