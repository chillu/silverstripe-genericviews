<?php

/**
 * Turkish (Turkey) language pack
 * @package modules: genericviews
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericviews', 'en_US');

global $lang;

if(array_key_exists('tr_TR', $lang) && is_array($lang['tr_TR'])) {
	$lang['tr_TR'] = array_merge($lang['en_US'], $lang['tr_TR']);
} else {
	$lang['tr_TR'] = $lang['en_US'];
}

$lang['tr_TR']['CollectionController.ss']['ADDNEWRECORD'] = 'Yeni kayıt ekle';
$lang['tr_TR']['CollectionController.ss']['SEARCH'] = 'Arama';
$lang['tr_TR']['CollectionController_Results.ss']['NEXT'] = 'İleri';
$lang['tr_TR']['CollectionController_Results.ss']['NORESULTSFOUND'] = 'Kayıt bulunamadı';
$lang['tr_TR']['CollectionController_Results.ss']['PREV'] = 'Geri';
$lang['tr_TR']['CollectionController_Results.ss']['RESULTS'] = 'Sonuçlar';
$lang['tr_TR']['CollectionPage']['db_CollectionControllerClass'] = 'CollectionControllerClass';
$lang['tr_TR']['CollectionPage']['db_CollectionModelClass'] = 'CollectionModelClass';
$lang['tr_TR']['CollectionPage']['GENERICVIEWTAB'] = 'Genel Görünüm';
$lang['tr_TR']['CollectionPage']['PLURALNAME'] = 'Kolleksiyon Sayfaları';
$lang['tr_TR']['CollectionPage']['plural_name'] = '(hiçbiri)';
$lang['tr_TR']['CollectionPage']['SINGULARNAME'] = 'Kolleksiyon Sayfası';
$lang['tr_TR']['CollectionPage']['singular_name'] = '(hiçbiri)';
$lang['tr_TR']['RecordController']['DELETE'] = 'Sil';
$lang['tr_TR']['RecordController']['DELETESUCCESS'] = 'Kayır başarıyla silindi';
$lang['tr_TR']['RecordController']['SAVE'] = 'kaydet';
$lang['tr_TR']['RecordController']['SAVESUCCESS'] = 'Kaydedildi';

?>