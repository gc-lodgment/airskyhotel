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

    <link rel="stylesheet" type="text/css" href="/static/svc/css/event/init.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link href="/static/svc/css/jquery.bxslider.css" rel="stylesheet" />
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
                <h6 class="page_sub_title">솔향, 바다향, 커피향 가득한 강릉 주변 관광명소는 물론<br class="hidden-mdlg"> 지역 이벤트, 축제에서 즐거운 시간을 함께하세요.</h6>
            </div>
        </div>

        <div class="sub evt_box container">
            <div class="sub_item_box">
                <div class="sub_item_wrap">
                    <div class="sub_item">

                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/kpopworldfestival.jpg" alt="K-POP 월드 페스타"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/kpopworldfestival.jpg" alt="K-POP 월드 페스타">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">K-POP 월드 페스타</p>
                                                    <p class="evt-bx-txt">
                                                        2019년 10월 3~6일까지 강릉 아레나에서 열리는 2019 커피축제 기간중, <br class="hidden-smxs">
                                                        강릉 종합경기장에서 10월 5일(토) K-POP 월드 페스타 공연이 개최됩니다.<br>
                                                        KBS 뮤직뱅크 특집 생방송으로 진행될 K-POP 월드 페스타 공연은 <br class="hidden-smxs">
                                                        엑소 첸, 세븐틴, 트와이스, 백지영, 레드벨벳, NCT 등 <br class="hidden-smxs">
                                                        국내 최정상급 가수들이 출연해 종합경기장을 뜨겁게 달굴 예정입니다.
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
                                        <p class="p-txt">K-POP 월드 페스타</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 10월 05일(토)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">강원도와 문화체육관광부 공동 주최</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">강릉종합경기장</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="http://www.kado.net/?mod=news&act=articleView&idxno=984813" target="_blank" title="새창 열림">▷K-POP 월드 페스타</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/gangreungcoffee.jpg" alt="2019년 제11회 강릉커피축제"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/gangreungcoffee.jpg" alt="2019년 제11회 강릉커피축제">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">2019년 제11회 강릉커피축제</p>
                                                    <p class="evt-bx-txt">
                                                        강릉커피의 특별한 맛의 이유! 강릉엔 신라시대의 차문화유적지가 있습니다.<br>
                                                        안목 강릉항의 커피거리는 강릉에서 나고자란 사람들에겐 측별한 추억의 장소입니다.<br>
                                                        커피스토리를 모아모아 강릉은 커피도시 강릉으로 성장했습니다.<br>
                                                        그 한가운데 강릉커피축제가 있고 올해의 축제는 친환경 축제로 한층 성장한 모습으로 다가서고 있습니다.<br>
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
                                        <p class="p-txt">2019년 제11회 강릉커피축제</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 10월 03일(목) ~ 06일(일)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">강릉시</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">강릉아이스아레나</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="http://www.coffeefestival.net" target="_blank" title="새창 열림">▷강릉커피축제</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/myungjudoll.jpg" alt="2019년 제6회 명주인형극제"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/myungjudoll.jpg" alt="2019년 제6회 명주인형극제">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">2019년 제6회 명주인형극제</p>
                                                    <p class="evt-bx-txt">
                                                        영동지역 어린이 대축제인 제6회 명주인형극제가 강릉 명주예술마당 일원에서 열립니다.<br>
                                                        20여개팀이 총 80여회 공연을 진행하며 손인형극, 종이컵인형극, 인형뮤지컬, 그림자 인형극 등<br class="hidden-smxs">다양한 장르의 인형극을 만나볼 수 있습니다.<br>
                                                        부대행사로 아이들이 다양한 경험을 할 수 있는 체험 프로그램과 전시 프로그램이 준비되어 있습니다.
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
                                        <p class="p-txt">2019년 제6회 명주인형극제</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 08월 07일(수) ~ 11일(일)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">명주인형극제추진위원회</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">명주예술마당, 작은공연장</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://www.gncc.or.kr/web2017/sub_06/6sub_2.php" target="_blank" title="새창 열림">▷명주인형극제</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/gangreungnight.jpg" alt="2019년 제7회 강릉 문화재야행"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/gangreungnight.jpg" alt="2019년 제7회 강릉 문화재야행">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">2019년 제7회 강릉 문화재야행</p>
                                                    <p class="evt-bx-txt">
                                                        문화재를 통해 월광에 물든 ‘신화’를 깨우다<br>
                                                        강릉 문화재야행은 강릉의 야간 문화재 향유 프로그램으로 야간에 보고 즐기는 문화재 및 공연, 전시 프로그램이 진행됩니다.<br>
                                                        해를 거듭할수록 전국적인 관심을 끌며 우리 지역을 대표하는 문화 축제로 활짝 피어나고 있습니다.
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
                                        <p class="p-txt">2019년 제7회 강릉 문화재야행</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 08월 02일(금) ~ 09월 28일(토)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">강릉문화원, 강릉시청</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">강릉대도호부관아, 명주동, 임당동 일원</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="http://www.gncn.or.kr" target="_blank" title="새창 열림">▷강릉 문화재야행</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/summerfest.jpg" alt="경포 썸머페스티벌 2019"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/summerfest.jpg" alt="경포 썸머페스티벌 2019">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">경포 썸머페스티벌 2019</p>
                                                    <p class="evt-bx-txt">
                                                        2019 경포 썸머페스티벌에서는 한국 관광1번지 경포해변에 라디오 공개방송과 K-pop공연이 준비됩니다.<br>
                                                        이를 통해 관광객 유치를 도모하고 명품해변으로 거듭나기 위한 볼거리, 즐길거리를 제공하는 행사를 진행합니다.
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
                                        <p class="p-txt">경포 썸머페스티벌 2019</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 07월 29일(월) ~ 08월 04일(일)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">강릉시</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">경포해변 특설무대</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://korean.visitkorea.or.kr/detail/fes_detail.do?cotid=2ce8194d-10bd-47f9-bafc-7d4a1e5eaccc" target="_blank" title="새창 열림">▷경포 썸머페스티벌</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/pungo.jpg" alt="제11회 풍호마을 연꽃축제"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/pungo.jpg" alt="제11회 풍호마을 연꽃축제">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">제11회 풍호마을 연꽃축제</p>
                                                    <p class="evt-bx-txt">
                                                        단풍나무 많은 호수라는 이름의 풍호마을의 연꽃축제는 바다기찻길을 끼고 있어 아름다운 풍경을 자랑합니다.<br>
                                                        풍호마을 연꽃축제는 자연 늪지에 만발한 연꽃으로 해마다 인기를 더하고 있습니다.<br>
                                                        연자공예, 연심기 등의 체험 프로그램과 달구지, 오리배, 갯배체험까지 많은 즐거움을 드립니다.
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
                                        <p class="p-txt">제11회 풍호마을 연꽃축제</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 07월 25일(목) ~ 28일(일)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">풍호마을</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">강동면 하시동3리 풍호마을</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://blog.naver.com/pinegn/221589159756" target="_blank" title="새창 열림">▷풍호마을 연꽃축제</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/event003.jpg" alt="강릉국제청소년예술축전"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/event003.jpg" alt="강릉국제청소년예술축전">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">2019년 제18회 강릉국제청소년예술축전</p>
                                                    <p class="evt-bx-txt">
                                                        경포 해변 특설무대와 강릉 단오문화관에서는 강릉 국제 청소년 예술축전을 만나볼 수 있습니다.<br>
                                                        러시아, 몽골, 인도네시아, 일본, 중국, 태국, 한국 등 여러 국가가 참가해 각 나라의 전통과<br class="hidden-smxs">
                                                        현대 공연 예술을 선보이는 축제의 장입니다.<br>
                                                        세계의 청소년들이 문화예술로 하나 되는 교류의 장을 경험해보는 것을 추천드립니다.<br>
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
                                        <p class="p-txt">2019년 제18회 강릉국제청소년예술축전</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 7월 25일(목) ~ 28일(일)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">강릉예총, 강원도, 강릉시, 강릉문화재단</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">강릉 경포해변무대</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://www.gn.go.kr/www/selectBbsNttView.do?key=260&bbsNo=14&nttNo=90737&searchCtgry=&searchCnd=all&searchKrwd=&pageIndex=1&integrDeptCode=" target="_blank" title="새창 열림">▷제18회 강릉국제청소년예술축전</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/event002.jpg" alt="강원도대표 청소년어울림마당 썸머 워터 페스티벌"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/event002.jpg" alt="강원도대표 청소년어울림마당 썸머 워터 페스티벌">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">2019 강원도대표 청소년어울림마당 썸머 워터 페스티벌</p>
                                                    <p class="evt-bx-txt">
                                                        강릉시청소년수련관에서 관내 청소년 및 시민을 대상으로 물놀이 체험, 체험마당, 놀이마당,<br class="hidden-smxs">
                                                        버스킹마당, 먹거리마당 등의 다채로운 행사가 진행됩니다.<br>
                                                        여름에 만나는 즐거운 청소년 행사에 많은 참여를 부탁드립니다.
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
                                        <p class="p-txt">2019 강원도대표 청소년어울림마당 썸머 워터 페스티벌</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 7월 27일(토) 13:00 ~ 18:00</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">여성가족부, 강원도, 강릉시</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">강릉시청소년수련관 앞마당</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://www.gn.go.kr/www/selectBbsNttView.do?key=260&bbsNo=14&nttNo=90846&searchCtgry=&searchCnd=all&searchKrwd=&pageIndex=1&integrDeptCode=" target="_blank" title="새창 열림">▷썸머 워터 페스티벌</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/event001.jpg" alt="국제 스폐셜 뮤직&amp;아트 페스티벌"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/event001.jpg" alt="국제 스폐셜 뮤직&amp;아트 페스티벌">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">2019 국제 스페셜 뮤직&amp;아트 페스티벌</p>
                                                    <p class="evt-bx-txt">
                                                        전 세계 발달장애아티스트들과 비장애인, 그리고 최고의 음악교수진이 함께 만들어가는 페스티벌입니다.<br>
                                                        예술교류, 도전, 희망, 열정, 스페셜 올림픽의 정신을 기조로<br class="hidden-smxs">
                                                        해마다 꾸준히 개최하며 공적인 발달장애인 축제로 자리매김하고 있습니다.
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
                                        <p class="p-txt">2019 국제 스페셜 뮤직&amp;아트 페스티벌</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 7월 15일(월) ~ 18일(목)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">(사)스페셜올림픽코리아</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">평창군 알펜시아 리조트 일대</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="http://specialmusicfestival.com/2019/" target="_blank" title="새창 열림">▷국제 스페셜 뮤직&amp;아트 페스티벌</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/beer.jpg" alt="경포 비치비어 페스티벌"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/beer.jpg" alt="경포 비치비어 페스티벌">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">경포 비치비어 페스티벌</p>
                                                    <p class="evt-bx-txt">
                                                        경포 비치비어 페스티벌이 2박 3일간 강릉 경포해변(중앙공원, 솔밭일대)에서 개최됩니다.<br>
                                                        본 행사는 친환경 캠페인과 다양한 개성의 국내 수제맥주 양조장들이 참가하여<br class="hidden-smxs"> 바다와 수제맥주를 함께 즐길 수 있는 해변축제입니다.
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
                                        <p class="p-txt">경포 비치비어 페스티벌</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 07월 12일(금) ~ 14일(일)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">경포비치비어페스티벌조직위원회</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">강릉 경포해변 중앙광장 일대</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://www.facebook.com/GangneungFestival/" target="_blank" title="새창 열림">▷경포 비치비어 페스티벌</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/dano.jpg" alt="2019 강릉 단오제"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/dano.jpg" alt="2019 강릉 단오제">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">2019 강릉 단오제</p>
                                                    <p class="evt-bx-txt">
                                                        단오를 중심으로 펼쳐지는 단오제는 신과 인간의 소통은 자연과 인간, 인간의 상생을 위한 휴먼드라마입니다.<br>
                                                        강릉단오제는 비교적 온전히 전승되고 있거나 고증을 통하여 원형 복원이 가능할 만큼 면면히 이어지고 있습니다.<br>
                                                        2005년에는 유네스코가 지정하는 인류구전 및 무형유산 걸작으로 등재되어 전 세계의 인류가 보존해야할 문화유산이 되었습니다.
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
                                        <p class="p-txt">2019 강릉 단오제</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 06월 03일(월) ~ 10일(월)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">(사)강릉단오제위원회</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">강릉시 남대천 단오장</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="http://www.danojefestival.or.kr" target="_blank" title="새창 열림">▷강릉 단오제</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/danojr.jpg" alt="2019 청소년 단오축제"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/danojr.jpg" alt="2019 청소년 단오축제">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">2019 청소년 단오축제</p>
                                                    <p class="evt-bx-txt">
                                                        강릉시청소년수련관과 강릉단오제위원회와 함께 강릉단오제 안에서 청소년이 주체가 되어 다양한 활동을 진행할 수 있습니다.<br>
                                                        2019 청소년 단오축제 D.Y.F (Dano Youth Festival)는. 청소년이 자신의 끼와 재능을 마음껏 뽐낼 수 있는 강릉 단오제 속 청소년의 공간!<br>
                                                        청소년이 함께 만들어 나가는 2019 청소년 단오축제 D.Y.F에 청소년 여러분을 초대합니다.
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
                                        <p class="p-txt">2019 청소년 단오축제</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 06월 08일(토) ~ 09일(일)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">강릉시청소년수련관, 강릉단오제위원회</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">강릉단오공권 및 수리마당</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="http://www.gwysc.or.kr/gnuboard4/bbs/board.php?bo_table=notice&wr_id=1367&sca=&sfl=wr_subject&stx=%EB%8B%A8%EC%98%A4&sop=and" target="_blank" title="새창 열림">▷청소년 단오축제</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/coffeetree.jpg" alt="강릉 커피나무축제 2019"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/coffeetree.jpg" alt="강릉 커피나무축제 2019">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">강릉 커피나무축제 2019</p>
                                                    <p class="evt-bx-txt">
                                                        강원도 강릉시 왕산면에 위치한 커피박물관 커피커퍼'는 우리나라 최대규모의 커피전문박물관입니다.<br>
                                                        우리나라에서 가장 많은 수의 커피유물을 보유하고 있고, 로스팅부터 분쇄, 추출에 이르기까지 다양한 동서양의<br class="hidden-smxs">
                                                        커피역사와 문화를 한자리에서 만나볼 수 있습니다.
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
                                        <p class="p-txt">강릉 커피나무축제 2019</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 05월 30일(목) ~ 06월 02일(일)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">(주)커피커퍼</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">커피커퍼뮤지엄 및 커피박물관 커피농장</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://korean.visitkorea.or.kr/detail/fes_detail.do?cotid=8ea1cc12-0717-4642-ae8c-59d5d65e15d5" target="_blank" title="새창 열림">▷강릉 커피나무축제</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/sanche.jpg" alt="강릉 소금강산채마을 산채푸드페스티벌 2019"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/sanche.jpg" alt="강릉 소금강산채마을 산채푸드페스티벌 2019">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">강릉 소금강산채마을 산채푸드페스티벌 2019</p>
                                                    <p class="evt-bx-txt">
                                                        소금강 푸른산과 계곡이 흐르는 소금강산채마을에서 오는 2일간, 산채푸드페스티벌이 열립니다.<br>
                                                        다양한 산채 먹을거리와 오감 체험행사들이 가득한 산채푸드페스티벌로 오시길 바랍니다.<br>
                                                        소금강유람 걷기대회, 산채요리대회, 체험, 나눔, 푸드마켓, 농부체험, 공연, 이벤트 등이 행사기간 매일 진행됩니다.
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
                                        <p class="p-txt">강릉 소금강산채마을 산채푸드페스티벌 2019</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 05월 25일(목) ~ 26일(일)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">강릉시</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">강원도 강릉시 연곡면 소금강길 8</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://korean.visitkorea.or.kr/detail/fes_detail.do?cotid=d2949990-4eb0-4cda-856e-62b30c151677" target="_blank" title="새창 열림">▷강릉 산채푸드페스티벌</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/durup.jpg" alt="강릉 해살이마을 개두릅축제 2019"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/durup.jpg" alt="강릉 해살이마을 개두릅축제 2019">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">강릉 해살이마을 개두릅축제 2019</p>
                                                    <p class="evt-bx-txt">
                                                        개두릅 축제는 엄나무의 순인 개두릅을 테마로 하여 개두릅 따기, 개두릅음식, 문설주만들기 체험등 다양한 체험들을 경험할수 있습니다.<br>
                                                        마을자체공연, 풍물놀이, 전통음악공연 등의 공연행사와 <br class="hidden-smxs">개두릅 새순따기, 엄나무 문설주 만들기, 떡메치기, 다도체험, 커피체험 등의 체험행사가 있습니다.
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
                                        <p class="p-txt">강릉 해살이마을 개두릅축제 2019</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 05월 19일(금) ~ 21일(일)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">강릉해살이 마을</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">강릉시 사천면 사기막리</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://korean.visitkorea.or.kr/detail/fes_detail.do?cotid=c1345244-d073-4774-add0-48d3f0dd8e44" target="_blank" title="새창 열림">▷강릉 해살이마을 개두릅축제</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/boksa.jpg" alt="강릉 복사꽃축제 2019"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/boksa.jpg" alt="강릉 복사꽃축제 2019">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">강릉 복사꽃축제 2019</p>
                                                    <p class="evt-bx-txt">
                                                        주문진읍 장덕리 복사꽃마을에서는 복사꽃 축제를 시작합니다.<br>
                                                        마을의 아름다운 모습을 빌딩 숲에서 지친 도시인들과 함께 나누기 위해 매년 봄 복사꽃축제를 개최합니다.<br>
                                                        자연과 함께 하는복사꽃마을에서 도시의 찌든 때를 벗고 축제를 즐기길 기원드립니다.
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
                                        <p class="p-txt">강릉 복사꽃축제 2019</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 04월 13일(토) ~ 14일(일)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">복사꽃마을운영위원회</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">주문진읍 장덕리 복사꽃마을</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://korean.visitkorea.or.kr/detail/fes_detail.do?cotid=ce741ef9-d437-47f9-8b0b-47c15bbabac0" target="_blank" title="새창 열림">▷강릉 복사꽃축제</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/flower.jpg" alt="강릉 경포벚꽃잔치 2019"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/flower.jpg" alt="강릉 경포벚꽃잔치 2019">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">강릉 경포벚꽃잔치 2019</p>
                                                    <p class="evt-bx-txt">
                                                        벚꽃축제는 강릉시의 대표 축제로 매년 많은 국,내외 관광객이 찾고 있습니다.<br>
                                                        경포대를 중심으로 경포호수를 둘러싼 4.3㎞ 호수의 아름다움을 이어가는 봄꽃 축제 향연의 장이 펼쳐집니다.<br>
                                                        꽃 축제 경연 전시 및 다양한 문화예술행사가 이어지는 꽃 세상을 이루는 축제에 많은 관람 부탁드립니다.
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
                                        <p class="p-txt">강릉 경포벚꽃잔치 2019</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2019년 04월 02일(화) ~ 07일(일)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">강릉시</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">경포호, 경포대·경포습지공원</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://korean.visitkorea.or.kr/detail/fes_detail.do?cotid=c0bc1627-6c0d-4e0f-ab2a-eafbb7504f05" target="_blank" title="새창 열림">▷강릉 경포벚꽃잔치</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/sunrise.jpg" alt="정동진 해맞이 축제 2019"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/sunrise.jpg" alt="정동진 해맞이 축제 2019">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">정동진 해맞이 축제 2019</p>
                                                    <p class="evt-bx-txt">
                                                        희망찬 새해 아침을 맞이하는 일출의 고장 강릉시에서는 정동진을 찾는 해돋이.<br>
                                                        관광객과 시민들에게 새해에도 변함없는 성원으로 희망이 넘쳐나는 소원의 일출을 선물합니다.<br>
                                                        동해안 최고의 해넘이, 해돋이 명소인 정동진에서 새해 기원과 새 출발을 다짐하는 행사에 참여하세요.
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
                                        <p class="p-txt">정동진 해맞이 축제 2019</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2018년 12월 31일(월) ~ 2019년 01월 01일(화)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">강릉시</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">정동진 모래시계 공원</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://korean.visitkorea.or.kr/detail/fes_detail.do?cotid=19e0a7a1-0a2d-4e27-9814-2409e7ac307e" target="_blank" title="새창 열림">▷정동진 해맞이 축제</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/sunrise2.jpg" alt="경포 해넘이, 해맞이 축제 2019"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/sunrise2.jpg" alt="경포 해넘이, 해맞이 축제 2019">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">경포 해넘이, 해맞이 축제 2019</p>
                                                    <p class="evt-bx-txt">
                                                        희망찬 새해 아침을 맞이하는 일출의 고장 강릉시.<br>
                                                        경포를 찾는 해돋이 관광객과 시민들에게 새해에도 변함없는 성원으로 희망이 넘쳐나는 소원의 일출을 선물하고 있습니다.<br>
                                                        2일간 동해안 최고의 해돋이 명소인 경포에서 새해 기원과 새 출발을 다짐하는 행사에 많은 참여바랍니다.
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
                                        <p class="p-txt">경포 해넘이, 해맞이 축제 2019</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2018년 12월 31일(월) ~ 2019년 01월 01일(화)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">강릉시</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">경포해변 중앙통로</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://korean.visitkorea.or.kr/detail/fes_detail.do?cotid=1b934aaa-e39b-47a6-8786-b8ec38d02a87" target="_blank" title="새창 열림">▷경포 해넘이, 해맞이 축제</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/bau.jpg" alt="강릉바우길 다 함께 걷기축제"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/bau.jpg" alt="강릉바우길 다 함께 걷기축제">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">강릉바우길 다 함께 걷기축제</p>
                                                    <p class="evt-bx-txt">
                                                        바우길은 백두대간에서 경포와 정동진까지 산맥과 바다를 함께 걷는 총 연장 약 400km길 입니다.<br>
                                                        강릉바우길 17개구간, 대관령바우길 2개 구간, 울트라 바우길, 계곡바우길, 아리바우길로 이루어져 있습니다.<br>
                                                        어느 길도 주말이면 어린 아이들을 앞세우고 온 가족이 함께 걸을 수 있는 솔향기 물씬한 길입니다.
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
                                        <p class="p-txt">강릉바우길 다 함께 걷기축제</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2018년 10월 27일(토)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">강릉시</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">모래시계 공원</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://www.baugil.org/" target="_blank" title="새창 열림">▷강릉바우길 다 함께 걷기축제</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/ee.jpg" alt="대현 율곡이선생제"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/ee.jpg" alt="대현 율곡이선생제">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">대현 율곡이선생제</p>
                                                    <p class="evt-bx-txt">
                                                        학자이자 관료, 나아가 교육자로서 일정한 성취를 이뤄낸 율곡 이이와 유물들은 숭앙의 대상이 되었습니다.<br>
                                                        이러한 존경의 표현은 후에 율곡 이이를 문묘에 배향하거나 자운서원, 송담서원 등 전국 여러 개의 서원에 배향하는 형태로 나타납니다.<br>
                                                        대현율곡이선생제(율곡제)는 문묘나 서원에 배향한 것과 같이 학덕을 추앙하고 유업을 선양하기 위해 봉행하는 제례입니다.
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
                                        <p class="p-txt">대현 율곡이선생제</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2018년 10월 25일(목) ~ 26일(금)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">강릉시</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">강릉시 죽헌동 오죽헌 경내</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://www.gn.go.kr/museum/contents.do?key=937" target="_blank" title="새창 열림">▷대현 율곡이선생제</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/chj.jpg" alt="강릉 소금강 청학제 2018"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/chj.jpg" alt="강릉 소금강 청학제 2018">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">강릉 소금강 청학제 2018</p>
                                                    <p class="evt-bx-txt">
                                                        지역주민의 풍작과 관광객들을 위한 재례를 올리고, 강릉농악공연, 줄다리기, 보물찾기 등의 다채로운 행사가 펼쳐집니다.<br>
                                                        또한, 등반대회는 사악협회가 주관하며, 가족 등반이 가능한 소금강내 순환코스를 선정하여 <br class="hidden-smxs">당일 참석자도 등산이 가능하도록 운영하고 있습니다.<br>
                                                        전야제 행사로는 캠프파이어, 축포, 놀이패 등의 산악축제도 베풀어지며 주말 이틀간에 걸쳐 치러집니다
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
                                        <p class="p-txt">강릉 소금강 청학제 2018</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2018년 10월 13일(토) ~ 14일(일)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">강원도 강릉시 연곡면</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">소금강야영장(오토캠핑장)</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://korean.visitkorea.or.kr/detail/fes_detail.do?cotid=2dfa2754-a24a-401b-85a3-1979bbf56744" target="_blank" title="새창 열림">▷강릉 소금강 청학제</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/kyosan.jpg" alt="2018 교산허균 문화제"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/kyosan.jpg" alt="2018 교산허균 문화제">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">2018 교산허균 문화제</p>
                                                    <p class="evt-bx-txt">
                                                        교산 허균에 대한 추모제례. 백일장. 솔밭음악회, 시장송회, 홍길동 관련 자료 전시등 다체로운 행사가 진행됩니다.<br>
                                                        이를 통해 교산 허균에 대한 이해를 새롭게 하는 계기를 마련하였습니다.<br>
                                                        많은 분들의 마음속에 강릉의 선각지임을 자랑스럽게 자리매김하게 될 것입니다.
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
                                        <p class="p-txt">2018 교산허균 문화제</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2018년 10월 06일(토) ~ 09일(화)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">강릉시</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">허균허난설헌기념공원</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="http://www.hongkildong.or.kr" target="_blank" title="새창 열림">▷교산허균 문화제</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/ojo.jpg" alt="주문진 오징어 축제 2018"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/ojo.jpg" alt="주문진 오징어 축제 2018">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">주문진 오징어 축제 2018</p>
                                                    <p class="evt-bx-txt">
                                                        오징어 축제는 생생한 항구의 모습을 그대로 느낄 수 있도록 오징어 수확기에 맞추어 진행됩니다.<br>
                                                        맨손 오징어잡기, 오징어 낚시 체험, 오징어 축 잡기체험, 오징어 회 썰기, 얼음속 오징어를 찾아라, 오징어 요리 무료 시식회 등<br>
                                                        오징어 요리전시 및 각종 기념행사와 관람객이 직접 참여하는 다양한 이벤트가 가득합니다.
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
                                        <p class="p-txt">주문진 오징어 축제 2018</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2018년 10월 04일(목) ~ 07일(일)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">주문진 오징어축제 위원회</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">주문진항내 물량장</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://korean.visitkorea.or.kr/main/main.do" target="_blank" title="새창 열림">▷주문진 오징어 축제</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/jmj.jpg" alt="주문진 해수욕장 축제 2018"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/jmj.jpg" alt="주문진 해수욕장 축제 2018">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">주문진 해수욕장 축제 2018</p>
                                                    <p class="evt-bx-txt">
                                                        크고 작은 어촌마을과 솔숲과 바다가 어우러진 아름다운 길이 펼쳐지는 주문진 해변.<br>
                                                        무더위를 피해 시원한 바닷가를 찾아 떠나는 사람들에게 더위를 날려줄 오징어 맨손잡기 등 다양한 체험행사,<br>
                                                        밸리댄스,힙합 공연 등의 다양한 볼거리로 잊지 못할 추억을 선사할 것입니다.
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
                                        <p class="p-txt">주문진 해수욕장 축제 2018</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2018년 08월 04일(토) ~ 05일(일)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">주문진해수욕장운영위원회</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">주문진 해수욕장</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://korean.visitkorea.or.kr/detail/fes_detail.do?cotid=5444d6f2-c010-4f54-814b-08ecce0f505c" target="_blank" title="새창 열림">▷주문진 해수욕장 축제</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="evt-item">
                            <div class="bxBox">
                                <ul class="bxS fnBxSlider">
                                    <li class="li-1"><img src="http://img.hotelairsky.co.kr/svc/img/event/mwj.jpg" alt="강릉 망월제 2018"></li>
                                    <li class="li-2">
                                        <img src="http://img.hotelairsky.co.kr/svc/img/event/mwj.jpg" alt="강릉 망월제 2018">
                                        <div class="evt-bx-box">
                                            <div class="evt-txt-box">
                                                <div class="evt-txt-container">
                                                    <p class="evt-bx-tit">강릉 망월제 2018</p>
                                                    <p class="evt-bx-txt">
                                                        매년 행하던 달맞이 행사를 시민축제로 확대하여 달맞이, 제례, 민속놀이 등의 행사를 진행됩니다.<br>
                                                        행사는 남대천에서 이루어지며 인근에서는 어부식과 다리밟기 등의 풍성한 민속행사를 엿볼수 있습니다.
                                                        이 밖에도 연날리기, 윷놀이, 관노가면극 등을 즐기면서 개인과 마을 전체의 풍요와 안녕을 기원하는 행사입니다.
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
                                        <p class="p-txt">강릉 망월제 2018</p>
                                    </li>
                                    <li class="nth-2 t-half">
                                        <p class="p-lbl">일정</p>
                                        <p class="p-txt">2018년 03월 02일(금)</p>
                                    </li>
                                    <li class="nth-3 t-half">
                                        <p class="p-lbl">주최</p>
                                        <p class="p-txt">강릉시, 임영민속연구회</p>
                                    </li>
                                    <li class="nth-4 t-half">
                                        <p class="p-lbl">장소</p>
                                        <p class="p-txt">강릉시 성내동 남대천</p>
                                    </li>
                                    <li class="nth-5 t-half">
                                        <p class="p-lbl">추가정보</p>
                                        <p class="p-txt"><a href="https://korean.visitkorea.or.kr" target="_blank" title="새창 열림">▷강릉 망월제</a></p>
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
    <script src="/static/svc/js/jquery.bxslider.min.js"></script>
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