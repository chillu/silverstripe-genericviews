<?php

/**
 * Norwegian Bokmal (Norway) language pack
 * @package modules: genericviews
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericviews', 'en_US');

global $lang;

if(array_key_exists('nb_NO', $lang) && is_array($lang['nb_NO'])) {
	$lang['nb_NO'] = array_merge($lang['en_US'], $lang['nb_NO']);
} else {
	$lang['nb_NO'] = $lang['en_US'];
}

$lang['nb_NO']['CollectionController.ss']['ADDNEWRECORD'] = 'Legg på ny melding';
$lang['nb_NO']['CollectionController.ss']['SEARCH'] = 'Søk';
$lang['nb_NO']['CollectionController_Results.ss']['NEXT'] = 'Neste';
$lang['nb_NO']['CollectionController_Results.ss']['NORESULTSFOUND'] = 'Ingen meldinger funnet';
$lang['nb_NO']['CollectionController_Results.ss']['PREV'] = 'Forrige';
$lang['nb_NO']['CollectionController_Results.ss']['RESULTS'] = 'Resultater';
$lang['nb_NO']['CollectionPage']['db_CollectionControllerClass'] = 'KolleksjonsKotrollerKlasse';
$lang['nb_NO']['CollectionPage']['db_CollectionModelClass'] = 'KolleksjonsModellKlasse';
$lang['nb_NO']['CollectionPage']['GENERICVIEWTAB'] = 'Visninger';
$lang['nb_NO']['CollectionPage']['PLURALNAME'] = 'SamlingsSider';
$lang['nb_NO']['CollectionPage']['plural_name'] = '(ingen)';
$lang['nb_NO']['CollectionPage']['SINGULARNAME'] = 'SamlingsSide';
$lang['nb_NO']['CollectionPage']['singular_name'] = '(ingen)';
$lang['nb_NO']['RecordController']['DELETE'] = 'Slett';
$lang['nb_NO']['RecordController']['DELETESUCCESS'] = 'Vellykket slettet melding';
$lang['nb_NO']['RecordController']['SAVE'] = 'lagre';
$lang['nb_NO']['RecordController']['SAVESUCCESS'] = 'Lagre melding';

?>