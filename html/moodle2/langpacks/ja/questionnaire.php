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
 * Strings for component 'questionnaire', language 'ja', branch 'MOODLE_32_STABLE'
 *
 * @package   questionnaire
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = '活動';
$string['activityoverview'] = 'あなたには期限のあるアンケートがあります。';
$string['additionalinfo'] = '補足情報';
$string['additionalinfo_help'] = 'このアンケートの最初のページの冒頭に表示されるテキストです。（たとえば，内容説明や背景・経緯などのように）';
$string['addnewquestion'] = '質問 {$a} を追加する';
$string['addquestions'] = 'アンケート項目の追加';
$string['addselqtype'] = '選択した質問タイプの追加';
$string['alignment'] = 'ボタンの配置';
$string['alignment_help'] = 'ボタンの配置: 縦 (初期値) or 横';
$string['all'] = 'すべて';
$string['alreadyfilled'] = 'あなたはすでにこのアンケート {$a} に回答済みです。';
$string['andaveragevalues'] = 'と平均値';
$string['anonymous'] = '匿名';
$string['answerquestions'] = 'アンケートに答える...';
$string['attempted'] = 'このアンケートは回答済みです。';
$string['attemptstillinprogress'] = '次に保存しています:';
$string['autonumbering'] = '自動番号設定';
$string['autonumbering_help'] = '質問項目やページの自動番号設定です。条件分岐を使ったアンケートの場合にはこの自動番号設定を無効にした方がよいかもしれません。';
$string['autonumberno'] = '質問項目やページに番号を付けない。';
$string['autonumberpages'] = 'ページ番号の自動設定';
$string['autonumberpagesandquestions'] = 'ページ番号および質問項目番号の自動設定';
$string['autonumberquestions'] = '質問項目番号の自動設定';
$string['average'] = '平均';
$string['averageposition'] = '平均の位置';
$string['averagerank'] = '平均ランク';
$string['bodytext'] = '本文';
$string['boxesnbexact'] = '項目数：{$a}';
$string['boxesnbmax'] = '項目の最大数：{$a}';
$string['boxesnbmin'] = '項目の最小数：{$a}';
$string['boxesnbreq'] = '選択必須';
$string['by'] = 'by';
$string['cannotviewpublicresponses'] = 'あなたは、この公開アンケートの回答を閲覧することができません。';
$string['chart:bipolar'] = 'バイポーラバー';
$string['chart:hbar'] = '水平バー';
$string['chart:radar'] = 'レーダー';
$string['chart:rose'] = 'ローズ';
$string['chart:type'] = 'グラフの種類';
$string['chart:type_help'] = 'このフィードバックに使用するグラフの種類を選択してください';
$string['chart:vprogress'] = '垂直プログレスバー';
$string['checkallradiobuttons'] = 'ラジオボタン <strong>{$a}</strong> をチェックしてください！';
$string['checkboxes'] = 'チェックボックス';
$string['checkboxes_help'] = '1つまたは複数の回答を選択するユーザーのために，1行につき1つのオプションを入力してください。';
$string['checkbreaksadded'] = '挿入された改ページ：';
$string['checkbreaksok'] = '必要なすべての改ページがあります！';
$string['checkbreaksremoved'] = '余分な改ページ {$a} を削除しました。';
$string['checknotstarted'] = 'まだ開始しない';
$string['checkstarted'] = '開始する';
$string['clicktoswitch'] = '（クリックして変更する）';
$string['closed'] = 'アンケートは、{$a} に終了しました。ありがとうございます。';
$string['closedate'] = '終了日';
$string['closedate_help'] = 'あなたはここにアンケートの回答期限となる日付を指定することができます。チェックボックスをオンにして，希望する日時を選択します。ユーザーは、その日付を過ぎるとアンケートに記入することができません。これが選択されていない場合、アンケートに回答期限はなく，終了することはありません。';
$string['closeson'] = 'アンケートは {$a} に終了しました。';
$string['completionsubmit'] = '学生はこれを完了するためには，このアンケートを提出しなければなりません';
$string['confalts'] = '- もしくは - <br />確認ページ';
$string['configusergraph'] = '「性格検査」用にグラフを表示する';
$string['configusergraphlong'] = '「性格検査」のグラフを表示するライブラリ<a href="http://www.rgraph.net/">Rgraph</a>を使用する。';
$string['confirmdelallresp'] = 'このアンケートの回答をすべて消去してよろしいですか？';
$string['confirmdelchildren'] = 'この質問を削除すると、その下位質問も削除されます。';
$string['confirmdelgroupresp'] = '項目 {$a} の回答をすべて消去してよろしいですか？';
$string['confirmdelquestion'] = '{$a} で質問を削除してもよろしいですか？';
$string['confirmdelquestionresps'] = 'これは，すでにその質問に寄せられた回答 {$a} も削除します。';
$string['confirmdelresp'] = '{$a} の回答を消去してよろしいですか？';
$string['confpage'] = '表題';
$string['confpagedesc'] = 'ユーザがこの調査を完了した後、「確認」ページで表示される表題 (太字) および本文です。(URLが入力されている場合、確認テキストに優先します。)';
$string['confpage_help'] = '見出し（太字）および「確認」ページ（ユーザーがこのアンケートを完了した後に表示される）の本文テキスト。 （特定のURLが存在する場合には、確認のテキストよりも優先されます。）このフィールドを空のままにすると、次のようなメッセージが、アンケート終了時に表示されます（このアンケートに回答していただきありがとうございます）。';
$string['contentoptions'] = '設定オプション';
$string['couldnotcreatenewsurvey'] = '新規サーベイを作成できません！';
$string['couldnotdelresp'] = '回答を消去できません';
$string['createcontent'] = '新しいコンテンツの定義';
$string['createcontent_help'] = 'オプションをどれか一つ選択してください。\'新規作成\' が初期値です。';
$string['createnew'] = 'アンケートの新規作成';
$string['date'] = '日付';
$string['dateformatting'] = '「年/月/日」形式を使用してください。例：1945年3月14日　<strong>1945/3/14</strong>';
$string['date_help'] = '正しくフォーマットされた日付の回答を期待する場合は、この質問タイプを使用してください。';
$string['deleteallresponses'] = 'すべての回答の消去';
$string['deletecurrentquestion'] = '質問 {$a} の消去';
$string['deletedallgroupresp'] = 'グループ {$a} のすべての回答の消去';
$string['deletedallresp'] = 'アンケートの回答が削除されました';
$string['deletedisabled'] = 'この項目は削除できません';
$string['deletedresp'] = '消去された回答';
$string['deleteresp'] = 'この回答を消去する';
$string['deletingresp'] = '回答を消去してます...';
$string['dependquestion'] = '上位の質問項目';
$string['dependquestion_help'] = 'あなたは上位の質問とこの質問への誘導オプションを選択することができます。上位の質問項目と該当する誘導オプションが選択されている場合にのみ、下位の質問項目が学生に表示されます。';
$string['displaymethod'] = '回答方法が未定義の質問の表示';
$string['download'] = 'ダウンロード';
$string['downloadtextformat'] = 'テキストフォーマットでのダウンロード';
$string['downloadtextformat_help'] = 'この機能を使用すると、テキストファイル（CSV形式）にアンケートのすべての回答を保存することができます。このファイルは、スプレッドシート（例えば、MS ExcelやOpen OfficeのCalc）または別のデータを処理するための統計パッケージにインポートすることができます。';
$string['downloadtextformat_link'] = 'mod/questionnaire/report#Download_in_text_format';
$string['dropdown'] = 'ドロップダウン式';
$string['dropdown_help'] = '画面のスペースを節約するために，ドロップダウンボックスの長めのリストが表示されるような場合を除いて，ラジオボタンの代わりにドロップダウンボックスを使用する実際の利点はありません。';
$string['edit'] = '編集';
$string['editingquestionnaire'] = 'アンケートの設定を編集する';
$string['editquestion'] = '質問 {$a} の編集';
$string['email'] = 'Eメール';
$string['errnewname'] = '申し訳ございません、このアンケート名はすでに使用されています。新しいアンケート名を入力してください。';
$string['erroropening'] = 'エラー：アンケートを開くことができません。';
$string['errortable'] = 'エラー：システムテーブルが不正です。';
$string['essaybox'] = '短文記述形式';
$string['essaybox_help'] = 'この質問は、横x列，縦y行の領域のプレーンテキストボックスを表示します。あなたがxとyの両方をデフォルト値の0のままにしている場合（または0に設定している場合）、MoodleのHTMLエディタは標準的な高さと幅（コース/ユーザーコンテキスト·ユーザープロファイルで設定可能）で表示されます。';
$string['event_all_responses_deleted'] = 'すべての回答が消去されました。';
$string['event_all_responses_saved_as_text'] = 'すべての回答がテキストとして保存されました。';
$string['event_all_responses_viewed'] = 'すべての回答が閲覧されました。';
$string['event_individual_responses_viewed'] = '個人の回答が閲覧されました。';
$string['event_non_respondents_viewed'] = '無回答者が確認されました。';
$string['event_previewed'] = 'アンケートが事前チェックされました。';
$string['event_question_created'] = '質問が追加されました。';
$string['event_question_deleted'] = '質問が消去されました。';
$string['event_response_deleted'] = '個人の回答が消去されました。';
$string['event_resumed'] = '企画がまとめられました。';
$string['event_saved'] = '回答が保存されました。';
$string['event_submitted'] = '回答が提出されました。';
$string['feedback'] = 'フィードバック';
$string['feedbackaddmorefeedbacks'] = 'フィードバックフィールドを追加する/追加しない';
$string['feedbackbysection'] = 'フィードバックセクション';
$string['feedbackeditingglobal'] = 'グローバルフィードバックの編集';
$string['feedbackeditingmessages'] = 'フィードバックメッセージの編集';
$string['feedbackeditingsections'] = 'フィードバックセクションの編集';
$string['feedbackeditmessages'] = 'セクションの設定保存およびフィードバックメッセージの編集';
$string['feedbackeditsections'] = '設定の保存およびフィードバックセクションの編集';
$string['feedbackerrorboundaryformat'] = 'フィードバックスコアの区間は，パーセンテージまたは数値のいずれかである必要があります。あなたが区間 {$a} に入力した値は認識されていません。';
$string['feedbackerrorboundaryoutofrange'] = 'フィードバックスコアの区間は、0％から100％の間でなければなりません。あなたが区間 {$a} に入力した値は範囲外です。';
$string['feedbackerrorjunkinboundary'] = 'フィードバックスコアの区間には途切れることがないように値を入力しなければなりません。';
$string['feedbackerrorjunkinfeedback'] = 'フィードバックボックスには途切れることがないように値を入力しなければなりません。';
$string['feedbackerrororder'] = 'フィードバックスコアの区間は、まず最初の値が最高の値でなければなりません。あなたが区間 {$a} に入力した値は値の並びを外れています。';
$string['feedbackglobal'] = 'グローバルフィードバック';
$string['feedbackglobalheading'] = 'グローバルフィードバックの見出し';
$string['feedbackglobalmessages'] = 'グローバルフィードバックのメッセージ';
$string['feedbackhdr'] = 'フィードバック';
$string['feedbackheading'] = 'フィードバックの見出し';
$string['feedbackheading_help'] = 'フィードバックの見出しフィールドには、次の2つの変数を使用することができます：$scorepercent と $oppositescorepercent。';
$string['feedback_help'] = 'フィードバックのヘルプ';
$string['feedbackmessages'] = 'セクション {$a} のフィードバックメッセージ';
$string['feedbacknextsection'] = '次のセクション {$a}';
$string['feedbacknone'] = 'フィードバックメッセージはありません';
$string['feedbacknotes'] = 'フィードバックの注意点';
$string['feedbacknotes_help'] = 'ここで入力したテキストは、フィードバックレポートの最後のところで，回答者に提示されます';
$string['feedbackoptions'] = 'フィードバックのオプション';
$string['feedbackoptions_help'] = 'あなたのアンケートに次のような質問のタイプや質問の設定が含まれている場合、フィードバックのオプションを利用できます。（ラジオボタン，ドロップダウンボックスやレート）これらの質問項目は、回答必須項目として設定する必要があり、それらの質問項目のフィールドは空欄であってはならず、回答の選択肢には何らかのデータが含まれている必要があります。';
$string['feedbackremovequestionfromsection'] = 'この質問はフィードバックセクション[{$a}]の部分です。';
$string['feedbackremovesection'] = 'この質問を削除すると、フィードバックセクション [{$a}] を完全に削除します';
$string['feedbackreport'] = 'フィードバックリポート';
$string['feedbackscore'] = 'フィードバックスコア';
$string['feedbackscoreboundary'] = 'フィードバックスコアの区間';
$string['feedbackscores'] = 'スコア表示';
$string['feedbackscores_help'] = 'フィードバックスコア表の表示';
$string['feedbacksection'] = 'セクション';
$string['feedbacksectionheading'] = 'セクション {$a} のフィードバックの見出し';
$string['feedbacksectionheadingmissing'] = 'このフィードバック部の見出しを入力する必要があります！';
$string['feedbacksectionheadingtext'] = '見出し';
$string['feedbacksectionlabel'] = 'ラベル';
$string['feedbacksectionlabel_help'] = 'このラベルは、グラフ・図で使用されます。できるだけ簡潔にしてください！';
$string['feedbacksections'] = 'フィードバックセクション {$a}';
$string['feedbacksectionsselect'] = 'セクション';
$string['feedbacksectionsselect_help'] = 'これらのセクションの中に質問を入れましょう';
$string['feedbacksettingssaved'] = 'フィードバックの設定が保存されました';
$string['feedbacktype'] = 'フィードバックのタイプ';
$string['field'] = 'フィールド {$a}';
$string['fieldlength'] = 'ボックス幅（１行の文字数）の入力';
$string['fieldlength_help'] = '**テキストボックス**質問タイプの場合には、**入力ボックスの文字数**および回答者が入力するテキストの**最大文字数**を入力します。デフォルトは、入力ボックスの入力幅は半角20文字，入力テキストの最大文字数は半角25文字です。';
$string['finished'] = 'あなたは，このアンケートのすべての質問に答えました！';
$string['firstrespondent'] = '最初の回答者';
$string['formateditor'] = 'HTMLエディタ';
$string['formatplain'] = 'プレーンテキスト';
$string['grade'] = '評定';
$string['gradesdeleted'] = 'アンケートのグレードが削除されました';
$string['headingtext'] = '表題';
$string['horizontal'] = '横置き';
$string['id'] = 'ID';
$string['includechoicecodes'] = '選択コードを含む';
$string['includechoicetext'] = '選択テキストを含む';
$string['incorrectcourseid'] = 'コースIDが不正です';
$string['incorrectmodule'] = 'コースモジュールIDが不正でした';
$string['incorrectquestionnaire'] = 'アンケートが不正です';
$string['invalidresponse'] = '不適切な回答が特定されました。';
$string['invalidresponserecord'] = '不適切な回答が特定されました。';
$string['invalidsurveyid'] = '不適切なアンケートIDです。';
$string['kindofratescale'] = '評価尺度のタイプ';
$string['kindofratescale_help'] = '詳細なヘルプを表示するには，下記のリンクを右クリックします。';
$string['lastrespondent'] = '最後の回答者';
$string['length'] = '長さ';
$string['managequestions'] = '質問項目の管理';
$string['managequestions_help'] = '質問の編集ページの管理セクションでは，アンケートの質問に対する操作手順の数を管理することができます。';
$string['maxdigitsallowed'] = '許容最大桁数';
$string['maxdigitsallowed_help'] = '最大の桁数や小数点以下の桁数パラメーターを使用することによって，必要な桁数や小数点以下の桁数を指定することができます。';
$string['maxforcedresponses'] = '強制的な回答の最大数';
$string['maxtextlength'] = '最大文字数';
$string['messageprovider:message'] = 'アンケートリマインダー';
$string['minforcedresponses'] = '強制的な回答の最小数';
$string['minforcedresponses_help'] = '**Min.**ボックスの最小値と**Max.**ボックスの最大値をチェックすることを回答者に強制させたいときに，これらのパラメータを使用してください。チェックされるチェックボックスの正確な数を指定するときは，**Max.**と**Min.**を同じ値に設定します。最小または最大値の一方のみが必要な場合は，必要ない方をデフォルト**0**の値のままにしておきます。**Min.**または**Max.**をそれらのデフォルト**0**以外の値に設定した場合，回答者がユーザーの要件に準拠していないため，警告メッセージが表示されます。アンケートの一般的な手順や関連する質問のテキストのいずれかで，回答者への要求事項を明確にする必要があります。';
$string['misconfigured'] = 'コースが誤って設定されました';
$string['missingname'] = '名前を持っていないため，質問 {$a} はこのフィードバックセクションでは使用できません。';
$string['missingnameandrequired'] = '名前を持たず,
必須項目でも
ありませんので，質問 {$a} は、このフィードバックセクションでは使用できません。';
$string['missingquestion'] = '必須項目に回答してください';
$string['missingquestions'] = '必須項目に回答してください。';
$string['missingrequired'] = '必須項目でないため，質問 {$a} はこのフィードバックセクションでは使用できません。';
$string['modulename'] = 'アンケート';
$string['modulename_help'] = 'アンケートモジュールを使用すると，ユーザーからデータを収集するために，さまざまな質問タイプを用いたアンケートを作成することができます。';
$string['modulenameplural'] = 'アンケート';
$string['movedisabled'] = 'この項目は移動できません';
$string['myresponses'] = 'あなたのすべての回答';
$string['myresponsetitle'] = 'あなたの回答内容 {$a} 件';
$string['myresults'] = '結果';
$string['name'] = 'アンケート名';
$string['navigate'] = '質問の分岐を許可する';
$string['navigate_help'] = '「はい・いいえ」形式やラジオボタン形式を有効にすれば，そこでの回答の内容によって分岐する下位質問を使用することができます。';
$string['next'] = '次へ';
$string['nextpage'] = '次のページ';
$string['nlines'] = '{$a} 行';
$string['noanswer'] = '回答がありません。';
$string['noattempts'] = 'このアンケートはまだ実行されていません。';
$string['nodata'] = 'データがありません。';
$string['noduplicates'] = '重複選択なし';
$string['noduplicateschoiceserror'] = '「重複選択なし」のオプション設定用に，少なくとも2つの選択候補を入力する必要があります！';
$string['noneinuse'] = 'このアンケートには，質問がありません。';
$string['non_respondents'] = 'まだこのアンケートへの回答を提出していないユーザー';
$string['nopublicsurveys'] = '公開アンケートはありません';
$string['noresponsedata'] = 'この質問には回答はありません。';
$string['noresponses'] = '回答なし';
$string['normal'] = 'ノーマル';
$string['notanumber'] = '<strong>{$a}</strong> は受け入れ可能な数値フォーマットではありません。';
$string['notapplicable'] = 'N/A';
$string['notapplicablecolumn'] = 'N/A カラム';
$string['notavail'] = 'この質問はまだ利用できません。後でお試しください。';
$string['noteligible'] = 'あなたはこのアンケートに回答できません。';
$string['notemplatesurveys'] = 'テンプレート型のアンケートはありません。';
$string['notenoughscaleitems'] = 'あなたは2つの尺度の最小値を入力する必要があります！';
$string['notopen'] = 'このアンケートは、{$a} まで開始されません。';
$string['notrequired'] = '回答の必要はありません';
$string['not_started'] = '開始されていない';
$string['nousersselected'] = '選択されたユーザがいません';
$string['num'] = '#';
$string['numattemptsmade'] = 'このアンケートで行われた試み {$a}';
$string['numberfloat'] = 'あなたは入力した値<strong>{$a->number}</strong>は，小数点<strong>{$a->precision}</strong>で変換/四捨五入されます。';
$string['numberofdecimaldigits'] = '小数点以下の桁数';
$string['numberscaleitems'] = 'スケール値';
$string['numberscaleitems_help'] = 'スケール項目のNbは，あなたのレートスケールで使用される「項目の個数」である。通常は3から5の間の値を使用すべきです。デフォルト値は**5**。';
$string['numeric'] = '数値形式';
$string['numeric_help'] = '回答が正しくフォーマットされた数値であることが予想される場合、この質問タイプを使用してください。';
$string['of'] = '／';
$string['opendate'] = '開始日';
$string['opendate_help'] = 'あなたがここにアンケートを開始する日付を指定することができます。チェックボックスをチェックして、希望する日時を選択します。ユーザーは、それより前にアンケートに記入することはできません。チェックされていない場合は、すぐにアンケートが開始されます。';
$string['option'] = 'オプション {$a}';
$string['optionalname'] = '項目名';
$string['optionalname_help'] = 'アンケートの名称は，CSV / Excel形式で回答を書き出すときのみ使用されます。CSVファイルにエクスポートすることがない場合は，アンケートの名称を全く気にする必要はありません。あなたがアンケートデータを定期的にCSVファイルにエクスポートする場合は，質問の名称を2つのオプションから選択できます。';
$string['or'] = '- もしくは -';
$string['order_ascending'] = '昇順';
$string['order_default'] = 'デフォルトの並び順に閲覧';
$string['order_descending'] = '降順';
$string['orderresponses'] = '回答の順序づけ';
$string['orderresponses_help'] = '全回答を表示する場合には，
次の4つのタイプの質問に対する回答数（平均）で選択肢を並べることができます。

