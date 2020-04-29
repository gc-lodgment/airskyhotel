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

    <link rel="stylesheet" href="http://static.bscondo.co.kr/css/rent/initR.css">
    <link rel="stylesheet" href="http://static.seabay.co.kr/svc/css/rent/init.css">
    <!-- <link rel="stylesheet" href="/static/svc/css/rent/init.css"> -->

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

    <div class="rent-wrap clr">
        <div class="img-area">
            <figure class="nth-1"><img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/01.jpg" alt="강릉 씨베이호텔 소개이미지"></figure>

            <figure class="nth-2"><img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/02_1.jpg" alt="강릉 씨베이호텔 소개이미지"></figure>

            <div class="grid-wrap">
                <div class="grid-contents grid-type-1">
                    <table class="tbl-base tbl-1">
                        <colgroup>
                            <col style="width:23%">
                            <col style="width:14%">
                            <col style="width:23%">
                            <col style="width:40%">
                        </colgroup>
                        <thead class="rowgroup">
                            <tr>
                                <th>객실타입</th>
                                <th>숙박기간</th>
                                <th>이용시 특혜</th>
                                <th>이용기간</th>
                            </tr>
                        </thead>
                        <tbody class="rowgroup">
                            <tr>
                                <td>
                                    수페리어<br>
                                    디럭스<br>
                                    프리미어 디럭스<br>
                                    스위트룸
                                </td>
                                <td>
                                    7일<br>
                                    14일<br>
                                    1개월<br>
                                    6개월
                                </td>
                                <td class="nth-3">
                                    <span class="fg-red-1 fwe-1">광과금 일체 포함<br>
                                        (전기, 수도요금 등)</span>
                                </td>
                                <td class="nth-4">
                                    <span class="fwe-1">7일부터 6개월까지 이용가능!</span>
                                </td>
                            </tr>
                            <!-- <tr>
								<td colspan="4" class="ta-left">
									<p class="row">
										<span class="dot">※</span>
										<span class="txt">
											장/단기 이용시 주중은 저렴하게 제공기능하나, <span class="co-blue">주말(토요일, 5월5일, 12월31일 등 극성수일)에는 상시 만실</span>이며 평균 20만원 내외에 판매되는 점 고려 후 판단 부탁드립니다.
										</span>
									</p>
								</td>
							</tr> -->
                        </tbody>
                    </table>
                </div>
                <h2 class="tbl-tit">이용 시 예상 요금을 알아볼까요?</h2>
                <div class="grid-contents grid-type-2">
                    <table class="tbl-base tbl-2">
                        <colgroup>
                            <col style="width:18%">
                            <col style="width:24%">
                            <!-- <col> -->
                        </colgroup>
                        <thead class="rowgroup">
                            <tr>
                                <th>객실타입</th>
                                <th>예상 체류기간</th>
                                <th>이용 시 예상요금</th>
                            </tr>
                        </thead>
                        <tbody class="rowgroup">
                            <tr>
                                <td class="nth-1">
                                    <p class="row clr">
                                        <span class="rdo-box">
                                            <input type="radio" name="room_type" class="rdo" id="radio-1" checked>
                                            <label for="radio-1" class="lbl"><span style="font-size:14px">수페리어 더블</span></label>
                                        </span>
                                    </p>
                                    <p class="row clr">
                                        <span class="rdo-box">
                                            <input type="radio" name="room_type" class="rdo" id="radio-2">
                                            <label for="radio-2" class="lbl"><span style="font-size:14px">디럭스 헐리우드</span></label>
                                        </span>
                                    </p>
                                    <p class="row clr">
                                        <span class="rdo-box">
                                            <input type="radio" name="room_type" class="rdo" id="radio-3">
                                            <label for="radio-3" class="lbl"><span style="font-size:14px">디럭스 한실</span></label>
                                        </span>
                                    </p>
                                    <p class="row clr">
                                        <span class="rdo-box">
                                            <input type="radio" name="room_type" class="rdo" id="radio-3">
                                            <label for="radio-3" class="lbl"><span style="font-size:14px">디럭스 더블</span></label>
                                        </span>
                                    </p>
                                    <p class="row clr">
                                        <span class="rdo-box">
                                            <input type="radio" name="room_type" class="rdo" id="radio-4">
                                            <label for="radio-4" class="lbl"><span style="font-size:14px">자쿠지 패밀리트윈</span></label>
                                        </span>
                                    </p>
                                    <p class="row clr">
                                        <span class="rdo-box">
                                            <input type="radio" name="room_type" class="rdo" id="radio-4">
                                            <label for="radio-4" class="lbl"><span style="font-size:14px">디럭스 패밀리트윈</span></label>
                                        </span>
                                    </p>
                                    <p class="row clr">
                                        <span class="rdo-box">
                                            <input type="radio" name="room_type" class="rdo" id="radio-4">
                                            <label for="radio-4" class="lbl"><span style="font-size:14px">디럭스 패밀리쿼드</span></label>
                                        </span>
                                    </p>
                                    <p class="row clr">
                                        <span class="rdo-box">
                                            <input type="radio" name="room_type" class="rdo" id="radio-5">
                                            <label for="radio-5" class="lbl"><span style="font-size:14px">프리미어 패밀리트윈</span></label>
                                        </span>
                                    </p>
                                    <p class="row clr">
                                        <span class="rdo-box">
                                            <input type="radio" name="room_type" class="rdo" id="radio-6">
                                            <label for="radio-6" class="lbl"><span style="font-size:14px">로얄스위트</span></label>
                                        </span>
                                    </p>
                                </td>
                                <td class="nth-2">
                                    <p class="row clr">
                                        <span class="inp-box">
                                            <label for="" class="lbl">체크인</label>
                                            <input type="text" class="inp">
                                        </span>
                                    </p>
                                    <p class="row clr">
                                        <span class="inp-box">
                                            <label for="" class="lbl">체크아웃</label>
                                            <input type="text" class="inp">
                                        </span>
                                    </p>
                                    <p class="row clr">
                                        <span class="inp-box">
                                            <label for="" class="lbl">이용기간</label>
                                            <input type="text" class="inp">
                                        </span>
                                    </p>
                                    <p class="row clr">
                                        <span class="inp-box">
                                            <label for="" class="lbl">인원수</label>
                                            <select name="" id="" class="slt">
                                                <option value="">2</option>
                                                <option value="">7</option>
                                            </select>
                                        </span>
                                    </p>
                                    <div class="row">
                                        <button type="button" class="btn-base btn-gray flt-r">예상요금</button>
                                    </div>
                                </td>
                                <td class="clr nth-3">
                                    <div class="split-1">
                                        <dl>
                                            <dt>객실요금</dt>
                                            <dd>0원</dd>
                                        </dl>
                                        <dl>
                                            <dt>봉사료</dt>
                                            <dd>0원</dd>
                                        </dl>
                                        <dl>
                                            <dt>세금</dt>
                                            <dd>0원</dd>
                                        </dl>
                                        <hr class="sun">
                                        <dl>
                                            <dt>총 예상요금</dt>
                                            <dd>0원</dd>
                                        </dl>
                                    </div>
                                    <div class="split-2">
                                        <span class="fg-red-1">
                                            이용기간 일별 표준요금 기준이며,<br>
                                            장기이용은 전화 상담시 이용일자에 따라<br>
                                            최대 40~50%의 할인요금을 안내해드립니다.<br>
                                        </span>
                                        <p class="row clr">
                                            <button type="button" class="btn-base btn-gray">문의신청 010-8844-0409</button>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <figure class="nth-2"><img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/02_2.jpg" alt="강릉 씨베이호텔 소개이미지"></figure>

            <figure class="nth-3"><img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/03.jpg" alt="강릉 씨베이호텔 소개이미지"></figure>
            <figure class="nth-4">
                <img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/04.jpg" alt="강릉 씨베이호텔 소개이미지">
                <a href="http://seabay.co.kr/rooms/?r=18836" target="_blank" title="새 창" class="btn-linkOc2">
                    <img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/btn_moreRoom.png" alt="강릉 씨베이호텔  객실안내 페이지로 이동">
                </a>
            </figure>
            <figure class="nth-5"><img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/05.jpg" alt="강릉 씨베이호텔 소개이미지"></figure>
        </div>
    </div>
    <!-- //.rent-wrap -->

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