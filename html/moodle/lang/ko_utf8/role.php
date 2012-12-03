<?PHP // $Id: role.php,v 1.55 2009/04/15 09:35:49 yogibear270 Exp $ 
      // role.php - created with Moodle 2.0 dev (Build: 20090415) (2009040601)


$string['addinganewrole'] = '역할 추가하기';
$string['addingrolebycopying'] = '$a 를 기반으로 새 역할 추가하기';
$string['addrole'] = '역할 추가';
$string['allow'] = '허용';
$string['allowassign'] = '역할 부여 허용';
$string['allowed'] = '허용됨';
$string['allowoverride'] = '권한 재설정권';
$string['allowroletoassign'] = '$a->fromrole 역할을 지닌 사용자에게 $a->targetrole 역할 부여 허용';
$string['allowroletooverride'] = '$a->fromrole 역할을 지닌 사용자에게 $a->targetrole 역할 재설정 허용';
$string['allowroletoswitch'] = '$a->fromrole 역할을 지닌 사용자에게 $a->targetrole 역할 교환 허용';
$string['allowswitch'] = '역활 교환 허용';
$string['allsiteusers'] = '사이트의 모든 사용자';
$string['assignanotherrole'] = '다른 역할 부여';
$string['assignerror'] = '사용자 $a->user 에게  $a->role 역할을 부여하던 중 오류';
$string['assignglobalroles'] = '총괄 역할';
$string['assignmentcontext'] = '부여 영역';
$string['assignmentoptions'] = '부여 조건';
$string['assignrolenameincontext'] = '$a->context 에서 \'$a->role\' 역할 부여';
$string['assignroles'] = '역할 부여';
$string['assignrolesin'] = '$a 에서 역할 부여';
$string['assignrolesrelativetothisuser'] = '이 사용자와 관련된 역할 부여';
$string['backtoallroles'] = '역할 목록으로 되돌아 가기';
$string['block:view'] = '블럭 보기';
$string['blog:create'] = '블로그 항목 생성';
$string['blog:manageentries'] = '입력내용 관리';
$string['blog:manageofficialtags'] = '태그 관리';
$string['blog:managepersonaltags'] = '개인태그 관리';
$string['blog:view'] = '블로그 보기';
$string['calendar:manageentries'] = '일정 관리';
$string['calendar:managegroupentries'] = '모둠일정 관리';
$string['calendar:manageownentries'] = '개인 일정 관리';
$string['capabilities'] = '권한';
$string['capability'] = '권한';
$string['category:create'] = '범주 만들기';
$string['category:delete'] = '범주 삭제';
$string['category:manage'] = '범주 관리';
$string['category:update'] = '범주 갱신';
$string['category:viewhiddencategories'] = '비공개 범주 보기';
$string['category:visibility'] = '비공개 범주 보기';
$string['checkglobalpermissions'] = '시스템 권한 점검';
$string['checkpermissions'] = '권한 점검';
$string['checkpermissionsin'] = '$a 의 권한 점검';
$string['checksystempermissionsfor'] = '$a->fullname 에 대한 총괄역활 점검';
$string['checkuserspermissionshere'] = '$a->contextlevel 영역에서 $a->fullname 가 지닌 권한 점검';
$string['chooseroletoassign'] = '부여할 역할을 선택';
$string['context'] = '영역';
$string['course:activityvisibility'] = '활동 공개/비공개';
$string['course:bulkmessaging'] = '여러 사람에게 메시지 발송';
$string['course:changefullname'] = '강좌명 변경';
$string['course:changeidnumber'] = '강좌 식별번호 변경';
$string['course:changeshortname'] = '강좌 단축명 변경';
$string['course:create'] = '강좌 생성';
$string['course:delete'] = '강좌 삭제';
$string['course:manageactivities'] = '활동 관리';
$string['course:managefiles'] = '파일 관리';
$string['course:managegrades'] = '성적 관리';
$string['course:managegroups'] = '모둠 관리';
$string['course:managemetacourse'] = '메타코스 관리';
$string['course:managescales'] = '척도 관리';
$string['course:request'] = '강좌 개설 요청';
$string['course:reset'] = '강좌 초기화';
$string['course:sectionvisibility'] = '영역 보기 조정';
$string['course:setcurrentsection'] = '현재 영역 설정';
$string['course:update'] = '강좌 설정 갱신';
$string['course:useremail'] = '이메일 활성화';
$string['course:view'] = '강좌 보기';
$string['course:viewcoursegrades'] = '강좌 성적 보기';
$string['course:viewhiddenactivities'] = '비공개 활동 보기';
$string['course:viewhiddencourses'] = '비공개 강좌 보기';
$string['course:viewhiddensections'] = '비공개 영역 보기';
$string['course:viewhiddenuserfields'] = '비공개 사용자항목 보기';
$string['course:viewparticipants'] = '참여자 보기';
$string['course:viewscales'] = '척도 보기';
$string['course:visibility'] = '강좌 공개/비공개';
$string['createhiddenassign'] = '비공개 역할 생성';
$string['createrolebycopying'] = '$a 를 복사하여 새 역할 생성';
$string['createthisrole'] = '역할 생성';
$string['currentcontext'] = '현재의 영역';
$string['currentrole'] = '현재 역할';
$string['defaultrole'] = '기본 역할';
$string['defaultx'] = '기본: $a';
$string['defineroles'] = '역할 정의';
$string['deletecourseoverrides'] = '강좌내 모든 재설정된 역할 삭제';
$string['deletelocalroles'] = '영역에서 부여한 모든 역할 삭제';
$string['deleterolesure'] = '<p>\"$a->name ($a->shortname)\"의 역할을 삭제하는 것이 확실합니까?</p><p>현재 이 역할을 담당하고 있는 사람은 $a->count 명 입니다.</p>';
$string['deletexrole'] = '$a 역할 삭제';
$string['duplicaterole'] = '역할 복제';
$string['duplicaterolesure'] = '정말 \"$a->name ($a->shortname)\" 역할을 복제하겠습니까?</p>';
$string['editingrolex'] = '$a 역할 수정하기';
$string['editrole'] = '역할 편집';
$string['editxrole'] = '$a 역할 수정';
$string['enrolmentoptions'] = '등록 조건';
$string['errorbadrolename'] = '잘못된 역할명';
$string['errorbadroleshortname'] = '잘못된 단축역할명';
$string['errorexistsrolename'] = '이미 역할명이 존재함';
$string['errorexistsroleshortname'] = '이미 단축역할명이 존재함';
$string['existingusers'] = '$a 기존 사용자';
$string['explainpermission'] = '권한 설명';
$string['explainpermissionsdoanything'] = '이 사용자가 moodle/site:doanything 권한을 가지고 있기 때문에 위의 표에서 has_capability 값이 false라도 이 사용자는 실제 거의 모든 상황에서 $a 권한을 가졌다고 간주될 것임을 유념하라.';
$string['explainpermissionsinfo'] = '<p>표 사용법</p><ol><li>우선 어떠한 금지가 있는지를 찾는다. 만일 금지가 있다면, has_capability 는 false를 회신할 것이다.</li><li>그렇지 않다면, 왼쪽에서 오른쪽 그리고 위에서 아래로 읽어가면서 금지 및 허용의 수가 있는 첫 칸을 찾는다. 만일 그 칸에 금지보다 허용의 수가 많다면 has_capability는 true를 회신할 것이며 그렇지 않다면 false를 회신할 것이다.</li><li>만일 금지와 허용의 수가 동일하다면 has_capability는 false 값을 회신할 것이다.</li></ol>';
$string['explanation'] = '설명';
$string['extusers'] = '기존 사용자들';
$string['extusersmatching'] = '\'$a\' 와 일치하는 기존 사용자';
$string['filter:manage'] = '필터설정 관리';
$string['globalrole'] = '총괄 역할';
$string['globalroleswarning'] = '경고! 이 화면에서 사용자에게 부여한 역할은 초기화면에서 뿐만 아니라 이 사이트 전체의 강좌에 적용됩니다.';
$string['gotoassignroles'] = '$a->contextlevel 영역 역할 부여 화면으로 가기';
$string['gotoassignsystemroles'] = '총괄역활 부여 화면으로 가기';
$string['grade:edit'] = '성적 편집';
$string['grade:export'] = '성적 내보냄';
$string['grade:hide'] = '성적 숨김';
$string['grade:import'] = '성적 가져옴';
$string['grade:lock'] = '성적 잠금';
$string['grade:manage'] = '성적 항목 관리';
$string['grade:manageletters'] = '문자 성적 관리';
$string['grade:manageoutcomes'] = '문자 학습성과 관리';
$string['grade:override'] = '성적 대체';
$string['grade:unlock'] = '성적 혹은 항목 잠금해제';
$string['grade:view'] = '내 성적 보기';
$string['grade:viewall'] = '다른 사람 성적 보기';
$string['grade:viewhidden'] = '숨겨진 성적 보기';
$string['hidden'] = '비공개';
$string['highlightedcellsshowdefault'] = '아래 표의 강조된 칸은 \'정규 역할 유형\'에 기반한 표준 권한을 보여줍니다.';
$string['highlightedcellsshowinherit'] = '아래 표의 강조된 칸은 상속될 수 있는 권한을 보여줍니다. 실제 변경하고자 하는 권한과는 별개로, 모든 것을 상속가능하게 두어야 합니다.';
$string['inactiveformorethan'] = '$a->timeperiod 이상 비활동';
$string['ingroup'] = '모둠 \"$a->group\" 속';
$string['inherit'] = '따름';
$string['legacy:admin'] = '정규 역할 : 관리자';
$string['legacy:coursecreator'] = '정규 역할 : 강좌 생성자';
$string['legacy:editingteacher'] = '정규 역할 : 교수자(편집가능)';
$string['legacy:guest'] = '정규 역할 : 손님';
$string['legacy:student'] = '정규 역할 : 학생';
$string['legacy:teacher'] = '정규 역할 : 교수자(편집기능 없음)';
$string['legacy:user'] = '정규 역할 : 인증된 사용자';
$string['legacytype'] = '정규 역할 유형';
$string['listallroles'] = '역할 목록';
$string['localroles'] = '영역 역할';
$string['manageroles'] = '역할 관리';
$string['maybeassignedin'] = '이 역할을 부여받을 수 있는 영역 유형';
$string['metaassignerror'] = '메타코스의 관리능력이 주어지지 않았기 때문에 사용자 \"$a\" 에게 이 역할을 부여할 수 없습니다.';
$string['metaunassignerror'] = '사용자 \"$a\"의 역할이 자동적으로 재부여되었기 때문에 그 하위 강좌에 있는 역할은 해임해주기 바랍니다.';
$string['morethan'] = '$a 보다 많이';
$string['multipleroles'] = '복수 역할';
$string['my:manageblocks'] = '내 공부방블럭 관리';
$string['nocapabilitiesincontext'] = '이 영역에서는 아무 권한이 없음';
$string['noneinthisx'] = '이 $a 에는 아무것도 없음';
$string['noneinthisxmatching'] = '$a->contexttype 에 \'$a->search\'와 일치하는 사용자 없음';
$string['noroleassignments'] = '본 사용자는 이곳의 어느 영역에서도 부여받은 역할이 없습니다.';
$string['notabletoassignroleshere'] = '여기에서는 어떤 역할도 부여할 수 없음';
$string['notabletooverrideroleshere'] = '여기에서는 어떤 역할의 권한도 재설정할 수 없음';
$string['notes:manage'] = '알림 관리';
$string['notes:view'] = '알림 보기';
$string['notset'] = '상속';
$string['overrideanotherrole'] = '다른 역할 재설정';
$string['overridecontext'] = '영역 재설정';
$string['overridepermissions'] = '권한 재설정';
$string['overridepermissionsforrole'] = '$a->context 의 \'$a->role\' 역할에 대한 권한 재설정';
$string['overridepermissionsin'] = '$a 에서 권한 재설정';
$string['overrideroles'] = '역할 재설정';
$string['overriderolesin'] = '$a 에서 역할 재설정';
$string['overrides'] = '재설정 현황';
$string['overridesbycontext'] = '재설정(영역)';
$string['permission'] = '권한';
$string['permissions'] = '권한';
$string['permissionsforuser'] = '사용자 $a 의 권한';
$string['portfolio:export'] = '포트폴리오로 내보내기';
$string['potentialusers'] = '$a 이용 후보자';
$string['potusers'] = '이용 후보자';
$string['potusersmatching'] = '\'$a\' 와 일치하는 이용 후보자';
$string['prevent'] = '제한';
$string['prohibit'] = '금지';
$string['question:add'] = '새 문항 추가';
$string['question:config'] = '질문 유형 설정';
$string['question:editall'] = '모든 질문 편집';
$string['question:editmine'] = '자신의 질문 편집';
$string['question:flag'] = '풀려는 문항 기표';
$string['question:managecategory'] = '문항 범주 관리';
$string['question:moveall'] = '모든 문항 이동';
$string['question:movemine'] = '자신의 문항 이동';
$string['question:useall'] = '모든 질문 사용';
$string['question:usemine'] = '자신의 질문 사용';
$string['question:viewall'] = '모든 문항 보기';
$string['question:viewmine'] = '자신의 문항 보기';
$string['resetrole'] = '역할 초기화';
$string['resetrolenolegacy'] = '권한 취소';
$string['resetrolesure'] = '정말 \"$a->name ($a->shortname)\" 역할을 초기화하겠습니까?<p></p>기본 역할은 정규 권한($a->legacytype)에서 가져옵니다.';
$string['resetrolesurenolegacy'] = '정말 \"$a->name ($a->shortname)\" 역할의 모든 권한을 제거하겠습니까?';
$string['risks'] = '위험부담';
$string['role:assign'] = '사용자에게 역할 부여';
$string['role:manage'] = '역할을 생성하고 관리';
$string['role:override'] = '타인에 대한 재설정 권한';
$string['role:safeoverride'] = '타인에 대한 안전한 재설정 권한';
$string['role:switchroles'] = '다른 역할과 맞바꿈';
$string['role:unassignself'] = '역할에서 해임';
$string['role:viewhiddenassigns'] = '비공개 역할부여 보기';
$string['roleassignments'] = '역할 부여';
$string['roledefinitions'] = '역할 정의';
$string['roles'] = '역할들';
$string['roletoassign'] = '부여할 역할';
$string['roletooverride'] = '재설정할 역활';
$string['safeoverridenotice'] = '주: 안전한 재설정 권한만 허용되어 있으므로, 위험성이 큰 권한에 대해서는 제한됩니다.';
$string['selectanotheruser'] = '또 다른 사용자 선택';
$string['selectauser'] = '사용자 선택';
$string['selectrole'] = '역할 선택';
$string['showallroles'] = '모든 역할 보이기';
$string['showthisuserspermissions'] = '이 사용자의 권한 보이기';
$string['site:accessallgroups'] = '모든 모둠에 접속 기능';
$string['site:approvecourse'] = '강좌 만들기 승인';
$string['site:backup'] = '강좌 백업';
$string['site:config'] = '사이트 설정을 변경';
$string['site:doanything'] = '모든 일을 할 수 있도록 허용';
$string['site:doclinks'] = '외부 문서 링크를 보여줌';
$string['site:import'] = '다른 강좌를 가져옴';
$string['site:langeditlocal'] = '맞춤 번역';
$string['site:langeditmaster'] = '기본 언어팩 편집';
$string['site:manageblocks'] = '사이트 전체 블럭 관리';
$string['site:mnetloginfromremote'] = '원격 무들로부터 로그인';
$string['site:mnetlogintoremote'] = '원격 무들로 접속함';
$string['site:readallmessages'] = '사이트의 모든 페이지글 읽음';
$string['site:restore'] = '강좌 복구';
$string['site:sendmessage'] = '어떤 사용자에게든 메세지 보냄';
$string['site:trustcontent'] = '내용 안전성 인증';
$string['site:uploadusers'] = '파일로 새 사용자 올림';
$string['site:usewebservices'] = '사용자는 무들 웹 서비스를 사용할 수 있음';
$string['site:viewfullnames'] = '언제나 사용자의 성명을 볼 수 있음';
$string['site:viewparticipants'] = '참여자 보기';
$string['site:viewreports'] = '보고서 보기';
$string['tag:create'] = '새 태그 생성';
$string['tag:edit'] = '기존 태그 수정';
$string['tag:editblocks'] = '태그 화면에서의 블럭 편집';
$string['tag:manage'] = '태그 관리';
$string['thisusersroles'] = '이 사용자의 역할들';
$string['unassignerror'] = '$a->user 사용자를 $a->role 역할에서 해임하는 중 오류';
$string['user:changeownpassword'] = '내 비밀번호 변경';
$string['user:create'] = '사용자 생성';
$string['user:delete'] = '사용자 삭제';
$string['user:editmessageprofile'] = '사용자 메세지 편집';
$string['user:editownmessageprofile'] = '내 메세지 편집';
$string['user:editownprofile'] = '내 개인정보 편집';
$string['user:editprofile'] = '사용자 개인정보 편집';
$string['user:loginas'] = '다른 사용자로 로그인';
$string['user:readuserblogs'] = '사용자 블로그 보기';
$string['user:readuserposts'] = '모든 게시물 보기';
$string['user:update'] = '사용자 명세를 갱신';
$string['user:viewdetails'] = '사용자 명세를 봄';
$string['user:viewhiddendetails'] = '사용자의 비공개 세부사항 보기';
$string['user:viewuseractivitiesreport'] = '활동 보고서 보기';
$string['user:viewusergrades'] = '사용자 성적 보기';
$string['userhashiddenassignments'] = '이 사용자는 강좌내에 하나 이상의 비공개 역할을 가지고 있음';
$string['usersfrom'] = '$a 사용자들';
$string['usersfrommatching'] = '$a->contextname 중 \'$a->search\' 와 일치하는 사용자';
$string['usersinthisx'] = '$a 사용자들';
$string['usersinthisxmatching'] = '$a->contexttype 에서 \'$a->search\' 와 일치하는 사용자';
$string['userswithrole'] = '역할을 지닌 모든 사용자';
$string['userswiththisrole'] = '본 역할을 소지한 사용자들';
$string['useshowadvancedtochange'] = '변경하려면 \'고급 보기\'를 사용';
$string['viewingdefinitionofrolex'] = '\'$a\' 역할 정의 보기';
$string['viewrole'] = '역할 자세히 보기';
$string['whydoesuserhavecap'] = '왜 $a->fullname 가 $a->context 영역의 $a->capability 권한을 지니는가?';
$string['whydoesusernothavecap'] = '왜 $a->fullname 가 $a->context 영역의 $a->capability 권한을 지니지 못하는가?';
$string['xroleassignments'] = '$a 의 역할';
$string['xuserswiththerole'] = '\"$a->role\" 역할을 지닌 사용자';
$string['incontext'] = '$a->context 의 <b>$a->role</b>'; // ORPHANED
$string['noassignmentsfound'] = '$a 는 부여받은 역할 없음'; // ORPHANED
$string['rolesreassigned'] = '재 부여된 역할들'; // ORPHANED
$string['rolesunassigned'] = '부여되지 않은 역할들'; // ORPHANED
$string['unassignasabove'] = '선택된 부여 역할 삭제'; // ORPHANED
$string['unassignexplain'] = '위의 양식은 작업순서 상 혹은 수동으로 임무 부여된 역할의 해임에만 사용될 수 있습니다. CIRCE 혹은 메타코스를 통해 이루어진 임무부여는 변경할 수 없습니다.'; // ORPHANED
$string['undounassign'] = '이전 역할로 되돌림!'; // ORPHANED
$string['explainpermissions'] = '권한 설명'; // ORPHANED
$string['explainpermissionsdetails'] = '영역 $a->context 에 $a->fullname 로 로그인 할 때 줄  $a->capability 권한'; // ORPHANED
$string['question:export'] = '문항 내보냄'; // ORPHANED
$string['question:import'] = '문항 가져음'; // ORPHANED
$string['question:manage'] = '문항 관리'; // ORPHANED
$string['course:downloadallgrades'] = '모든 성적을 내려받음'; // ORPHANED
$string['course:viewallgrades'] = '모든 성적 보기'; // ORPHANED
$string['course:viewowngrades'] = '내 성적 보기'; // ORPHANED
$string['grade:editlocked'] = '잠긴 성적 편집'; // ORPHANED

?>