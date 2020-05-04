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

<body class="page-rooms">

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
                                    <li><a href="/rooms/detail_new/pr_oc_db.php">프리미어 오션 더블</a></li>
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

    <div class="sub room_detail">
        <div id="slider_room" class="slider_container room">
            <div data-u="slides" class="slides">
                <div data-p="112.50"><img data-u="image" class="room-visibility" src="http://img.hotelairsky.co.kr/svc/img/rooms/pr_oc_db/001.jpg" alt="객실사진" /></div>
                <div data-p="112.50"><img data-u="image" class="room-visibility" src="http://img.hotelairsky.co.kr/svc/img/rooms/pr_oc_db/002.jpg" alt="객실사진" /></div>
                <div data-p="112.50"><img data-u="image" class="room-visibility" src="http://img.hotelairsky.co.kr/svc/img/rooms/pr_oc_db/003.jpg" alt="객실사진" /></div>
                <div data-p="112.50"><img data-u="image" class="room-visibility" src="http://img.hotelairsky.co.kr/svc/img/rooms/comm_01.jpg" alt="객실사진" /></div>
                <div data-p="112.50"><img data-u="image" class="room-visibility" src="http://img.hotelairsky.co.kr/svc/img/rooms/comm_03.jpg" alt="객실사진" /></div>
                <div data-p="112.50"><img data-u="image" class="room-visibility" src="http://img.hotelairsky.co.kr/svc/img/rooms/comm_04.jpg" alt="객실사진" /></div>
                <div data-p="112.50"><img data-u="image" class="room-visibility" src="http://img.hotelairsky.co.kr/svc/img/rooms/comm_05.jpg" alt="객실사진" /></div>
                <div data-p="112.50"><img data-u="image" class="room-visibility" src="http://img.hotelairsky.co.kr/svc/img/rooms/comm_06.jpg" alt="객실사진" /></div>
                <div data-p="112.50"><img data-u="image" class="room-visibility" src="http://img.hotelairsky.co.kr/svc/img/rooms/comm_07.jpg" alt="객실사진" /></div>
            </div>
            <span u="arrowleft" class="jssor-sprite arow-left" style="width: 21px; height: 32px; top: 290px; left: 20px;"></span>
            <span u="arrowright" class="jssor-sprite arow-right" style="width: 21px; height: 32px; top: 290px; right: 20px"></span>
        </div>

        <div class="sub_top_menu">
            <h4 class="page_title">프리미어 오션 더블</h4>
            <h6 class="page_sub_title">특별한 하루를 만들어줄 객실은 천장부터 바닥 까지 탁월한 인테러리어 조화로 구성되어 있습니다.<br>연인, 친구, 가족 2인 여행객들에게 적합한 더블타입 베드를 제공합니다.</h6>
            <!-- menu_item 해당 페이지 active 클래스 추가 -->
            <ul class="menu_wrap container">
                <li class="menu_item"><a href="std_db.php">스탠다드 더블</a></li>
                <li class="menu_item"><a href="std_tw.php">스탠다드 트윈</a></li>
                <li class="menu_item"><a href="dx_oc_db.php">디럭스 오션 더블</a></li>
                <li class="menu_item"><a href="dx_oc_tw.php">디럭스 오션 트윈</a></li>
                <li class="menu_item"><a href="dx_oc_ondol.php">디럭스 오션 온돌</a></li>
                <!-- <li class="menu_item hidden-mdlg"><a href="dx_familytwin.php">디럭스 패밀리트윈</a></li> -->
            </ul>
            <ul class="menu_wrap container">
                <!-- <li class="menu_item hidden-smxs"><a href="dx_familytwin.php">디럭스 패밀리트윈</a></li> -->
                <li class="menu_item active"><a href="pr_oc_db.php">프리미어 오션 더블</a></li>
                <li class="menu_item"><a href="pr_oc_tw.php">프리미어 오션 트위</a></li>
                <li class="menu_item"><a href="pr_oc_famtw.php">프리미어 오션 패밀리 트윈</a></li>
                <li class="menu_item"><a href="suite.php">스위트</a></li>
            </ul>
        </div>

        <div class="container">
            <div class="detail box_center">
                <div class="box_right">
                    <h3>RESERVATION</h3>
                    <form method="get" name="myForm" id="myForm" action="https://be.wingsbooking.com/ko/VHG1/redirect">
                        <div class="s_input">
                            <input type="text" name="checkIn" class="datepicker_in" value="2019-06-18" placeholder="Check in" readonly />
                            <i class="icon-12 label"></i>
                        </div>
                        <div class="s_input">
                            <input type="text" name="checkOut" class="datepicker_ot" value="2019-06-19" placeholder="Check out" readonly />
                            <i class="icon-12 label"></i>
                        </div>
                        
                        <div class="s_input">
                            <button type="button" class="s_btn_gray b_100" onclick="on_submit()"><i class="icon-113"></i> SEARCH</button>
                        </div>
                    </form>
                </div>
                <div class="box_left">
                    <!-- <button class="amenity_more tooltip" onclick="amenity_more()" title="더보기"><span>+</span></button> -->
                    <div class="amenitys">
                        <!-- <div class="amenity_box">
        <i class="amenity-RB002 tooltip" title="커피/티"></i>
        <p>커피/티</p>
    </div> -->
                        <div class="amenity_box">
                            <i class="amenity-ZE002 tooltip" title="생수2병무료"></i>
                            <p>생수2병무료</p>
                        </div>
                        <div class="amenity_box">
                            <i class="amenity-ZD001 tooltip" title="USB충전단자"></i>
                            <p>USB충전단자</p>
                        </div>
                        <div class="amenity_box">
                            <i class="amenity-KB002 tooltip" title="개별냉난방"></i>
                            <p>개별냉난방</p>
                        </div>
                        <div class="amenity_box">
                            <i class="amenity-MC001 tooltip" title="오리/거위털 이불"></i>
                            <p>오리/거위털 이불</p>
                        </div>
                        <div class="amenity_box">
                            <i class="amenity-LC001 tooltip" title="무료 WIFI"></i>
                            <p>무료 WIFI</p>
                        </div>
                        <div class="amenity_box">
                            <i class="amenity-CC001 tooltip" title="객실 내 온도 조절기"></i>
                            <p>객실 내 온도 조절기</p>
                        </div>
                        <!-- <div class="amenity_box">
        <i class="amenity-XB001 tooltip" title="객실금고"></i>
        <p>객실금고</p>
    </div> -->
                        <!-- <div class="amenity_box">
        <img src="http://img.hotelairsky.co.kr/svc/img/icon/ico_balcony.png" alt="발코니">
        <p>발코니</p>
    </div> -->
                        <div class="amenity_box">
                            <img src="http://img.hotelairsky.co.kr/svc/img/icon/ico_coffeeport.png" alt="커피포트">
                            <p>커피포트</p>
                        </div>
                        <div class="amenity_box">
                            <img src="http://img.hotelairsky.co.kr/svc/img/icon/ico_bidet.png" alt="비데">
                            <p>비데설치</p>
                        </div>
                    </div>
                    <div class="description">
                        <div class="title">
                            <h5>ROOM QUICKVIEW</h5>
                        </div>
                        <div class="cont">
                            <ul class="c_list">
                                <li>객실 크기 : 22.8㎡ (6.9평)</li>
                                <li>침대 타입 : 더블</li>
                                <li>객실당 인원 : 기준 인원 2인, 최대 인원 2인</li>
                            </ul>
                        </div>
                    </div>

                    <div class="description">
                        <div class="title">
                            <h5>ROOM FACILITIES</h5>
                        </div>
                        <div class="cont">
                            <ul class="c_list">
                                <li>어메니티 : 샴푸, 바디워시, 컨디셔너, 로션, 빗</li>
                                <li>LED TV(43인치)</li>
                                <li>비데</li>
                                <li>전기포트</li>
                                <li>냉장고</li>
                                <li>WiFi Free(무선인터넷 무료)</li>
                                <li>생수 2병, 커피·녹차 티백 제공</li>
                                <li>코튼 가운 (면 100%)</li>
                                <li>슬리퍼</li>
                                <li>헤어드라이기</li>
                            </ul>
                        </div>
                    </div>
                    <div class="description">
                        <div class="title">
                            <h5>SERVICE & BENEFIT</h5>
                        </div>
                        <div class="cont">
                            <!-- <ul class="c_list">
            <li>체크인 15:00 / 체크아웃 : 11:00</li>
            <li>객실요금 : 10% 세금별도 <br />
                객실요금 은 예약 상황에 따라 변동 될 수 있습니다.<br />
                단체 요금은 별도로 정해집니다. (예약실 문의)<br />
            </li>
            <li>
                <b>[추가 요금] Late Check-out & Early Check-in</b><br />Late Check-out (레이트 체크아웃)<br />
            </li>
            <li>12시 (정오) 퇴실~오후 14시 퇴실 : 당일 Bar rate 30% 부과</li>
            <li>오후 14시 퇴실~오후 17시 퇴실 : 당일 Bar rate 50% 부과</li>
            <li>오후 17시 이후 퇴실 : 당일 Bar rate 100% 부과</li>
            <li>Early Check-in (얼리 체크인)</li>
            <li>12시 (정오) 입실~오후 15시 입실 : Bar rate 30% 부과</li>
            <li>오전 9시 이후 입실 ~오후 12시 입실 : Bar rate 50% 부과</li>
            <li>오전 9시 이전 입실 : Bar rate 100% 부과</li>
            <li>
                조식요금 (10% 세금 포함) : 조식 이용 일자 기준<br />
                * 주중(월-금)성인 : KRW 11,000<br />
                * 주말(토-일&휴일)성인 : KRW 22,000<br />
                * 주중소인 (만 7세 이상 ~ 만 12세 이하) : KRW 7,700<br />
                * 주말소인 (만 7세 이상 ~ 만 12세 이하) : KRW 11,000<br />
                ※ 부모를 동반한 만 7세 미만 (미취학 아동) : 무료 (최대 2명)
            </li>
            <li>생수 2병 제공 및 in-room cafe (티, 커피) 무료 제공</li>
            <li>전 객실 금연</li>
            <li>주차: 투숙객(무료), 호텔부대시설 이용 고객 (입차 후 3시간 까지 무료)</li>
            <li>일반 수영장: 별도 요금으로 이용가능</li>
            <li> 인피니트 수영장 - 별도 요금으로 이용가능(준비중)
            </li>
        </ul> -->
                            <!-- <ul class="c_list">
            <li>체크인 (입실) 15:00 / 체크아웃 (퇴실) : 11:00</li>
            <li>[안내사항] 늦은 퇴실 또는 빠른 입실시 다음의 추가요금이 부과됩니다.</li>
            <li>늦은 퇴실시 부과요금 (레이트 체크아웃)</li>
            <li class="dot-no">※ 12시~14시 퇴실시 : 당일 요금의 30% 부과</li>
            <li class="dot-no">※ 14시~17시 퇴실시 : 당일 요금의 50% 부과</li>
            <li class="dot-no">※ 17시 이후 퇴실시 : 당일 요금의 100% 부과</li>
            <li>빠른 입실시 부과요금 (얼리 체크인)</li>
            <li class="dot-no">※ 12시~15시 입실시 : 당일 요금의 30% 부과</li>
            <li class="dot-no">※ 09시~12시 입실시 : 당일 요금의 50% 부과</li>
            <li class="dot-no">※ 09시 이전 입실시 : 당일 요금의 100% 부과</li>
            <li>전 객실 금연</li>
            <li>생수 2병 제공 및 객실 내 티, 커피 무료 제공</li>
            <li>전 객실 발코니 및 비데기기 보유</li>
            <li>주차 : 투숙객(무료), 호텔부대시설 이용 고객 (입차 후 3시간 까지 무료)</li>
            <li>객실요금은 예약 상황에 따라 변동 되며 단체 요금은 별도로 안내해드립니다. (예약실 문의)</li>
            <li><a href="http://seabay.co.kr/restaurant/?r=valueplate">조식의 이용안내는 [여기] 를 참고해 주세요. (밸류플레이트)</a></li>
            <li><a href="http://seabay.co.kr/facilities/?r=swimmingpool">수영장의 이용안내는 [여기] 를 참고해 주세요. (패밀리풀 / 인피니티풀)</a></li>
        </ul> -->

                            <ul class="c_list">
                                <li>체크인 (입실) 15:00 / 체크아웃 (퇴실) 11:00</li>
                                <li>호텔 내 애완동물은 동반 불가합니다.</li>
                                <li>전 객실은 금연입니다.</li>
                                <li>[안내사항] 늦은 퇴실 또는 빠른 입실시 다음의 추가요금이 부과됩니다.</li>
                                <li>늦은 퇴실시 부과요금 (레이트 체크아웃)</li>
                                <li class="dot-no">※ 11시~12시 퇴실시 : 무료이용</li>
                                <li class="dot-no">※ 12시~17시 퇴실시 : 시간 상관없이 50,000원</li>
                                <li class="dot-no">※ 17시 이후 퇴실시 : 당일 요금의 100% 부과</li>
                                <li class="dot-no">※ 호텔 상황에 따라 유동적일 수 있음</li>
                                <li>빠른 입실시 부과요금 (얼리 체크인)</li>
                                <li class="dot-no">※ 호텔 상황에 따라 유동적일 수 있음</li>
                                <li>에어스카이호텔 GO GREEN 정책</li>
                                <li class="dot-no">에어스카이호텔은 환경보호를 위해 고그린 정책에 동참하고 있습니다.</li>
                                <li class="dot-no">환경보호의 일환으로 연박고객님의 경우, 별도의 객실정비를 진행하지 않습니다.</li>
                                <li class="dot-no">필요한 물품(수건, 생수 등)은 프론트에서 교체 제공해 드리고 있으니 이용에 참고하시기 바랍니다.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="description">
                        <div class="title">
                            <h5>RESERVATION & CANCELLATION</h5>
                        </div>
                        <div class="cont">
                            <ul class="c_list">
                                <li>
                                    예약문의: 1666-1243
                                </li>
                                <li>
                                    E-mail: airskyhotel@ebiznetworks.co.kr
                                </li>
                                <li>
                                    취소/환불 규정<br>* 비수기/연휴/성수기 공통 <br>
                                    <table class="detail_table">
                                        <tr>
                                            <td>체크인 15일 이전 취소</td>
                                            <td class="font-red">90%환불</td>
                                        </tr>
                                        <tr>
                                            <td>체크인 10일 이전 취소</td>
                                            <td class="font-red">80%환불</td>
                                        </tr>
                                        <tr>
                                            <td>체크인 7일 이전 취소</td>
                                            <td class="font-red">60%환불</td>
                                        </tr>
                                        <tr>
                                            <td>체크인 6일 이전 취소</td>
                                            <td class="font-red">30%환불</td>
                                        </tr>
                                        <tr>
                                            <td>체크인 5일전~당일취소<span class="font-red">(No Show)</span></td>
                                            <td class="font-red">환불불가</td>
                                        </tr>
                                    </table>
                                    * 체크인 시간 기준 : 당일 15시 입실 기준<br>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.description -->
                    <!-- <div class="policies">
    <div class="title">
        <h5>HOW TO GET TO HERE</h5>
    </div>
    <div class="cont">
        <div class="btn_box">
            <a class="b_btn_darkgray" href="../../main/map/index.php">상세 정보 확인하기</a>
        </div>
    </div>
</div> -->
                    <!-- /.policies -->
                </div>
                <!-- /.box_left -->
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