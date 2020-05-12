<?php
	include("../common/top.php");
?>

    <div class="body"></div>
    <br class="br_sub">

    <div class="restbar">
        <div class="sub">
            <div class="sub_top_menu">
                <h4 class="page_title">비즈니스센터</h4>
                <h6 class="page_sub_title">호텔의 비즈니스 센터에서 고객님의 사무 업무를 편리하게 이용하세요.<br>깨끗하고 쾌적한 공간에서 자유롭게 이용 가능한 독립적인 비즈니스 공간입니다.</h6>
                <ul class="menu_wrap container">
                    <!-- 해당 탭 url일 경우, 클래스 active -->
                    <li class="menu_item"><a href="/facilities/restaurant.php">레스토랑</a></li>
                    <li class="menu_item"><a href="/facilities/conference.php">컨퍼런스룸</a></li>
                    <li class="menu_item"><a href="/facilities/seminar.php">세미나룸</a></li>
                    <li class="menu_item active"><a href="/facilities/businesscenter.php">비즈니스센터</a></li>
                    <li class="menu_item"><a href="/facilities/convenience.php">편의점</a></li>
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
                                <div><img src="<?=base_img?>/svc/img/facilities/businesscenter/01.jpg" alt="비즈니스센터사진"></div>
                                <div><img src="<?=base_img?>/svc/img/facilities/businesscenter/02.jpg" alt="비즈니스센터사진"></div>
                                <div><img src="<?=base_img?>/svc/img/facilities/businesscenter/03.jpg" alt="비즈니스센터사진"></div>
                            </div>
                        </div>
                        <div class="item_info">
                            <!-- <div class="info_wrap">
                                <h5 class="info_title">위치</h5>
                                <div class="info_content">2층</div>
                            </div> -->
                            <div class="info_wrap">
                                <h5 class="info_title">위치안내</h5>
                                <div class="info_content">1층 정문에 위치</div>
                            </div>
                            <div class="info_wrap">
                                <h5 class="info_title">이용시간</h5>
                                <div class="info_content">
                                    <span class="sh_small">상시 이용가능(24시간 운영)</span><br />
                                </div>
                            </div>
                            <div class="info_wrap">
                                <h5 class="info_title">기타안내</h5>
                                <div class="info_content">
                                    <span class="sh_small">인터넷 및 워드 등의 작업 가능</span><br />
                                </div>
                            </div>
                            <div class="info_wrap">
                                <h5 class="info_title">이용문의</h5>
                                <div class="info_content">
                                    <span class="sh_small">1층 프론트 문의(객실 이용객에 한하여 자유이용)</span><br />
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