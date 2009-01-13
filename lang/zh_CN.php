<?php

/**
 * Chinese (China) language pack
 * @package modules: genericviews
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericviews', 'en_US');

global $lang;

if(array_key_exists('zh_CN', $lang) && is_array($lang['zh_CN'])) {
	$lang['zh_CN'] = array_merge($lang['en_US'], $lang['zh_CN']);
} else {
	$lang['zh_CN'] = $lang['en_US'];
}

$lang['zh_CN']['CollectionController.ss']['ADDNEWRECORD'] = '添加新记录';
$lang['zh_CN']['CollectionController.ss']['SEARCH'] = '搜索';
$lang['zh_CN']['CollectionController_Results.ss']['NEXT'] = '下一个';
$lang['zh_CN']['CollectionController_Results.ss']['NORESULTSFOUND'] = '无记录';
$lang['zh_CN']['CollectionController_Results.ss']['PREV'] = '上一个';
$lang['zh_CN']['CollectionController_Results.ss']['RESULTS'] = '结果';
$lang['zh_CN']['CollectionPage']['db_CollectionControllerClass'] = '采集控制器类';
$lang['zh_CN']['CollectionPage']['db_CollectionModelClass'] = '采集实体类';
$lang['zh_CN']['CollectionPage']['GENERICVIEWTAB'] = '通用视图';
$lang['zh_CN']['CollectionPage']['plural_name'] = '多名称';
$lang['zh_CN']['CollectionPage']['singular_name'] = '单名称';
$lang['zh_CN']['RecordController']['DELETE'] = '删除';
$lang['zh_CN']['RecordController']['DELETESUCCESS'] = '成功删除记录';
$lang['zh_CN']['RecordController']['SAVE'] = '保存';
$lang['zh_CN']['RecordController']['SAVESUCCESS'] = '已保存记录';

?>