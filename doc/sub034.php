<?php
$cate_num = 3;
$page_num = 4;
$cate_title = '지속가능경영';
$page_title = '안전경영';
$page_desc_top ='반도건설은 안전을 최우선의 가치로 여기며 체계적인 노력을 기울입니다.';
$page_desc_btm ='건설현장의 근로자 안전과 권익 신장을 위해 모든 구성원이 참여하는 안전시스템을
구축하여 안전문화를 조성하기 위한 노력을 기울이고 있습니다.';

include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>

<div class="safe_itm_case">
    <div class="itm itm01">
        <strong class="itm_tit">안전보건목표</strong>
        <p class="itm_desc">“ 모두가 참여하는 SAFETY FIRST 기업안전문화 구축 ”</p>
        <ul class="flex">
            <li class="list01">
                <img src="<?php echo G5_THEME_URL; ?>/image/sub/safe_itm01_icon01.png" alt="">
                <span>01</span>
                <p>KOSHA MS 전환</p>
            </li>
            <li class="list02">
                <img src="<?php echo G5_THEME_URL; ?>/image/sub/safe_itm01_icon02.png" alt="">
                <span>02</span>
                <p>중대재해 ZERO</p>
            </li>
            <li class="list03">
                <img src="<?php echo G5_THEME_URL; ?>/image/sub/safe_itm01_icon03.png" alt="">
                <span>03</span>
                <p>안전보건인력 양성교육 보장</p>
            </li>
        </ul>
    </div>
    <div class="itm itm02">
        <strong class="itm_tit">전사적 안전보건경영시스템 구축</strong>
        <p class="itm_desc">반도건설은 적극적이고 체계적인 안전보건 경영을 전개해
            한국산업안전보건공단이 주관하는 안전보건경영시스템 인증인 KOSHA-MS를 획득했습니다. <br />
            설계부터 시공, 사후관리까지 안전이 최우선의 가치가 되는 건설문화, 반도건설이 주도해나가겠습니다.</p>
        <ul class="flex">
            <li>
                <figure>
                    <img src="<?php echo G5_THEME_URL; ?>/image/sub/safe_itm02_01.jpg" alt="">
                </figure>
                <button class="btn_o"><a href="#!">인증서 다운로드 <i class="xi-download"></i></a></button>
            </li>
            <li>
                <figure>
                    <img src="<?php echo G5_THEME_URL; ?>/image/sub/safe_itm02_02.jpg" alt="">
                </figure>
                <button class="btn_o"><a href="#!">인증서 다운로드 <i class="xi-download"></i></a></button>
            </li>

        </ul>
    </div>
</div>








<?php
include_once(G5_THEME_PATH.'/tail.php');
?>