<!DOCTYPE html>
<html lang="ko">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>에어스카이호텔</title>
    <meta name="title" content="에어스카이호텔">
    <meta name="description" content="">
    <meta name="keywords" content="에어스카이호텔">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta property="og:type" content="website">
    <meta property="og:title" content="에어스카이호텔">
    <meta property="og:description" content="">
    <meta property="og:image" content="http://img.hotelairsky.co.kr/svc/img/sample/sns_thumb.jpg">

    <!-- <link rel="stylesheet" type="text/css" href="http://static.hotelairsky.co.kr/svc/common/font/nanumgothic/nanumgothic.css" /> -->
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://static.hotelairsky.co.kr/svc/common/javascript/lib/jquery/jquery-ui-1.12.1.min.css" />
    <link rel="stylesheet" type="text/css" href="http://static.hotelairsky.co.kr/svc/common/javascript/lib/datepicker/css/theme01.css" />
    <link rel="stylesheet" type="text/css" href="http://static.hotelairsky.co.kr/svc/lib/slick-master/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="http://static.hotelairsky.co.kr/svc/lib/slick-master/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="/static/svc/lib/icomoon/style.css" />
    <link rel="stylesheet" type="text/css" href="/static/svc/lib/mng/assets/hotelstory/amenitys/style.css" />
    <link rel="stylesheet" type="text/css" href="http://static.hotelairsky.co.kr/svc/common/css/init.min.css" />
    <link rel="stylesheet" type="text/css" href="http://static.hotelairsky.co.kr/svc/css/style.min.css" />
    <!-- <link rel="shortcut icon" type="image/x-icon" href="http://img.hotelairsky.co.kr/svc/img/symbol/favicon.ico" /> -->

    <!-- http://hotelairsky.co.kr/ -->
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/jquery/jquery-ui-1.12.1.min.js"></script>
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/js/common.js"></script>

    <link rel="stylesheet" href="http://static.hotelairsky.co.kr/svc/css/totalweb.css">
    <script src="http://static.hotelairsky.co.kr/svc/js/totalweb.js"></script>

    <!--[if lt IE 9]>
		<script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/support/flexibility.min.js"></script>

		<script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/support/html5shiv.js"></script>
		<script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/support/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- 190910 메인 + 영상이 있을경우 vid 멀티클래스 추가 -->
    <!-- <header class="header"> -->
    <header class="header">
        <div class="ajax_loader b_hide">
            <div>
                <img src="http://img.hotelairsky.co.kr/svc/img/loader/loading.gif" />
                <p>처리 요청 중입니다.</p>
            </div>
        </div>
        <div class="image_view_container">
            <div class="view">
                <i class="icon-10 img-remove"></i>
            </div>
        </div>
        <!--<div class="top_line">
        <div class="group-f">
            <ul class="box">
                <li class="call"><i class="icon-05"></i> 1666-1243</li>
                <li class="email"><i class="icon-03"></i> valuehotelgangneung@ebiznetworks.co.kr</li>
            </ul>
        </div>
    </div>-->

        <div class="gnb">
            <div class="group-f">
                <!-- 190910 logo 추가 수정 -->
                <a href="/index.php" class="logo-box com">
                    <h1>
                        <img src="http://img.hotelairsky.co.kr/svc/img/symbol/top_logo.png" alt="에어스카이호텔" class="logo hidden-smxs">
                        <img src="http://img.hotelairsky.co.kr/svc/img/symbol/m_top_logo.png" alt="에어스카이호텔" class="logo-m hidden-mdlg">
                    </h1>
                </a>
                <a href="/index.php" class="logo-box vid">
                    <h1>
                        <img src="http://img.hotelairsky.co.kr/svc/img/symbol/top_logo_w.png" alt="에어스카이호텔" class="logo hidden-smxs">
                        <img src="http://img.hotelairsky.co.kr/svc/img/symbol/m_top_logo_w.png" alt="에어스카이호텔" class="logo-m hidden-mdlg">
                    </h1>
                </a>

                <button class="nav-tab hidden-mdlg">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
                <nav class="cf nav">
                    <span class="sr-only">전체 메뉴</span>
                    <div class="bg-drop"></div>
                    <div class="nav-box">
                        <div class="nav-tit hidden-mdlg">
                            <img src="http://img.hotelairsky.co.kr/svc/img/symbol/m_top_logo_w.png" alt="에어스카이호텔" class="logo-menu"><span class="i-x" onclick=""></span>
                            <div class="menu-btn-box">
                                <a href="../reservation/" class="btn-bk">객실예약</a>
                                <a href="../reservation/confirm.php" class="btn-bkc">예약확인</a>
                            </div>
                        </div>
                        <ul class="cf menu">
                            <li>
                                <a class="title">호텔소개</a>
                                <ul class="sub">
                                    <li><a href="/main/about/index.php">호텔 소개</a></li>
                                    <li><a href="/main/factsheet/index.php">시설 개요</a></li>
                                    <li><a href="/main/map/index.php">오시는 길</a></li>
                                    <!-- <li><a href="/brd/lists/notice.php">공지사항</a></li> -->
                                </ul>
                            </li>
                            <li>
                                <a href="#none" class="title">객실안내</a>
                                <!-- 190719 메뉴 수정 -->
                                <ul class="sub">
                                    <li><a href="/rooms/detail_new/std_db.php">스탠다드 더블</a></li>
                                    <li><a href="/rooms/detail_new/std_tw.php">스탠다드 트윈</a></li>
                                    <li><a href="/rooms/detail_new/dx_oc_db.php">디럭스 오션 더블</a></li>
                                    <li><a href="/rooms/detail_new/dx_oc_tw.php">디럭스 오션 트윈</a></li>
                                    <li><a href="/rooms/detail_new/dx_oc_ondol.php">디럭스 오션 온돌</a></li>
                                    <li><a href="/rooms/detail_new/pr_oc_db.php">프리미어 오션 온돌</a></li>
                                    <li><a href="/rooms/detail_new/pr_oc_tw.php">프리미어 오션 트윈</a></li>
                                    <li><a href="/rooms/detail_new/pr_oc_famtw.php">프리미어 오션 패밀리 트윈</a></li>
                                    <li><a href="/rooms/detail_new/suite.php">스위트</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="title">다이닝&amp;부대시설</a>
                                <ul class="sub">
                                    <li><a href="/facilities/restaurant.php">레스토랑</a></li>
                                    <li><a href="/facilities/conference.php">컨퍼런스룸</a></li>
                                    <li><a href="/facilities/seminar.php">세미나룸</a></li>
                                    <li><a href="/facilities/businesscenter.php">비즈니스센터</a></li>
                                    <li><a href="/facilities/convenience.php">편의점</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="/group/index.php" class="title">단체문의</a>
                            </li>
                            <li>
                                <a href="javascript:;" onclick="alert('준비중입니다.')" class="title">장기/단기 숙박</a>
                                <!-- <a href="/rent/index.php" class="title">장기/단기 숙박</a> -->
                            </li>
                            <li>
                                <a href="javascript:;" onclick="alert('준비중입니다.')" class="title">이벤트/축제</a>
                                <!-- <a href="/event/index.php" class="title">이벤트/축제</a> -->
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="bk-menu hidden-smxs airsky">
                    <a href="/reserve" class="btn-bk">예약하기</a>
                    <ul class="bk-list">
                        <li class="item item-1 fst"><a href="/reserve">객실예약</a></li>
                        <li class="item item-2"><a href="/history/?dd=Sws5TzdVKg==">예약확인</a></li>
                        <li class="item item-3"><a href="/group">단체예약</a></li>
                        <li class="item item-4"><a href="/rent">장기/단기예약</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="body"></div>
    <br class="br_sub">

    <div class="b_mx900">
        <div class="access_box main_policy">
            <h1 class="b_acenter">에어스카이호텔 개인정보취급방침</h1>
            <div class="box">
                <p>에어스카이호텔 ("회사" 또는 "에어스카이호텔"이라함)는 정보통신망 이용촉진 및 정보보호 등에 관한 법률, 개인정보보호법, 통신비밀보호법, 전기통신사업법, 등 정보통신서비스제공자가
                    준수하여야 할 관련 법령상의 개인정보보호 규정을 준수하며, 관련 법령에 의거한 개인정보취급방침을 정하여 이용자 권익 보호에 최선을 다하고 있습니다. 본 개인정보취급방침은 회사가
                    제공하는 에어스카이호텔 및 에어스카이호텔 관련 제반 서비스 이용에 적용되며 다음과 같은 내용을 담고 있습니다.</p>
                <p><br></p>
                <p>1. 수집하는 개인정보의 항목 및 수집방법</p>
                <p>2. 개인정보의 수집 및 이용목적</p>
                <p>3. 개인정보 공유 및 제공</p>
                <p>4. 개인정보의 취급위탁</p>
                <p>5. 개인정보의 보유 및 이용기간</p>
                <p>6. 개인정보 파기절차 및 방법</p>
                <p>7. 이용자 및 법정대리인의 권리와 그 행사방법</p>
                <p>8. 개인정보 자동 수집 장치의 설치/운영 및 거부에 관한 사항</p>
                <p>9. 개인정보의 기술적/관리적 보호 대책</p>
                <p>10. 개인정보관리책임자 및 담당자의 연락처</p>
                <p>11. 고지의 의무</p>
                <p class="text_dep_1">1. 수집하는 개인정보의 항목 및 수집방법</p>
                <p class="text_dep_2">가. 수집하는 개인정보의 항목 </p>
                <p class="text_dep_3">첫째, 회사는 회원가입, 원활한 고객상담, 각종 서비스의 제공을 위해 최초 회원가입 당시 아래와 같은 최소한의 개인정보를 필수항목으로 수집하고
                    있습니다. </p>
                <p class="text_dep_4">[회원가입] </p>
                <p class="text_dep_4">- 필수 항목: 아이디, 비밀번호, 이름, 생년월일, 성별, 가입인증 휴대폰번호, 만19세 미만 미성년자의 경우 법정대리인 정보 (법정대리인의
                    이름, DI, 휴대폰 번호가 수집되며, 아동이 성년이 될 때까지 보관됩니다.)</p>
                <p class="text_dep_4">- 선택 항목: 비상 연락용 이메일 주소 (선택항목은 입력하지 않아도 회원가입이 가능합니다.)</p>
                <p class="text_dep_4">[단체아이디 회원가입] </p>
                <p class="text_dep_4">- 필수 항목: 단체아이디, 단체이름, 법인명(단체명), 대표자명, 사업장 소재지, 대표 전화번호, 관리자 아이디, 관리자 휴대폰번호, 관리자
                    부서/직위</p>
                <p class="text_dep_4">- 선택 항목: 대표 팩스번호 (선택항목은 입력하지 않아도 회원가입이 가능합니다.)</p>
                <p class="text_dep_3">둘째, 서비스 이용과정이나 사업처리 과정에서 아래와 같은 정보들이 자동으로 생성되어 수집 될 수 있습니다. </p>
                <p class="text_dep_4">- IP Address, 쿠키, 방문 일시, 서비스 이용 기록, 불량 이용 기록, 기기정보</p>
                <p class="text_dep_3">셋째, 에어스카이호텔 아이디를 이용한 부가 서비스 및 맞춤식 서비스 이용 또는 이벤트 응모 과정에서 해당 서비스의 이용자에 한해서만 아래와 같은
                    정보들이 수집될 수 있습니다. </p>
                <p class="text_dep_4">- 개인정보 추가 수집에 대해 동의를 받는 경우</p>
                <p class="text_dep_3">넷째, 홈페이지 및 모바일 예약페이지에서 이벤트 시행 시, 디지털 유료/게임 등 일부 서비스 이용관련 법률 준수를 위해 본인인증이 필요 한 경우,
                    아래와 같은 정보들이 수집될 수 있습니다. </p>
                <p class="text_dep_4">- 이름, 생년월일, 성별, 중복가입확인정보(DI), 암호화된 동일인 식별정보(CI), 휴대폰 번호(선택), 아이핀 번호(아이핀 이용시),
                    내/외국인 정보</p>
                <p class="text_dep_3">다섯째, 유료 서비스 이용 과정 (호텔 예약, 이벤트 내 디지털 유료 게임 등) 에서 아래와 같은 결제 정보들이 수집될 수 있습니다. </p>
                <p class="text_dep_4">- 신용카드 결제시: 카드사명, 카드번호 등</p>
                <p class="text_dep_4">- 휴대전화 결제시: 이동전화번호, 통신사, 결제승인번호 등</p>
                <p class="text_dep_4">- 계좌이체시: 은행명, 계좌번호 등</p>
                <p class="text_dep_4">- 상품권 이용시: 상품권 번호</p>
                <p class="text_dep_2">나. 개인정보 수집방법 </p>
                <p class="text_dep_3">회사는 다음과 같은 방법으로 개인정보를 수집합니다.</p>
                <p class="text_dep_3">- 홈페이지, 모바일 페이지, 서면양식, 팩스, 전화, 상담 게시판, 이메일, 이벤트 응모, 배송요청</p>
                <p class="text_dep_3">- 협력회사로부터의 제공</p>
                <p class="text_dep_3">- 생성정보 수집 툴을 통한 수집</p>
                <p class="text_dep_1">2. 개인정보의 수집 및 이용목적</p>
                <p class="text_dep_2">가. 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산 </p>
                <p class="text_dep_3">컨텐츠 제공, 특정 맞춤 서비스 제공, 물품배송 또는 청구서 등 발송, 본인인증, 구매 및 요금 결제, 요금추심</p>
                <p class="text_dep_2">나. 회원관리 </p>
                <p class="text_dep_3">회원제 서비스 제공, 개인식별, 에어스카이호텔 이용약관 위반 회원에 대한 이용제한 조치, 서비스의 원활한 운영에 지장을 미치는 행위 및 서비스
                    부정이용 행위 제재, 가입의사 확인, 가입 및 가입횟수 제한, 만19세 미만 미성년자 개인정보 수집 시 법정 대리인 동의여부 확인, 추후 법정 대리인 본인확인, 분쟁 조정을 위한
                    기록보존, 불만처리 등 민원처리, 고지사항 전달, 회원탈퇴 의사의 확인</p>
                <p class="text_dep_2">다. 신규 서비스 개발 및 마케팅·광고에의 활용 </p>
                <p class="text_dep_3">신규 서비스 개발 및 맞춤 서비스 제공, 통계학적 특성에 따른 서비스 제공 및 광고 게재, 서비스의 유효성 확인, 이벤트 정보 및 참여기회 제공,
                    광고성 정보 제공, 접속빈도 파악, 회원의 서비스이용에 대한 통계</p>
                <p class="text_dep_2">라. 단, 이용자의 기본적 인권 침해의 우려가 있는 민감한 개인정보 (인종 및 민족, 사상 및 신조, 출신지 및 본적지, 정치적 성향 및 범죄기록,
                    건강상태 등)는 수집하지 않습니다.</p>
                <p class="text_dep_1">3. 개인정보의 공유 및 제공</p>
                <p class="text_dep_2">회사는 이용자들의 개인정보를 "2. 개인정보의 수집목적 및 이용목적"에서 고지한 범위내에서 사용하며, 이용자의 사전 동의 없이는 동 범위를 초과하여
                    이용하거나 원칙적으로 이용자의 개인정보를 외부에 공개하지 않습니다. 다만, 아래의 경우에는 예외로 합니다.</p>
                <p class="text_dep_2">가. 이용자가 사전에 동의 한 경우</p>
                <p class="text_dep_2">나. 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우</p>
                <p class="text_dep_1">4. 개인정보의 취급위탁</p>
                <p class="text_dep_2">회사는 서비스 향상을 위해서 아래와 같이 개인정보를 위탁하고 있으며, 관계 법령에 따라 위탁계약 시 개인정보가 안전하게 관리될 수 있도록 필요한
                    사항을 규정하고 있습니다.<br>회사의 개인정보 위탁처리 기관 및 위탁업무 내용은 아래와 같습니다.</p>
                <p class="text_dep_2">회사의 개인정보 위탁처리 기관 및 위탁업무 내용 </p>
                <p class="text_dep_2">수탁업체 : ㈜산하정보통신</p>
                <p class="text_dep_2">위탁업무 내용 : 홈페이지/모바일 페이지 관리 및 시스템 관리</p>
                <p class="text_dep_2">개인정보의 보유 및 이용기간 : 회원탈퇴시 혹은 위탁계약 종료시까지</p>
                <p class="text_dep_1">5. 개인정보의 보유 및 이용기간</p>
                <p class="text_dep_2">이용자의 개인정보는 원칙적으로 개인정보의 수집 및 이용목적이 달성되면 지체 없이 파기합니다. 단, 다음의 정보에 대해서는 아래의 보존 이유를 위해
                    명시한 기간 동안 보존합니다.</p>
                <p class="text_dep_2">가. 회사 내부 방침에 의한 정보보유 사유 </p>
                <p class="text_dep_3">- 부정이용기록(부정가입, 징계기록 등의 비정상적 서비스 이용기록) </p>
                <p class="text_dep_3">- 보존 항목 : 가입인증 휴대폰 번호, 만14세 미만 회원의 경우 법정대리인 DI</p>
                <p class="text_dep_3">- 보존 이유 : 부정 가입 및 이용 방지</p>
                <p class="text_dep_3">- 보존 기간 : 1년</p>
                <p class="text_dep_3">※ ‘부정이용기록’이란 부정 가입 및 운영원칙에 위배되는 게시글 작성 등으로 인해 회사로부터 이용제한 등을 당한 기록입니다.</p>
                <p class="text_dep_2">나. 관련법령에 의한 정보보유 사유 </p>
                <p class="text_dep_3">상법, 전자상거래 등에서의 소비자보호에 관한 법률 등 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 관계법령에서 정한 일정한 기간 동안
                    회원정보를 보관합니다. 이 경우 회사는 보관하는 정보를 그 보관의 목적으로만 이용하며 보존기간은 아래와 같습니다.</p>
                <p class="text_dep_3">- 계약 또는 청약철회 등에 관한 기록 </p>
                <p class="text_dep_4">보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률</p>
                <p class="text_dep_4">보존 기간 : 5년</p>
                <p class="text_dep_3">- 대금결제 및 재화 등의 공급에 관한 기록 </p>
                <p class="text_dep_4">보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률</p>
                <p class="text_dep_4">보존 기간 : 5년</p>
                <p class="text_dep_3">- 전자금융 거래에 관한 기록 </p>
                <p class="text_dep_4">보존 이유 : 전자금융거래법 </p>
                <p class="text_dep_4">보존 기간 : 5년</p>
                <p class="text_dep_3">- 소비자의 불만 또는 분쟁처리에 관한 기록 </p>
                <p class="text_dep_4">보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률</p>
                <p class="text_dep_4">보존 기간 : 3년</p>
                <p class="text_dep_3">- 웹사이트 방문기록 </p>
                <p class="text_dep_4">보존 이유 : 통신비밀보호법</p>
                <p class="text_dep_4">보존 기간 : 3개월</p>
                <p class="text_dep_1">6. 개인정보 파기절차 및 방법</p>
                <p class="text_dep_2">이용자의 개인정보는 원칙적으로 개인정보의 수집 및 이용목적이 달성되면 지체 없이 파기합니다. 회사의 개인정보 파기절차 및 방법은 다음과 같습니다.
                </p>
                <p class="text_dep_2">가. 파기절차 </p>
                <p class="text_dep_3">- 이용자가 회원가입 등을 위해 입력한 정보는 목적이 달성된 후 별도의 DB로 옮겨져(종이의 경우 별도의 서류함) 내부 방침 및 기타 관련 법령에
                    의한 정보보호 사유에 따라(보유 및 이용기간 참조)일정 기간 저장된 후 파기됩니다. </p>
                <p class="text_dep_3">- 동 개인정보는 법률에 의한 경우가 아니고서는 보유되는 이외의 다른 목적으로 이용되지 않습니다.</p>
                <p class="text_dep_2">나. 파기방법 </p>
                <p class="text_dep_3">- 종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여 파기합니다.</p>
                <p class="text_dep_3">- 전자적 파일 형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.</p>
                <p class="text_dep_1">7. 이용자 및 법정대리인의 권리와 그 행사방법</p>
                <p class="text_dep_2">- 이용자 및 법정 대리인은 언제든지 등록되어 있는 자신 혹은 당해 만 19세 미만 미성년자의 개인정보를 조회하거나 수정할 수 있으며, 회사의
                    개인정보의 처리에 동의하지 않는 경우 동의를 거부하거나 가입해지(회원탈퇴)를 요청하실 수 있습니다. 다만, 그러한 경우 서비스의 일부 또는 전부 이용이 어려울 수 있습니다.</p>
                <p class="text_dep_2">- 이용자 혹은 만 19세 미만 미성년자의 개인정보 조회, 수정을 위해서는 "개인정보변경"(또는 "회원정보수정" 등)을, 가입해지(동의철회)를
                    위해서는 "회원탈퇴"를 클릭하여 본인 확인 절차를 거치신 후 직접 열람, 정정 또는 탈퇴가 가능합니다.</p>
                <p class="text_dep_2">- 혹은 개인정보관리책임자에게 서면, 전화 또는 이메일로 연락하시면 지체 없이 조치하겠습니다.</p>
                <p class="text_dep_2">- 이용자가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제공하지 않습니다. 또한 잘못된
                    개인정보를 제3 자에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체 없이 통지하여 정정이 이루어지도록 하겠습니다.</p>
                <p class="text_dep_2">- 회사는 이용자 혹은 법정 대리인의 요청에 의해 해지 또는 삭제된 개인정보는 "5. 개인정보의 보유 및 이용기간"에 명시된 바에 따라 처리하고 그
                    외의 용도로 열람 또는 이용할 수 없도록 처리하고 있습니다.</p>
                <p class="text_dep_1">8. 개인정보 자동 수집 장치의 설치/운영 및 거부에 관한 사항</p>
                <p class="text_dep_2">가. 쿠키란? </p>
                <p class="text_dep_3">- 회사는 개인화되고 맞춤화된 서비스를 제공하기 위해서 이용자의 정보를 저장하고 수시로 불러오는 "쿠키(cookie)"를 사용합니다.</p>
                <p class="text_dep_3">- 쿠키는 웹사이트를 운영하는데 이용되는 서버가 이용자의 브라우저에게 보내는 아주 작은 텍스트 파일로 이용자 컴퓨터의 하드디스크에 저장됩니다. 이후
                    이용자가 웹 사이트에 방문할 경우 웹 사이트 서버는 이용자의 하드 디스크에 저장되어 있는 쿠키의 내용을 읽어 이용자의 환경설정을 유지하고 맞춤화된 서비스를 제공하기 위해
                    이용됩니다.</p>
                <p class="text_dep_3">- 쿠키는 개인을 식별하는 정보를 자동적/능동적으로 수집하지 않으며, 이용자는 언제든지 이러한 쿠키의 저장을 거부하거나 삭제할 수 있습니다.</p>
                <p class="text_dep_2">나. 회사의 쿠키 사용 목적 </p>
                <p class="text_dep_3">이용자들이 방문한 에어스카이호텔의 각 서비스와 홈페이지 (또는 모바일 페이지)에 대한 방문 및 이용형태, 인기 검색어, 보안접속 여부, 뉴스편집,
                    이용자 규모 등을 파악하여 이용자에게 광고를 포함한 최적화된 맞춤형 정보를 제공하기 위해 사용합니다.</p>
                <p class="text_dep_2">다. 쿠키의 설치/운영 및 거부 </p>
                <p class="text_dep_3">- 이용자는 쿠키 설치에 대한 선택권을 가지고 있습니다. 따라서 이용자는 웹브라우저에서 옵션을 설정함으로써 모든 쿠키를 허용하거나, 쿠키가 저장될
                    때마다 확인을 거치거나, 아니면 모든 쿠키의 저장을 거부할 수도 있습니다.</p>
                <p class="text_dep_3">- 다만, 쿠키의 저장을 거부할 경우에는 로그인이 필요한 에어스카이호텔 일부 서비스는 이용에 어려움이 있을 수 있습니다.</p>
                <p class="text_dep_3">- 쿠키 설치 허용 여부를 지정하는 방법(Internet Explorer의 경우)은 다음과 같습니다. </p>
                <p class="text_dep_4">① [도구] 메뉴에서 [인터넷 옵션]을 선택합니다.</p>
                <p class="text_dep_4">② [개인정보 탭]을 클릭합니다.</p>
                <p class="text_dep_4">③ [개인정보취급 수준]을 설정하시면 됩니다.</p>
                <p class="text_dep_1">9. 개인정보의 기술적/관리적 보호 대책</p>
                <p class="text_dep_2">회사는 이용자들의 개인정보를 취급함에 있어 개인정보가 분실, 도난, 누출, 변조 또는 훼손되지 않도록 안전성 확보를 위하여 다음과 같은
                    기술적/관리적 대책을 강구하고 있습니다.</p>
                <p class="text_dep_2">가. 비밀번호 암호화 </p>
                <p class="text_dep_3">에어스카이호텔 회원 아이디(ID)의 비밀번호는 암호화되어 저장 및 관리되고 있어 본인만이 알고 있으며, 개인정보의 확인 및 변경도 비밀번호를 알고
                    있는 본인에 의해서만 가능합니다.</p>
                <p class="text_dep_2">나. 해킹 등에 대비한 대책 </p>
                <p class="text_dep_3">회사는 해킹이나 컴퓨터 바이러스 등에 의해 회원의 개인정보가 유출되거나 훼손되는 것을 막기 위해 최선을 다하고 있습니다.</p>
                <p class="text_dep_3">개인정보의 훼손에 대비해서 자료를 수시로 백업하고 있고, 최신 백신프로그램을 이용하여 이용자들의 개인정보나 자료가 누출되거나 손상되지 않도록
                    방지하고 있으며, 암호화통신 등을 통하여 네트워크상에서 개인정보를 안전하게 전송할 수 있도록 하고 있습니다.</p>
                <p class="text_dep_3">그리고 침입차단시스템을 이용하여 외부로부터의 무단 접근을 통제하고 있으며, 기타 시스템적으로 보안성을 확보하기 위한 가능한 모든 기술적 장치를
                    갖추려 노력하고 있습니다.</p>
                <p class="text_dep_2">다. 취급 직원의 최소화 및 교육 </p>
                <p class="text_dep_3">회사의 개인정보관련 취급 직원은 담당자에 한정시키고 있고 이를 위한 별도의 비밀번호를 부여하여 정기적으로 갱신하고 있으며, 담당자에 대한 수시
                    교육을 통하여 에어스카이호텔 개인정보취급방침의 준수를 항상 강조하고 있습니다.</p>
                <p class="text_dep_2">라. 개인정보보호전담기구의 운영 </p>
                <p class="text_dep_3">그리고 사내 개인정보보호전담기구 등을 통하여 에어스카이호텔 개인정보취급방침의 이행사항 및 담당자의 준수여부를 확인하여 문제가 발견될 경우 즉시
                    수정하고 바로 잡을 수 있도록 노력하고 있습니다.</p>
                <p class="text_dep_3">단, 회사가 개인정보보호 의무를 다 하였음에도 불구하고 이용자 본인의 부주의나 회사가 관리하지 않는 영역에서의 사고 등 회사의 귀책에 기인하지 않은
                    손해에 대해서는 회사는 책임을 지지 않습니다.</p>
                <p class="text_dep_1">10. 개인정보관리책임자 및 담당자의 연락처</p>
                <p class="text_dep_2">귀하께서는 회사의 서비스를 이용하시며 발생하는 모든 개인정보보호 관련 민원을 개인정보관리책임자 혹은 담당부서로 신고하실 수 있습니다. 회사는
                    이용자들의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다.</p>
                <p class="text_dep_2">회사의 개인정보 위탁처리 기관 및 위탁업무 내용</p>
                <table class="policy_table text_dep_3">
                    <tr>
                        <td colspan="2">홈페이지 개인정보 관리책임자</td>
                    </tr>
                    <tr>
                        <td>이 름</td>
                        <td>송영철</td>
                    </tr>
                    <tr>
                        <td>소 속</td>
                        <td>에어스카이호텔</td>
                    </tr>
                    <tr>
                        <td>직 위</td>
                        <td>대표이사</td>
                    </tr>
                    <tr>
                        <td>이메일</td>
                        <td>yc.song@valuehotelgangneung.com</td>
                    </tr>
                </table>
                <table class="policy_table text_dep_3">
                    <tr>
                        <td colspan="2">홈페이지 개인정보 관리</td>
                    </tr>
                    <tr>
                        <td>이 름</td>
                        <td>서영균</td>
                    </tr>
                    <tr>
                        <td>소 속</td>
                        <td>에어스카이호텔</td>
                    </tr>
                    <tr>
                        <td>직 위</td>
                        <td>과장</td>
                    </tr>
                    <tr>
                        <td>이메일</td>
                        <td>gm@valuehotelkorea.com</td>
                    </tr>
                </table>
                <p class="text_dep_1">11. 고지의 의무</p>
                <p class="text_dep_2">현 개인정보취급방침 내용 추가, 삭제 및 수정이 있을 시에는 개정 최소 7일전부터 홈페이지의 "공지사항"을 통해 고지할 것입니다. 다만, 개인정보의
                    수집 및 활용, 제3자 제공 등과 같이 이용자 권리의 중요한 변경이 있을 경우에는 최소 30일 전에 고지합니다.</p>
                <p class="text_dep_2">- 공고 일자 : 2018년 1월 1일</p>
                <p class="text_dep_2">- 시행 일자 : 2018년 1월 1일</p>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="group">
            <div class="terms-bar">
                <ul class="terms-list">
                    <li class="hidden-smxs"><a href="/main/about/index.php">회사소개</a></li>
                    <li class="l hidden-smxs">|</li>
                    <li class="hidden-smxs"><a href="/main/map/index.php">찾아오시는 길</a></li>
                    <li class="l hidden-smxs">|</li>
                    <li><a href="/main/access.php">이용약관</a></li>
                    <li class="l">|</li>
                    <li><a href="/main/policy.php">개인정보취급방침이용약관</a></li>
                    <li class="l">|</li>
                    <li><a href="/main/email.php">이메일무단수집금지</a></li>
                </ul>
            </div>
            <div class="sfa">
                <div class="split split-2">
                    <div class="inquiry-bar">
                        <a class="item item-1 clr">
                            <p class="s1">예약문의<span class="s1-2">예약 확정, 변경, 취소 / 이벤트 관련 문의</span></p>
                            <!-- <span class="s2"><img src="http://img.hotelairsky.co.kr/svc/img/common/i_call.png" alt="전화아이콘" class="i-tel">1666-6701</span> -->
                            <span class="s2"><img src="http://img.hotelairsky.co.kr/svc/img/common/i_call.png" alt="전화아이콘" class="i-tel">1666-1243</span>
                            <span class="s3">(주중 09시 30분 ~ 25시 / 주말 09시 30분 ~ 24시)</span>
                        </a>
                        <a class="item item-2 clr">
                            <p class="s1">프론트<span class="s1-2">체크인, 체크아웃 / 시설이용 관련 문의</span></p>
                            <span class="s2"><img src="http://img.hotelairsky.co.kr/svc/img/common/i_call.png" alt="전화아이콘" class="i-tel">033-820-0005</span>
                            <span class="s3">(주중/주말 06시 ~ 02시)</span>
                        </a>
                        <a class="item item-3 clr">
                            <p class="s1">단체문의<span class="s1-2">워크샵, 학생, 산업단체 / 단체이용 관련 문의</span></p>
                            <!-- <span class="s2"><img src="http://img.hotelairsky.co.kr/svc/img/common/i_call.png" alt="전화아이콘" class="i-tel">010-9544-8281</span> -->
                            <span class="s2"><img src="http://img.hotelairsky.co.kr/svc/img/common/i_call.png" alt="전화아이콘" class="i-tel">010-9094-0396</span>
                            <span class="s3">(주중/주말 06시 ~ 02시)</span>
                        </a>
                    </div>
                </div>
                <div class="split split-1">
                    <div class="logo-box">
                        <img src="http://img.hotelairsky.co.kr/svc/img/symbol/footer_logo.png" alt="씨베이호텔" class="logo">
                        <img src="http://img.hotelairsky.co.kr/svc/img/symbol/logo_f_goco.png" alt="고코투어" class="logo-goco">
                        <div id="family-wrapper" class="family-wrapper">
                            <div class="family-site">
                                <span class="family-site-label" onclick="$(this).next().toggle()">패밀리사이트&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;▲</span>
                                <ul class="site" style="display: none">
                                    <li class="group-name">
                                        <div class="fam_btn">[호텔/리조트]</div>
                                    </li>
                                    <li>
                                        <div class="fam_btn"><a href="http://ocean2you.co.kr/" target="_blank">오션투유리조트</a></div>
                                    </li>
                                    <li>
                                        <div class="fam_btn"><a href="http://ramadapt.co.kr/" target="_blank">평택라마다앙코르호텔</a></div>
                                    </li>
                                    <li>
                                        <div class="fam_btn"><a href="http://seabay.co.kr/" target="_blank">씨베이호텔</a></div>
                                    </li>
                                    <li class="group-division" style="border-top: 1px dashed #a3a3a3; margin: 5px 10px"></li>
                                    <li class="group-name">
                                        <div class="fam_btn">[호텔위탁운영사]</div>
                                    </li>
                                    <li>
                                        <div class="fam_btn"><a href="http://ebiznetworks.co.kr/home/program/?dd=WQwvfDZJKkYs" target="_blank">이비즈네트웍스</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="addr-bar">
                        <address class="addr">
                            <div class="info">
                                <em class="item">에어스카이호텔</em><br>
                                <span class="item">강원도 강릉시 주문진읍 주문로 59</span>
                            </div>
                            <div class="info">
                                <em class="item">(주)바로네트웍스</em><br>
                                <span class="item">대표이사: 박기범</span><br class="show-smxs">
                                <span class="item">주소 : 서울특별시 강남구 테헤란로82길 15, 3층(대치동, 디아이타워)</span><br>
                                <span class="item">사업자등록번호 : 215-87-85373</span>
                                <span class="item">통신판매업 : 제2017-서울강남-00561호</span><br>
                                <span class="item">여행등록번호 : 제2017-07호</span>
                                <span class="item">여행영업보증서 : 국내여행 제100-000-2015 0144 5816호</span><br>
                            </div>
                            <div class="info">
                                <em class="item">(주)이비즈네트웍스</em><br>
                                <span class="item">대표이사: 박기범</span><br class="show-smxs">
                                <span class="item">주소 : 서울특별시 강남구 테헤란로82길 15 (대치동, 디아이타워)</span><br>
                                <span class="item">사업자등록번호 : 220-87-30865</span>
                                <span class="item">통신판매업 : 강남-11501호</span><br>
                                <span class="item">여행등록번호 : 제2015-44호</span>
                                <span class="item">여행영업보증서 : 국내여행 제 100-000-2018041610009호</span><br>
                                <span class="item">*이비즈네트웍스는 에어스카이호텔의 공식 온라인 총판으로서 온라인 예약 및 결제를 대행합니다. </span>
                            </div>
                            <p class="copyright">COPYRIGHT © SEABAY HOTEL GANGNEUNG. ALL RIGHTS RESERVED.</p>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- http://design.ebiznetworks.co.kr/joon/airskyhotel/ -->
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/jquery/jquery.parallax.js"></script>
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/datepicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/support/jquery.placeholder.min.js"></script>
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/jquery.word-break-keep-all.min.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/support/flexibility.min.js"></script>
<![endif]-->

    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/lib/jssor/jssor.slider.min.js"></script>
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/lib/slick-master/slick/slick.js"></script>
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/common/javascript/func/function01.min.js"></script>
    <script type="text/javascript" src="http://static.hotelairsky.co.kr/svc/js/script.min.js"></script>
</body>

</html>