* 単一選択のラジオボタン
* 単一選択のドロップダウンリスト
* 複数選択（チェックボックス）
*  レート質問（リッカート尺度を含む）。

全回答ページでは，デフォルトですべての回答は，アンケート作成者が入力した質問の選択肢の順番に並べられます。昇順または降順でそれらを並べ替えることもできます。';
$string['osgood'] = 'オズグッド';
$string['other'] = 'その他：';
$string['otherempty'] = 'このオプションをチェックした場合，何らかの文を入力しなければなりません！';
$string['overviewnumresplog'] = '回答(複数)';
$string['overviewnumresplog1'] = '回答';
$string['overviewnumrespvw'] = '回答(複数)';
$string['overviewnumrespvw1'] = '回答';
$string['owner'] = 'オーナー';
$string['page'] = 'ページ';
$string['pageof'] = 'ページ {$a->page} ／ {$a->totpages}';
$string['participant'] = '参加者';
$string['pleasecomplete'] = 'この選択を完了してください。';
$string['pluginadministration'] = 'アンケートモジュールの管理';
$string['pluginname'] = 'アンケート';
$string['position'] = 'ポジション';
$string['possibleanswers'] = '回答の選択肢';
$string['posteddata'] = 'ポストされたデータでの到達ページ：';
$string['previewing'] = 'アンケートのプレビュー';
$string['preview_label'] = 'プレビュー';
$string['preview_questionnaire'] = 'アンケートのプレビュー';
$string['previous'] = '前へ';
$string['previouspage'] = '前のページ';
$string['print'] = 'この回答を印刷する';
$string['printblank'] = '空欄を印刷する';
$string['printblanktooltip'] = '空欄を含む印刷画面の表示';
$string['printtooltip'] = '現時点での回答の印刷画面の表示';
$string['private'] = 'コース限定型';
$string['public'] = '公開型';
$string['publiccopy'] = 'コピー：';
$string['publicoriginal'] = 'オリジナル：';
$string['qtype'] = 'タイプ';
$string['qtypedaily'] = '毎日回答';
$string['qtype_help'] = '一度しか回答できないのか，定期的に繰り返し回答するのか，何度でも無制限に回答できるのかを指定します。';
$string['qtypemonthly'] = '毎月回答';
$string['qtypeonce'] = '１回のみ回答';
$string['qtypeunlimited'] = '何回でも回答';
$string['qtypeweekly'] = '毎週回答';
$string['questionnaire:addinstance'] = '新しいアンケートの追加';
$string['questionnaireadministration'] = 'アンケートモジュールの管理';
$string['questionnairecloses'] = 'アンケート終了';
$string['questionnaire:copysurveys'] = 'テンプレート型およびコース限定型のアンケートをコピーする';
$string['questionnaire:createpublic'] = '公開型のアンケートを作成する';
$string['questionnaire:createtemplates'] = 'テンプレート型のアンケートを作成する';
$string['questionnaire:deleteresponses'] = 'あらゆる回答を削除する';
$string['questionnaire:downloadresponses'] = 'CSVファイルで回答データをダウンロードする';
$string['questionnaire:editquestions'] = '質問項目の作成・編集';
$string['questionnaire:manage'] = 'アンケートの作成・編集';
$string['questionnaire:message'] = '非回答者にメッセージを送信';
$string['questionnaireopens'] = 'アンケート開始';
$string['questionnaire:preview'] = 'アンケートをプレビューする';
$string['questionnaire:printblank'] = '空白のアンケートの印刷';
$string['questionnaire:readallresponseanytime'] = '随時すべての回答を閲覧する';
$string['questionnaire:readallresponses'] = '回答概要を閲覧する';
$string['questionnaire:readownresponses'] = '自分の回答だけを閲覧する';
$string['questionnairereport'] = 'アンケートのリポート';
$string['questionnaire:submit'] = '回答をすべて完了し，送信する';
$string['questionnaire:view'] = 'アンケートの閲覧';
$string['questionnaire:viewsingleresponse'] = '完了した回答を個々に閲覧する';
$string['questionnum'] = '質問 #';
$string['questions'] = 'アンケート項目';
$string['questionsinsection'] = 'このセクションの質問：';
$string['questiontypes'] = '質問タイプ';
$string['questiontypes_help'] = 'Moodle 文書の参照';
$string['radiobuttons'] = 'ラジオボタン式';
$string['radiobuttons_help'] = 'この質問タイプでは，回答者は提供された選択肢のうちいずれかを選択する必要があります。';
$string['rank'] = 'ランク';
$string['ratescale'] = '測定尺度 (尺度 1..5)';
$string['ratescale_help'] = 'Moodle 文書の参照';
$string['realm'] = 'アンケートタイプ';
$string['realm_help'] = '* **アンケートには、次の3種類があります:**
 * コース限定型 - アンケートが作成されたコースの中でのみ使用されます。
 * テンプレート型 - 複製したり，編集したりすることができます。
 * 公開型 - 他のコースからも利用できます。';
