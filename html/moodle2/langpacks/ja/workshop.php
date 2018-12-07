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
 * Strings for component 'workshop', language 'ja', branch 'MOODLE_34_STABLE'
 *
 * @package   workshop
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregategrades'] = '評定を再計算する';
$string['aggregation'] = '評点総計';
$string['allocate'] = '提出を割り当てる';
$string['allocatedetails'] = '期待数: {$a->expected}<br />提出数: {$a->submitted}<br />割り当て数: {$a->allocate}';
$string['allocation'] = '提出の割り当て';
$string['allocationconfigured'] = '割り当てが設定されました。';
$string['allocationdone'] = '割り当て完了';
$string['allocationerror'] = '割り当てエラー';
$string['allowedfiletypesforoverallfeedback'] = 'フィードバック添付で許可されたファイルタイプ';
$string['allowedfiletypesforoverallfeedback_help'] = 'フィードバック添付ファイルタイプは許可されるファイルタイプのリストにより制限することができます。フィールドが空白の場合、すべてのファイルタイプが許可されます。';
$string['allowedfiletypesforsubmission'] = '提出添付で許可されたファイルタイプ';
$string['allowedfiletypesforsubmission_help'] = '提出添付ファイルタイプは許可されるファイルタイプのリストで制限することができます。フィールドが空白の場合、すべてのファイルタイプが許可されます。';
$string['allsubmissions'] = 'すべての提出 ({$a})';
$string['alreadygraded'] = '評定済み';
$string['areaconclusion'] = '結論テキスト';
$string['areainstructauthors'] = '提出のインストラクション';
$string['areainstructreviewers'] = '評価のインストラクション';
$string['areaoverallfeedbackattachment'] = '全体フィードバック添付';
$string['areaoverallfeedbackcontent'] = '全体フィードバックテキスト';
$string['areasubmissionattachment'] = '提出添付';
$string['areasubmissioncontent'] = '提出テキスト';
$string['assess'] = '評価';
$string['assessedexample'] = '評価済み提出例';
$string['assessedsubmission'] = '評価済み提出';
$string['assessingexample'] = '提出例の評価';
$string['assessingsubmission'] = '提出の評価';
$string['assessment'] = '評価';
$string['assessmentby'] = 'by <a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = '{$a} による評価';
$string['assessmentbyyourself'] = 'あなたの評価';
$string['assessmentdeleted'] = '評価の割り当てが解除されました。';
$string['assessmentend'] = '評価期限';
$string['assessmentendbeforestart'] = '評価開始日時の前に評価終了日時を指定できません。';
$string['assessmentenddatetime'] = '評価期限: {$a->daydatetime} ({$a->distanceday})';
$string['assessmentendevent'] = '{$a} 評価期限';
$string['assessmentform'] = '評価フォーム';
$string['assessmentofsubmission'] = '<a href="{$a->submissionurl}">{$a->submissiontitle}</a> の <a href="{$a->assessmenturl}">評価</a>';
$string['assessmentreference'] = '参考評価';
$string['assessmentreferenceconflict'] = 'あなたが参考評価のために提出した提出例を評価することはできません。';
$string['assessmentreferenceneeded'] = '参考評価を提供する場合、あなたはこの提出例を評価する必要があります。提出を評価するには「続ける」ボタンをクリックしてください。';
$string['assessments'] = '評価です。';
$string['assessmentsettings'] = '評価設定';
$string['assessmentstart'] = '評価開始日時';
$string['assessmentstartdatetime'] = '評価開始日時 {$a->daydatetime} ({$a->distanceday})';
$string['assessmentstartevent'] = '{$a} 評価開始';
$string['assessmentweight'] = '評価加重';
$string['assignedassessments'] = '評価が必要な割り当て済み提出';
$string['assignedassessmentsnone'] = 'あなたには評価する提出が割り当てられていません。';
$string['backtoeditform'] = '編集フォームに戻る';
$string['byfullname'] = 'by <a href="{$a->url}">{$a->name}</a>';
$string['byfullnamewithoutlink'] = 'by {$a}';
$string['calculategradinggrades'] = '評価に対する評点を計算する';
$string['calculategradinggradesdetails'] = '期待数: {$a->expected}<br />算出数: {$a->calculated}';
$string['calculatesubmissiongrades'] = '提出に対する評点を計算する';
$string['calculatesubmissiongradesdetails'] = '期待数: {$a->expected}<br />算出数: {$a->calculated}';
$string['chooseuser'] = 'ユーザを選択する ...';
$string['clearaggregatedgrades'] = 'すべての評点総計をクリアする';
$string['clearaggregatedgradesconfirm'] = '本当に計算済みの提出に対する評点および評価に対する評点をクリアしてもよろしいですか?';
$string['clearaggregatedgrades_help'] = '提出に対する評点および評価に対する評点の総計がリセットされます。あなたは成績評価フェースでこれらの評点を最初から再計算することができます。';
$string['clearassessments'] = '評価をクリアする';
$string['clearassessmentsconfirm'] = '本当にすべての評価に対する評点をクリアしてもよろしいですか? あなたは自力で情報を元に戻すことができなくなります。また、評価者は割り当てられた提出を再度評価することになります。';
$string['clearassessments_help'] = '提出に対する計算済み評点および評価に対する計算済み評点がリセットされます。評価フォームに入力された内容は保持されますが評点を再計算するため評価者は評価フォームを再度開いて保存する必要があります。';
$string['conclusion'] = '結論';
$string['conclusion_help'] = '結論は活動の最後に参加者に表示されます。';
$string['configexamplesmode'] = 'ワークショップ評価例のデフォルトモード';
$string['configgrade'] = 'ワークショップ提出のデフォルト最大評点';
$string['configgradedecimals'] = '評点を表示する場合の小数点以後に表示するデフォルトの桁数です。';
$string['configgradinggrade'] = 'ワークショップ評価のデフォルト最大評点';
$string['configmaxbytes'] = 'サイト内ワークショップすべてのデフォルトの最大送信ファイルサイズです (コース制限および他のローカル設定に従います)。';
$string['configstrategy'] = 'ワークショップのデフォルト評価方法';
$string['createsubmission'] = 'あなたの送信準備を開始する';
$string['daysago'] = '{$a} 日前';
$string['daysleft'] = '残り {$a} 日';
$string['daystoday'] = '本日';
$string['daystomorrow'] = '明日';
$string['daysyesterday'] = '昨日';
$string['deadlinesignored'] = 'あなたには時間制限は適用されません。';
$string['deletesubmission'] = '提出を削除する';
$string['editassessmentform'] = '評価フォームを編集する';
$string['editassessmentformstrategy'] = '評価フォーム ({$a}) を編集する';
$string['editingassessmentform'] = '評価フォームの編集';
$string['editingsubmission'] = '提出の編集';
$string['editsubmission'] = '提出を編集する';
$string['err_multiplesubmissions'] = 'このフォームを編集している間に別バージョンの提出が保存されました。1ユーザあたりの複数提出は許可されません。';
$string['err_removegrademappings'] = '未使用の評定マッピングを削除することはできません。';
$string['err_unknownfileextension'] = '不明なファイル拡張子: {$a}';
$string['err_wrongfileextension'] = 'いくつかのファイル ({$a->wrongfiles}) はアップロードすることができません。ファイルタイプ {$a->whitelist} のみ許可されます。';
$string['evaluategradeswait'] = '評価が評定され評点が計算されるまでお待ちください。';
$string['evaluation'] = '成績評価';
$string['evaluationmethod'] = '成績評価方法';
$string['evaluationmethod_help'] = '成績評価方法では評価に対する評点をどのように計算するか決定します。あなたの希望に結果が合致しない場合、評点を繰り返し再計算することができます。';
$string['evaluationsettings'] = '成績評価設定';
$string['eventassessableuploaded'] = '提出がアップロードされました。';
$string['eventassessmentevaluated'] = '評価が評定されました。';
$string['eventassessmentevaluationsreset'] = '評価の評定がリセットされました。';
$string['eventassessmentreevaluated'] = '評価が再評定されました。';
$string['eventphaseswitched'] = 'フェーズが切り替えられました。';
$string['eventsubmissionassessed'] = '提出が評定されました。';
$string['eventsubmissionassessmentsreset'] = '提出の評定がクリアされました。';
$string['eventsubmissioncreated'] = '提出が作成されました。';
$string['eventsubmissiondeleted'] = '提出が削除されました。';
$string['eventsubmissionreassessed'] = '提出が再評定されました。';
$string['eventsubmissionupdated'] = '提出が更新されました。';
$string['eventsubmissionviewed'] = '提出が閲覧されました。';
$string['example'] = '提出例';
$string['exampleadd'] = '提出例を追加する';
$string['exampleassess'] = '提出例を評価する';
$string['exampleassessments'] = '評価する提出例';
$string['exampleassesstask'] = '提出例を評価する';
$string['exampleassesstaskdetails'] = '期待数: {$a->expected}<br />評価数: {$a->assessed}';
$string['examplecomparing'] = '提出例の評価との比較';
$string['exampledelete'] = '提出例を削除する';
$string['exampledeleteconfirm'] = '本当に次の提出例を削除してもよろしいですか? 提出を削除するには「続ける」ボタンをクリックしてください。';
$string['exampleedit'] = '提出例を編集する';
$string['exampleediting'] = '提出例の編集';
$string['exampleneedassessed'] = 'あなたは最初にすべての提出例を評価する必要があります。';
$string['exampleneedsubmission'] = '最初にあなたのワークの提出および提出例すべての評価が必要です。';
$string['examplesbeforeassessment'] = '提出例は自身の提出後に利用することができます。また、相互評価前に評価する必要があります';
$string['examplesbeforesubmission'] = '自身の提出前に提出例を評価する必要があります';
$string['examplesmode'] = '評価例のモード';
$string['examplesubmissions'] = '提出例';
$string['examplesvoluntary'] = '提出例の評価は任意です';
$string['exportsubmission'] = 'このページをエクスポートする';
$string['feedbackauthor'] = '作成者へのフィードバック';
$string['feedbackauthorattachment'] = '添付';
$string['feedbackby'] = '{$a} によるフィードバック';
$string['feedbackreviewer'] = '評価者へのフィードバック';
$string['feedbacksettings'] = 'フィードバック';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br /><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span>';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '	
<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = '与えた評点';
$string['gradecalculated'] = '提出に対する計算済み評点';
$string['gradedecimals'] = '評点の小数位';
$string['gradegivento'] = '&gt;';
$string['gradeinfo'] = '評点: {$a->received} / {$a->max}';
$string['gradeitemassessment'] = '{$a->workshopname} (評定)';
$string['gradeitemsubmission'] = '	
{$a->workshopname} (提出)';
$string['gradeover'] = '提出に対する評点をオーバーライドする';
$string['gradereceivedfrom'] = '&lt;';
$string['gradesreport'] = 'ワークショップ評定レポート';
$string['gradetopassgrading'] = '評価合格点';
$string['gradetopasssubmission'] = '提出合格点';
$string['gradinggrade'] = '評価に対する評点';
$string['gradinggradecalculated'] = '評価に対する計算済み評点';
$string['gradinggrade_help'] = 'この設定では提出の評価に関して取得する最大評点を指定します。';
$string['gradinggradeof'] = '評価に対する評点 (最大 {$a})';
$string['gradinggradeover'] = '評価に対する評点をオーバーライドする';
$string['gradingsettings'] = '評定設定';
$string['groupnoallowed'] = 'あなたはこのワークショップ内のグループにアクセスすることはできません。';
$string['iamsure'] = 'はい、実行してください';
$string['indicator:cognitivedepth'] = 'ワークショップ認知的';
$string['indicator:cognitivedepth_help'] = 'この指標はワークショップ活動で学生が到達した認識深度に基づきます。';
$string['indicator:socialbreadth'] = 'ワークショップ社会的';
$string['indicator:socialbreadth_help'] = 'この指標はワークショップ活動で学生が到達した社会的広がりに基づきます。';
$string['info'] = '情報';
$string['instructauthors'] = '提出のインストラクション';
$string['instructreviewers'] = '評価のインストラクション';
$string['introduction'] = '説明';
$string['latesubmissions'] = '提出期限後の提出';
$string['latesubmissionsallowed'] = '提出期限後の提出は許可されています。';
$string['latesubmissions_desc'] = '提出期限後の提出を許可します。';
$string['latesubmissions_help'] = 'この設定を有効にした場合、作成者は提出期限後または評価フェーズ時にワークを提出することができます。提出期限後の提出は編集することができません。';
$string['maxbytes'] = '最大提出添付サイズ';
$string['modulename'] = 'ワークショップ';
$string['modulename_help'] = 'ワークショップ活動モジュールでは学生のワークを収集、レビューおよび相互評価することができます。

