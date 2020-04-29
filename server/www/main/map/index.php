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

    <div class="sub value_map">
        <div class="sub_top_menu">
            <h4 class="page_title">오시는길</h4>
            <h6 class="page_sub_title">아름다운 푸른 동해가 호텔 바로 앞에 펼쳐져 있는 에어스카이호텔로 초대합니다.</h6>
            <ul class="menu_wrap container">
                <!-- 해당 탭 url일 경우, 클래스 active -->
                <li class="menu_item"><a href="/main/about/index.php">호텔소개</a></li>
                <li class="menu_item"><a href="/main/factsheet/index.php">시설개요</a></li>
                <li class="menu_item"><a href="/main/map/index.php">오시는길</a></li>
                <li class="menu_item"><a href="/brd/list/notice.php">주차장 이용안내</a></li>
            </ul>
        </div>

        <div class="value_map_info container">
            <div class="value_map_info_top">
                <div class="value_map_info_item_wrap">
                    <!-- <div class="map_address">
                        <p><strong>주소</strong>강원도 강릉시 주문진읍 주문로 59</p>
                        <p><strong>이메일</strong>valuehotelgangneung@ebiznetworks.co.kr</p>
                        <p><strong>전화</strong>1666-1243</p>
                    </div> -->
                    <div id="map_box" class="map_box">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.7212718890446!2d126.57833481558689!3d37.490903336213094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b8380dfed09a3%3A0x296b52d238bffe7a!2sRGB%20Sky%20Hotel!5e0!3m2!1sko!2skr!4v1587536382866!5m2!1sko!2skr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3148.759197354018!2d128.82323025128431!3d37.88931377963933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3561e2d3f94e13d3%3A0xdcb5349835d460e7!2z67C466WY7Zi47YWU6rCV66aJ!5e0!3m2!1sko!2skr!4v1560937272528!5m2!1sko!2skr" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                    </div>
                    <br>
                    <table class="map-tbl">
                        <colgroup>
                            <col>
                            <col>
                        </colgroup>
                        <tr>
                            <th>도로명주소</th>
                            <td>22410 인천광역시 중구 은하수로29번길 31</td>
                        </tr>
                        <tr>
                            <th>지번주소</th>
                            <td>22410 인천 중구 중산동 1952-4</td>
                        </tr>
                        <tr>
                            <th>대표번호</th>
                            <td>031) 720-6200(프론트), 1666-1243(예약실)</td>
                        </tr>
                        <tr>
                            <th>주변버스 정류장</th>
                            <td>
                                영종선착장 정류장 (100미터 거리 / 도보 2분) - 사내버스 203번 / 마을버스 중구3번<br>
                                영종선착장 정류장 (300미터 거리 / 도보 5분) - 사내버스 205번 / 마을버스 중구3번<br>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="value_map_info_item">
                <div class="value_map_info_item_wrap">
                    <p><strong>자가용 이용 시</strong></p>
                    <div class="sh_small_wrapper">
                        <div class="sh_small c-black title">
                            ▶인천국제공항고속도로 이용 시
                        </div>
                        <div class="sh_small c-black">
                            인천국제공항고속도로 금산IC(중산동, 영종하늘도시 방면) - 자연대로(운남교차로 방면) - 영종대로 방면 삼거리(좌회전) - 은하수로(우회전) - 은하수로 29번길 (우회전) - 호텔 도착
                        </div>
                        <div class="sh_small c-black title">
                            ▶제2경인고속도로 이용 시
                        </div>
                        <div class="sh_small c-black">
                            제2경인고속도로 영종IC(영종동, 영종선착장, 용유동, 무의’ 방면 - 그린나래지하차도 진입(하늘대로) - 해찬나래지하차도 오른쪽 옆 길 - 6.7단지 방면 자연대로(우회전) -
                            영종대로 방면 삼거리(좌회전) - 은하수로(우회전) - 은하수로 29번길 (우회전) - 호텔 도착
                        </div>
                        <div class="sh_small c-black title">
                            ▶인천공항에서 출발 시
                        </div>
                        <div class="sh_small c-black">
                            공항로 - 신불IC에서 영종IC(송도)방면 - 영종해안남로 - ‘영종IC, 송도, 인천대교’ 방면(좌회전) - 하늘대로 - 그린나래지하차도 진입(하늘대로) - 해찬나래지하차도 오른쪽 옆 길 -
                            6.7단지 방면 자연대로(우회전) - 영종대로 방면 삼거리(좌회전) - 은하수로(우회전) - 은하수로 29번길 (우회전) - 호텔 도착
                        </div>
                    </div>
                </div>
            </div>
            <div class="value_map_info_item">
                <div class="value_map_info_item_wrap">
                    <p><strong>공항철도 이용 시</strong></p>
                    <div class="sh_small_wrapper">
                        <div class="sh_small c-black title">
                            ▶서울역 - 영종역 (첫차 05:20, 막차 24:00)
                        </div>
                        <div class="sh_small c-black title">
                            ▶영종역 - 서울역 (첫차 05:20, 막차 23:57)
                        </div>
                        <div class="sh_small c-black">
                            - 직통열차 이용 시 43분 소요 / 일반열차 이용 시 53분 소요
                        </div>
                        <div class="sh_small c-black title">
                            ▶공항철도 영종역 - 호텔 : 약 6km (10분 거리)
                        </div>
                        <div class="sh_small c-black title">
                            ▶자기부상열차 : 인천국제공항역 - 공항철도로 환승 - 영종역
                        </div>
                        <div class="sh_small">
                            <a href="https://www.arex.or.kr/station/info.do?stnCd=077&menuNo=MN201603240000000001&langCd=ko_KR&device=Normal" target="_blank" rel="noopener noreferrer" class="subwaytime-btn">공항철도 시간표</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" value_map_info_item margin-bottom-30">
                <div class="value_map_info_item_wrap">
                    <p><strong>대중교통 이용 시 (영종역 / 인천공항)</strong></p>
                    <div class="sh_small_wrapper">
                        <div class="sh_small c-black title">▶공항철도 ‘영종역’ 1번 출구</div>
                        <div class="sh_small c-black">- 3번 버스 승차 - ‘영종선착장정류장’ 하차 - 호텔 도착(도보3분)</div>
                        <div class="sh_small c-black title">▶공항철도 ‘영종역’ 1번 출구</div>
                        <div class="sh_small c-black">- 건너편 - 598번, 202번 버스 탑승 - 힐스테이트 하차. 건너편에서 203번 버스 환승 - ‘영종선착장’ 정류장 하차 - 호텔 도착(도보 3분)</div>
                        <div class="sh_small c-black title">▶공항철도 ‘영종역’ 1번 출구</div>
                        <div class="sh_small c-black">- 건너편 - 223번 버스 승차 - ‘중산중학교’ 하차. 건너편에서 203번 버스 환승 - ‘영종선착장’ 정류장 하차 - 호텔 도착(도보 3분)</div>
                        <div class="sh_small c-black title">▶인천공항 3층</div>
                        <div class="sh_small c-black">- 202번 버스 - ‘힐스테이트역’ 하차. 건너편에서 203번 버스 환승 - ‘영종선착장정류장’ 하차 - 호텔 도착(도보 3분)</div>
                    </div>
                </div>
            </div>
            <div class=" value_map_info_item margin-bottom-30">
                <div class="value_map_info_item_wrap">
                    <p><strong>주요거점 오시는 길</strong></p>
                    <div class="sh_small_wrapper">
                        <div class="sh_small c-black title">▶서울에서 오시는 길</div>
                        <div class="sh_small c-black">- 자가용 (45분 소요) : 자유로 - 인천국제공항고속도로 - 자연대로 이용</div>
                        <div class="sh_small c-black">- 대중교통 (2시간 소요) : 서울고속버스터미널 - 인천종합터미널 - 304번 버스(종합터미널) - 203번 버스(신명스카이뷰정문) - 영종선착장 정류장 하차 - 호텔 도착(도보3분)</div>
                        <div class="sh_small c-black title">▶대전에서 오시는 길</div>
                        <div class="sh_small c-black">- 자가용 (2시간 소요) : 경부고속도로 - 수도권제2순환고속도로(봉담-동탄) - 평택파주고속도로(수원-광명) 이용</div>
                        <div class="sh_small c-black">- 대중교통 (3시간 20분 소요) : 대전복합터미널 - 인천종합터미널 - 304번 버스(종합터미널) - 203번 버스(신명스카이뷰정문) - 영종선착장 정류장 하차 - 호텔 도착(도보3분)</div>
                        <div class="sh_small c-black title">▶대구에서 오시는 길</div>
                        <div class="sh_small c-black">- 자가용 (3시간 소요) : 경부고속도로 - 중부내륙고속도로 - 영동고속도로 이용</div>
                        <div class="sh_small c-black">- 대중교통 (3시간 40분 소요) : 동대구터미널 - 인천종합터미널 - 304번 버스(종합터미널) - 203번 버스(신명스카이뷰정문) - 영종선착장 정류장 하차 - 호텔 도착(도보3분)</div>
                        <div class="sh_small c-black title">▶광주에서 오시는 길</div>
                        <div class="sh_small c-black">- 자가용 (3시간 20분 소요) : 호남고속도로 - 서해안고속도로 - 평택시흥고속도로 이용</div>
                        <div class="sh_small c-black">- 대중교통 (3시간 30분 소요) : 광주종합버스터미널 - 인천종합터미널 - 304번 버스(종합터미널) - 203번 버스(신명스카이뷰정문) - 영종선착장 정류장 하차 - 호텔 도착(도보3분)</div>
                        <div class="sh_small c-black title">▶부산에서 오시는 길</div>
                        <div class="sh_small c-black">- 자가용 (4시간 20분 소요) : 경부고속도로 - 상주영천고속도로 - 중부내륙고속도로 - 영동고속도로 이용</div>
                        <div class="sh_small c-black">- 대중교통 (4시간 소요) : 부산종합버스터미널 - 인천종합터미널 - 304번 버스(종합터미널) - 203번 버스(신명스카이뷰정문) - 영종선착장 정류장 하차 - 호텔 도착(도보3분)</div>
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
</body>

</html>