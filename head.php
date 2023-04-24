<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<?php
if(defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>

<div class="Wrap">
    <header class="header">
        <div class="inner flex">
            <h1>
                <a href="/">logo</a>
            </h1>
            <nav class="gnb">
                <ul class="flex">
                    <li>
                        <a href="<?php echo G5_THEME_URL; ?>/doc/sub011.php">반도건설</a>
                        <ul>
                            <li><a href="<?php echo G5_THEME_URL; ?>/doc/sub011.php">기업소개</a></li>
                            <li><a href="<?php echo G5_THEME_URL; ?>/doc/sub012.php">CEO 메시지</a></li>
                            <li><a href="<?php echo G5_THEME_URL; ?>/doc/sub013.php">기업연혁</a></li>
                            <li><a href="<?php echo G5_THEME_URL; ?>/doc/sub014.php">CI&BI</a></li>
                            <li><a href="<?php echo G5_THEME_URL; ?>/doc/sub015.php">오시는 길</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/bbs/board.php?bo_table=sub021">사업영역</a>
                        <ul>
                            <li><a href="/bbs/board.php?bo_table=sub021">주택사업</a></li>
                            <li><a href="/bbs/board.php?bo_table=sub022">건축사업</a></li>
                            <li><a href="/bbs/board.php?bo_table=sub023">토목사업</a></li>
                            <li><a href="/bbs/board.php?bo_table=sub024">해외사업</a></li>
                            <li><a href="/bbs/board.php?bo_table=sub025">레저사업</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo G5_THEME_URL; ?>/doc/sub031.php">지속가능경영</a>
                        <ul>
                            <li><a href="<?php echo G5_THEME_URL; ?>/doc/sub031.php">ESG경영</a></li>
                            <li><a href="<?php echo G5_THEME_URL; ?>/doc/sub032.php">품질경영</a></li>
                            <li><a href="<?php echo G5_THEME_URL; ?>/doc/sub033.php">동반성장</a></li>
                            <li><a href="<?php echo G5_THEME_URL; ?>/doc/sub034.php">안전경영</a></li>
                            <li><a href="<?php echo G5_THEME_URL; ?>/doc/sub035.php">사회공헌</a></li>
                            <li><a href="<?php echo G5_THEME_URL; ?>/doc/sub036.php">신문고</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/bbs/board.php?bo_table=sub041">홍보센터</a>
                        <ul>
                            <li><a href="/bbs/board.php?bo_table=sub041">뉴스룸</a></li>
                            <li><a href="/bbs/board.php?bo_table=sub042">SNS</a></li>
                            <li><a href="/bbs/board.php?bo_table=sub043">홍보영상</a></li>
                            <li><a href="/bbs/board.php?bo_table=sub044">갤러리</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#!">인재채용</a>
                        <ul>
                            <li><a href="#!">채용지원</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <button class="btn_o">
                <a href="">
                    <img src="<?php echo G5_THEME_URL; ?>/image/ubora.png" alt="">
                </a>
            </button>
        </div>
    </header>

    <?php
if(!defined('_INDEX_')) { // index가 아닐때
    include G5_THEME_PATH.'/detail.head.php'; // 서브페이지 해드..!
}
?>