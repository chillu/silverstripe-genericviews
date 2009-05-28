<?php

/**
 * French (France) language pack
 * @package modules: genericviews
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericviews', 'en_US');

global $lang;

if(array_key_exists('fr_FR', $lang) && is_array($lang['fr_FR'])) {
	$lang['fr_FR'] = array_merge($lang['en_US'], $lang['fr_FR']);
} else {
	$lang['fr_FR'] = $lang['en_US'];
}

$lang['fr_FR']['CollectionController.ss']['ADDNEWRECORD'] = 'Ajoute un nouveau enregistrement';
$lang['fr_FR']['CollectionController.ss']['SEARCH'] = 'Recherche';
$lang['fr_FR']['CollectionController_Results.ss']['NEXT'] = 'suivant';
$lang['fr_FR']['CollectionController_Results.ss']['NORESULTSFOUND'] = 'Pas d\'enregistrements trouvé';
$lang['fr_FR']['CollectionController_Results.ss']['PREV'] = 'Prec';
$lang['fr_FR']['CollectionController_Results.ss']['RESULTS'] = 'Résultats';
$lang['fr_FR']['CollectionPage']['db_CollectionControllerClass'] = 'CollectionControllerClass';
$lang['fr_FR']['CollectionPage']['db_CollectionModelClass'] = 'CollectionModelClass';
$lang['fr_FR']['CollectionPage']['GENERICVIEWTAB'] = 'Vues génériques';
$lang['fr_FR']['CollectionPage']['plural_name'] = '(aucun)';
$lang['fr_FR']['CollectionPage']['singular_name'] = '(aucun)';
$lang['fr_FR']['RecordController']['DELETE'] = 'supprime';
$lang['fr_FR']['RecordController']['DELETESUCCESS'] = 'Enregistrement supprimé avec succès';
$lang['fr_FR']['RecordController']['SAVE'] = 'Sauvegarde';
$lang['fr_FR']['RecordController']['SAVESUCCESS'] = 'Enregistrement sauvegardé';

?>