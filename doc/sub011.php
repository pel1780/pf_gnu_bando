<?php
$cate_num = 1;
$cate_title = '반도건설';
$page_num = 1;
$page_title = ['기업소개','핵심가치'];

include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>







<section class="story_visual sec">
    <h3><?= $page_title[0] ?></h3>
    <div class="inner">
        <div class="tit">
            <strong>새로운 도전으로 세상의 기대를 앞서다</strong>
            <p>Foregoing the expectations of the world with new challenges</p>
        </div>
        <p class="visual_des">
            1970년 첫 발을 내딛은 반도건설 <br />
            지난 50여 년간 ‘많이 짓는 것보다 바르게 짓겠다’는 신념으로<br />
            끊임없는 열정과 세상을 앞서가는 새로운 도전을 통해 대한민국 대표 건설사로 자리매김 하였습니다.<br />
            세상을 앞서가는 새로운 건설문화, 반도건설이 만들겠습니다.
        </p>
        <ul class="visual_list flex">
            <li class="list01">
                <figure>
                    <img src="../image/sub/brand_story_icon01.png" alt="">
                </figure>
                <strong>창의계발</strong>
                <span>Creative development</span>
                <p>인재와 기술을 바탕으로 최고의 제품과 서비스를
                    창출하고 인류사회에 공헌하며 고객과 함께
                    세계 시장에 우뚝 서겠습니다.</p>
            </li>
            <li class="list02">
                <figure>
                    <img src="../image/sub/brand_story_icon02.png" alt="">
                </figure>
                <strong>미래도전</strong>
                <span>Future challenge</span>
                <p>21세기 디지털 시대에 발맞춰 최고의 기술,
                    최고의 품질, 최고의 서비스를 지향하며,
                    디지털 시대의 리더로 자리매김 하겠습니다.</p>
            </li>
            <li class="list03">
                <figure>
                    <img src="../image/sub/brand_story_icon03.png" alt="">
                </figure>
                <strong>진실근검</strong>
                <span>Creative development</span>
                <p>맑고 투명한 경영철학으로
                    고객에게 확고한 믿음을 심어주며
                    고객만족을 실현합니다.</p>
            </li>
        </ul>
    </div>
</section>
<section class="story_content sec">
    <h3><?= $page_title[1] ?></h3>
    <p>21세기의 질 높은 생활을 위한 반도건설의 6핵심가치</p>
    <div class="inner">
        <ul class="flex">
            <li>
                <figure>
                    <img src="../image/sub/brand_story_content01.png" alt="">
                </figure>
                <strong>고객중심</strong>
                <p>최고의 품질과 서비스를 통한
                    고객만족을 실천합니다</p>
            </li>
            <li>
                <figure>
                    <img src="../image/sub/brand_story_content02.png" alt="">
                </figure>
                <strong>상생소통</strong>
                <p>협력사와의 소통과 상생을 통해
                    ‘파트너쉽’을 구축합니다</p>
            </li>
            <li>
                <figure>
                    <img src="../image/sub/brand_story_content03.png" alt="">
                </figure>
                <strong>신뢰지향</strong>
                <p>투명한 의사결정과 윤리경영 실천으로
                    고객과의 신뢰를 추구합니다</p>
            </li>
            <li>
                <figure>
                    <img src="../image/sub/brand_story_content04.png" alt="">
                </figure>
                <strong>도전정신</strong>
                <p>반도인은 현실에 안주하지 않고
                    문제를 창의적으로 접근해
                    반드시 목표를 달성합니다</p>
            </li>
            <li>
                <figure>
                    <img src="../image/sub/brand_story_content05.png" alt="">
                </figure>
                <strong>인재중심</strong>
                <p>우수인재 확보가 곧 회사의 미래이기에
                    회사와 직원이 함께 성장합니다</p>
            </li>
            <li>
                <figure>
                    <img src="../image/sub/brand_story_content06.png" alt="">
                </figure>
                <strong>나눔경영</strong>
                <p>지역사회 발전을 위한
                    사회적 책임을 실천합니다</p>
            </li>
        </ul>
    </div>
</section>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>