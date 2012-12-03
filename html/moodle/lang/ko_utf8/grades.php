<?PHP // $Id$ 
      // grades.php - created with Moodle 2.0 dev (Build: 20090604) (2009060200)


$string['activities'] = '활동';
$string['addcategory'] = '범주 추가';
$string['addcategoryerror'] = '범주를 추가할 수 없음';
$string['addexceptionerror'] = 'userid:gradeitem의 예외 처리를 하는 동안 오류 발생';
$string['addfeedback'] = '피드백 추가';
$string['addgradeletter'] = '문자 등급 추가';
$string['addidnumbers'] = '식별번호 추가';
$string['additem'] = '채점 항목 추가';
$string['addoutcome'] = '학습성과 추가';
$string['addoutcomeitem'] = '학습성과 항목 추가';
$string['addscale'] = '척도 추가';
$string['aggregateextracreditmean'] = '성적 평균 (가산점 포함)';
$string['aggregatemax'] = '최고점';
$string['aggregatemean'] = '성적 평균';
$string['aggregatemedian'] = '모든 점수의 중간값';
$string['aggregatemin'] = '최저점';
$string['aggregatemode'] = '모든 점수의 최빈값';
$string['aggregateonlygraded'] = '응시한 성적만 집계';
$string['aggregateonlygradedhelp'] = '응시하지 않은 성적은 최소성적으로 처리되거나 집계에 포함되지 않습니다.';
$string['aggregateoutcomes'] = '집계에 학습성과 포함';
$string['aggregateoutcomeshelp'] = '집계에 학습성과를 포함시킨다고 해서 기대하는 총점에 근접하는 것은 아니어서 학습성과를 제외시킬지 혹은 포함시킬지에 대한 선택권이 존재한다.';
$string['aggregatesonly'] = '집계만';
$string['aggregatesubcats'] = '하위 범주를 포함한 집계';
$string['aggregatesubcatshelp'] = '집계는 보통 직속 하위범주에 대해서만 이루어지지만, 이미 집계된 성적을 제외한 모든 하위범주에 대해 성적을 집계하는 것도 가능하다.';
$string['aggregatesum'] = '성적 합계';
$string['aggregateweightedmean'] = '성적의 가중 평균';
$string['aggregateweightedmean2'] = '단순 가중 평균';
$string['aggregation'] = '집계 전략';
$string['aggregationcoef'] = '집계 상수';
$string['aggregationcoefextra'] = '가산 점수';
$string['aggregationcoefextrahelp'] = '집계중 이 성적항목에 대한 가산점수';
$string['aggregationcoefextrasum'] = '가산 점수';
$string['aggregationcoefextrasumhelp'] = '집계중 이 성적항목에 대한 가산점수';
$string['aggregationcoefweight'] = '항목 가중치';
$string['aggregationcoefweighthelp'] = '타 성적항목의 집계가 이루어지는 동안 가중치는 성적항목의 모든 점수에 적용된다.';
$string['aggregationhelp'] = '강좌에서 모든 학습자의 성적을 집계하는데 사용되는 전략';
$string['aggregationposition'] = '총계의 위치';
$string['aggregationsvisible'] = '이용가능한 집계 유형';
$string['aggregationsvisiblehelp'] = '사용 가능한 집계 유형을 선택. 여러 항목을 선택하려면 Ctrl 키를 누르고 선택';
$string['aggregationview'] = '총계 보기';
$string['allgrades'] = '범주에 따른 모든 점수';
$string['allstudents'] = '모든 학생';
$string['allusers'] = '모두';
$string['autosort'] = '자동 정열';
$string['availableidnumbers'] = '사용가능한 식별번호';
$string['average'] = '평균';
$string['averagesdecimalpoints'] = '항목 평균의 소수점';
$string['averagesdisplaytype'] = '항목 평균 표시법';
$string['backupwithoutgradebook'] = '백업시 성적표의 설정 상황은 포함되지 않음';
$string['badgrade'] = '제공된 성적이 잘못 되었음';
$string['badlyformattedscale'] = '쉼표로 구분하여 값들을 입력하세요(최소 두 값 이상 필요)';
$string['baduser'] = '제공된 이용자가 잘못 되었음';
$string['bonuspoints'] = '추가 점수';
$string['bulkcheckboxes'] = '일괄처리 체크박스';
$string['calculatedgrade'] = '산출된 등급';
$string['calculation'] = '계산';
$string['calculationadd'] = '계산 추가';
$string['calculationedit'] = '계산 수정';
$string['calculationsaved'] = '계산결과 저장됨';
$string['calculationview'] = '계산 보기';
$string['cannotaccessgroup'] = '선택한 모둠의 득점에 접근할 수 없음';
$string['categories'] = '범주들';
$string['categoriesanditems'] = '항목과 범주';
$string['categoriesedit'] = '항목 및 범주 편집';
$string['category'] = '범주';
$string['categoryedit'] = '범주 편집';
$string['categoryname'] = '범주명';
$string['categorytotal'] = '범주 합계';
$string['categorytotalfull'] = '$a->category 합계';
$string['changedefaults'] = '초기값 변경';
$string['changereportdefaults'] = '보고서 기본설정 변경';
$string['chooseaction'] = '활동 선택';
$string['choosecategory'] = '범주 선택';
$string['combo'] = '탭 및 펼침메뉴';
$string['compact'] = '간결한';
$string['configaggregationposition'] = '실점수를 참조한 채점자 보고서에서 총 합계 열의 위치';
$string['configaggregationview'] = '총 합계가 표시되는 방식: 실제 점수옆에 혹은 실제 성적 혹은 총합계 성적 중 한번에 한 형식만 테이블에 보이는 간결한 형식';
$string['configaveragesdecimalpoints'] = '성적의 열 아래, 각 평균(모둠 혹은 전체)에 표시될 소수점 자리수';
$string['configaveragesdisplaytype'] = '채점자 보고서에서 각 열의 평균을 보여주는 방법 지정. 상속이 선택되면, 기존의 각 열의 표시 형식으로 표시됩니다.';
$string['configcoursegradedisplaytype'] = '이 강좌에 대한 성적의 기본 표시형식을 선택하세요. 사이트 기본값을 선택할 수 있습니다. 성적은 실점수, 백분율(최소,최대성적을 참조하여), 문자성적(A,B,C등)으로 보여질 수 있습니다. 문자를 선택하면 교수자가 등급 문자 및 그 경계를 정의할 수 있습니다.';
$string['configdecimalpoints'] = '각 성적에 표시될 소수점 자리수. 채점 항목에 따라 변경될 수 있습니다.';
$string['configdisablegradehistory'] = '성적 관련 테이블에서 이력 추적을 비활성. 서버가 다소 빨라지며 데이터베이스 공간이 절약된다.';
$string['configenableajax'] = '채점자 보고서에 작동을 단순하고 신속하게 하는 AJAX 기능 레이어 추가. 사용자 브라우저에서 자바스크립트가 켜져 있어야 함.';
$string['configenableoutcomes'] = '학습성과(신뢰성, 목표, 기준 혹은 표준)를 지원한다는 것은 학습성과 지침에 따른 하나 이상의 척도에 의거하여 성적을 산출한다는 것이다. 학습성과를 활성화하면 그러한 특별한 성적 산출이 사이트 전반에 걸쳐 가능하게 된다.';
$string['configexportdecimalpoints'] = '내보내기에 표시할 소수점 자리수. 내보내기 도중 변경될 수 있다.';
$string['configfixedstudents'] = '성적표에서 학생난을 고정함으로서 수평으로 성적이 보이게 함';
$string['configgradeboundary'] = '(문자 등급 표시 형식을 사용하는 경우) 득점으로 등급 문자를 배정받게 되는 백분율 경계';
$string['configgradedisplaytype'] = '채점자나 학습자 성적표에 표시될 방법 지정. 성적은 실점수나 (최소 및 최대 성적을 참조한) 백분율 혹은 문자(A,B,C등)로 표시될 수 있다.';
$string['configgradeexportdisplaytype'] = '내보내기에서 성적은 실점수나 (최소 및 최대 성적을 참조한) 백분율 혹은 문자(A,B,C등)로 표시될 수 있다. 내보내기 도중 변경될 수 있다.';
$string['configgradehistorylifetime'] = '성적관련 테이블에서 변경 기록을 보존하고자 하는 시간을 명시한다. 가능한 길게 하는 것을 추천한다. 성능문제가 있다거나 데이터베이스 공간이 부족한 경우 작은 값을 사용하라.';
$string['configgradeitemadvanced'] = '성적항목을 편집할때 고급으로 표시되어야 만 할 모든 요소를 선택하라.';
$string['configgradeletter'] = '성적의 범위를 표시하는 데 사용하는 문자나 다른 기호';
$string['configgradeletterdefault'] = '등급 범위를 나타내는 문자나 기호. 기본 설정(현재 $a)을 사용하려면 빈칸으로 두시오.';
$string['configgradepublishing'] = '내보내기와 가져오기에서 공개 가능: 내보낸 성적은 무들 사이트에 접속하지 않고도 그 URL을 접속하여 접근할 수 있다. 성적은 그러한 URL에 접속하여 다시 가져올 수 있다.(다른 사이트에서 공개된 성적을 무들사이트로 되가져올 수 있음을 의미한다) 기본적으로 관리자만 이 기능을 사용할 수 있지만, 다른 사람에게 이 권한을 부여할 때는, 부여하기 전에 사용자에게 충분히 개인정보 유출에 따른 위험성을 교육시켜야 한다.(북마크 공유, 가속기 다운로드, IP제한 등의 위험)';
$string['confighiddenasdate'] = '이용자에게 성적이 공개되지 않을 때 \'-\'대신 제출일을 보여줌';
$string['confighideforcedsettings'] = '채점자 화면에서 강제 설정은 보여주지 않음';
$string['configincludescalesinaggregation'] = '전 강좌, 모든 성적기록부의 집계된 성적에서 척도를 숫자로 변환하여 포함시킬지의 여부를 정할 수 있다. 주의: 이 설정을 바꾸게 되면 모든 집계된 성적은 다시 계산 될 것이다.';
$string['configmeanselection'] = '열 평균에 어느 종류의 성적이 포함될지 선택. 점수가 없는 셀은 무시되거나 0(기본 설정)으로 간주될 수 있다.';
$string['configprofilereport'] = '이용자 개인 정보 페이지에 성적 보고서가 사용됨';
$string['configquickgrading'] = '일괄 채점은 한꺼번에 많은 점수를 편집할 수 있도록 채점자 보고서의 각 셀에 텍스트 입력난을 추가한다. 한번에 하나씩 저장하는 대신, 변경사항을 한꺼번에 저장하기 위해 갱신 버튼을 클릭할 수 있다.';
$string['configrangesdecimalpoints'] = '성적의 열 위에 각 범위에 대하여 표시될 소수점 자리수, 채점 항목에 따라 변경될 수 있다.';
$string['configrangesdisplaytype'] = '채점자 보고서에서 각 열의 범위를 보여주는 방법 명시. 기본값이란 각 열의 표시 형식을 그대로 사용하는 것이다.';
$string['configshowactivityicons'] = '성적표에서 점수 옆에 아이콘으로 활동 링크 보이기.';
$string['configshowaverages'] = '채점자 보고서에 열 평균 보이기';
$string['configshowcalculations'] = '각 성적 항목과 범주부근에 계산 아이콘, 계산된 항목위에 도구팁 및 열이 계산되었음을 나타내는 시각적 표시를 보여 줄 지 여부';
$string['configshoweyecons'] = '각 성적부근에 보기/숨김 아이콘(이용자에게 보이는 것 제어)을 보여 줄지 여부';
$string['configshowfeedback'] = '각 성적부근에 추가/편집을 위한 피드백 아이콘을 보여 줄지 여부';
$string['configshowgroups'] = '채점자 보고서에서 모둠 평균과 중간값을 보여주기';
$string['configshowhiddenitems'] = '이용자가 moodle/grade:viewhidden 권한을 가지고 있지 않을 때라도 보고서에 숨겨진 항목을 보여준다. 비공개 성적의 가시성은 이 설정에 영향받지 않는다.';
$string['configshowlocks'] = '각 성적 부근에 잠금/잠금해제 아이콘을 보여줄지 여부';
$string['configshownumberofgrades'] = '괄호로 각 성적의 옆에 집계될 성적의 수를 표시
예: 45(34)';
$string['configshowpercentage'] = '각 채점 항목의 백분율을 보여줄 것인가의 여부';
$string['configshowquickfeedback'] = '일괄 피드백은 한꺼번에 많은 촌평을 편집할 수 있도록 채점자 보고서의 각 셀에 문서 입력난을 추가한다. 한번에 하나씩 저장하는 대신, 변경사항을 한꺼번에 저장하기 위해 갱신 버튼을 클릭할 수 있다';
$string['configshowranges'] = '채점자 보고서에서 각 채점 항목에 대해 가능한 범위를 보여주는 행 표시';
$string['configshowrank'] = '각 항목에 대해 순위 보이기';
$string['configshowuseridnumber'] = '채점자 보고서에서 이용자의 식별 번호를 보여 줄지 여부';
$string['configshowuserimage'] = '채점자 보고서에서 이름 옆에 이용자의 개인정보 사진을 보여 줄지 여부';
$string['configstudentsperpage'] = '채점자 보고서 한 페이지에 나타낼 학생 수';
$string['configstudentsperpagedefault'] = '성적표에서 한 화면에 나타낼 학생의 수. 빈칸으로 두면 기본 설정( $a )을 사용.';
$string['configunlimitedgrades'] = '기본적으로 점수는 항목의 최소에서 최대점내로 국한된다. 만일 이 설정을 활성화시켜 이러한 제한을 풀게되면 성적표에서 직접 100%%이상의 득점을 허용하게 된다. 서버에 부하를 줄 수 있기 때문에, 모든 점수를 재계산할 때와 같이 서버가 바쁠 때를 피하여 이를 활성화하기를 권장한다.';
$string['contract'] = '계약 범주';
$string['controls'] = '제어';
$string['courseavg'] = '강좌 평균';
$string['coursegradecategory'] = '강좌 성적 범주';
$string['coursegradedisplaytype'] = '강좌 성적 표시 형식';
$string['coursegradedisplayupdated'] = '강좌의 성적 표시 형식이 갱신되었습니다.';
$string['coursename'] = '강좌 이름';
$string['coursescales'] = '강좌 척도';
$string['coursesettings'] = '강좌 설정';
$string['coursesettingsexplanation'] = '강좌의 모든 참여자에게 성적표를 어떻게 제시할지를 설정';
$string['coursetotal'] = '강좌 합계';
$string['createcategory'] = '범주 생성';
$string['createcategoryerror'] = '새 범주를 생성할 수 없음';
$string['creatinggradebooksettings'] = '성적표 설정';
$string['csv'] = 'CSV';
$string['currentparentaggregation'] = '현재의 상위 집계';
$string['curveto'] = '상대평가';
$string['decimalpoints'] = '전체적인 소수점 자리수';
$string['default'] = '기본';
$string['defaultprev'] = '기본 ($a)';
$string['deletecategory'] = '범주 삭제';
$string['disablegradehistory'] = '성적 기록 비활성';
$string['displaylettergrade'] = '문자 등급 표시';
$string['displaypercent'] = '퍼센트 표시';
$string['displaypoints'] = '점수 표시';
$string['displayweighted'] = '가중 점수 표시';
$string['dropdown'] = '펼침메뉴';
$string['droplow'] = '최하위 낙제';
$string['droplowhelp'] = '이를 설정해 놓으면 최하위 X를 기준으로 그 이하는 탈락시킨다.';
$string['dropped'] = '낙제';
$string['dropxlowest'] = '최하위 X 탈락';
$string['dropxlowestwarning'] = '알림 : 만약 최하 X 털어냄을 사용한다면 모든 범주안에 있는 성적 항목들은 같은 점수를 받을 것이다. 만일 점수가 다르게 나온다면 예측할수 없는 결과가 나올 수 있다.';
$string['duplicatescale'] = '척도 복제';
$string['edit'] = '편집';
$string['editcalculation'] = '계산 수정';
$string['editcalculationverbose'] = '$a->category$a->itemmodule $a->itemname 에 대해 계산 편집';
$string['editfeedback'] = '피드백 편집';
$string['editgrade'] = '성적 수정';
$string['editgradeletters'] = '등급 문자 수정';
$string['editoutcome'] = '학습성과 편집';
$string['editoutcomes'] = '학습성과 수정';
$string['editscale'] = '척도 편집';
$string['edittree'] = '범주 편집';
$string['editverbose'] = '$a->category$a->itemmodule $a->itemname 편집';
$string['enableajax'] = 'AJAX 활성화';
$string['enableoutcomes'] = '학습성과 활성화';
$string['encoding'] = '엔코딩';
$string['errorcalculationnoequal'] = '수식은 반드시 등호로 시작(=1+2)';
$string['errorcalculationunknown'] = '잘못된 수식';
$string['errorgradevaluenonnumeric'] = '높거나 낮은 점수에 대해 받아들여진 비수치';
$string['errornocalculationallowed'] = '이 항목에 대한 계산은 허용되지 않음';
$string['errornocategorisedid'] = '범주화되지 않은 id는 취할 수 없음!';
$string['errornocourse'] = '강좌 정보를 얻을 수 없음';
$string['errorreprintheadersnonnumeric'] = '해당 항목에 바르지 않은 값이 입력됨';
$string['errorsavegrade'] = '점수를 저장할 수 없음';
$string['errorupdatinggradecategoryaggregateonlygraded'] = '성적 범주 ID $a->id 의 \"채점된 항목만 집계\" 설정을 갱신하는 중 오류';
$string['errorupdatinggradecategoryaggregateoutcomes'] = '성적 범주 ID $a->id 의 \"학습성과 집계\" 설정을 갱신하는 중 오류';
$string['errorupdatinggradecategoryaggregatesubcats'] = '성적 범주 ID $a->id 의 \"하위 범주 집계\" 설정을 갱신하는 중 오류';
$string['errorupdatinggradecategoryaggregation'] = '성적 범주 ID $a->id 의 집계 유형을 갱신하는 중 오류';
$string['errorupdatinggradeitemaggregationcoef'] = '성적 범주 ID $a->id 의 집계 계수(가중치 혹은 부가점)를 갱신하는 중 오류';
$string['exceptions'] = '예외들';
$string['excluded'] = '제외';
$string['excludedhelp'] = '제외 항목에 체크를 해 놓으면, 이 점수는 집계과정에서 제외되게 된다.';
$string['expand'] = '범주 확장';
$string['export'] = '내보내기';
$string['exportalloutcomes'] = '모든 학습성과 내보내기';
$string['exportfeedback'] = '내보내기에 피드백을 포함';
$string['exportplugins'] = '플러그인 내보내기';
$string['exportsettings'] = '설정 내보내기';
$string['exportto'] = '내보낼 곳';
$string['extracredit'] = '별도 이수';
$string['extracreditwarning'] = '주의: 한 범주의 모든 항목에 대해 별도 이수로 설정하면, 이들에 대한 성적합계가 없기 때문에 아예 성적 계산에서 빼는게 바람직 하다.';
$string['feedback'] = '피드백';
$string['feedbackadd'] = '피드백 추가';
$string['feedbackedit'] = '피드백 수정';
$string['feedbackhelp'] = '교수자에 의해 점수와 함께 첨부되는 의견. 이러한 의견들은 예외적이고 개인적인 촌평이나 피드백의 내부과정에서 쓰일 수 있는 간단한 코드 등이 될 수 있다.';
$string['feedbacksaved'] = '피드백 저장됨';
$string['feedbackview'] = '피드백 보기';
$string['finalgrade'] = '최종 성적';
$string['finalgradehelp'] = '모든 계산과정을 마친 최종점수';
$string['fixedstudents'] = '학생난 고정';
$string['forceoff'] = '강제:꺼짐';
$string['forceon'] = '강제:켜짐';
$string['forelementtypes'] = '선택한 $a 의 유형';
$string['forstudents'] = '학생들';
$string['full'] = '전부';
$string['fullmode'] = '모두 보기';
$string['fullview'] = '모두 보기';
$string['generalsettings'] = '기본 설정';
$string['grade'] = '성적';
$string['gradebook'] = '성적표';
$string['gradebookhiddenerror'] = '현재 학생은 아무 것도 볼 수 없게 되있습니다.';
$string['gradebookhistories'] = '성적 누가기록';
$string['gradeboundary'] = '문자 등급 경계';
$string['gradecategories'] = '성적 범주';
$string['gradecategory'] = '성적 범주';
$string['gradecategoryhelp'] = '성적 범주 도움말';
$string['gradecategorysettings'] = '범주 설정';
$string['gradedisplay'] = '성적 표시';
$string['gradedisplaytype'] = '성적 표시 형식';
$string['gradedon'] = '채점된 $a';
$string['gradeexceptions'] = '등급 제외';
$string['gradeexceptionshelp'] = '등급 제외 도움말';
$string['gradeexportdecimalpoints'] = '내보내기 소수점 자리수';
$string['gradeexportdisplaytype'] = '성적 내보내기 표시 형식';
$string['gradeforstudent'] = '$a->student<br />$a->item $a->feedback';
$string['gradehelp'] = '성적 도움말';
$string['gradehistorylifetime'] = '누가기록 보유시한';
$string['gradeitem'] = '성적 항목';
$string['gradeitemaddusers'] = '채점에서 제외';
$string['gradeitemadvanced'] = '상세 성적 항목 옵션';
$string['gradeitemislocked'] = '이 활동은 성적표에서 잠겨 있다. 이 활동에 의해 바뀐 성적들은 잠금이 해제되기 전까지는 성적표에 반영되지 않을 것이다.';
$string['gradeitemlocked'] = '성적 잠김';
$string['gradeitemmembersselected'] = '성적계산에서 제외됨';
$string['gradeitemnonmembers'] = '성적계산에 포함됨';
$string['gradeitemremovemembers'] = '성적계산에 포함';
$string['gradeitems'] = '성적 항목들';
$string['gradeitemsettings'] = '항목 설정';
$string['gradeitemsinc'] = '포함될 성적 항목들';
$string['gradeletter'] = '문자 등급';
$string['gradeletterhelp'] = '문자 등급 도움말';
$string['gradeletternote'] = '문자 등급을 삭제하려면  <br /> 세가지 텍스트 박스중에 하나를 삭제하고 클릭하시오.';
$string['gradeletters'] = '문자 성적';
$string['gradelocked'] = '성적 잠김';
$string['gradelong'] = '$a->grade / $a->max';
$string['grademax'] = '최고 점수';
$string['grademaxhelp'] = '본 점수 항목의 최대 허용 점수. 활동 항목의 최대 점수는 활동 화면에서 설정';
$string['grademin'] = '최저 점수';
$string['grademinhelp'] = '본 점수 항목의 허용 최저 점수';
$string['gradeoutcomeitem'] = '학습성과 항목';
$string['gradeoutcomes'] = '학습성과';
$string['gradeoutcomescourses'] = '강좌 학습성과';
$string['gradepass'] = '통과 점수';
$string['gradepasshelp'] = '항목을 통과하기 위한 최하점을 설정';
$string['gradepreferences'] = '맞춤 등급';
$string['gradepreferenceshelp'] = '맞춤 등급 도움말';
$string['gradepublishing'] = '성적 공개 가능';
$string['graderreport'] = '채점자 보고서';
$string['grades'] = '성적들';
$string['gradesonly'] = '성적만';
$string['gradessettings'] = '등급 설정';
$string['gradetype'] = '등급 유형';
$string['gradetypehelp'] = '이 항목은 없음, 점수, 척도 그리고 문서 등 네 개의 등급 형태를 쓸 수 있다. 점수와 척도 유형은 서로 통합될 수 있다.';
$string['gradeview'] = '성적 보기';
$string['gradeweighthelp'] = '성적 가중치 도움말';
$string['groupavg'] = '모둠의 평균';
$string['hidden'] = '비공개';
$string['hiddenasdate'] = '성적 대신 제출일 제시';
$string['hiddenuntil'] = '비공개 시한';
$string['hiddenuntildate'] = '$a 까지 비공개';
$string['hideadvanced'] = '상세 기능 숨김';
$string['hideaverages'] = '평균 비공개';
$string['hidecalculations'] = '계산방법 숨김';
$string['hidecategory'] = '범주 비공개';
$string['hideeyecons'] = '보기/숨기기 아이콘 숨김';
$string['hidefeedback'] = '의견 비공개';
$string['hideforcedsettings'] = '강제 설정 숨기기';
$string['hidegroups'] = '모둠 비공개';
$string['hidelocks'] = '잠금 비공개';
$string['hidenooutcomes'] = '학습성과 공개';
$string['hidequickfeedback'] = '일괄 피드백 숨김';
$string['hideranges'] = '범위 숨김';
$string['hideverbose'] = '$a->category$a->itemmodule $a->itemname 숨기기';
$string['highgradeascending'] = '오름차순 정렬';
$string['highgradedescending'] = '내림차순 정렬';
$string['highgradeletter'] = '높음';
$string['identifier'] = '이용자 확인 방법';
$string['idnumberhelp'] = '모듈에 의해 인식되는 임의의 고유 식별번호(반드시 정의되어 있고 고유해야 함)';
$string['idnumbers'] = '식별 번호';
$string['import'] = '가져오기';
$string['importcsv'] = 'CSV 가져오기';
$string['importcustom'] = '(이강좌로) 맞춤 학습성과 가져오기';
$string['importerror'] = '오류 발생, 바른 파라메터가 아닙니다.';
$string['importfailed'] = '가져오기 실패';
$string['importfeedback'] = '피드백 가져오기';
$string['importfile'] = '파일 가져오기';
$string['importfilemissing'] = '파일 받기 실패, 다시 가서 제대로 된 파일을 올리세요.';
$string['importfrom'] = '가져올 곳';
$string['importoutcomenofile'] = '올려진 파일이 깨졌거나 내용이 없습니다. 유효한 파일인지를 확인하기 바랍니다. 문제는 $a 째 줄에서 발생했으며, 이는 가져온 파일에 기대한 헤더가 존재하지 않았거나, 자료 라인에 (해더 라인인) 첫번째 줄에 나타난 칼럼수 만큼의 필드가 존재하지 않아서 벌어진 것일 수 있습니다. 연습삼아 내보낸 파일에 유효한 헤더가 존재하는지 살펴보라.';
$string['importoutcomes'] = '학습성과 가져오기';
$string['importoutcomesuccess'] = '식별번호 $a->id \"$a->name\" 학습성과 가져옴';
$string['importplugins'] = '플러그인 가져오기';
$string['importpreview'] = '미리보기 가져오기';
$string['importsettings'] = '설정 가져오기';
$string['importskippednomanagescale'] = '새 척도를 추가할 수 있는 권한이 없으므로, 요구된 학습성과 \"$a\"는 추가되지 못했습니다.';
$string['importskippedoutcome'] = '단축명 \"$a\" 학습성과는 이 영역에 이미 존재하므로 가져오기를 생략함';
$string['importstandard'] = '표준 학습성과로 가져오기';
$string['importsuccess'] = '성적 가져오기 성공';
$string['importxml'] = 'XML 가져오기';
$string['includescalesinaggregation'] = '집계에 척도 포함';
$string['incorrectcourseid'] = '교과 아이디가 틀렸습니다.';
$string['incorrectcustomscale'] = '(바르지 않은 맞춤 척도, 변경바람)';
$string['incorrectminmax'] = '최소값은 최대값보다 작아야만 함';
$string['inherit'] = '상속';
$string['intersectioninfo'] = '학생/득점';
$string['item'] = '항목';
$string['iteminfo'] = '항목 정보';
$string['iteminfohelp'] = '이 항목에 대한 정보 및 안내';
$string['itemname'] = '항목 이름';
$string['itemnamehelp'] = '이 항목에 대한 명칭으로 모듈에 의해 처리됨';
$string['items'] = '항목들';
$string['itemsedit'] = '성적 항목 편집';
$string['keephigh'] = '최고 점수 보관';
$string['keephighhelp'] = '이 항목에서 숫자가 선택되면 숫자만큼의 최고 점수를 저장해 놓는다.';
$string['keymanager'] = '키 관리자';
$string['lessthanmin'] = '$a->itemname 에 대하여 $a->username 에게 입력된 성적은 허용된 최소값보다 작습니다.';
$string['letter'] = '문자';
$string['lettergrade'] = '문자 등급';
$string['lettergradenonnumber'] = '비수치 성적의 높고 낮음';
$string['letterpercentage'] = '문자등급(백분률)';
$string['letterreal'] = '문자등급(실점수)';
$string['letters'] = '문자 등급';
$string['linkedactivity'] = '연결된 활동';
$string['linkedactivityhelp'] = '이 학습성과 항목과 관련된 선택 활동';
$string['linktoactivity'] = '$a->name 활동으로 연결';
$string['lock'] = '잠금';
$string['locked'] = '잠금';
$string['locktime'] = '잠금 시작';
$string['locktimedate'] = '$a 이후 잠김';
$string['lockverbose'] = '$a->category$a->itemmodule $a->itemname 잠금';
$string['lowest'] = '최저의';
$string['lowgradeletter'] = '낮음';
$string['manualitem'] = '수동처리 항목';
$string['mapfrom'] = '매핑소스';
$string['mappings'] = '성적 항목 매핑';
$string['mapto'] = '다음에 매핑';
$string['max'] = '최고의';
$string['maxgrade'] = '최고 점수';
$string['meanall'] = '모든 성적';
$string['meangraded'] = '비어있지 않은 성적';
$string['meanselection'] = '평균 산출을 위한 성적들';
$string['median'] = '중간값';
$string['min'] = '최저';
$string['missingscale'] = '척도가 선택되어야 합니다.';
$string['mode'] = '모드';
$string['morethanmax'] = '$a->itemname 에 대하여 $a->username 에게 입력된 성적은 최대 허용치보다 큽니다.';
$string['moveselectedto'] = '다음으로 선택항목 옮김 :';
$string['movingelement'] = '$a 이동';
$string['multfactor'] = '가중치';
$string['multfactorhelp'] = '전체 항목에 대해 이 항목이 차지하는 비중';
$string['mypreferences'] = '개인 설정';
$string['myreportpreferences'] = '내 보고서 설정';
$string['navmethod'] = '진행표시 방법';
$string['neverdeletehistory'] = '이력을 삭제하지 마시오';
$string['newcategory'] = '새 범주';
$string['newitem'] = '새 점수 항목';
$string['newoutcomeitem'] = '새 학습성과 항목';
$string['newuserkey'] = '새 사용자 키';
$string['no'] = '아니오';
$string['nocategories'] = '성적 범주는 이 교육과정에서 추가되거나 보여지지 않습니다.';
$string['nocategoryname'] = '범주명이 없음';
$string['nocategoryview'] = '보여지는 항목이 없습니다.';
$string['nocourses'] = '아직 강좌가 없습니다.';
$string['noforce'] = '강요하지 않음';
$string['nogradeletters'] = '등급 문자가 설정되지 않았습니다.';
$string['nogradesreturned'] = '성적이 돌아오지 않습니다.';
$string['noidnumber'] = '식별 번호 없음';
$string['nolettergrade'] = '문자 등급이 없습니다.';
$string['nomode'] = '지원되지 않습니다.';
$string['nonnumericweight'] = '비수치의 값을 받습니다.';
$string['nonunlockableverbose'] = '$a->itemname 가 해제되기 전까지는 이 성적은 잠금 해제될 수 없음';
$string['nonweightedpct'] = '가중치 퍼센트가 없습니다.';
$string['nooutcome'] = '학습성과 없음';
$string['nooutcomes'] = '학습성과의 항목은 강좌와 연결되어야만 하는데, 본 강좌에는 어떤 학습성과도 없습니다. 학습성과를 추가하시겠습니까?';
$string['nopublish'] = '비공개';
$string['norolesdefined'] = '사이트관리->꾸미기->채점자의 역할이 정의되지 않음';
$string['noscales'] = '학습성과는 반드시 강좌 혹은 전체의 척도와 연결되어야만 하는데, 현재 아무런 척도도 없습니다. 척도를 추가하시겠습니까?';
$string['noselectedcategories'] = '범주가 선택되지 않았음';
$string['noselecteditems'] = '항목이 지정되지 않았음';
$string['notteachererror'] = '교수자라야 이 기능을 사용할 수 있습니다.';
$string['nousersloaded'] = '어떤 사용자도 탑재되지 않음';
$string['numberofgrades'] = '등급의 수';
$string['onascaleof'] = '$a->grademin 에서 $a->grademax 까지 척도에서';
$string['operations'] = '동작';
$string['options'] = '선택사항';
$string['outcome'] = '학습성과';
$string['outcomeassigntocourse'] = '본 강좌에 또 다른 학습성과 부여';
$string['outcomecategory'] = '범주내 학습성과 생성';
$string['outcomecategorynew'] = '새 범주';
$string['outcomeconfirmdelete'] = '정말 \"$a\" 학습성과를 삭제하겠습니까?';
$string['outcomecreate'] = '새 학습성과 추가';
$string['outcomedelete'] = '학습성과 삭제';
$string['outcomeidhelp'] = '성적 항목을 나타내는 학습성과';
$string['outcomeitem'] = '학습성과 항목';
$string['outcomeitemsedit'] = '학습성과 항목 수정';
$string['outcomename'] = '학습성과 명칭';
$string['outcomereport'] = '학습성과 보고서';
$string['outcomes'] = '학습성과';
$string['outcomescourse'] = '강좌 학습성과';
$string['outcomescoursecustom'] = '맞춤 학습성과(제거할 수 없음)';
$string['outcomescoursenotused'] = '표준 사용 안함';
$string['outcomescourseused'] = '표준 학습성과(제거할 수 없음)';
$string['outcomescustom'] = '맞춤 학습성과';
$string['outcomesstandard'] = '표준 학습성과';
$string['outcomesstandardavailable'] = '표준 학습성과 사용 가능';
$string['outcomestandard'] = '표준 학습성과';
$string['outcomestandardhelp'] = '모든 강좌에 대해 사이트 전체에 걸쳐 공용으로 쓸 수 있는 표준 학습성과';
$string['overallaverage'] = '전체 평균';
$string['overridden'] = '수정금지';
$string['overriddenhelp'] = '이 기능을 켜면, 추후 자동적으로 점수를 조정하려는 모든 시도를 차단합니다. 이 수정금지 표식은 대개 성적표에 의해 내부적으로 설정되기도 하지만, 여기 나타난 기능을 이용하여 수동으로 끄거나 켤 수 있습니다.';
$string['overriddennotice'] = '이 활동에 대한 최종 성적처리가 수동으로 조정되었습니다.';
$string['overridesitedefaultgradedisplaytype'] = '사이트 기본값 재설정';
$string['overridesitedefaultgradedisplaytypehelp'] = '채점표에서 성적표시를 위한 사이트 기본을 재설정하기 위해서는 이 체크박스를 표시하라. 이것은 문자성적과 그 경계를 마음대로 재정의 할 수 있도록 양식요소를 활성화 한다.';
$string['parentcategory'] = '상위 범주';
$string['pctoftotalgrade'] = '총 성적의 퍼센트';
$string['percent'] = '퍼센트';
$string['percentage'] = '백분율';
$string['percentageletter'] = '백분률(문자등급)';
$string['percentagereal'] = '백분률(실점수)';
$string['percentascending'] = '백분률로 오름차순 정렬';
$string['percentdescending'] = '백분률로 내림차순 정렬';
$string['percentshort'] = '%%';
$string['plusfactor'] = '추가점';
$string['plusfactorhelp'] = '모든 가중치가 적용된 후, 이 항목의 모든 점수에 부가할 점수';
$string['points'] = '점수';
$string['pointsascending'] = '점수로 오름차순 정렬';
$string['pointsdescending'] = '점수로 내림차순 정렬';
$string['positionfirst'] = '처음';
$string['positionlast'] = '마지막';
$string['preferences'] = '선택';
$string['prefgeneral'] = '일반';
$string['prefletters'] = '등급 문자와 그 범위';
$string['prefrows'] = '특별 행';
$string['prefshow'] = '보이기/감추기';
$string['previewrows'] = '열 미리보기';
$string['profilereport'] = '개인성적 보고';
$string['publishing'] = '공개';
$string['quickfeedback'] = '일괄 피드백';
$string['quickgrading'] = '일괄 채점';
$string['range'] = '범위';
$string['rangesdecimalpoints'] = '범위의 소수점';
$string['rangesdisplaytype'] = '범위 표시 형식';
$string['rank'] = '등위';
$string['rawpct'] = '원 %%';
$string['real'] = '실점수';
$string['realletter'] = '실점수(문자등급)';
$string['realpercentage'] = '실점수(백분률)';
$string['regradeanyway'] = '무조건 재채점';
$string['removeallcoursegrades'] = '모든 성적 삭제';
$string['removeallcourseitems'] = '모든 항목 및 범주 삭제';
$string['report'] = '보고서';
$string['reportdefault'] = '보고서 기본 설정($a)';
$string['reportplugins'] = '보고서 플러그인';
$string['reportsettings'] = '출력 설정';
$string['reprintheaders'] = '표제';
$string['respectingcurrentdata'] = '현재의 설정을 고치지 않고 그대로 둠';
$string['rowpreviewnum'] = '행으로 미리보기';
$string['savechanges'] = '바뀐 내용 저장';
$string['savepreferences'] = '선택 저장';
$string['scaledpct'] = '범위 퍼센트';
$string['scaleidhelp'] = '이 $a 에 연결된 척도';
$string['scalestandardhelp'] = '표준 척도는 사이트 전반에 걸쳐 어느 강좌에서도 사용 가능한 척도이다.';
$string['seeallcoursegrades'] = '모든 강좌 성적 보기';
$string['selectalloroneuser'] = '한 사람 혹은 모두 선택';
$string['selectauser'] = '사용자 선택';
$string['selectdestination'] = '$a 가 이동할 곳 선택';
$string['separator'] = '구분선';
$string['sepcomma'] = '콤마';
$string['septab'] = '탭';
$string['setcategories'] = '범주 설정';
$string['setcategorieserror'] = '가중치를 주기 전, 반드시 교육과정의 범주를 설정해야 합니다.';
$string['setgradeletters'] = '등급 문자 설정';
$string['setpreferences'] = '맞춤 설정';
$string['setting'] = '설정';
$string['settings'] = '설정들';
$string['setweights'] = '가중치 설정';
$string['showactivityicons'] = '활동 아이콘 보이기';
$string['showallhidden'] = '모두 숨김';
$string['showallstudents'] = '모든 학생 보이기';
$string['showaverages'] = '열 평균 보이기';
$string['showcalculations'] = '계산 보이기';
$string['showeyecons'] = '보기/숨김 아이콘 보이기';
$string['showfeedback'] = '의견 보이기';
$string['showgroups'] = '모둠 보이기';
$string['showhiddenitems'] = '숨겨진 항목 보기';
$string['showhiddenuntilonly'] = '다음까지 숨김';
$string['showlocks'] = '잠금 보이기';
$string['shownohidden'] = '숨김 없음';
$string['shownooutcomes'] = '학습성과 비공개';
$string['shownumberofgrades'] = '돗수 보이기';
$string['showpercentage'] = '백분율 보이기';
$string['showquickfeedback'] = '일괄 피드백 보이기';
$string['showranges'] = '범위 보이기';
$string['showrank'] = '순위 보이기';
$string['showuseridnumber'] = '식별번호 보이기';
$string['showuserimage'] = '개인사진 보이기';
$string['showverbose'] = '$a->category$a->itemmodule $a->itemname 보이기';
$string['simpleview'] = '간단히 보기';
$string['sitewide'] = '전 사이트';
$string['sort'] = '정렬';
$string['sortasc'] = '오름차순으로 정렬';
$string['sortbyfirstname'] = '성으로 정렬';
$string['sortbylastname'] = '이름으로 정렬';
$string['sortdesc'] = '내림차순으로 정렬';
$string['standarddeviation'] = '표준 편차';
$string['stats'] = '통계치';
$string['statslink'] = '통계';
$string['student'] = '학생';
$string['studentsperpage'] = '페이지당 학생수';
$string['subcategory'] = '하위 범주';
$string['submissions'] = '제출물들';
$string['submittedon'] = '제출됨: $a';
$string['switchtofullview'] = '모두 보기로 전환';
$string['switchtosimpleview'] = '간딘히 보기로 전환';
$string['synclegacygrades'] = '기준 성적과 동기화';
$string['tabs'] = '탭';
$string['topcategory'] = '상위 범주';
$string['total'] = '종합';
$string['totalweight100'] = '가중치의 합이 100입니다.';
$string['totalweightnot100'] = '가중치의 합이 100이 아닙니다.';
$string['turnfeedbackoff'] = '피드백 끄기';
$string['turnfeedbackon'] = '피드백 켜기';
$string['typenone'] = '없음';
$string['typescale'] = '척도';
$string['typetext'] = '텍스트';
$string['typevalue'] = '값';
$string['uncategorised'] = '범주 없음';
$string['unchangedgrade'] = '성적이 변경되지 않음';
$string['unenrolledusersinimport'] = '가져온 성적 중 다음 사용자의 것은 아직 이 강좌에 등록되지 않은 사용자의 것임: $a';
$string['unlimitedgrades'] = '점수제한 해제';
$string['unlock'] = '잠금해제';
$string['unlockverbose'] = '$a->category$a->itemmodule $a->itemname 잠금 해제';
$string['unused'] = '사용안됨';
$string['updatedgradesonly'] = '새 성적이나 갱신된 성적만 내보내기';
$string['uploadgrades'] = '성적 업로드';
$string['useadvanced'] = '상세 기능 사용';
$string['usedcourses'] = '사용된 강좌';
$string['usedgradeitem'] = '사용된 성적 항목';
$string['usenooutcome'] = '학습성과 사용하지 않음';
$string['usenoscale'] = '척도 사용하지 않음';
$string['usepercent'] = '퍼센트 사용';
$string['user'] = '이용자';
$string['usergrade'] = '$a->gradeidnumber 항목의 사용자 $a->fullname ($a->useridnumber)';
$string['userkeyhelp'] = '무들에 로그인 하지 않고 이 내보내기 플러그인에 의해 공개될 데이타에 대한 접근성을 이용자에게 주는 저장된 키를 선택하세요. 이 양식을 제출할때 새 키를 만들려면 \'새 사용자 키\'를 선택하세요.';
$string['userpreferences'] = '이용자 선택사항';
$string['useweighted'] = '가중치 사용';
$string['verbosescales'] = 'Verbose 척도';
$string['viewbygroup'] = '모둠';
$string['viewgrades'] = '성적 보기';
$string['warningexcludedsum'] = '경고: 점수를 제외시키는 것은 집계 전략에 맞지 않음';
$string['weight'] = '가중치';
$string['weightcourse'] = '강좌에 대한 가중된 성적 사용';
$string['weightedascending'] = '가중된 백분률로 오름차순 정렬';
$string['weighteddescending'] = '가중된 백분률로 내림차순 정렬';
$string['weightedpct'] = '가중된 백분룔';
$string['weightedpctcontribution'] = '가중된 백분률의 기여도';
$string['weightorextracredit'] = '가중치 혹은 부가점';
$string['weights'] = '가중치';
$string['weightsedit'] = '가중치 및 부가점 수정';
$string['weightuc'] = '가중치';
$string['writinggradebookinfo'] = '성적표 쓰기 설정';
$string['xml'] = 'XML형식';
$string['yes'] = '예';
$string['yourgrade'] = '당신의 성적';
$string['configbulkcheckboxes'] = '일괄 채점 동작을 위한 각 성적 부근의 체크박스들'; // ORPHANED
$string['configquickfeedback'] = '일괄 피드백은 한꺼번에 많은 피드백을 편집할 수 있도록 채점자 보고서의 각 셀에 텍스트 입력난을 추가한다. 한번에 하나씩 저장하는 대신, 변경사항을 한꺼번에 저장하기 위해 갱신 버튼을 클릭할 수 있다.'; // ORPHANED
$string['errornocategorizedid'] = '범주화 되지않은 아이디는 취할 수 없음'; // ORPHANED
$string['exportselectedoutcomes'] = '선택된 학습성과 내보냄'; // ORPHANED
$string['overallavg'] = '전체 평균'; // ORPHANED
$string['aggregationcoefhelp'] = '총계 산출시에 사용될 본 점수 항목의 가중치'; // ORPHANED
$string['changesitedefaults'] = '기본 사항 변경'; // ORPHANED
$string['exportletters'] = '등급문자로 내보내기'; // ORPHANED
$string['exportlettershelp'] = '점수대신 등급을 표시하는 문자로 된 성적 항목에 대하여, 실제 점수대신 등급에 해당하는 문자로 내보내게 된다.'; // ORPHANED
$string['left'] = '왼쪽'; // ORPHANED
$string['right'] = '오른쪽'; // ORPHANED
$string['sitedefault'] = '사이트 기본($a)'; // ORPHANED
$string['aggregateextracreditmeanall'] = '모든 점수의 평균(별도 이수)'; // ORPHANED
$string['aggregateextracreditmeangraded'] = '비어있지 않은 점수의 평균(별도 이수)'; // ORPHANED
$string['aggregatemaxall'] = '모든 점수의 최고점'; // ORPHANED
$string['aggregatemaxgraded'] = '비어있지 않은 점수의 최고점'; // ORPHANED
$string['aggregatemeanall'] = '모든 점수의 평균'; // ORPHANED
$string['aggregatemeangraded'] = '비어있지 않은 점수의 평균'; // ORPHANED
$string['aggregatemedianall'] = '모든 점수의 중간값'; // ORPHANED
$string['aggregatemediangraded'] = '비어있지 않은 점수의 중간값'; // ORPHANED
$string['aggregateminall'] = '모든 점수의 최하점'; // ORPHANED
$string['aggregatemingraded'] = '비어있지 않은 점수의 최하점'; // ORPHANED
$string['aggregatemodeall'] = '모든 점수 중 비어있지 않은 점수의 최빈값'; // ORPHANED
$string['aggregatemodegraded'] = '비어있지 않은 점수의 최빈값'; // ORPHANED
$string['aggregateweightedmeanall'] = '모든 점수의 가중평균'; // ORPHANED
$string['aggregateweightedmeangraded'] = '비어있지 않은 점수의 가중평균'; // ORPHANED
$string['exportods'] = 'ODS 내보내기'; // ORPHANED
$string['exporttxt'] = 'TXT 내보내기'; // ORPHANED
$string['exportxml'] = 'XML 내보내기'; // ORPHANED
$string['gradereports'] = '성적 보고서'; // ORPHANED
$string['selectplugin'] = '플러그인 선택'; // ORPHANED
$string['userreport'] = '사용자 성적 보고서'; // ORPHANED

?>