学生はワードプロセッサで処理したドキュメント、スプレッドシートのようなデジタルコンテンツ (ファイル) を提出することができます。また、テキストエディタを使用してフィールドに直接テキストを入力することができます。

提出物は教師によって定義された複数クライテリアの評価フォームを使用して評価されます。相互評価手順および評価フォームの理解は教師から提供される練習提出物および評価例によって練習することができます。学生には1つまたはそれ以上のクラスメートの提出物を評価する機会が与えられます。必要であれば提出およびレビューを匿名にすることもできます。

ワークショップ活動において学生は2つの評点を取得することになります - 「自分の提出物」に対する評点および「クラスメートの提出物の評価」に対する評点です。両評点は評定表に記録されます。';
$string['modulenameplural'] = 'ワークショップ';
$string['myassessments'] = '私の評価です。';
$string['mysubmission'] = '私の提出';
$string['nattachments'] = '提出の最大添付数';
$string['noexamples'] = 'このワークショップにはまだ提出例がありません。';
$string['noexamplesformready'] = 'あなたは提出例を提供する前に評価フォームを定義する必要があります。';
$string['nogradeyet'] = '未評価';
$string['nosubmissionfound'] = 'このユーザの提出はありません。';
$string['nosubmissions'] = 'このワークショップの提出はまだありません。';
$string['notassessed'] = '未評価';
$string['nothingfound'] = '表示するものはありません。';
$string['nothingtoreview'] = 'レビューするものはありません。';
$string['notoverridden'] = '未オーバーライド';
$string['noworkshops'] = 'このコース内にワークショップはありません。';
$string['noyoursubmission'] = 'あなたはまだ自分のワークを提出していません。';
$string['nullgrade'] = '-';
$string['overallfeedback'] = '全体フィードバック';
$string['overallfeedbackfiles'] = '全体フィードバックの最大添付数';
$string['overallfeedbackmaxbytes'] = '全体フィードバックの最大添付サイズ';
$string['overallfeedbackmode'] = '全体フィードバックモード';
$string['overallfeedbackmode_0'] = '無効';
$string['overallfeedbackmode_1'] = '有効および任意';
$string['overallfeedbackmode_2'] = '有効および必須';
$string['overallfeedbackmode_help'] = 'この設定を有効にした場合、評価フォーム下部にテキストフィールドが表示されます。評価者はそこに提出の全体評価を入力または評価に関する追加的な説明を入力することができます。';
$string['page-mod-workshop-x'] = 'すべてのワークショップモジュールページ';
$string['participant'] = '参加者';
$string['participantrevierof'] = '参加者がレビューする';
$string['participantreviewedby'] = '参加者がレビューされる';
$string['phaseassessment'] = '評価フェーズ';
$string['phaseclosed'] = '終了';
$string['phaseevaluation'] = '成績評価フェーズ';
$string['phasesetup'] = 'セットアップフェーズ';
$string['phasesoverlap'] = '提出フェーズおよび評価フェーズを重ねることはできません。';
$string['phasesubmission'] = '提出フェーズ';
$string['pluginadministration'] = 'ワークショップ管理';
$string['pluginname'] = 'ワークショップ';
$string['prepareexamples'] = '提出例を準備する';
$string['previewassessmentform'] = 'プレビュー';
$string['privacy:metadata:aggregatedgradinggrade'] = '所与のワークショップ活動でユーザにより与えられたすべての評価の評点総計です。';
$string['privacy:metadata:assessmentgrade'] = 'この評価に提案された提出の評点総計です。';
$string['privacy:metadata:assessmentgradinggrade'] = 'この評価に与えられた評点です。';
$string['privacy:metadata:assessmentgradinggradeover'] = 'この評価に与えられた評点に手動でオーバーライドされた値です。';
$string['privacy:metadata:assessmentid'] = '評価のIDです。';
$string['privacy:metadata:authorid'] = '提出作成者のIDです。';
$string['privacy:metadata:dimensiongrade'] = '所与の評価範囲の評点です。';
$string['privacy:metadata:dimensionid'] = '評価範囲のIDです。';
$string['privacy:metadata:example'] = 'このレコードが提出例を表すか示します。';
$string['privacy:metadata:feedbackauthor'] = '作成者に対するフィードバックです。';
$string['privacy:metadata:feedbackauthorformat'] = '作成者へのフィードバックのテキストフォーマットです。';
$string['privacy:metadata:feedbackreviewer'] = '評価を提供したユーザへのフィードバックです。';
$string['privacy:metadata:feedbackreviewerformat'] = '評価を提供したユーザへのフィードバックのテキストフォーマットです。';
$string['privacy:metadata:late'] = '提出期限後に提出が送信されたか示します。';
$string['privacy:metadata:peercomment'] = '評価を提供したユーザにより与えられた評点のコメントです。';
$string['privacy:metadata:peercommentformat'] = '所与の評点のコメントのテキストフォーマットです。';
$string['privacy:metadata:preference:perpage'] = 'ユーザが1ページあたりに表示したい提出数です。';
$string['privacy:metadata:published'] = 'ワークショップの終了後、提出をすべての参加者に公開すべきか示します。';
$string['privacy:metadata:reviewerid'] = '評価を与えるユーザのIDです。';
$string['privacy:metadata:strategy'] = 'レコード値を解釈する評定方法サブプラグイン名です。';
$string['privacy:metadata:submissioncontent'] = '提出コンテンツです。';
$string['privacy:metadata:submissioncontentformat'] = '提出コンテンツのテキストフォーマットです。';
$string['privacy:metadata:submissiongrade'] = '0..100の間の10進数で記述された提出の評点総計です。';
$string['privacy:metadata:submissiongradeover'] = '評点総計に手動でオーバーライドされた値です。';
$string['privacy:metadata:submissionid'] = '提出IDです。';
$string['privacy:metadata:submissiontitle'] = '提出のタイトルです。';
$string['privacy:metadata:subsystem:corefiles'] = 'ワークショップモジュールは埋め込みファイルおよび提出テキストに添付されたファイルを保存します。';
$string['privacy:metadata:subsystem:coreplagiarism'] = 'ワークショップモジュールには盗作防止システムによる内蔵サポートがあります。';
$string['privacy:metadata:timeaggregated'] = '評点総計が最後に計算された日時です。';
$string['privacy:metadata:timecreated'] = 'このデータベースのレコードが作成された日時です。';
$string['privacy:metadata:timemodified'] = 'このデータベースのレコードが修正された日時です。';
$string['privacy:metadata:userid'] = '評点合計を計算するユーザのIDです。';
$string['privacy:metadata:weight'] = '評価の加重です。';
$string['privacy:metadata:workshopaggregations'] = '評価の評点総計を保持します。';
$string['privacy:metadata:workshopassessments'] = 'ワークショップモジュール提出の割り当て済み評価に関する情報を保持します。';
$string['privacy:metadata:workshopgrades'] = '評価フォームにどのように評点およびコメントが入力されたかに関する情報を保持します。';
$string['privacy:metadata:workshopid'] = 'ワークショップ活動のIDです。';
$string['privacy:metadata:workshopsubmissions'] = 'ワークショップモジュール提出に関する情報を保持します。';
$string['privacy:request:delete:content'] = 'ユーザのリクエストによりコンテンツが削除されました。';
$string['privacy:request:delete:title'] = '[削除済み]';
$string['publishedsubmissions'] = '公開済み提出';
$string['publishsubmission'] = '提出を公開する';
$string['publishsubmission_help'] = 'ワークショップ終了後、公開済み提出を他のユーザが利用できます。';
$string['reassess'] = '再評価';
$string['receivedgrades'] = '与えられた評点';
$string['recentassessments'] = 'ワークショップ評価:';
$string['recentsubmissions'] = 'ワークショップ提出:';
$string['resetassessments'] = 'すべての評価を削除する';
$string['resetassessments_help'] = 'あなたは提出に影響を及ぼさずに割り当てられた評価のみ削除するよう選択することができます。提出が削除される場合、その評価は暗黙のうちに削除され、このオプションは無視されます。これには提出例の評価も含むことに留意してください。';
$string['resetphase'] = 'セットアップフェーズにスイッチする';
$string['resetphase_help'] = 'この設定を有効にした場合、すべてのワークショップは初期セットアップフェーズに入ります。';
$string['resetsubmissions'] = 'すべての提出を削除する';
$string['resetsubmissions_help'] = 'すべての提出およびその評価が削除されます。これは提出例に影響を及ぼしません。';
$string['saveandclose'] = '保存して閉じる';
$string['saveandcontinue'] = '保存して編集を続ける';
$string['saveandpreview'] = '保存してプレビューする';
$string['saveandshownext'] = '保存して次を表示する';
$string['search:activity'] = 'ワークショップ - 活動情報';
$string['selfassessmentdisabled'] = '自己評価は無効にされています。';
$string['showingperpage'] = '1ページあたり {$a} アイテムの表示';
$string['showingperpagechange'] = '変更 ...';
$string['someuserswosubmission'] = 'ワークを提出していない作者が少なくとも1名存在します。';
$string['sortasc'] = '昇順ソート';
$string['sortdesc'] = '降順ソート';
$string['strategy'] = '評定方法';
$string['strategyhaschanged'] = '編集のためにフォームが開かれて以降、ワークショップ評定方法が変更されました。';
$string['strategy_help'] = '評定方法では使用される評価フォームおよび提出の評定方法を決定します。以下4つのオプションがあります:

