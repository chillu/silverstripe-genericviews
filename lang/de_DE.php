<?php

/**
 * German (Germany) language pack
 * @package modules: genericviews
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericviews', 'en_US');

global $lang;

if(array_key_exists('de_DE', $lang) && is_array($lang['de_DE'])) {
	$lang['de_DE'] = array_merge($lang['en_US'], $lang['de_DE']);
} else {
	$lang['de_DE'] = $lang['en_US'];
}

$lang['de_DE']['CollectionController.ss']['ADDNEWRECORD'] = 'Neuen Datensatz hinzufügen';
$lang['de_DE']['CollectionController.ss']['SEARCH'] = 'Suchen';
$lang['de_DE']['CollectionController_Results.ss']['NEXT'] = 'Weiter';
$lang['de_DE']['CollectionController_Results.ss']['NORESULTSFOUND'] = 'Keine Datzensätze gefunden';
$lang['de_DE']['CollectionController_Results.ss']['PREV'] = 'Zurück';
$lang['de_DE']['CollectionController_Results.ss']['RESULTS'] = 'Ergebnisse';
$lang['de_DE']['CollectionPage']['db_CollectionControllerClass'] = 'Controllerklasse';
$lang['de_DE']['CollectionPage']['db_CollectionModelClass'] = 'Datenklasse';
$lang['de_DE']['CollectionPage']['GENERICVIEWTAB'] = 'Generic Views';
$lang['de_DE']['CollectionPage']['PLURALNAME'] = 'Sammlungs-Seiten';
$lang['de_DE']['CollectionPage']['plural_name'] = 'Generische Übersichtsseiten';
$lang['de_DE']['CollectionPage']['SINGULARNAME'] = 'Sammlungs-Seite';
$lang['de_DE']['CollectionPage']['singular_name'] = 'Generische Übersichtsseite';
$lang['de_DE']['RecordController']['DELETE'] = 'Löschen';
$lang['de_DE']['RecordController']['DELETESUCCESS'] = 'Datensatz erfolgreich gelöscht';
$lang['de_DE']['RecordController']['SAVE'] = 'Speichern';
$lang['de_DE']['RecordController']['SAVESUCCESS'] = 'Gespeichert';

?>