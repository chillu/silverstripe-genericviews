<?php

/**
 * Japanese (Japan) language pack
 * @package modules: genericviews
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericviews', 'en_US');

global $lang;

if(array_key_exists('ja_JP', $lang) && is_array($lang['ja_JP'])) {
	$lang['ja_JP'] = array_merge($lang['en_US'], $lang['ja_JP']);
} else {
	$lang['ja_JP'] = $lang['en_US'];
}

$lang['ja_JP']['CollectionController.ss']['ADDNEWRECORD'] = '新しいレコードを追加';
$lang['ja_JP']['CollectionController.ss']['SEARCH'] = '検索';
$lang['ja_JP']['CollectionController_Results.ss']['NEXT'] = '次';
$lang['ja_JP']['CollectionController_Results.ss']['NORESULTSFOUND'] = 'レコードが見つかりません';
$lang['ja_JP']['CollectionController_Results.ss']['PREV'] = '前';
$lang['ja_JP']['CollectionController_Results.ss']['RESULTS'] = '検索結果';
$lang['ja_JP']['CollectionPage']['GENERICVIEWTAB'] = '公開ビュー';
$lang['ja_JP']['RecordController']['DELETE'] = '削除';
$lang['ja_JP']['RecordController']['DELETESUCCESS'] = 'レコードを削除しました';
$lang['ja_JP']['RecordController']['SAVE'] = '保存';
$lang['ja_JP']['RecordController']['SAVESUCCESS'] = 'レコードを保存';

?>