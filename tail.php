<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>



<?php
if(!defined('_INDEX_')) { // index가 아닐때
    include G5_THEME_PATH.'/detail.tail.php'; // 서브페이지 태일..!
}
?>
<footer class="footer">
    <div class="inner flex">
        <div class="logo">
            <img src="<?php echo G5_THEME_URL; ?>/image/logo_footer.png" alt="">
        </div>
        <div class="foot_left">
            <ul class="flex">
                <li class="em"><a href="#!">개인정보처리방침</a></li>
                <li><a href="#!">법적고지</a></li>
            </ul>
            <ul class="flex">
                <li><a href="#!">전자조달시스템</a></li>
                <li><a href="#!">E-브로슈어</a></li>
                <li><a href="<?php echo G5_THEME_URL; ?>/doc/sub036.php">사이버신문고</a></li>
            </ul>
            <div class="add"><?= $as_address ?></div>
        </div>
        <div class="foot_right">
            <form action="">
                <select name="" id="">
                    <option value="">Family Site</option>
                    <option value="">보라컨트리 C.C</option>
                    <option value="">더크로스비 C.C</option>
                    <option value="">사내그룹웨어</option>
                    <option value="">반도문화재단 아이비라운지</option>
                </select>
            </form>
            <address>&copy;2021 BANDO ENGINEERING · CONSTRUCTION CO., LTD. All rights reserved.</address>
        </div>
    </div>
</footer>
<div class="toTop">
    <button class="btn_o">
        <span>TOP</span>
        <i class="xi-caret-up"></i>
    </button>
</div>




<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");