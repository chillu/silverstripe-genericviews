<?php

/**
 * Indonesian (Indonesia) language pack
 * @package modules: genericviews
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericviews', 'en_US');

global $lang;

if(array_key_exists('id_ID', $lang) && is_array($lang['id_ID'])) {
	$lang['id_ID'] = array_merge($lang['en_US'], $lang['id_ID']);
} else {
	$lang['id_ID'] = $lang['en_US'];
}

$lang['id_ID']['CollectionController.ss']['ADDNEWRECORD'] = 'Tambah catatan baru';
$lang['id_ID']['CollectionController.ss']['SEARCH'] = 'Cari';
$lang['id_ID']['CollectionController_Results.ss']['NEXT'] = 'Berikutnya';
$lang['id_ID']['CollectionController_Results.ss']['NORESULTSFOUND'] = 'Tidak ada catatan yang ditemukan';
$lang['id_ID']['CollectionController_Results.ss']['PREV'] = 'Sebelumnya';
$lang['id_ID']['CollectionController_Results.ss']['RESULTS'] = 'Hasil';
$lang['id_ID']['CollectionPage']['plural_name'] = '(tidak ada)';
$lang['id_ID']['CollectionPage']['singular_name'] = '(tidak ada)';
$lang['id_ID']['RecordController']['DELETE'] = 'Hapus';
$lang['id_ID']['RecordController']['DELETESUCCESS'] = 'Catatan telah dihapus dengan sukses';
$lang['id_ID']['RecordController']['SAVE'] = 'simpan';
$lang['id_ID']['RecordController']['SAVESUCCESS'] = 'simpan catatan';

?>