$string['redirecturl'] = 'この調査完了後、ユーザがリダイレクトされるURLです。';
$string['remove'] = '削除';
$string['removeallquestionnaireattempts'] = 'アンケートの回答をすべて削除します。';
$string['required'] = '必須回答';
$string['required_help'] = '***Yes***を選択した場合は，この質問への回答が必須となります。つまり，この質問に回答するまで，アンケートを提出し終えることができません。';
$string['requiredparameter'] = '必要なパラメータが欠如してます。';
$string['reset'] = 'リセット';
$string['respeligiblerepl'] = '(ロールによる置き換え)';
$string['respondent'] = '回答者';
$string['respondenteligibleall'] = 'すべて';
$string['respondenteligiblestudents'] = '学生のみ';
$string['respondenteligibleteachers'] = '教師のみ';
$string['respondents'] = '回答者';
$string['respondenttype'] = '回答者タイプ';
$string['respondenttypeanonymous'] = '匿名';
$string['respondenttypefullname'] = 'フルネーム';
$string['respondenttype_help'] = 'ここを「フルネーム」に設定すれば，各回答にそれぞれ回答者の名前を表示することができます。「匿名」に設定すれば，各回答からユーザー名を隠すことができます。';
$string['response'] = '回答';
$string['responsefieldlines'] = '入力欄のサイズ';
$string['responseformat'] = '回答形式';
$string['responseoptions'] = '回答オプション';
$string['responses'] = '回答';
$string['responseview'] = '回答の閲覧（学生）';
$string['responseview_help'] = 'アンケートへの全回答（一般的な統計表）を見ることができるユーザーを指定することができます。';
$string['responseviewstudentsalways'] = '随時可能';
$string['responseviewstudentsnever'] = '不可';
$string['responseviewstudentswhenanswered'] = '自分の回答終了後に可';
$string['responseviewstudentswhenclosed'] = '回答期間終了後に可';
$string['restrictedtoteacher'] = 'この機能は編集権のある教師のみに制限されています！';
$string['resume'] = '回答の中断/再開の許可';
$string['resume_help'] = 'このオプションを設定すると，ユーザーがそれらを提出する前に，アンケートへの回答を保存することができます。ユーザーはアンケートを一旦中断して、後日セーブポイントから再開することができます。';
$string['resumesurvey'] = 'アンケート調査の再開';
$string['return'] = '戻る';
$string['save'] = '送信せずに一時保存する';
$string['saveasnew'] = '新規項目として追加する';
$string['savedbutnotsubmitted'] = 'このアンケートは保存されましたが，まだ提出されていません。';
$string['savedprogress'] = 'あなたの進捗状況が保存されました。このアンケートを完了するためにいつでも復元できます。';
$string['saveeditedquestion'] = '項目 {$a} の保存';
$string['savesettings'] = '設定の保存';
$string['section'] = 'セクション';
$string['sectionbreak'] = '----- ページ区切り -----';
$string['sectionbreak_help'] = '----- ページ区切り -----';
$string['sectionsnotset'] = 'あなたはセクションごとに少なくとも1つの質問を選択する必要があります！<br />選択されていないセクション： {$a}';
$string['sectiontext'] = 'ラベル';
$string['sectiontext_help'] = 'これは質問ではありませんが，一連の質問を紹介するときに表示される（短い）テキストです。';
$string['selecttheme'] = 'この調査で使用するテーマ (CSS) を選択してください。';
$string['send'] = '送信する';
$string['sendemail'] = '各送信内容のコピーを送信するアドレスです (メールバックアップ不要の場合、空白)。';
$string['sendemail_help'] = '指定されたメールアドレスに提出された回答の写しを一つ一つ送信します。あなたはカンマで区切って2つ以上のメールアドレスを指定することもできます。電子メールのバックアップが必要ないときは，空欄のままにしてください。';
$string['send_message'] = '選択したユーザー宛てにメッセージを送信';
$string['send_message_to'] = 'メッセージを送信する：';
$string['settings'] = '設定';
$string['settingssaved'] = '設定が保存されました。';
$string['show_nonrespondents'] = '非回答者';
$string['started'] = '開始';
$string['strfdate'] = '%Y/%m/%d';
$string['strfdateformatcsv'] = 'Y/m/d H:i:s';
$string['subject'] = '題目';
$string['submitoptions'] = '回答確認の設定';
$string['submitpreview'] = 'プレビューを送信する';
$string['submitpreviewcorrect'] = 'この提出は，正しく入力されたものとして受け入れられるでしょう。';
$string['submitsurvey'] = '回答を送信する';
$string['submitted'] = '送信完了：';
$string['subtitle'] = 'サブタイトル';
$string['subtitle_help'] = 'このアンケートのサブタイトル。最初のページのタイトルの下に表示されます。';
$string['summary'] = '概要';
$string['surveynotexists'] = 'アンケートがありません。';
$string['surveyowner'] = 'この操作を行うにはアンケートのオーナーでなければなりません。';
$string['surveyresponse'] = 'アンケート回答';
$string['template'] = 'テンプレート型';
$string['templatenotviewable'] = 'テンプレート型アンケートを表示できません。';
$string['text'] = '質問文';
$string['textareacolumns'] = '一行文字数';
$string['textareacolumns_help'] = 'この質問は，**x** *テキストエリアの列*（またはエリア*幅*）と**y** *テキストエリアの行（テキストの*行数*）のプレーンテキストボックスを表示します。あなたがxとyの両方をデフォルト**0**の値（またはそれが** 0 **に設定されている場合）のままにしておくと，·（、コース/ユーザーコンテキストとユーザプロファイルで利用可能な設定の場合は）HTMLエディタは標準的な高さと幅で表示されます。';
$string['textarearows'] = '行数';
$string['textbox'] = '自由記述形式';
$string['textbox_help'] = 'テキストボックス質問タイプの場合は、入力ボックスの文字数と回答者が入力するテキストの最大文字数を入力します。デフォルト値は入力ボックスの幅は半角20文字，入力テキストの最大文字数は半角25文字です。';
$string['textdownloadoptions'] = 'ダウンロードオプション (CSV)';
$string['thank_head'] = 'このアンケートにご協力いただきましてありがとうございます。';
$string['theme'] = 'テーマ';
$string['thismonth'] = '今月';
$string['thisresponse'] = 'この回答';
$string['thisweek'] = '今週';
$string['title'] = 'タイトル';
$string['title_help'] = 'このアンケートのタイトルは，各ページの上部に常に表示されます。デフォルトのタイトル名は，アンケート名で設定されていますが、あなたが好きなようにそれを編集することができます。';
$string['today'] = '本日';
$string['total'] = '合計';
$string['type'] = '質問タイプ';
$string['undefinedquestiontype'] = '未定義の項目タイプです！';
$string['unknown'] = '想定外';
$string['unknownaction'] = '想定外のアンケート活動が特定されました...';
$string['url'] = '送信確認ページ(URL)';
$string['url_help'] = 'ユーザーがこのアンケートを完了した後にリダイレクトされる先のURL。';
$string['useprivate'] = '既存のコピー';
$string['usepublic'] = '公開アンケートの利用';
$string['usetemplate'] = 'テンプレートの利用';
$string['vertical'] = '縦置き';
$string['view'] = '閲覧';
$string['viewallresponses'] = '全回答の閲覧';
$string['viewallresponses_help'] = 'アンケートが、**Group Mode**: *Visible groups*　または　*Separate groups*　に設定されている場合や、利用者が　*moodle/site:accessallgroups*　のアクセス権を有している場合（該当内容において）、また、グループが現在のコースとして認識されている場合は、利用者グループリストへのアクセスが可能です。
このグループリストにより、利用者は質問の回答をグループごとに分けることができます。
**Group Mode**: *Separate groups*に設定されている際は、*moodle/site:accessallgroups* へのアクセス権を有さない利用者（通常、学生やnon-editing teachersなど）も、所属のグループの回答を閲覧することができます。';
$string['viewbyresponse'] = '回答のリスト';
$string['viewindividualresponse'] = '個々の回答';
$string['viewindividualresponse_help'] = '個々の回答を表示するには、以下のリストの回答者の名前をクリックします。';
$string['viewresponses'] = '全回答 ({$a})';
$string['viewyourresponses'] = 'あなたの回答 - 閲覧 {$a}';
$string['warning'] = '警告：エラーに遭遇しました。';
$string['wronganswers'] = 'あなたの答えに何らかの問題がある（下記参照）';
$string['wrongdateformat'] = '入力された日付：<strong>{$a}</strong>は，以下に示すような形式に対応していません。';
$string['wrongdaterange'] = 'エラー：1902年から2037年までの間に設定してください。';
$string['wrongformat'] = '質問に対するあなたの答えに何らかの問題があります：&nbsp;';
$string['wrongformats'] = '質問に対するあなたの答えに何らかの問題があります：&nbsp;';
$string['yesno'] = 'はい・いいえ';
$string['yesno_help'] = 'シンプルな「はい・いいえ」質問';
$string['yourresponse'] = 'あなたの回答';
$string['yourresponses'] = 'あなたの回答';