* 累積評価 - 指定された状況に関してコメントおよび評点が与えられます。
* コメント - 指定された状況ににコメントが与えられますが評点は与えられません。
* エラー数 - 指定された条件に関してコメントおよびyes/no評価が与えられます。
* ルーブリック - 指定されたクライテリアに関してレベル評価が与えられます。';
$string['submission'] = '提出';
$string['submissionattachment'] = '添付';
$string['submissionby'] = '提出 by {$a}';
$string['submissioncontent'] = '提出コンテンツ';
$string['submissiondeleteconfirm'] = '本当に次の提出を削除してもよろしいですか?';
$string['submissiondeleteconfirmassess'] = '本当に次の提出を削除してもよろしいですか? これによりこの提出に関して評価者の評定に影響する {$a->count} 件の評価も削除されることに留意してください。';
$string['submissionend'] = '提出終了日時';
$string['submissionendbeforestart'] = '提出開始日時の前に提出終了日時を指定できません。';
$string['submissionenddatetime'] = '提出終了日時: {$a->daydatetime} ({$a->distanceday})';
$string['submissionendevent'] = '{$a} 提出期限';
$string['submissionendswitch'] = '提出終了日時後、次のフェーズに移行する';
$string['submissionendswitch_help'] = '提出終了日時を指定した上でこの設定を有効にした場合、提出終了日時後にワークショップは自動的に評価フェーズに移行します。

