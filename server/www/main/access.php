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
        <div class="access_box">
            <h1 class="b_acenter">에어스카이호텔 호텔이용약관</h1>
            <div class="box">
                <p>에어스카이호텔의 회원약관은 다음과 같은 내용을 담고 있습니다.</p>
                <p><br></p>
                <p><b>제1조 본 약관의 적용</b></p>
                <p><b>제2조 숙박거절의 경우</b></p>
                <p><b>제3조 성명 등의 명시</b></p>
                <p><b>제4조 숙박 등록 절차</b></p>
                <p><b>제5조 체크인과 체크아웃</b></p>
                <p><b>제6조 요금의 지불</b></p>
                <p><b>제7조 환불 및 취소규정</b></p>
                <p><b>제8조 숙박책임</b></p>
                <p><b>제9조 객실 키 카드 인수 및 반납</b></p>
                <p><br></p>
                <p><b>제1조 본 약관의 적용</b></p>
                <ol>
                    <li>당 호텔이 체결하는 숙박계약 및 여기에 관계되는 계약은 본 계약이 정하는 바에 의하는 것으로 하고 본 약관에 규정되지 않는 사항에 관하여는 법령 또는 관습에 의하는 것으로
                        합니다.</li>
                    <li>당 호텔은 신용카드 예약에 관련된 것은 이 규정에 따르되 그 세부사항은 신용카드사와 호텔 가맹점간의 약관에 따릅니다.</li>
                    <li>당 호텔은 전항의 규정에 구애됨이 없이 약관의 취지, 법령 또는 관습에 반하지 않는 범위 내에서 특약에 응할 수가 있습니다.</li>
                </ol>
                <p><br></p>
                <p><b>제2조 숙박거절의 경우</b></p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;당 호텔은 다음과 같은 경우에 숙박을 거절할 수 있습니다.</p>
                <ol>
                    <li>숙박신청이 이 계약에 의하지 않은 경우</li>
                    <li>객실 만실로 인해 객실의 여유가 없을 경우</li>
                    <li>숙박을 하고자 하는 고객께서 숙박에 관한 법령 또는 공공질서나 미풍양속에 위배되는 행위를 할 염려가 있다고 인정될 경우</li>
                    <li>숙박하고자 하는 고객이 전염병자라고 명백히 인정되는 경우</li>
                    <li>숙박에 관하여 불필요한 보상을 요구할 경우</li>
                    <li>애완용 동물, 위험약물, 폭발물 또는 무기 등을 소지하고 있다고 인정되는 경우</li>
                    <li>천재지변, 시설의 고장, 기타 불가피한 이유로 숙박을 응할 수 없는 경우</li>
                    <li>대한민국 법령 등이 규정하는 바에 따라 숙박할 수 없다고 인정되는 경우</li>
                </ol>
                <p><br></p>
                <p><b>제3조 성명 등의 명시</b></p>
                <ol>
                    <li>숙박자의 성명, 성별, 국적 및 직업</li>
                    <li>기타 당 호텔에서 필요하다고 인정되는 사항</li>
                </ol>
                <p><br></p>
                <p><b>제4조 숙박 등록 절차</b></p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;투숙객은 숙박 당일 당 호텔 프런트 데스크에서 다음 사항을 당 호텔에 등록하여 주십시오.</p>
                <ol>
                    <li>제3조 제1항의 사항</li>
                    <li>외국인에 대해서는 여권번호 및 사증종류, 한국도착 날짜</li>
                    <li>내국인에 대해서는 생년월일</li>
                    <li>출발 날짜</li>
                    <li>호텔에서 필요하다고 인정되는 기타 정보</li>
                </ol>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;예약 및 숙박 시 수집되는 개인정보 취급에 관해서는 호텔 홈페이지의 '개인정보취급방침' 약관을 참고하여 주시기
                    바랍니다.</p>
                <p><br></p>
                <p><b>제5조 체크인과 체크아웃</b></p>
                <!-- <ol>
                    <li>체크인 시간은 오후 3시부터입니다.</li>
                    <li>체크아웃 시간은 오전 11시까지 입니다. </li>
                    <li>오후 3시까지 체크아웃 시간을 연장하고자 하는 경우 객실요금의 25%가 추가로 청구됩니다.</li>
                    <li>오후 6시까지 체크아웃 시간을 연장하고자 하는 경우 객실요금의 50%가 추가로 청구됩니다.</li>
                    <li>오후 6시 이후에까지 체크아웃 시간을 연장하고자 하는 경우 1박 객실 요금이 청구됩니다.</li>
                </ol> -->
                <ol>
                    <li>체크인 시간은 오후 3시부터입니다.</li>
                    <li>체크아웃 시간은 오전 11시까지 입니다. </li>
                    <li>오후 12시까지 체크아웃 시간을 연장하고자 하는 경우 무료 연장 가능합니다.</li>
                    <li>오후 5시까지 체크아웃 시간을 연장하고자 하는 경우 50,000원이 추가 청구됩니다.</li>
                    <li>오후 5시이후 체크아웃시 당일 객실요금의 100%가 추가 청구됩니다.</li>
                </ol>
                <p><br></p>
                <p><b>제6조 요금의 지불</b></p>
                <ol>
                    <li>요금의 지불은 대한민국 통용화폐와 당 호텔에서 인정하는 여행자 수표, 쿠폰 또는 신용카드에 의해 숙박고객의 출발 시 또는 당 호텔에서 요구했을 시에 당 호텔 프런트에서
                        지불해야 합니다. 단, 개인 수표는 취급하지 않습니다.</li>
                    <li>고객이 객실을 사용하기 시작한 다음 임의로 숙박을 하지 않은 경우에 있어서도 숙박 요금이 청구됩니다.</li>
                    <li>스위트 룸을 제외한 모든 객실 요금은 객실 침대 수 기준이며 투숙인원이 추가될 경우 추가요금이 청구될 수 있습니다.</li>
                </ol>
                <p><br></p>
                <p><b>제7조 환불 및 취소규정</b></p>
                <ol>
                    <li>체크인 15일 이전에 예약취소 하실 경우 결제금액의 90%를 환불해드립니다.</li>
                    <li>체크인 10일 이전에 예약취소 하실 경우 결제금액의 80%를 환불해드립니다.</li>
                    <li>체크인 7일 이전에 예약취소 하실 경우 결제금액의 60%를 환불해드립니다.</li>
                    <li>체크인 6일 이전에 예약취소 하실 경우 결제금액의 30%를 환불해드립니다.</li>
                    <li>체크인 5일 이내 예약취소 요청 또는 숙박날짜 당일에 고객확인이 되지않을 경우(No Show) 결제금액의 100%가 부과됩니다.</li>
                </ol>
                <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* 극성수기 및 (예약이 급증하는) 국가적인 특정행사에는 '환불불가' 이오니 예약 시 주의하여 주시기 바랍니다.
                </div>
                <p><br></p>
                <p><b>제8조 숙박책임</b></p>
                <ol>
                    <li>당 호텔의 숙박에 관한 책임은 투숙객이 당 호텔 프론트 데스크에서 숙박등록을 하였을 시와 객실에 안내 되었을 시 중 먼저 행위가 이루어진 시점부터 책임을 지게 되며,
                        투숙객이 객실을 퇴실하였을 시 호텔의 책임은 완료가 됩니다.</li>
                    <li>숙박자가 당 호텔 안에 제시한 이용규칙을 준수하지 않으므로 예기된 사고에 관해서는 당 호텔은 기 책임을 지지 않습니다.</li>
                    <li>당 호텔은 숙박예약 보증 후 투숙객에게 객실 제공을 못할 경우에는 동급 또는 더 나은 숙박 시설을 알선하고 최초 1일 숙박요금의 100%를 보상합니다.</li>
                </ol>
                <p><br></p>
                <p><b>제9조 객실 키 카드 인수 및 반납</b></p>
                <ol>
                    <li>투숙객은 등록 시 프론트 데스크에서 객실키를 인수하여 퇴실 시에는 요금지불과 함께 반드시 프런트 캐셔에게 키 카드를 반납해야 합니다.</li>
                    <li>투숙객은 투숙 중 객실키를 분실하였을 시 지체 없이 프런트 데스크에 분실 신고를 하여야 합니다.</li>
                    <li>투숙객이 객실 키를 소지하고 체크아웃 할 경우 지체 없이 우편 또는 기타 방법으로 신속히 호텔로 반송하여야 합니다.</li>
                </ol>
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