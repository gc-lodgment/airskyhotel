<?php
	include("../common/top.php");
?>

    <div class="body"></div>
    <br class="br_sub">

    <div class="restbar">
        <div class="sub">
            <div class="sub_top_menu">
                <h4 class="page_title">편의점</h4>
                <h6 class="page_sub_title">에어스카이호텔 내부에 위치한 이마트24 편의점입니다.<br>여행에 필요하신 다양한 편의 용품, 제품, 식품 등을 손쉽게 구매하실 수 있습니다.</h6>
                <ul class="menu_wrap container">
                    <!-- 해당 탭 url일 경우, 클래스 active -->
                    <li class="menu_item"><a href="/facilities/restaurant.php">레스토랑</a></li>
                    <li class="menu_item"><a href="/facilities/conference.php">컨퍼런스룸</a></li>
                    <li class="menu_item"><a href="/facilities/seminar.php">세미나룸</a></li>
                    <li class="menu_item"><a href="/facilities/businesscenter.php">비즈니스센터</a></li>
                    <li class="menu_item active"><a href="/facilities/convenience.php">편의점</a></li>
                </ul>
            </div>
        </div>

        <div class="sub container">
            <div class="sub_item_box">
                <div class="sub_item_wrap">
                    <div class="sub_item">
                        <div class="slick_slider">
                            <div class="icon-prev"><i class="icon-33"></i></div>
                            <div class="icon-next"><i class="icon-32"></i></div>
                            <div class="slick_basic">
                                <div><img src="<?=base_img?>/svc/img/facilities/convenience/01.jpg" alt="편의점사진"></div>
                                <div><img src="<?=base_img?>/svc/img/facilities/convenience/02.jpg" alt="편의점사진"></div>
                                <div><img src="<?=base_img?>/svc/img/facilities/convenience/03.jpg" alt="편의점사진"></div>
                            </div>
                        </div>
                        <div class="item_info">
                            <div class="info_wrap">
                                <h5 class="info_title">위치안내</h5>
                                <div class="info_content">1층 측면</div>
                            </div>
                            <div class="info_wrap">
                                <h5 class="info_title">운영시간</h5>
                                <div class="info_content">
                                    <span class="sh_small">일요일부터 금요일 오전 08:00 ~ 오후 23:00</span><br />
                                    <span class="sh_small">토 / 공휴일 오전 08:00 ~ 오후 24:00</span><br />
                                    <span class="sh_small">※ 운영시간은 현장 상황에 따라 단축 또는 연장될 수 있습니다.</span><br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
	include("../common/bottom.php");
?>