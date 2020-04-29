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

    <link rel="stylesheet" href="http://static.go.co.kr/css/mobile_layout_goco.css" type="text/css">
    <link rel="stylesheet" href="http://static.seabay.co.kr/svc/css/rent/init_m.css">
    <!-- <link rel="stylesheet" href="/static/svc/css/rent/init_m.css"> -->

    <link rel="stylesheet" href="http://static.go.co.kr/css/swiper.min.css" type="text/css">
    <script type="text/javascript" src="http://static.go.co.kr/js/swiper.min.js"></script>
</head>

<body class="page-rent">

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

    <!-- 190109 .type-2 클래스 추가 -->
    <table id="product_info" class="type-2">
        <colgroup>
            <col width="25%">
            <col width="75%">
        </colgroup>
        <tbody>
            <tr>
                <!-- 스타일 수정 -->
                <td colspan="2" height="35" class="product_info_title" style="padding:0; font-weight:bold; font-size:16px; text-align: center; color: #000; background: #fff">
                    7일부터 6개월까지 이용가능!
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table class="roomINFO" width="100%">
                        <colgroup>
                            <col width="40%">
                            <col width="30%">
                            <col width="30%">
                        </colgroup>
                        <tbody>
                            <tr>
                                <td class="tit">상품정보</td>
                                <td class="tit">숙박기간</td>
                                <td class="tit">특혜</td>
                            </tr>
                            <tr class="bd-b0">
                                <th rowspan="4">
                                    수페리어<br>
                                    디럭스<br>
                                    프리미어 디럭스<br>
                                    스위트룸
                                </th>
                                <th>7일
                                </th>
                                <td rowspan="4" style="font-weight:bold; letter-spacing: -1px; color:#ff0000;">
                                    <span style="font-size:14px;">공과금 일체 포함</span>
                                    <span style="display: block; font-size:10px;">(전기,수도,가스요금 등)</span>
                                </td>
                            </tr>
                            <tr class="bd-b0">
                                <th>14일</th>
                            </tr>
                            <tr class="bd-b0">
                                <th>1개월</th>
                            </tr>
                            <tr class="bd-b0">
                                <th>6개월</th>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <script type="text/javascript">
                $(function() {
                    $("input[name='rent_checkin']").val($(".sdate").val());
                    $("input[name='rent_checkout']").val($(".edate").val());
                    $("input[name='rent_r_no']").val($(":input:radio[name=room_type]:checked").val());


                    $(".sdate").datepicker({
                        dateFormat: "yy-mm-dd",
                        showAnim: "slideDown",
                        dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
                        minDate: "2019-01-09",
                        changeMonth: true,
                        changeYear: true,

                    });


                    $('.sdate').datepicker("option", "onClose", function(selectedDate) {
                        edate = ($(".sdate").val()).split("-");
                        var dt = new Date(edate[1] + "/" + edate[2] + "/" + edate[0]);
                        var day = dt.getDate();
                        var month = (dt.getMonth()) + 1;
                        var year = dt.getFullYear();

                        dt.setDate(dt.getDate() + 1);
                        day = dt.getDate();
                        month = (dt.getMonth()) + 1;
                        year = dt.getFullYear();

                        edate_val = year + "-" + month + "-" + day;
                        $(".edate").datepicker("option", "minDate", edate_val);
                    });
                    $('.edate').datepicker("option", "minDate", $(".sdate").val());
                    $("#nseldate").datepicker({
                        dateFormat: "yy-mm-dd",
                        showAnim: "slideDown",
                        dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
                        minDate: "2019-01-10",
                        changeMonth: true,
                        changeYear: true
                    });
                });

                function rent_price() {
                    $.ajax({
                        type: "POST",
                        url: "./state.php",
                        data: $("form[name='rent_form']").serialize(),
                        success: function(e) {
                            var res = e.split("||");
                            $("#room_price").php(res[0] + "원");
                            $("#serve_price").php(res[1] + "원");
                            $("#vat_price").php(res[2] + "원");
                            $("#total_price").php(res[3] + "원");
                            $("input[name='night']").val(res[4]);
                        }
                    });
                }
            </script>
            <tr>
                <!-- 스타일 수정 -->
                <td colspan="2" height="35" class="product_info_title" style="padding:0; font-weight:bold; font-size:16px; text-align: center; color: #000; background: #fff">
                    예상 요금
                </td>
            </tr>
            <form name="rent_form"></form>
            <input type="hidden" name="mode" value="rent_price_chk">
            <input type="hidden" name="p_no" value="517">
            <tr>
                <td colspan="2">
                    <table class="roomINFO" width="100%">
                        <colgroup>
                            <col width="100%">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th class="tit" style="border-top:0;">예상 체류기간</th>
                            </tr>
                            <tr class="bd-b0">
                                <td>
                                    <div class="rsv-stay-area">
                                        <div class="rsv-stay-box clr">
                                            <p class="stay-chk">
                                                <input type="radio" name="room_type" id="radio-1" checked><label for="radio-1"><span>수페리어</span></label><br>
                                                <input type="radio" name="room_type" id="radio-2"><label for="radio-2"><span>디럭스</span></label><br>
                                                <input type="radio" name="room_type" id="radio-3"><label for="radio-3"><span>디럭스 패밀리</span></label><br>
                                                <input type="radio" name="room_type" id="radio-4"><label for="radio-4"><span>프리미어 디럭스</span></label><br>
                                                <input type="radio" name="room_type" id="radio-5"><label for="radio-5"><span>오션시위트</span></label><br>
                                                <input type="radio" name="room_type" id="radio-6"><label for="radio-6"><span>오션패밀리스위트</span></label><br>
                                            </p>
                                            <ul class="rsb-stay-list">
                                                <li>
                                                    <span class="lbl pl-15">체크인</span>
                                                    <input name="hseldate" id="hseldate" class="type-1 sdate hasDatepicker" value="2019-01-09" readonly="" style="cursor:pointer">
                                                </li>
                                                <li>
                                                    <span class="lbl pl-15">체크아웃</span>
                                                    <input name="nseldate" id="nseldate" class="type-1 edate hasDatepicker" value="2019-01-10" readonly="" style="cursor:pointer">
                                                </li>
                                                <li>
                                                    <span class="lbl pl-15">이용기간</span>
                                                    <input type="text" name="night" class="type-1" readonly="">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="rsv-stay-box clr">
                                            <div class="btn_search"><a href="javascript:rent_price();" title="전화걸기">예상요금</a></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="rsv-stay-area type-2 clr">
                        <div class="stay-count-box">
                            <div class="single-prc clr">
                                <p class="p-row cf">
                                    <span class="pull-left">객실요금</span><span class="pull-right c-red" id="room_price">0원</span>
                                </p>
                                <p class="p-row cf">
                                    <span class="pull-left">봉사료</span><span class="pull-right c-red" id="serve_price">0원</span>
                                </p>
                                <p class="p-row cf">
                                    <span class="pull-left">세금</span><span class="pull-right c-red" id="vat_price">0원</span>
                                </p>
                                <p class="mt-bar"></p>
                                <p class="p-row cf">
                                    <span class="pull-left">총 표준요금</span><span class="pull-right c-red" id="total_price">0원</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>

            <tr class="bd-b0">
                <td colspan="2">
                    <!--<p style="padding-top: 12px; font-size:18px; text-align: center; font-weight:800; color:#ff0000; letter-spacing:-1px">비용이 부담되신다구요?</p>-->
                    <!--<p style="padding:2px 0 3px; font-size:13px; text-align: center; color:#ff0000; letter-spacing:-1px">전화상담을 주시면<br>파격 할인된 요금을 별도로 안내해 드립니다.</p>-->
                    <p style="padding:2px 0 3px; font-size:13px; text-align: center; color:#ff0000; letter-spacing:-1px">
                        이용기간 일별 표준요금 기준이며,<br>
                        장기이용은 전화상담시 이용일자에 따라<br>
                        최대 40~50%의 할인요금을 안내해드립니다.
                    </p>
                    <div class="btn_search"><a href="tel:01088440409" title="전화걸기">전화문의 010-8844-0409 </a></div>
                </td>
            </tr>
            <tr>
                <td height="40" colspan="2" align="center" class="info_title">소개</td>
            </tr>
            <tr>
                <th height="37">주소</th>
                <td>강원도 강릉시 주문진읍 주문로 59</td>
            </tr>
            <tr>
                <th height="37">홈페이지</th>
                <td class="link">
                    <a href="http://www.ocean2you.co.kr" title="오션투유 홈페이지" target="_blank">http://www.ocean2you.co.kr</a>
                </td>
            </tr>
            <tr>
                <th height="37">건축규모</th>
                <td>슈페리어(6.4평형), 디럭스(7.6평형), 디럭스패밀리(7.6평형), 프리미어디럭스(9.9평형), 오션스위트(15.2평형), 오션패밀리스위트(15.2평형)</td>
            </tr>
            <tr>
                <th height="37">총 객실수</th>
                <td>340개 객실</td>
            </tr>
            <tr>
                <th height="57">기본시설</th>
                <td>TV / 개별냉난방기 / 객실금고 / USB충전단자 / 무료WIFI / 욕실용품 등</td>
            </tr>
            <tr>
                <th height="57">부대시설</th>
                <td>연회장 / 수영장 / 비즈니스코너 / 하늘공원</td>
            </tr>
            <tr>
                <th height="57">주변안내</th>
                <td>주문진 방파제 / 안목항 커피해변 / 정동진역 / 강릉솔향수목원 / 오죽한옥마을 / 강릉통일공원 / 노추산모정탑 / 정동심곡바다부채길 / 소금강 등</td>
            </tr>

            <tr>
                <td height="40" colspan="2" align="center" class="info_title info_detail">상세정보 <img src="http://img.go.co.kr/mobile/icon_arrow_open.jpg" width="10"></td>
            </tr>
            <tr>
                <td>
                    <!-- 호텔 상세이미지 -->
                    <img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/01.jpg" alt="에어스카이 호텔 소개이미지" style="width:400%">
                    <img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/02_1.jpg" alt="에어스카이 호텔 소개이미지" style="width:400%">
                    <img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/02_2.jpg" alt="에어스카이 호텔 소개이미지" style="width:400%">
                    <img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/03.jpg" alt="에어스카이 호텔 소개이미지" style="width:400%">
                    <img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/04.jpg" alt="에어스카이 호텔 소개이미지" style="width:400%">
                    <img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/05.jpg" alt="에어스카이 호텔 소개이미지" style="width:400%">
                </td>
            </tr>
            <tr>
                <td height="40" colspan="2" align="center" class="info_title">인사말 <img src="http://img.go.co.kr/mobile/icon_arrow_open.jpg" width="10"></td>
            </tr>
            <tr>
                <td colspan="2" class="info_text">
                    <div id="" class="text">
                        하늘과 맞닿은 푸른 바다를 정원처럼 느끼는 곳!<br>
                        강릉 씨베이호텔!<br>
                        우리 호텔은 아름다운 푸른 동해가 호텔 바로 앞에 파노라마처럼 펼쳐져 있으며,
                        TVN 드라마 '도깨비'에서 도깨비(공유 분)가 지은탁(김고은 분)에게 메밀꽃을 선물한 장면으로 유명한 '주문진 방파제'가 차량으로 약 5분 거리에 있습니다.<br>
                        또한, 신사임당이 태어나고 율곡 이이가 성장한 곳으로 유명한 '오죽헌', 커피해변으로 유명한 '안목항 커피해변',
                        바다와 역이 만나는 '정동진역', 그리고 몸과 마음이 힐링되는 '강릉솔향수목원' 등 천혜의 관광코스가 호텔과 가깝습니다.<br>
                        가족, 친구, 그리고 사랑하는 사람들과 잊지못할 추억과 감동을 강릉 씨베이호텔과 함께 하시기를 바랍니다.
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="btn_search"><a href="tel:01088440409" title="전화걸기">전화문의 010-8844-0409 </a></div>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- 상단 슬라이드 -->
    <script text="text/javascript">
        $(function() {

            var swiper = new Swiper('.swiper-container', {
                scrollbar: '.swiper-scrollbar', // 스크롤
                scrollbarHide: false, // 스크롤 안할때도 스크롤바 숨기지 않음
                uniqueNavElements: true,
                loop: true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',

                autoplayDisableOnInteraction: false,
                paginationBulletRender: function(index, className) {
                    return '<span class="' + className + '"></span>';
                }
            });

        });
    </script>
    <!--//190109 장단기숙박 -->


    <div class="clr"></div>

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