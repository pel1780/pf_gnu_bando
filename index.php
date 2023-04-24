<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>





<main>
    <section class="mainVisual">
        <div class="video_case">
            <div class="visual_video" id="visual_video"></div>
        </div>
    </section>
    <section class="mainContent sec">
        <div class="inner">
            <h2>BANDO BUSINESS</h2>
            <p>새로운 도전으로 대한민국 건설을 선도하는 반도건설의 사업을 소개합니다</p>
            <ul class="flex">
                <li>
                    <figure>
                        <img src="<?php echo G5_THEME_URL; ?>/image/main/mainContent01.png" alt="">
                    </figure>
                    <strong>주택사업</strong>
                    <span>대한민국 아파트의
                        새로운 트렌드를 제시합니다</span>
                </li>
                <li>
                    <figure>
                        <img src="<?php echo G5_THEME_URL; ?>/image/main/mainContent02.png" alt="">
                    </figure>
                    <strong>건축사업</strong>
                    <span>창조적인 디자인으로 공간의
                        아름다움을 만들어 가고 있습니다</span>
                </li>
                <li>
                    <figure>
                        <img src="<?php echo G5_THEME_URL; ?>/image/main/mainContent03.png" alt="">
                    </figure>
                    <strong>토목사업</strong>
                    <span>앞선 생각과 기술력으로
                        영역을 넓히고 있습니다</span>
                </li>
                <li>
                    <figure>
                        <img src="<?php echo G5_THEME_URL; ?>/image/main/mainContent04.png" alt="">
                    </figure>
                    <strong>해외사업</strong>
                    <span>반도에서 세계의 중심을 향해
                        나아갑니다</span>
                </li>
                <li>
                    <figure>
                        <img src="<?php echo G5_THEME_URL; ?>/image/main/mainContent05.png" alt="">
                    </figure>
                    <strong>레저사업</strong>
                    <span>세련되고 감각적인
                        레저문화를 열어갑니다</span>
                </li>
            </ul>
        </div>
    </section>
    <section class="mainArticle">
        <div class="article_slide">
            <div class="itm itm01">
                <div class="artcle_txt_case">
                    <strong>새로운 도전으로 <br />세상의 기대를 앞서다</strong>
                    <p>반도건설의 앞선 기술과 철학으로<br> 세상을 움직이고 있습니다</p>
                </div>
            </div>
            <div class="itm itm02">
                <div class="artcle_txt_case">
                    <strong>끝없는 상상과 혁신으로 <br />남다른 미래를 만들다</strong>
                    <p>건축, 주택, 토목, 레저사업에 이르기까지, <br /> 반도건설의 혁신은 멈추지 않습니다</p>
                </div>
            </div>
            <div class="itm itm03">
                <div class="artcle_txt_case">
                    <strong>더 나은 삶을 위해 <br />최고의 공간을 디자인하다</strong>
                    <p>반도건설의 이름으로 삶에 여유를 선사하고, <br />자부심을 높여드립니다</p>
                </div>
            </div>
            <div class="itm itm04">
                <div class="artcle_txt_case">
                    <strong>대한민국을 이끄는 <br />비전의 중심에 자리하다</strong>
                    <p>눈부신 비전을 품은 성공의 도시에,<br /> 반도건설의 열정이 빛나고 있습니다</p>
                </div>
            </div>
            <div class="itm itm05">
                <div class="artcle_txt_case">
                    <strong>반백년 혁신을 넘어 <br />100년 기업으로 도약하다</strong>
                    <p>반도건설의 이름으로 삶에 여유를 선사하고,<br> 자부심을 높여드립니다</p>
                </div>
            </div>
        </div>
        <div class="inner">
            <ul class="slide_dots flex">
                <li><a href="#!">기업브로셔</a></li>
                <li><a href="#!">홍보영상</a></li>
                <li><a href="#!">CI·BI</a></li>
                <li><a href="#!">오시는길</a></li>
                <li><a href="#!">50주년</a></li>
            </ul>
        </div>
    </section>
    <section class="mainNews sec">
        <div class="news_top inner">
            <div class="news_content_case">
                <div class="news_tit tit flex">
                    <strong>BANDO NEWS</strong>
                    <a href="/bbs/board.php?bo_table=sub041">더보기<i class="xi-angle-right-thin"></i></a>
                </div>
                <div class="news_slide">
                    <div class="itm itm01">
                        <a href="#!">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/image/main/mainNews01.jpg" alt="">
                            </figure>
                            <span>동반성장을 위한 스마트건설 기술협력 파트너십 체결!</span>
                        </a>
                    </div>
                    <div class="itm itm02">
                        <a href="#!">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/image/main/mainNews02.jpg" alt="">
                            </figure>
                            <span>원주 초혁신도시 반도유보라 마크브릿지 견본주택 OPEN!</span>
                        </a>
                    </div>
                    <div class="itm itm03">
                        <a href="#!">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/image/main/mainNews03.jpg" alt="">
                            </figure>
                            <span>반도그룹, 여주 코어 PC공장 자동화 생산라인으로 건설 분야 신사업 진출</span>
                        </a>
                    </div>
                    <div class="itm itm04">
                        <a href="#!">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/image/main/mainNews04.jpg" alt="">
                            </figure>
                            <span>안전보건체계구축 우수사례 발표대회 3년 연속 수상</span>
                        </a>
                    </div>
                    <div class="itm itm05">
                        <a href="#!">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/image/main/mainNews05.jpg" alt="">
                            </figure>
                            <span>반도건설, 유보라 천안두정역 견본주택 OPEN!</span>
                        </a>
                    </div>
                    <div class="itm itm06">
                        <a href="#!">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/image/main/mainNews06.jpg" alt="">
                            </figure>
                            <span>반도건설, 2022 건설협력증진대상 중소벤처기업부 표창 수상</span>
                        </a>
                    </div>
                    <div class="itm itm07">
                        <a href="#!">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/image/main/mainNews07.jpg" alt="">
                            </figure>
                            <span>반도건설, 환경경영시스템 국제인증 ISO14001 획득</span>
                        </a>
                    </div>
                    <div class="itm itm08">
                        <a href="#!">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/image/main/mainNews08.jpg" alt="">
                            </figure>
                            <span>반도건설, 한경주거문화대상 브랜드대상 수상</span>
                        </a>
                    </div>
                    <div class="itm itm09">
                        <a href="#!">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/image/main/mainNews09.jpg" alt="">
                            </figure>
                            <span>반도건설, "전 현장 안전보건경영방침 선포식 개최"</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="news_arrows arrows flex">
                <button class="news_prev btn_o"><i class="xi-angle-left-thin"></i></button>
                <button class="news_next btn_o"><i class="xi-angle-right-thin"></i></button>
            </div>
        </div>
        <div class="news_btm inner">
            <div class="news_content_case">
                <div class="sns_tit tit flex">
                    <strong>BANDO SNS</strong>
                    <a href="/bbs/board.php?bo_table=sub042">더보기<i class="xi-angle-right-thin"></i></a>
                </div>
                <div class="sns_slide">
                    <div class="itm itm01">
                        <em class="insta">INSTAGRAM</em>
                        <figure>
                            <img src="<?php echo G5_THEME_URL; ?>/image/main/mainSns01.jpg" alt="">
                        </figure>
                        <span>꼭 알아둬야 할 2023년부터 달라지는 것들</span>
                    </div>
                    <div class="itm itm02">
                        <em class="youtube">YOUTUBE</em>
                        <figure>
                            <img src="<?php echo G5_THEME_URL; ?>/image/main/mainSns02.jpg" alt="">
                        </figure>
                        <span>2023년 달라지는 부동산 세법, A부터 Z까지 싸악 정리해드립니다</span>
                    </div>
                    <div class="itm itm03">
                        <em class="blog">BLOG</em>
                        <figure>
                            <img src="<?php echo G5_THEME_URL; ?>/image/main/mainSns03.jpg" alt="">
                        </figure>
                        <span>반도건설, 전 현장 안전보건경영방침 선포식 개최</span>
                    </div>
                    <div class="itm itm04">
                        <em class="youtube">YOUTUBE</em>
                        <figure>
                            <img src="<?php echo G5_THEME_URL; ?>/image/main/mainSns04.jpg" alt="">
                        </figure>
                        <span>여의도 시티뷰를 방안에서? 여의도 리미티오148 입주민 브이로그</span>
                    </div>
                    <div class="itm itm05">
                        <em class="insta">INSTAGRAM</em>
                        <figure>
                            <img src="<?php echo G5_THEME_URL; ?>/image/main/mainSns05.jpg" alt="">
                        </figure>
                        <span>여의도 리미티오 148 입주단지 둘러보기</span>
                    </div>
                    <div class="itm itm06">
                        <em class="insta">INSTAGRAM</em>
                        <figure>
                            <img src="<?php echo G5_THEME_URL; ?>/image/main/mainSns06.jpg" alt="">
                        </figure>
                        <span>행복한 설 명절 되세요!</span>
                    </div>
                    <div class="itm itm07">
                        <em class="insta">INSTAGRAM</em>
                        <figure>
                            <img src="<?php echo G5_THEME_URL; ?>/image/main/mainSns07.jpg" alt="">
                        </figure>
                        <span>
                            여의도 리미티오148 입주민 브이로그</span>
                    </div>
                    <div class="itm itm08">
                        <em class="insta">INSTAGRAM</em>
                        <figure>
                            <img src="<?php echo G5_THEME_URL; ?>/image/main/mainSns08.jpg" alt="">
                        </figure>
                        <span>
                            전 현장 안전보건경영방침 선포식 개최</span>
                    </div>
                    <div class="itm itm09">
                        <em class="insta">INSTAGRAM</em>
                        <figure>
                            <img src="<?php echo G5_THEME_URL; ?>/image/main/mainSns09.jpg" alt="">
                        </figure>
                        <span>
                            제3회 반도 전시기획 공모전</span>
                    </div>
                    <div class="itm itm010">
                        <em class="blog">BLOG</em>
                        <figure>
                            <img src="<?php echo G5_THEME_URL; ?>/image/main/mainSns10.jpg" alt="">
                        </figure>
                        <span>
                            반도문화재단, 제3회 반도 전시기획 공모전 개최!</span>
                    </div>
                </div>
            </div>
            <div class="sns_arrows arrows flex">
                <button class="sns_prev btn_o"><i class="xi-angle-left-thin"></i></button>
                <button class="sns_next btn_o"><i class="xi-angle-right-thin"></i></button>
            </div>
        </div>
    </section>
    <section class="mainBanner flex">
        <div class="banner_left">
            <div class="banner_left_case banner_case">
                <strong>RECRUIT</strong>
                <p>반도건설에서 새로운 도전을 함께할 <br />
                    당신을 찾습니다</p>
                <ul class="flex">
                    <li>
                        <a href="#!" class="flex">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/image/main/mainBanner_icon01.png" alt="">
                            </figure>
                            <span>채용공고</span>
                            <i class="xi-angle-right-thin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="flex">
                            <figure>
                                <img src="<?php echo G5_THEME_URL; ?>/image/main/mainBanner_icon02.png" alt="">
                            </figure>
                            <span>인사제도</span>
                            <i class="xi-angle-right-thin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="banner_right">
            <div class="banner_right_case banner_case">
                <strong>
                    <img src="<?php echo G5_THEME_URL; ?>/image/main/mainBanner_logo.png" alt="">
                </strong>
                <p>고객에게 최고 혹은 전부가 될 주거공간과 그 이상의 고객만족과 감동을 선사하겠습니다.</p>
                <a href="#!">바로가기 <i class="xi-angle-right-thin"></i></a>
            </div>
        </div>
    </section>
</main>















<?php
include_once(G5_THEME_PATH.'/tail.php');