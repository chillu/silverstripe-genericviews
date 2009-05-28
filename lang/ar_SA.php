<?php

/**
 * Arabic (Saudi Arabia) language pack
 * @package modules: genericviews
 * @subpackage i18n
 */

i18n::include_locale_file('modules: genericviews', 'en_US');

global $lang;

if(array_key_exists('ar_SA', $lang) && is_array($lang['ar_SA'])) {
	$lang['ar_SA'] = array_merge($lang['en_US'], $lang['ar_SA']);
} else {
	$lang['ar_SA'] = $lang['en_US'];
}

$lang['ar_SA']['CollectionController.ss']['ADDNEWRECORD'] = 'إضافة سجل جديد';
$lang['ar_SA']['CollectionController.ss']['SEARCH'] = 'بحث';
$lang['ar_SA']['CollectionController_Results.ss']['NEXT'] = 'التالي';
$lang['ar_SA']['CollectionController_Results.ss']['NORESULTSFOUND'] = 'لايوجد سجل';
$lang['ar_SA']['CollectionController_Results.ss']['PREV'] = 'السابق';
$lang['ar_SA']['CollectionController_Results.ss']['RESULTS'] = 'النتائج';
$lang['ar_SA']['CollectionPage']['db_CollectionControllerClass'] = 'CollectionControllerClass';
$lang['ar_SA']['CollectionPage']['db_CollectionModelClass'] = 'CollectionModelClass';
$lang['ar_SA']['CollectionPage']['GENERICVIEWTAB'] = 'Generic Views';
$lang['ar_SA']['CollectionPage']['PLURALNAME'] = 'صفحات المجموعات المنوعة';
$lang['ar_SA']['CollectionPage']['plural_name'] = '(لايوجد)';
$lang['ar_SA']['CollectionPage']['SINGULARNAME'] = 'صفحة المجموعات المنوعة';
$lang['ar_SA']['CollectionPage']['singular_name'] = '(لايوجد)';
$lang['ar_SA']['RecordController']['DELETE'] = 'حذف';
$lang['ar_SA']['RecordController']['DELETESUCCESS'] = 'حذف السجل بنجاح';
$lang['ar_SA']['RecordController']['SAVE'] = 'حفظ';
$lang['ar_SA']['RecordController']['SAVESUCCESS'] = 'سجل محفوظ';

?>