あなたがこの機能を有効にした場合、同時にスケジュール割り当てのセットアップをお勧めします。送信が割り当てられていない場合、ワークショップ自体が評価フェーズにあったとしても評価を実施することはできません。';
$string['submissiongrade'] = '提出に対する評点';
$string['submissiongrade_help'] = 'この設定では提出されたワークが取得することのできる最大評点を指定します。';
$string['submissiongradeof'] = '提出に対する評点 (最大 {$a})';
$string['submissionlastmodified'] = '最終更新日時';
$string['submissionrequiredcontent'] = 'あなたはテキストを入力するかファイルを追加する必要があります。';
$string['submissionrequiredfile'] = 'あなたはファイルを追加するかテキストを入力する必要があります。';
$string['submissionsettings'] = '提出設定';
$string['submissionsreport'] = 'ワークショップ提出レポート';
$string['submissionstart'] = '提出開始日時';
$string['submissionstartdatetime'] = '提出開始日時 {$a->daydatetime} ({$a->distanceday})';
$string['submissionstartevent'] = '{$a} 提出開始';
$string['submissiontitle'] = 'タイトル';
$string['submittednotsubmitted'] = '提出 ({$a->submitted}) / 未提出 ({$a->notsubmitted})';
$string['subplugintype_workshopallocation'] = '提出割り当て方法';
$string['subplugintype_workshopallocation_plural'] = '提出割り当て方法';
$string['subplugintype_workshopeval'] = '成績評価方法';
$string['subplugintype_workshopeval_plural'] = '成績評価方法';
$string['subplugintype_workshopform'] = '評定方法';
$string['subplugintype_workshopform_plural'] = '評定方略';
$string['switchingphase'] = 'フェーズの切り替え';
$string['switchphase'] = 'フェーズを切り替える';
$string['switchphase10'] = 'セットアップフェーズにスイッチする';
$string['switchphase10info'] = 'あなたはワークショップを<strong>セットアップ</strong>フェーズに切り替えようとしています。このフェーズではユーザは自分の提出または評価を修正することはできません。教師はこのフェーズをワークショップ設定の変更、評価方法の修正または評価フォームの調整に使用することができます。';
$string['switchphase20'] = '提出フェーズにスイッチする';
$string['switchphase20info'] = 'あなたはワークショップを<strong>提出</strong>フェーズに切り替えようとしています。このフェーズ中 (設定されている場合、アクセスコントロールで設定された日時の範囲内に)、学生は自分のワークを提出することができます。教師は相互評価のために提出を割り当てることができます。';
$string['switchphase30'] = '評価フェーズにスイッチする';
$string['switchphase30auto'] = '{$a->daydatetime} ({$a->distanceday}) 以後、ワークショップは自動的に評価フェーズに移行します。';
$string['switchphase30info'] = 'あなたはワークショップを<strong>評価</strong>フェーズに切り替えようとしています。このフェーズでは (設定されている場合、アクセスコントロールで設定された日時の範囲内に) 評価者は自分に割り当てられた提出を評価することができます。';
$string['switchphase40'] = '成績評価フェーズにスイッチする';
$string['switchphase40info'] = 'あなたはワークショップを<strong>成績評価</strong>フェーズに切り替えようとしています。このフェーズではユーザは自分の提出または評価を修正することはできません。教師は成績評価ツールを最終評点の計算および評価者に対するフィードバックの提供に使用することができます。';
$string['switchphase50'] = 'ワークショップを閉じる';
$string['switchphase50info'] = 'あなたはワークショップを終了しようとしています。これにより計算済み評点が評定表に表示されます。学生は自分の提出および提出評価を閲覧することができます。';
$string['switchphaseauto'] = 'スイッチがスケジュールされました。';
$string['switchphasenext'] = '次のフェーズにスキップする';
$string['taskassesspeers'] = '相互評価';
$string['taskassesspeersdetails'] = '合計: {$a->total}<br />保留: {$a->todo}';
$string['taskassessself'] = 'あなた自身を評価する';
$string['taskconclusion'] = '活動の結論を提供する';
$string['taskdone'] = 'タスク完了';
$string['taskfail'] = 'タスク失敗';
$string['taskinfo'] = 'タスク情報';
$string['taskinstructauthors'] = '提出のインストラクションを記述する';
$string['taskinstructreviewers'] = '評価のインストラクションを記述する';
$string['taskintro'] = 'ワークショップ説明を設定する';
$string['tasksubmit'] = 'あなたのワークを提出する';
$string['tasktodo'] = 'やるべきタスク';
$string['toolbox'] = 'ワークショップツールボックス';
$string['undersetup'] = '現在、ワークショップは設定中です。次のフェーズに切り替わるまでお待ちください。';
$string['useexamples'] = '提出例を使用する';
$string['useexamples_desc'] = '評価練習として提出例が提供されます。';
$string['useexamples_help'] = 'この設定を有効にした場合、ユーザは1つまたはそれ以上の提出例の評価を試すことができます。また、自分が評価した内容を参考評価と比較することができます。評定は評価の評定にはカウントされません。';
$string['usepeerassessment'] = '相互評価を使用する';
$string['usepeerassessment_desc'] = '学生は他のユーザのワークを評価することができます。';
$string['usepeerassessment_help'] = 'この設定を有効にした場合、ユーザには評価するために他のユーザの提出が割り当てられます。また、自分自身の提出に対する評定に加えて評価に対する評定を受け取ります。';
$string['userdatecreated'] = '提出日時: <span>{$a}</span>';
$string['userdatemodified'] = '修正日時: <span>{$a}</span>';
$string['userplan'] = 'ワークショッププランナ';
$string['userplanaccessibilityskip'] = '現在のタスクをスキップする';
$string['userplanaccessibilitytitle'] = '{$a} フェーズのワークショップタイムライン';
$string['userplancurrentphase'] = '現在のフェーズ';
$string['userplan_help'] = 'ワークショッププランナでは活動のすべてのフェーズおよびタスクごとのフェーズ一覧を表示します。現在のフェーズはハイライトされ完了したタスクにはチェックが表示されます。';
$string['useselfassessment'] = '自己評価を使用する';
$string['useselfassessment_desc'] = '学生は自分自身のワークを評価することができます。';
$string['useselfassessment_help'] = 'この設定を有効にした場合、ユーザには評価するために自分の提出が割り当てられます。また、自分自身の提出に対する評定に加えて評価に対する評定を受け取ります。';
$string['viewworkshopsummary'] = 'ワークショップ概要を表示する';
$string['weightinfo'] = '加重: {$a}';
$string['withoutsubmission'] = '自分では提出していない評価者';
$string['workshop:addinstance'] = '新しいワークショップを追加する';
$string['workshop:allocate'] = '提出をレビューのために割り当てる';
$string['workshop:deletesubmissions'] = '提出を削除する';
$string['workshop:editdimensions'] = '評価フォームを編集する';
$string['workshop:exportsubmissions'] = '提出をエクスポートする';
$string['workshop:ignoredeadlines'] = '時間制限を無視する';
$string['workshop:manageexamples'] = '提出例を管理する';
$string['workshopname'] = 'ワークショップ名';
$string['workshop:overridegrades'] = '計算済み評定をオーバーライドする';
$string['workshop:peerassess'] = '相互評価';
$string['workshop:publishsubmissions'] = '提出を公開する';
$string['workshop:submit'] = '送信';
$string['workshop:switchphase'] = 'フェーズを切り替える';
$string['workshop:view'] = 'ワークショップを表示する';
$string['workshop:viewallassessments'] = 'すべての評価を表示する';
$string['workshop:viewallsubmissions'] = 'すべての提出を表示する';
$string['workshop:viewauthornames'] = '作成者名を表示する';
$string['workshop:viewauthorpublished'] = '公開された提出の作成者を表示する';
$string['workshop:viewpublishedsubmissions'] = '公開済み提出を表示する';
$string['workshop:viewreviewernames'] = '評価者名を表示する';
$string['yourassessment'] = 'あなたの評価';
$string['yourassessmentfor'] = 'あなたの {$a} の評価';
$string['yourgrades'] = 'あなたの評点';
$string['yoursubmission'] = 'あなたの提出課題';
