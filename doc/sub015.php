<?php
$cate_num = 1;
$cate_title = '반도건설';
$page_num = 5;
$page_title = '오시는 길';

include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>







<section class="map_road sec">
    <h3><?= $page_title ?></h3>
    <div class="inner">
        <div class="map_case">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.296308074939!2d127.02818441564672!3d37.50092903563964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca157e14b40a7%3A0x1f76510315a4a242!2z7ISc7Jq47Yq567OE7IucIOqwleuCqOq1rCDthYztl6TrnoDroZw36ri4!5e0!3m2!1sko!2skr!4v1675843296349!5m2!1sko!2skr"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<section class="map_des">
    <div class="inner">
        <ul class="des_list">
            <li class="flex">
                <strong>주소</strong>
                <p>서울특별시 강남구 테헤란로7길 12(역삼동 648) 허바허바빌딩 7층, 9층, 11층, 12층</p>
            </li>
            <li class="flex">
                <strong>전화번호</strong>
                <p>대표전화 02.3011.2700 / 고객센터 1800.0015</p>
            </li>
            <li class="flex">
                <strong>찾아오시는길</strong>
                <ul class="list_case">
                    <li><span>지하철</span>2호선 강남역 12번 출구에서 약 300m</li>
                    <li class="flex"><span>버스</span>
                        <div class="case">
                            <p>간선버스(파란색) 146, 341, 360, 740, N13, N61</p>
                            <p>광역버스(빨간색) 1100, 1700, 2000, 2000-1, 3600, 7007, 9303, 9600, 8001</p>
                        </div>
                    </li>
                    <li><span>자동차</span>테헤란로 → 서초대로 방면 국기원입구 교차로에서 국기원 방향 우회전 후 약 90m</li>
                </ul>
            </li>
        </ul>
    </div>
</section>




<?php
include_once(G5_THEME_PATH.'/tail.php');