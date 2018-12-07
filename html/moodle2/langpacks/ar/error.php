<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'error', language 'ar', branch 'MOODLE_34_STABLE'
 *
 * @package   error
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alreadyloggedin'] = 'أنت حالياً مسجل كـ{$a}، عليك أولاً الخروج من ذاك الحساب قبل محاولة الدخول كمستخدم جديد.';
$string['backuptablefail'] = 'لم يتمكن من إعداد جداول النسخ الاحتياطي بنجاح!';
$string['blockcannotconfig'] = 'هذه الكتلة لا تدعم الإعدادات العامة';
$string['blockcannotinistantiate'] = 'مشكلة أثناء إنشاء الكتلة';
$string['blockcannotread'] = 'لم يتمكن من قراءة البيانات للكتلة ذات المعرف: {$a}';
$string['blockdoesnotexist'] = 'الكتلة غير موجودة';
$string['blockdoesnotexistonpage'] = 'الكتلة (id={$a->instanceid}) غير موجودة بالصفحة ({$a->url}).';
$string['blocknameconflict'] = 'تضارب بالتسمية: الكتلة {$a->name} لها نفس اسم كتلة موجودة: {$a->conflict}!';
$string['cannotaddcoursemodule'] = 'لم يتمكن من إضافة وحدة مقرر دراسي جديد';
$string['cannotaddcoursemoduletosection'] = 'لم يتمكن من إضافة وحدة المقرر الدراسي الجديد لذلك القسم';
$string['cannotaddmodule'] = 'لم يتم إضافة الوحدة {$a} إلى قائمة الوحدات!';
$string['cannotaddnewmodule'] = 'لم يتم إضافة الوحدة الجديدة {$a}';
$string['cannotaddrss'] = 'ليس لديك الإذن بإضافة تلقيمات rss';
$string['cannotaddthisblocktype'] = 'لا يمكن إضافة كتلة {$a}  إلى الصفحة.';
$string['cannotassignrole'] = 'لا يمكن تعيين دور في هذا المقرر الدراسي';
$string['cannotassignrolehere'] = 'لا يمكنك تعيين هذا الدور (id = {$a->roleid}) في هذا السياق ({$a->context})';
$string['cannotassignselfasparent'] = 'لايمكن تعيين حسابك كأب';
$string['cannotcallscript'] = 'لا يمكنك استدعاء هذا السكريبت بتلك الطريقة';
$string['cannotcallusgetselecteduser'] = 'لا يمكنك استعداء user_selector::get_selected_user إذا كان التحديد المتعدد مفعّلاً';
$string['cannotcreatebackupdir'] = 'لم يتمكن من إنشاء مجلد بيانات النسخ الاحتياطي backupdata. على مدير الموقع تعديل سماحيات الملفات';
$string['cannotcreatecategory'] = 'لم يتم إدراج تصنيف';
$string['cannotcreatedboninstall'] = '<p> لا يمكن إنشاء قاعدة البيانات. </p>
<p> لا وجود لقاعدة البيانات المحددة والمستخدم المُعين ليس لديه إذن لإنشاء قاعدة البيانات. </ p>
<p> المسؤول عن الموقع يجب أن يتحقق من إعدادات قاعدة بيانات. </p>';
$string['cannotcreategroup'] = 'خطأ في إنشاء المجوعة';
$string['cannotcreatelangbase'] = 'خطأ: لا يمكن إنشاء مجلد اللغة الأساسية';
$string['cannotcreatelangdir'] = 'لا يمكن إنشاء مجلد اللغة';
$string['cannotcreateorfindstructs'] = 'خطأ في إيجاد أو إنشاء هياكل القسم لهذا المقرر الدراسي';
$string['cannotcreatetempdir'] = 'لا يمكن إنشاء المجلد المؤقت';
$string['cannotcreateuploaddir'] = 'لا يمكن إنشاء مجلد الرفع. على مدير الموقع إصلاح سماحيات الملفات.';
$string['cannotcustomisefiltersblockuser'] = 'لا يمكنك تخصيص إعدادات المرشحات للمستخدم أو لكتلة السياقات.';
$string['cannotdeletecategorycourse'] = 'لا مكن حذف المقرر الدراسي \'{$a}\'';
$string['cannotdeletecategoryquestions'] = 'لا يمكن حذف السؤال من التصنيف \'{$a}\'';
$string['cannotdeletecourse'] = 'ليس لديك الإذن بحذف هذا المقرر الدراسي';
$string['cannotdeletecustomfield'] = 'حصل خطأ في حذف بيانات الحقل المخصص';
$string['cannotdeletedir'] = 'لا يمكن حذف ({$a})';
$string['cannotdeletefile'] = 'لا يمكن حذف هذا الملف';
$string['cannotdeleterole'] = 'لا يمكن حذفه بسبب {$a}';
$string['cannotdeleterolewithid'] = 'لا يمكن حذف الدور صاحب المعرف {$a}';
$string['cannotdeletethisrole'] = 'لا يمكنك حذف هذا الدور لأنه يُستخدم من قبل النظام، أو لأنه هو الدور الأخير الذي يحتوي على صلاحية مدير الموقع.';
$string['cannotdisableformat'] = 'لا يمكنك تعطيل التنسيق الافتراضي';
$string['cannotdownloadcomponents'] = 'لم يتم تحميل العناصر';
$string['cannotdownloadlanguageupdatelist'] = 'لا يمكن تحميل قائمة تحديثات اللغة من download.moodle.org';
$string['cannotdownloadzipfile'] = 'لم يتم تحميل الملف المضغوط';
$string['cannoteditcomment'] = 'هذا التعليق ليس لك لتعدله!';
$string['cannoteditcommentexpired'] = 'لا يمكنك تحرير هذا. لقد انتهى وقت الصلاحية!';
$string['cannoteditpostorblog'] = 'لا يمكنك إنشاء أو تحرير التدوينات';
$string['cannoteditsiteform'] = 'لا يمكنك تعديل المقرر الدراسي للموقع باستخدام هذا النموذج';
$string['cannotedituserpreferences'] = 'لا تستطيع تعديل تفضيلات هذا المستخدم';
$string['cannotedityourprofile'] = 'عذراً، لا يمكنك تحرير سيرتك الذاتية';
$string['cannotexecduringupgrade'] = 'لايمكن التنفيذ خلال ترقية النظام';
$string['cannotfindcategory'] = 'لايمكن ايجاد هذا التصنيف في قاعدة البيانات باستخدام المعرف - {$a}';
$string['cannotfindcomponent'] = 'لم يتم العثور على المكون';
$string['cannotfindcontext'] = 'لم يتم العثور على محتوى';
$string['cannotfindcourse'] = 'لم يتم العثور على المقرر الدراسي';
$string['cannotfinddocs'] = 'لا يمكن إيجاد ملفات مساعدة اللغة "{$a}"';
$string['cannotfindgradeitem'] = 'لم يتم العثور على بند الدرجة';
$string['cannotfindgroup'] = 'تعذر العثور على المجموعة';
$string['cannotfindhelp'] = 'لم يتم العثور على ملفات مساعدة اللغة "{$a}" ';
$string['cannotfindinfo'] = 'لم يتم العثور على معلومات عن: "{$a}" ';
$string['cannotfindlang'] = 'لم يتم إيجاد حزمة اللغة "{$a}" ';
$string['cannotfindteacher'] = 'لم يتم إيجاد المدرس';
$string['cannotfinduser'] = 'لم يتم إيجاد المستخدم المسمى "{$a}"';
$string['cannotgeoplugin'] = 'لا يمكن الاتصال بالخادم geoPlugin في http://www.geoplugin.com، يرجى التحقق من إعدادات الوكيل أو الأفضل قم بتثبيت ملف بيانات MaxMind GeoLite City';
$string['cannotgetblock'] = 'لم يتم استرداد الكتل من قاعدة البيانات';
$string['cannotgetcats'] = 'لا يمكن الحصول على سجل التصنيف';
$string['cannotgetdata'] = 'لم يتم الحصول على البيانات';
$string['cannotgradeuser'] = 'لا يمكن وضع علامة لهذا المستخدم';
$string['cannothaveparentcate'] = 'لا يمكن أن يكون لتصنيفات المقررات الدراسية جذر!';
$string['cannotimport'] = 'خطأ في الاستيراد';
$string['cannotimportformat'] = 'عذراً، استيراد هذا التنسيق غير مدعوم بعد!';
$string['cannotimportgrade'] = 'خطأ في استيراد الدرجات';
$string['cannotinsertgrade'] = 'لا يمكن إدراج العلامة من دون معرف المقرر الدراسي';
$string['cannotinsertrate'] = 'لا يمكن إدراج تقييم جديد ({$a->id} = {$a->rating})';
$string['cannotinsertrecord'] = 'لا يمكن إدراج السجل الجديد ذو المعرف {$a}';
$string['cannotmailconfirm'] = 'خطأ في إرسال بريد التحقق من تغيير كلمة السر';
$string['cannotmanualctrack'] = 'هذا النشاط لا يوفر تتبع الإنجاز يدوياً';
$string['cannotmapfield'] = 'اكتشاف اصطدام في الارتباط - يوجد حقلين مختلفين مرتبطين بنفس عنصر الدرجة {$a}';
$string['cannotmarktopic'] = 'لا يمكن تصحيح هذا الموضوع لهذا المقرر الدراسي';
$string['cannotmovecategory'] = 'لايمكن نقل التصنيف';
$string['cannotmovecourses'] = 'لا يمكنك نقل مقررات دراسية من تصنيف لا تنتمي له المقررات الدراسية أصلاً.';
$string['cannotmoverolewithid'] = 'لا يمكن تغيير الدور ذو المعرف {$a}';
$string['cannotopencsv'] = 'لا يمكن فتح ملف CSV';
$string['cannotopenfile'] = 'لا يمكن فتح ملف ({$a})';
$string['cannotopenforwrit'] = 'لا يمكن فتح {$a} للكتابة';
$string['cannotopentemplate'] = 'لا يمكن فتح ملف القالب ({$a})';
$string['cannotopenzip'] = 'لا يمكن فتح لاملف المضغوط، ربما يكون هذا خطأ في توسعه zip على نظام 64 بت';
$string['cannotoverridebaserole'] = 'لا يمكن إعادة تعيين صلاحية الدورالأساسي';
$string['cannotoverriderolehere'] = '';
$string['cannotreadfile'] = 'لا يمكنك قراءة الملف  ({$a})';
$string['cannotreadtmpfile'] = 'خطأ في قراءة الملف المؤقت';
$string['cannotreaduploadfile'] = 'لم بتمكن من قراءة الملف المرفوع';
$string['cannotreprocessgrades'] = 'لا يمكن إعادة معالجة الدرجات لهذا النشاط {$a}';
$string['cannotresetguestpwd'] = 'لا يمكنك إعادة تعيين كلمة سر الزائر';
$string['cannotresetmail'] = 'خطأ أثناء إعادة تعيين كلمة السر وإرسال بريد إلكتروني لك';
$string['cannotresetthisrole'] = 'لا يمكن إعادة تعيين هذا الدور';
$string['cannotrestore'] = 'حدث خطأ وتعذر إكمال الاستعادة!';
$string['cannotsaveagreement'] = 'لايمكن تخزين الاتفاق';
$string['cannotsaveblock'] = 'خطأ أثناء حفظ إعدادات الكتلة';
$string['cannotsavecomment'] = 'لم يتم حفظ التعليق';
$string['cannotsavedata'] = 'لا يمكن حفظ البيانات';
$string['cannotsavefile'] = 'لا يمكن حفظ الملف "{$a}"!';
$string['cannotsavemd5file'] = 'لم يتم حفظ ملف  md5';
$string['cannotsavezipfile'] = 'لم يتم حفظ الملف المضغوط';
$string['cannotservefile'] = 'لايمكن التعامل مع الملف - يوجد مشاكل في إعدادات السيرفر';
$string['cannotsetparentforcatoritem'] = 'لا يمكن جعل جذر للتصنيف أو المقرر الدراسي!';
$string['cannotsetpassword'] = 'لم يتمكن من تعيين كلمة سر المستخدم!';
$string['cannotsettheme'] = 'لا يمكن تعيين السمة!';
$string['cannotsignup'] = 'لا يمكنك إنشاء حساب جديد لأنك بالفعل قمت بالدخول الا بحسابك كــ {$a}.';
$string['cannotunassigncap'] = 'لا يمكن إلغاء الصلاحية المهملة {$a->cap} من الدور {$a->role}';
$string['cannotunzipfile'] = 'لم يتم فك الملف المضغوط';
$string['cannotupdatemod'] = 'لا يمكن تحديث {$a}';
$string['cannotupdatepasswordonextauth'] = 'فشل تحديث كلمة المرور على المصادقة الخارجية: {$a}. اطلع على سجلات الخادم لمزيد من التفاصيل.';
$string['cannotupdateprofile'] = 'خطأ في تحديث سجل المستخدم';
$string['cannotupdaterecord'] = 'لايمكن تحديث سجل المعرف  {$a}';
$string['cannotupdaterss'] = 'لا يمكن تحديث RSS';
$string['cannotupdatesubcourse'] = 'لايمكن تحديث جزء المقرر الدراسي';
$string['cannotupdateusermsgpref'] = ' لايمكن تحديث تفضيلات رسالة المستخدم';
$string['cannotupdateuseronexauth'] = 'فشل تحديث بيانات المستخدم على المصادقة الخارجية: {$a}. اطلع على سجلات الخادم لمزيد من التفاصيل.';
$string['cannotuploadfile'] = 'خطاء في معالجة تحميل الملف';
$string['cannotuseadmin'] = 'يجب أن تكون مستخدم إداري لتستخدم هذه الصفحة';
$string['cannotuseadminadminorteacher'] = 'يجب أن تكون مدرساً أو مديراً لتستخدم هذه الصفحة';
$string['cannotusepage'] = 'يمكن فقط للمدرسين والمدراء استخدام هذه الصفحة';
$string['cannotusepage2'] = 'عذراً، لا يمكنك استخدام هذه الصفحة';
$string['cannotviewprofile'] = 'لا تستطيع معاينة السير الذاتية الخاصة بهذا المستخدم';
$string['cannotviewreport'] = 'لا تستطيع معاينة هذا التقرير';
$string['cannotwritefile'] = 'لايمكن الكتابة في الملف  ({$a})';
$string['categoryerror'] = 'خطأ في الفئة';
$string['categoryidnumbertaken'] = 'المعرف مستخدم مسبقا لفئة أخرى';
$string['categorynamerequired'] = 'يجب تعبئة اسم الفئة';
$string['categorytoolong'] = 'اسم الفئة طويل جدا';
$string['componentisuptodate'] = 'العنصر محدث';
$string['confirmsesskeybad'] = 'عذراً، ولكن مفتاح جلسة العمل الخاصة  بك لم يتم تأكيده لتنفيذ هذا الإجراء. هذا الإجراء الأماني يمنع من  تنفيذ أعمال بطريق الخطأ أو انتحال شخصيتك والقيام  بوظائف مهمة تحت اسمك. من فضلك تأكد من أنك تريد حقاً تنفيذ هذه المهمة.';
$string['couldnotupdatenoexistinguser'] = 'لا يمكن تحديث المستخدم - المستخدم غير موجود';
$string['countriesphpempty'] = 'خطأ: الملف countries.php في حزمة اللغة {$a} فارغ أو غير موجود.';
$string['coursedoesnotbelongtocategory'] = 'المقرر الدراسي لا ينتمي إلى هذا التصنيف';
$string['courseformatnotfound'] = 'تنسيق المقرر الدراسي  \'{$a}\' غير موجود أو لا يمكن التعرُّف عليه';
$string['coursegroupunknown'] = 'المقرر الدرسي المتطابق مع المجموعة {$a} لم يحدد';
$string['courseidnotfound'] = 'معرّف المقرر الدراسي غير موجود';
$string['courseidnumbertaken'] = 'المعرف مستخدم مبقا في مقرر دراسي آخر';
$string['coursemisconf'] = 'تم إعداد المقرر الدراسي بشكل خاطئ';
$string['courserequestdisabled'] = 'عذراً، ولكن تم تعطيل طلبات المقررات الدراسية من قبل مدير الموقع.';
$string['csvcolumnduplicates'] = 'تم الكشف عن عمود مكرر';
$string['csvemptyfile'] = 'ملف الـCSV هذا؛ فارغ';
$string['csvfewcolumns'] = 'لايوجد اعمدة كافية، ارجو التحقق من الاعدادات';
$string['csvinvalidcolsnum'] = 'خطأ في ملف CSV - كل سطر يجب أن يحوي 49 أو 70 حقلاً';
$string['csvloaderror'] = 'خطأ أثناء تحميل ملف CSV!';
$string['csvweirdcolumns'] = 'تنسيق ملف CSV غير صالح - عدد الأعمدة ليست ثابتة!';
$string['dbconnectionfailed'] = '<P> خطأ: فشل اتصال قاعدة البيانات </ P>
<P> ومن الممكن أن قاعدة البيانات تجاوزت طاقتها أو لاتعمل بشكل صحيح. </ P>
<p> ويجب على مدير الموقع أيضا التحقق من أن تفاصيل قاعدة البيانات تم تحديدها بشكل صحيح في ملف config.php </ P>';
$string['dbdriverproblem'] = '<p> خطأ: تم الكشف عن مشكلة في  تشغيل قاعدة البيانات </p>
<p>  (يجب على مدير الموقع التحقق من إعدادات الخادم (السيرفر </p> <p> {$a} </p>';
$string['dbsessionhandlerproblem'] = 'فشل إعداد جلسة قاعدة البيانات.<br /><br />رجاءً أخبر مدير السيرفر.';
$string['dbsessionmysqlpacketsize'] = 'تم الكشف عم خطأ حاد في الجلسة.<br /><br />رجاءً أخبر المدير، هذه المشكلة ناتجة في الغالب عن قيمة قليلة في max_allowed_packet في إعدادات MySQL.';
$string['dbupdatefailed'] = 'فشل تحديث قاعدة البيانات';
$string['ddldependencyerror'] = '{$a->targettype} "{$a->targetname}" لا يمكن تعديله .التبعية وجدت مع {$a->offendingtype} "{$a->offendingname}"';
$string['ddlexecuteerror'] = 'خطأ في تنفيذ لغة تعريف البيانات (DDL) ل SQL';
$string['ddlfieldalreadyexists'] = 'الحقل "{$a}" موجود مسبقاً';
$string['ddlfieldnotexist'] = 'الحقل "{$a->fieldname}" موجود مسبقاً في الجدول "{$a->tablename}"';
$string['ddltablealreadyexists'] = 'الجدول "{$a}" موجود مسبقاً';
$string['ddltablenotexist'] = 'الجدول "{$a}" غير موجود';
$string['ddlunknownerror'] = 'خطأ غير معروف في مكتبة لغة تعريف البيانات (DDL)';
$string['ddlxmlfileerror'] = 'وجدت أخطاء ملف قاعدة بيانات XML';
$string['ddsequenceerror'] = 'تعريف جدول "{$a}"  غير صحيح; يمكن أن يكون هناك عمود تلقائي واحد فقط، ويجب أن يتم تعريف على أنه يحتوي على المفتاح.';
$string['detectedbrokenplugin'] = 'عذراً ولكنَّ البرمجية المُلحقة "{$a}" تحتوي على عيب أو عفا عليها الزمن، لا يمكن الاستمرار';
$string['dmlexceptiononinstall'] = '<p>حدث خطأ في قاعدة البيانات[{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['dmlreadexception'] = 'خطاء في القراءة من قاعدة البيانات';
$string['dmltransactionexception'] = 'خطأ في عملية نقل لقاعدة البيانات';
$string['dmlwriteexception'] = 'خطاء في الكتابة إلى قاعدة البيانات';
$string['downgradedcore'] = 'خطأ!!! الرمز الذي تستخدمه هو أقدم من النسخة التي أنشأت قواعد البيانات الحالية!';
$string['downloadedfilecheckfailed'] = 'فشل التحقق من الملف الذي تم تنزيله';
$string['duplicatefieldname'] = 'اكتشاف خطأ اسم الحقل"{$a}" مكرر';
$string['duplicatenosupport'] = 'النشاط \'{$a->modname}\' لا يمكن تكراره بسبب أن وحدة  {$a->modtype} لا تدعم عمليتي حفظ نسخة احتياطية والاسترداد';
$string['duplicateparaminsql'] = 'خطأ: تكرار الاسم في الاستعلام';
$string['duplicaterolename'] = 'هناك وظيفة مسبقة بهذا الاسم';
$string['duplicateroleshortname'] = 'هناك وظيفة مسبقة ب الاسم القصير';
$string['duplicateusername'] = 'تكرر اسم المستخدم - تجاوز السجل';
$string['emailfail'] = 'فشل إرسال البريد الإلكتروني';
$string['error'] = 'حصل خطاء';
$string['errorcleaningdirectory'] = 'خطاء في تنظيف دليل "{$a}"';
$string['errorcopyingfiles'] = 'خطاء في نسخ الملفات';
$string['errorcreatingdirectory'] = 'خطاء في أنشاء دليل "{$a}"';
$string['errorcreatingfile'] = 'خطاء في تنظيف ملف "{$a}"';
$string['errorcreatingrole'] = 'خطاء في إنشاء الدور';
$string['errorfetchingrssfeed'] = 'خطأ في الحصول على ار اس اس';
$string['erroronline'] = 'خطاء في سطر {$a}';
$string['erroroutput'] = 'خطأ في المخرجات، وبالتالي تعطيل إعادة توجيه التلقائي.';
$string['errorparsingxml'] = 'خطأ تحليل XML:{$a->errorstring} في سطر {$a->errorline}, رمز {$a->errorchar}';
$string['errorprocessingarchive'] = 'خطأ في إجراء ارشفة الملف';
$string['error_question_answers_missing_in_db'] = 'فشل في العثور على مطابقة الجواب  "{$a->answer}" في جدول قاعدة البيانات الذي يحتفظ بإجابة الأسئلة والمسمى بـ question_answers.  حدث ذلك  أثناء استعادة السؤال صاحب معرف {$a->filequestionid} في النسخة المحفوظة, والتي تم مطابقتها للسؤال الموجود مُسبقاً  صاحب معرف رقم {$a->dbquestionid} في قاعدة البيانات.';
$string['errorreadingfile'] = 'خطاء في قراءة ملف "{$a}"';
$string['errorsavingrequest'] = 'ظهر خطأ اثناء محاولة تخزين طلبك';
$string['errorsettinguserpref'] = 'خطاء في إعدادات تفضيلات المستخدم';
$string['errorunzippingfiles'] = 'خطاء في فك الملفات المضغوطة';
$string['expiredkey'] = 'انتهة فترة صلاحية المفتاح';
$string['externalauthpassworderror'] = 'كلمة المرور يجب أن تكون غير فارغة للمصادقة الخارجية';
$string['externalfilenolocation'] = 'لايوجد موقع مسار للملف الخارجي';
$string['failtoloadblocks'] = 'واحد او اكثر من الصناديق مسجل في قاعدة البيانات، لكن فشلت جميعها اثناء تحميلها';
$string['fieldrequired'] = '"{$a}" حقل مطلوب';
$string['fileexists'] = 'الملف موجود';
$string['filenotfound'] = 'عذراً، لم يتم العثور على  الملف المطلوب';
$string['filenotreadable'] = 'الملف غير قابل للقراءة';
$string['filterdoesnothavelocalconfig'] = 'المرشح {$a} لا يسمح بالإعدادت المحلية.';
$string['filternotenabled'] = 'المنقح غير مفعل';
$string['filternotinstalled'] = 'المرشح {$a} غير مُثبت حالياٍ';
$string['forumblockingtoomanyposts'] = 'لقد تجاوزت الحد المسموح به للنشر في هذا المنتدى';
$string['generalexceptionmessage'] = 'خطأ - {$a}';
$string['gradecantregrade'] = 'حدث خطأ أثناء حساب الدرجة: {$a}';
$string['gradepubdisable'] = 'تم تعطيل نشرالدرجة';
$string['gradesneedregrading'] = 'تحتاج درجات المقرر الدراسي إلى إعادة الحساب';
$string['groupalready'] = 'المستخدم ينتمي للمجموعة {$a}';
$string['groupexistforcourse'] = 'المجموعة "{$a}" موجودة مسبقاً في هذا المقرر الدراسي';
$string['groupexistforcoursewithidnumber'] = '{$a->problemgroup}: المجموعة "{$a->name}" رقم معرفها {$a->idnumber}" موجودة حالياً في هذا المقرر الدراسي';
$string['grouphasidnumber'] = 'المجموعة "{$a}" لديها رقم معرف تم إنشاؤها تلقائياً بواسطة نظام خارجي. ليس لديك إذن لإزالة هذه المجموعة.';
$string['groupinghasidnumber'] = 'التجميع "{$a}" لديه رقم معرف تم إنشاؤها تلقائياً بواسطة نظام خارجي. ليس لديك إذن لإزالة هذا التجمُّع.';
$string['groupingnotaddederror'] = 'لم تتم إضافة التجميع "{$a}"';
$string['groupnotaddederror'] = 'لم يتم إضافة المجموعة "{$a}"';
$string['groupnotaddedtogroupingerror'] = 'المجموعة "{$a->groupname}" لم يتم إضافتها إلى التجمُّع "{$a->groupingname}"';
$string['groupunknown'] = 'المجموعة {$a}  لا يرتبط بأي منهج دراسي محدد';
$string['groupusernotmember'] = 'المستخدم ليس عضواً من هذه المجموعة';
$string['guestcantaccessprofiles'] = 'لا يمكن للضيوف الوصول إلى الملفات الشخصية للمستخدمين. قم بتسجيل الدخول باستخدام حساب المستخدم الكامل للمتابعة.';
$string['guestnocomment'] = 'لا يسمح للضيوف بإضافة التعليقات!';
$string['guestnoeditprofile'] = 'لا يمكن للمستخدم الضيف أن يعدّل حسابه';
$string['guestnoeditprofileother'] = 'لا يمكن تعديل حساب المستخدم الضيف';
$string['guestsarenotallowed'] = 'لا يسمح للمستخدم الضيف القيام بذلك';
$string['hackdetected'] = 'تم الكشف عن محاولة اختراق';
$string['hashpoolproblem'] = 'محتوى تجمُّع الملف غير صحيح {$a}.';
$string['headersent'] = 'تم إرسال العناوين الرئيسية مُسبقاً';
$string['idnumbertaken'] = 'رقم التعريف هذا  قيد الاستخدام';
$string['idnumbertoolong'] = 'رقم المعرف طويل جدا';
$string['inplaceeditableerror'] = 'حدث خطأ في استدعاء معالج التحديث';
$string['installproblem'] = 'عادة لا يكون من الممكن التعافي من الأخطاء الناجمة أثناء التثبيت، قد تحتاج إلى إنشاء قاعدة بيانات جديدة أو استخدام بادئة تسمية prefix مختلفة لقاعدة بيانات مختلفة إذا كنت ترغب في إعادة المحاولة للتثبيت.';
$string['internalauthpassworderror'] = 'كلمة المرور مفقودة أوسياسة كلمة المرور غير صحيح للمصادقة الداخلية';
$string['invalidaccess'] = 'هذه الصفحة لم يتم الوصول إليها بشكل صحيح';
$string['invalidaccessparameter'] = 'معامل دخول غير صحيح';
$string['invalidaction'] = 'معامل عمل غير صحيح';
$string['invalidadminsettingname'] = 'إعداد المشرف غير صحيحة  ({$a})';
$string['invalidargorconf'] = 'لم يتم إدخال معاملات صحيحة أو أن إعدادات الخادم (السيرفر) غير صحيحة';
$string['invalidarguments'] = 'لم يتم إدخال معاملات صحيحة';
$string['invalidbulkenrolop'] = 'تم طلب عملية تسجيل لعدد كبير (بالجملة) غير صحيحة';
$string['invalidcategory'] = 'الفئة غير صحيحه';
$string['invalidcategoryid'] = 'معرف التصنيف خطاء!';
$string['invalidcomment'] = 'التعليق خطاء';
$string['invalidcommentarea'] = 'منطقة تعليق غير صالحة';
$string['invalidcommentid'] = 'معرف تعليق غير صحيح';
$string['invalidcommentitemid'] = 'معرف البند للتعليق itemid غير صحيح';
$string['invalidcommentparam'] = '';
$string['invalidcomponent'] = 'اسم عنصر غير صحيح';
$string['invalidconfirmdata'] = 'تاكيد البيانات غير صحيح';
$string['invalidcontext'] = 'المحتوى غير صحيح';
$string['invalidcourse'] = 'المقرر الدراسي غير صحيح';
$string['invalidcourseformat'] = 'تنسيق المقرر غير صحيح';
$string['invalidcourseid'] = 'أنت تحاول استخدام معرف مقرر دراسي غير صحيح ({$a})';
$string['invalidcourselevel'] = 'مستوى المحتوى خطاء';
$string['invalidcoursemodule'] = 'معرف وحدة المقرر الدراسي غير صحيح';
$string['invalidcoursenameshort'] = 'اسم المختصر للمقرر الدراسي غير صحيح';
$string['invaliddata'] = 'البيانات المسلمة غير صحيحة';
$string['invaliddatarootpermissions'] = 'تم اكتشاف خطأ في الصلاحيات عند إنشاء مجلد جديد. قم بتشغيل التصحيح debugging لتفاصيل أكثر';
$string['invaliddevicetype'] = 'نوع جهاز غير صالح';
$string['invalidelementid'] = 'معرف عنصر غير صحيح!';
$string['invalidentry'] = 'هذا ليس مُدخل صحيح!';
$string['invalidevent'] = 'حدث غير صحيح';
$string['invalidfieldname'] = '"{$a}" اسم الحقل غير صحيح';
$string['invalidfiletype'] = '"{$a}" ليس نوع ملف صالح';
$string['invalidformdata'] = 'نموذج البيانات غير صحيح';
$string['invalidfunction'] = 'عملية غير صحيحة';
$string['invalidgradeitemid'] = 'معرف بند الدرجة غير صحيح';
$string['invalidgroupid'] = 'معرف المجموعة المحددة غير صحيح';
$string['invalidipformat'] = 'تنسيق برتوكول عنوان الإنترنت غير صحيح';
$string['invaliditemid'] = 'معرف البند غير صحيح';
$string['invalidkey'] = 'المفتاح غير صحيح';
$string['invalidlegacy'] = 'تعريف الدور من النسخ القديمة لمودل غير صحيح لنوع: {$a}';
$string['invalidmd5'] = 'المتغير المُختار خاطئ - حاول مرة أخرى';
$string['invalidmode'] = 'نمط غير صحيح  ({$a})';
$string['invalidnum'] = 'القيمة الرقمية غير صحيحة';
$string['invalidoutcome'] = 'معرف المخرجات غير صحيح';
$string['invalidpagesize'] = 'حجم الصفحة غير صحيح';
$string['invalidpasswordpolicy'] = 'اتفاقية كلمة المرور غير صحيحة';
$string['invalidpaymentmethod'] = 'طريقة دفع المبلغ المالي غير صحيحة: {$a}';
$string['invalidqueryparam'] = 'خطأ: عدد غير صحيح من معاملات الاستعلام. المتوقع {$a->expected}, وتم الحصول على {$a->actual}.';
$string['invalidratingarea'] = 'منطقة تصنيف غير صالحة';
$string['invalidrecord'] = 'لم يتم العثور على سجل البيانات في جدول قاعدة البيانات';
$string['invalidrecordunknown'] = 'لم يتم العثور على سجل البيانات في قاعدة البيانات';
$string['invalidrequest'] = 'طلب غير صحيح';
$string['invalidrole'] = 'الدور غير صحيح';
$string['invalidroleid'] = 'معرف الدور غير صحيح';
$string['invalidscaleid'] = 'معرف المقياس غير صحيح';
$string['invalidsection'] = 'يحتوي سجل وحدة المقرر الدراسي على قسم غير صحيح';
$string['invalidshortname'] = 'الاسم المختصر لذلك المقرر غير صحيح';
$string['invalidstatedetected'] = 'فهناك شيء ما خطأ:  {$a}. هذا لا ينبغي أبدا أن يحدث بشكل طبيعي.';
$string['invalidurl'] = 'عنوان الإنترنت غير صحيح';
$string['invaliduser'] = 'المستخدم غير صحيح';
$string['invaliduserdata'] = 'بيانات المستخدم غير صالحة: {$a}';
$string['invaliduserfield'] = 'حقل المستخدم غير صالح: {$a}';
$string['invaliduserid'] = 'معرف المستخدم غير صحيح';
$string['invalidusername'] = 'اسم المستخدم المُعطى يحتوي على رموز غير صالحة';
$string['invalidxmlfile'] = '"{$a}" ليس ملف XML صالح';
$string['iplookupfailed'] = 'لا يمكن العثور على معلومات جغرافية حول هذا العنوان IP {$a}';
$string['listcantmoveleft'] = 'فشل في التحرك البند اليسار، لأنه لا يوجد لديه والدين';
$string['listnoitem'] = 'لم يتم إيجاد العنصر';
$string['logfilenotavailable'] = 'السجلات غير متوفرة';
$string['maxareabytes'] = 'الملف أكبر من المساحة المتبقية في هذه المنطقة.';
$string['maxbytes'] = 'حجم هذا الملف اكبر من الحجم المسموح به';
$string['maxbytesfile'] = 'حجم الملف {$a->file} كبير جداً . الحد الأقصى الذي تستطيع رفعه هو {$a->size}.';
$string['messagingdisable'] = 'نظام الرسائل معطل في هذا الموقع';
$string['missingfield'] = 'الحقل "{$a}" غير موجود';
$string['missingrequiredfield'] = 'بعض الحقول المطلوبة مفقودة';
$string['moduledoesnotexist'] = 'هذه الوحدة غير موجودة';
$string['mustbeloggedin'] = 'لابد أن تكون داخلاً على النظام لتتمكن من القيام بهذا';
$string['mustbeteacher'] = 'المعلمون فقط يستطيعون معاينة هذه الصغحة';
$string['needcopy'] = 'ًتحتاج إلى نسخ شيء أولا!';
$string['noadmins'] = 'لا يوجد مدراء!';
$string['noblocks'] = 'لم يتم العثور على كتل';
$string['nocapabilitytousethisservice'] = 'المستخدم ليس لديه القدرة المطلوبة لاستخدام هذه الخدمة';
$string['nocontext'] = 'عذراً، ولكن المقرر الدراسي ليس صحيح السياق';
$string['nodata'] = 'لا يوجد بيانات';
$string['noexistingcategory'] = 'لا يوجد تصنيف';
$string['nofile'] = 'لم يتم تحديد الملف';
$string['nofiltersenabled'] = 'الم يتم تفعيل المنقحات';
$string['noguest'] = 'لا يسمح بزوار هنا!';
$string['nologinas'] = 'غير مسموح لك الدخول بذلك المستخدم';
$string['nonmeaningfulcontent'] = 'لا يوجد محتوي ذي معني';
$string['noparticipants'] = 'لم يتم العثور على مشاركين في هذا المقرر الدراسي';
$string['nopermissions'] = 'عذراً ولكنك لا تملك حالياً الصلاحيات لتقوم بهذا ({$a})';
$string['nopermissiontocomment'] = 'لا تستطيع إضافة تعليقات';
$string['nopermissiontodelentry'] = 'لا تسطيع حذف مدخلات الاخرين';
$string['nopermissiontoeditcomment'] = 'لا تستطيع تحرير تعليقات الاخرين!';
$string['nopermissiontohide'] = 'لا يوجد صلاحية لإخفاء هذا!';
$string['nopermissiontoshow'] = 'لا يوجد صلاحية لمشاهدة هذا!';
$string['nopermissiontoupdatecalendar'] = 'عذراً ولكنك لا تملك حالياً الصلاحيات لتحرير حدث الرزنامة';
$string['nopermissiontoviewgrades'] = 'لا يمكن معاينة النتائج';
$string['nostatstodisplay'] = 'عذراً، لا يوجد بيانات ليتم عرضها';
$string['notavailable'] = 'غير متوفر حاليا';
$string['notlocalisederrormessage'] = '{$a}';
$string['notownerofkey'] = 'أ،ت ليس صاحي هذا المفتاح';
$string['nousers'] = 'لا يوجد مثل هذا المستخدم!';
$string['onlyeditown'] = 'تستطيع تحرير معلوماتك فقط';
$string['orderidnotfound'] = 'رقم معرف الطلب {$a} غير موجود';
$string['processingstops'] = 'المعالجة تقف هناء. تم تجاهل السجلات المتبقية';
$string['reportnotavailable'] = 'هذا النوع من التقرير ';
$string['requireloginerror'] = 'لا يمكن الوصول إلي هذا المقرر الدراسي أو النشاط';
$string['restricteduser'] = 'عذرا، حسابك الحالي "{$a}" لا يخولك للقيام بذلك';
$string['sectionnotexist'] = 'هذا القسم غير موجود';
$string['sendmessage'] = 'إرسل رسالة';
$string['serverconnection'] = 'خطأ في الاتصال بالخادم';
$string['sessionerroruser'] = 'انتهت جلستك، الرجاء الدخول ثانيا';
$string['shortnametaken'] = 'الاسم المختصر مستخدم لمقرر دراسي أخر';
$string['spellcheckernotconf'] = 'المدقق الأملائي غير معد';
$string['statsdisable'] = 'لم يتم تمكين الإحصاءات.';
$string['statsnodata'] = 'لا توجد بيانات متاحة حتى الان للمزيج المدخل للمقرر الدراسي والفترة الزمنية';
$string['storedfilecannotread'] = 'لا يمكن قراءة الملف. إما أن الملف غير موجود أو أن هناك مشكلة في التصريح.';
$string['storedfilenotcreated'] = 'لا يمكن إنشاء ملف "{$a->contextid}/{$a->component}/{$a->filearea}/{$a->itemid}{$a->filepath}{$a->filename}"';
$string['storedfileproblem'] = 'استثناء غير معروف متعلق بالملفات المحلية ({$a})';
$string['tagdisabled'] = 'الوسوم معطّلة!';
$string['targetdatabasenotempty'] = 'قاعدة البيانات الهدف ليست فارغة. تم إيقاف عملية النقل لأسباب تتعلق بالسلامة.';
$string['TODO'] = 'للقيام بـــ';
$string['unknowaction'] = 'إجراء غير معروف';
$string['unknowcategory'] = 'التصنيف غير معروف';
$string['unknowformat'] = 'التنسيق ({$a}) غير معروف';
$string['unknownbackupexporterror'] = 'خطاء غير معروف اثناء إستيراد المعلومات';
$string['unknowncontext'] = 'هذا المحتوى غير معروف';
$string['unknowncourse'] = 'اسم المقرر الدراسي غير معروف "{$a}"';
$string['unknowncourseidnumber'] = 'معرف المقرر الدراسي غير معروف "{$a}';
$string['unknowncourserequest'] = 'طلب مقرر دراسي غير معروف';
$string['unknowncoursesection'] = 'القسم غير معروف في المقرر الدراسي "{$a}"';
$string['unknownevent'] = 'حدث غير معروف';
$string['unknownfiletype'] = 'حطاء غير معروف في نوع المنقح';
$string['unknowngroup'] = 'المجموعة غير معروفة "{$a}"';
$string['unknownmodulename'] = 'اسم الوحدة النمطية غير معروف للنموذج';
$string['unknownrole'] = 'الدورغير معروف "{$a}"';
$string['unknownsortcolumn'] = 'ترتيب عمود غير معروف {$a}';
$string['unknownuseraction'] = 'عذراً، أنا لا أفهم هذا العمل المستخدم';
$string['unknownuserselector'] = 'محدد مستخدم غير معروف';
$string['unknoworder'] = 'الترتيب غير معروف "{$a}"';
$string['unknowquestiontype'] = '';
$string['upgraderunning'] = 'ًيتم ترقية الموقع، الرجاء إعادة المحاولة لاحقا.';
$string['useradmineditadmin'] = 'يسمح للمدراء فقط تعديل حسابات المسؤول أخرى';
$string['useradminodelete'] = 'لا يمكن حذف حسابات المدراء';
$string['useremailduplicate'] = 'العنوان مكرر';
$string['usernotaddederror'] = 'المستخدم "{$a}" لم يتم إضافته - خطاء غير معروف';
$string['usernotaddedregistered'] = 'المستخدم "{$a}" - يتم تسجيله مسبقاً';
$string['usernotavailable'] = 'غير مسموح لك معاينة التفصيلات الشخصية لهذا المستخدم';
$string['usernotdeletedadmin'] = 'لم يتم حذف المُستخدم - لا يمكن حذف حسابات المدراء';
$string['usernotdeletederror'] = 'لم يتم حذف المُستخدم - خطأ';
$string['usernotdeletedmissing'] = 'لم يتم حذف المُستخدم - لا يمكن العثور على اسم المستخدم';
$string['usernotdeletedoff'] = 'لم يتم حذف المُستخدم -الحذف غير مسموح';
$string['usernotincourse'] = 'هذا المستخدم ليس في هذا المقرر الدراسي!';
$string['usernotrenamedadmin'] = 'لا يمكن إعادة تسمية حسابات المشرف';
$string['usernotrenamedexists'] = 'لم يتم إعادة تسمية المستخدم - الاسم المُدخل الجديد مُستخدم حالياً';
$string['usernotrenamedmissing'] = 'لم يتم إعادة تسمية المستخدم - لم يتم إيجاد اسم المستخدم القديم';
$string['usernotrenamedoff'] = 'لم يتم إعادة تسمية المستخدم - إعادة التسمية غير مسموحة';
$string['usernotupdatedadmin'] = 'لا يمكن تحديث حسابات المشرفين';
$string['usernotupdatederror'] = 'المستخدم لم يتم تحديثه - خطأ';
$string['usernotupdatednotexists'] = 'لم يتم تحديث المُستخدم-المُستخدم غير موجود';
$string['wrongusernamepassword'] = 'المستخدم غير صحيح / كلمة المرور';
$string['youcannotdeletecategory'] = 'لا يمكنك حذف التصنيف \'{$a}\' لأنه لا يمكنك حذف المحتويات، ولا نقلها في مكان آخر.';
