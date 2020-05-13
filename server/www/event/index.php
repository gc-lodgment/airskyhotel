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

    <link rel="stylesheet" type="text/css" href="http://static.hotelairsky.co.kr/svc/css/event/init.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link href="http://static.hotelairsky.co.kr/svc/css/jquery.bxslider.css" rel="stylesheet" />
</head>

<body class="">

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

    <div class="contents event-contents">
        <div class="sub">
            <div class="sub_top_menu">
                <h4 class="page_title">이벤트/축제</h4>
                <h6 class="page_sub_title">환타스틱 인천의 다양한 축제정보를 통해 행복한 시간을 함께하세요.</h6>
            </div>
        </div>

        <div class="sub evt_box container">
            <div class="sub_item_box">
                <div class="sub_item_wrap">
                    <div class="sub_item">
                        <!-- <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/fishfest.jpg" alt="에어스카이호텔 이벤트"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/fishfest.jpg" alt="에어스카이호텔 이벤트">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit"></p>
                                                    <p class="evt-bx-txt">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="evt-tb-box">
                                <ul class="evt-tb cf">
                                    <li class="nth-1 t-full">
                                        <p class="p-lbl">행사명</p>
                                        <p class="p-txt"></p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt"></p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt"></p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt"></p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="" target="_blank" title="새창 열림" rel="noopener noreferrer">▷자세히보기</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/fishfest.jpg" alt="에어스카이호텔 이벤트"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/fishfest.jpg" alt="에어스카이호텔 이벤트">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">강화 빙어축제</p>
                                                    <p class="evt-bx-txt">
                                                        인천 강화도에서 12월에 진행되는 강화빙어축제는 강화군 송해면 전망대로<br class="hidden-smxs">
                                                        양오낚시터에서 흥겹게 진행됩니다.<br>
                                                        맑고 푸른 하늘아래, 차가운 얼음을 깨고 숨어있는 빙어낚시를 즐겨보세요.<br>
                                                        아이와 가족, 연인, 친구 모두 즐거운 빙어잡기로 신나는 시간을 함께하세요<br>
                                                        2020 강화도 빙어축제. 누구나 쉽게 체험할 수 있습니다.<br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="evt-tb-box">
                                <ul class="evt-tb cf">
                                    <li class="nth-1 t-full">
                                        <p class="p-lbl">행사명</p>
                                        <p class="p-txt">강화 빙어축제</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 12월 11일 ~ 02월 02일</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">양오낚시터</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">인천 강화도 양오저수지내</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="http://www.yango.co.kr" target="_blank" title="새창 열림" rel="noopener noreferrer">▷자세히보기</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/skyfest.jpg" alt="에어스카이호텔 이벤트"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/skyfest.jpg" alt="에어스카이호텔 이벤트">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">

                                                    <p class="evt-bx-tit">인천공항 스카이페스티벌</p>
                                                    <p class="evt-bx-txt">
                                                        2004년부터 시작되어 올해로 16회를 맞이한 인천공항 SKY FESTIVAL은 현재<br class="hidden-smxs">
                                                        "K-POP"과 "CROSSOVER"음악 콘서트를 중심으로 가을을 대표하는<br class="hidden-smxs">
                                                        야외 음악축제로 자리 잡아가고 있습니다.<br>
                                                        <br class="hidden-smxs">
                                                        K-POP, CROSSOVER CONCERT와 EXPO가 함께 하고<br class="hidden-smxs">
                                                        전 국민과 세계인이 매년 3만여명 이상 참가하여 함게 즐기는 글로벌<br class="hidden-smxs">
                                                        복합문화축제로, 인천공항만의 특별한 감동을 전달하고 있습니다.<br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="evt-tb-box">
                                <ul class="evt-tb cf">
                                    <li class="nth-1 t-full">
                                        <p class="p-lbl">행사명</p>
                                        <p class="p-txt">인천공항 스카이페스티벌</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 08월 31일 ~ 09월 01일</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">인천국제공항공사, KBSN</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">인천공항 문화공원</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="http://www.skyfestival.kr" target="_blank" title="새창 열림" rel="noopener noreferrer">▷자세히보기</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/boargame.jpg" alt="에어스카이호텔 이벤트"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/boargame.jpg" alt="에어스카이호텔 이벤트">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">인천 보드게임 페스티벌</p>
                                                    <p class="evt-bx-txt">
                                                        인천 보드게임 페스티벌은 세계적인 가족 놀이 문화이자 교육 문화인<br class="hidden-smxs">
                                                        보드게임을 널리 알리기 위해 마련한 축제형 보드게임 무료체험 행사로<br class="hidden-smxs">
                                                        관람객에게 보드게임 체험, 보드게임 대회 및 이벤트를 제공하여<br class="hidden-smxs">
                                                        보드게임 만의 즐거움을 알리고 있습니다.<br>
                                                        <br class="hidden-smxs">
                                                        300여종 국내, 해외 보드게임 시연 및 할인판매와 보드게임 대회, 보드게임 개인작가존 등 각종 이벤트 등을 즐길 수 있습니다.<br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="evt-tb-box">
                                <ul class="evt-tb cf">
                                    <li class="nth-1 t-full">
                                        <p class="p-lbl">행사명</p>
                                        <p class="p-txt">인천 보드게임 페스티벌</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 08월 16일 ~ 17일</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">인천정보산업경제테크노파크, 한국보드게임산업협회</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">인천 송도 컨벤시아 1홀</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="http://www.incheonboardgame.com/" target="_blank" title="새창 열림" rel="noopener noreferrer">▷자세히보기</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/rockfest.jpg" alt="에어스카이호텔 이벤트"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/rockfest.jpg" alt="에어스카이호텔 이벤트">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">인천 펜타포트 락 페스티벌</p>
                                                    <p class="evt-bx-txt">
                                                        국내외 유명 뮤지션들이 참가하는 국내 대표 락 페스티벌로<br class="hidden-smxs">
                                                        올해 14회째를 맞이하며 인천 송도달빛축제공원에서 개최됩니다.송도달빛축제공원을 주무대로 도심 전체에 축제 분위기를 조성하며<br class="hidden-smxs">
                                                        인천을 축제의 장으로 탈바꿈 시킬 것입니다.'핫'한 라인업과 '펜타 바캉스' 컨셉에 놀거리들이 복합되어 <br class="hidden-smxs">
                                                        한 여름에 무더위를 뜨거운 열기로 날려버릴 기회입니다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="evt-tb-box">
                                <ul class="evt-tb cf">
                                    <li class="nth-1 t-full">
                                        <p class="p-lbl">행사명</p>
                                        <p class="p-txt">인천 펜타포트 락 페스티벌</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 08월 09일 ~ 11일</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">인천관광공사, 경기일보</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">인천 송도달빛축제공원</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="http://www.pentaport.co.kr" target="_blank" title="새창 열림" rel="noopener noreferrer">▷자세히보기</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/nightroad.jpg" alt="에어스카이호텔 이벤트"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/nightroad.jpg" alt="에어스카이호텔 이벤트">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">강화 문화재 야행</p>
                                                    <p class="evt-bx-txt">
                                                        강화, 사방팔밤(夜)에 빠지다.문화재를 활용한 8야 프로그램, 초청공연 , 고려검무공연, 미디어 파사드,<br class="hidden-smxs">
                                                        강화역사 퍼레이드를 포함해 각종 체험프로그램 및 먹거리까지<br class="hidden-smxs">
                                                        준비되어있는 강화로 어서오십시오.<br>
                                                        야로, 야화, 야시, 야설, 야사, 야숙, 야경 등의 프로그램으로 초대합니다.<br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="evt-tb-box">
                                <ul class="evt-tb cf">
                                    <li class="nth-1 t-full">
                                        <p class="p-lbl">행사명</p>
                                        <p class="p-txt">강화 문화재 야행</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 06월 28일</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">인천관광공사, 강화군청</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">용흥궁공원</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="http://www.ganghwa-night.co.kr/" target="_blank" title="새창 열림" rel="noopener noreferrer">▷자세히보기</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/boatfest.jpg" alt="에어스카이호텔 이벤트"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/boatfest.jpg" alt="에어스카이호텔 이벤트">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">아라뱃길 카약축제</p>
                                                    <p class="evt-bx-txt">
                                                        2019 아라뱃길 카약축제는 시민참여 중심의 수상레포츠 축제로써,<br class="hidden-smxs">
                                                        생활문화로써의 카약을 시민들이 쉽게 즐길 수 있는 기회를 제공합니다.<br>
                                                        온가족이 함께, 남녀노소 누구나 안전하게 즐길 수 있는 축제로<br class="hidden-smxs">
                                                        카약퍼레이드, 다양한 시민체험프로그램과 콘서트 '노을마당'이<br class="hidden-smxs">
                                                        함께 진행됩니다.<br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="evt-tb-box">
                                <ul class="evt-tb cf">
                                    <li class="nth-1 t-full">
                                        <p class="p-lbl">행사명</p>
                                        <p class="p-txt">아라뱃길 카약축제</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 05월 18일</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">인천광역시 서구, K-water</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">경인아라뱃길 시천가람터 일원</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://korean.visitkorea.or.kr/detail/fes_detail.do?cotid=39d57418-3596-44a1-be3e-3eee3c1e05fc" target="_blank" title="새창 열림" rel="noopener noreferrer">▷자세히보기</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/walkingfest.jpg" alt="에어스카이호텔 이벤트"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/walkingfest.jpg" alt="에어스카이호텔 이벤트">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">함께 걷자 인천 페스타</p>
                                                    <p class="evt-bx-txt">
                                                        걷고, 나누고, 즐기고, 행복한 경험 모두 한번에!함께 걷자! 인천 페스타는 가정형편이 어려워 굶거나 아픈 어린이 등<br class="hidden-smxs">
                                                        위기가정과 인도적 차원에서 지원이 시급한 범죄피해자 긴급지원을 위한<br class="hidden-smxs">
                                                        기금마련 행사입니다.대한적십자사 인천지사와 경기일보가 주관하며, 인천광역시와<br class="hidden-smxs">
                                                        인천지방경찰청 범죄피해자 보호협의회의 후원으로 개최됩니다.<br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="evt-tb-box">
                                <ul class="evt-tb cf">
                                    <li class="nth-1 t-full">
                                        <p class="p-lbl">행사명</p>
                                        <p class="p-txt">함께 걷자 인천 페스타</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 04월 20일</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">대한적십자사 인천광역시지사, 경기일보</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">어울큰마당(구, 야외 음악당)</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="http://redcross.or.kr/festival" target="_blank" title="새창 열림" rel="noopener noreferrer">▷자세히보기</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
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

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js"></script> -->
    <script src="http://static.hotelairsky.co.kr/svc/js/jquery.bxslider.min.js"></script>
    <script>
        $(function() {
            $(".fnBxSlider").bxSlider({
                mode: 'fade',
                auto: true,
                autoControls: false,
                speed: 500,
                duration: 6000
            });
        });
    </script>
</body>

</html>