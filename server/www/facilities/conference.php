<?php
	include("../common/top.php");
?>

    <div class="body"></div>
    <br class="br_sub">

    <div class="restbar">
        <div class="sub">
            <div class="sub_top_menu">
                <h4 class="page_title">컨퍼런스룸</h4>
                <h6 class="page_sub_title">최대 15명이 함께할 수 있는 컨퍼런스룸을 추천드립니다.<br>빔프로젝터와 보드 등이 구비되어있어 더욱 원할한 행사 진행이 가능합니다.<br>미팅, 교육은 물론 소규모 연회와 회사 워크샵 등 다용도로 사용할 수 있습니다.</h6>
                <ul class="menu_wrap container">
                    <!-- 해당 탭 url일 경우, 클래스 active -->
                    <li class="menu_item"><a href="/facilities/restaurant.php">레스토랑</a></li>
                    <li class="menu_item active"><a href="/facilities/conference.php">컨퍼런스룸</a></li>
                    <li class="menu_item"><a href="/facilities/seminar.php">세미나룸</a></li>
                    <li class="menu_item"><a href="/facilities/businesscenter.php">비즈니스센터</a></li>
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
                                <div><img src="<?=base_img?>/svc/img/facilities/conference/01.jpg" alt="컨퍼런스룸사진"></div>
                                <div><img src="<?=base_img?>/svc/img/facilities/conference/02.jpg" alt="컨퍼런스룸사진"></div>
                                <div><img src="<?=base_img?>/svc/img/facilities/conference/03.jpg" alt="컨퍼런스룸사진"></div>
                                <div><img src="<?=base_img?>/svc/img/facilities/conference/04.jpg" alt="컨퍼런스룸사진"></div>
                            </div>
                        </div>
                        <div class="item_info">
                            <div class="info_wrap">
                                <h5 class="info_title">위치안내</h5>
                                <div class="info_content">2층</div>
                            </div>
                            <div class="info_wrap">
                                <h5 class="info_title">기타안내</h5>
                                <div class="info_content">
                                    <span class="sh_small">빔프로젝터, 무선마이크 등 사용 가능</span><br />
                                </div>
                            </div>
                            <div class="info_wrap">
                                <h5 class="info_title">이용문의</h5>
                                <div class="info_content">
                                    전화 : <span class="sh_small">1666-1243</span><br />
                                    이메일 : <span class="sh_small">airskyhotel@ebiznetworks.co.kr</span>
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