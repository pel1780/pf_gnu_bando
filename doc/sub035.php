<?php
$cate_num = 3;
$page_num = 5;
$cate_title = '지속가능경영';
$page_title = '사회공헌';
$page_desc_top ='건강한 희망을 나누어 진솔한 휴머니즘을 실천합니다.';
$page_desc_btm ='지속적인 장학사업부터 이웃돕기, 집짓기 운동, 건설재해근로자지원사업까지,
다양한 사회공헌을 통해 더 아름답고 따뜻한 세상을 만드는 데에 앞장서겠습니다.';

include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>


<div class="contribution_itm_case">
    <div class="itm itm01">
        <strong class="itm_tit">주요활동 소개</strong>
        <ul>
            <li class="list list01">
                <em>Housing Support</em>
                <span>주거지원 사업참여</span>
                <p>반도건설은 사랑의 집 짓기, 노후주택 보수공사 등의 취약계층 주거개선사업에 참여함으로써, 종합건설사로서의 재능과 역량을 발휘하며
                    사회 취약계층을 위한 진정성 있는 나눔을 이어오고 있습니다.</p>
                <div class="img_case flex">
                    <img src="<?php echo G5_THEME_URL; ?>/image/sub/contribution_itm01_list01_01.jpg" alt="">
                    <img src="<?php echo G5_THEME_URL; ?>/image/sub/contribution_itm01_list01_02.jpg" alt="">
                    <img src="<?php echo G5_THEME_URL; ?>/image/sub/contribution_itm01_list01_03.jpg" alt="">
                </div>
            </li>
            <li class="list list02">
                <em>Social Support</em>
                <span>사회 취약계층 및 재난 현장 지원</span>
                <p>취약계층 난방비 지원, 보호시설 물품 지원, 재해 및 재난 시 피해 지원금 및 구호 물품 전달 등의 다양한 기부와 봉사를 통해 사회 전반에
                    희망을 전하기 위한 노력을 적극적으로 기울이고 있습니다.</p>
                <div class="img_case flex">
                    <img src="<?php echo G5_THEME_URL; ?>/image/sub/contribution_itm01_list02_01.jpg" alt="">
                    <img src="<?php echo G5_THEME_URL; ?>/image/sub/contribution_itm01_list02_02.jpg" alt="">
                    <img src="<?php echo G5_THEME_URL; ?>/image/sub/contribution_itm01_list02_03.jpg" alt="">
                </div>
            </li>
            <li class="list list03">
                <em>Worker Support</em>
                <span>건설재해 근로자 지원</span>
                <p>반도건설은 전직원이 참여하는 'Safety First 기업안전문화 구축'을 경영방침으로 내세워 재해 없는 현장을 만들어나가는 동시에,
                    매년 건설재해근로자들의 치료 및 생계비 지원 기금을 기탁하여 치료 중인 건설 재해근로자들이 빠른 시일 내에 생업에 복귀할 수 있도록 꾸준한 관심을 기울이고 있습니다.</p>
                <div class="img_case flex">
                    <img src="<?php echo G5_THEME_URL; ?>/image/sub/contribution_itm01_list03_01.jpg" alt="">
                    <img src="<?php echo G5_THEME_URL; ?>/image/sub/contribution_itm01_list03_02.jpg" alt="">
                    <img src="<?php echo G5_THEME_URL; ?>/image/sub/contribution_itm01_list03_03.jpg" alt="">
                </div>
            </li>
        </ul>
    </div>
</div>







<?php
include_once(G5_THEME_PATH.'/tail.php');
?>