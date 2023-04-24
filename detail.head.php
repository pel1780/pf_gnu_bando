<?
        if($board['bo_table'] == 'sub021') {
            $cate_num = 2;
            $page_num = 1;
            $cate_title = '사업영역';
            $page_title = '주택사업';
            $page_desc_top = '59㎡ 최초의 4.5BAY 평면설계, 동탄2신도시 최초의 교육프로그램 특화, 단지 내 별동학습관과 헬스케어 시스템 까지';
            $page_desc_btm ='대한민국 아파트의 한계를 넘어서는 공간을 만들어온 반도건설은 수도권 신도시를 비롯하여
            전국 방방곡곡 10만여 세대의 반도유보라를 통해 명품아파트의 새로운 기준을 만들고 있습니다.';
        } else if($board['bo_table'] == 'sub022'){
            $cate_num = 2;
            $page_num = 2;
            $cate_title = '사업영역';
            $page_title = '건축사업';
            $page_desc_top = '디자인을 입은 건축, 반도건설은 이미 시작하고 있습니다.';
            $page_desc_btm ='완벽한 품질을 위한 정밀한 기술과 감동을 전하는 건축디자인의 조화를 반도건설은 추구하고 있습니다.
            아시아경기대회 경기장들을 비롯하여 각 지역의 랜드마크 건축물에 이르기까지 창조적인 디자인을 통한 공간의 아름다움을 만들어가고 있습니다.';
        } else if($board['bo_table'] == 'sub023'){
            $cate_num = 2;
            $page_num = 3;
            $cate_title = '사업영역';
            $page_title = '토목사업';
            $page_desc_top = '대한민국을 새롭게 바꾸는 힘! 반도건설의 열정은 무한합니다.';
            $page_desc_btm ='탁 트인 도로를 통해, 드넓은 항만을 통해 더 큰 대한민국을 만드는데 반도건설이 함께 합니다.
            지상, 지하를 넘어 바다에 이르기까지 반도건설이 삶의 영역을 넓히고 있습니다.';
        } else if($board['bo_table'] == 'sub024'){
            $cate_num = 2;
            $page_num = 4;
            $cate_title = '사업영역';
            $page_title = '해외사업';
            $page_desc_top = '세계의 중심을 향해 거침없이 나아갑니다.';
            $page_desc_btm ='건축물을 뛰어 넘은 또 하나의 대한민국으로 기억될 것입니다.';
        } else if($board['bo_table'] == 'sub025'){
            $cate_num = 2;
            $page_num = 5;
            $cate_title = '사업영역';
            $page_title = '레저사업';
            $page_desc_top = '감동의 차이를 만드는 세계적 수준의 레저문화를 엽니다!';
            $page_desc_btm ='휴양과 골프를 함께 즐기는 일본 NORTH SHORE C.C, KAMO G.C, 미국의 CROSBY G.C 대자연의 풍광과 유려한 골프코스,
            세심하고 정성 가득한 서비스 시스템으로 한차원 높은 레저문화를 만들어 갑니다.';
        } else if($board['bo_table'] == 'sub041') {
            $cate_num = 4;
            $page_num = 1;
            $cate_title = '홍보센터';
            $page_title = '뉴스룸';
        } else if($board['bo_table'] == 'sub042') {
            $cate_num = 4;
            $page_num = 2;
            $cate_title = '홍보센터';
            $page_title = 'BANDO SNS';
        } else if($board['bo_table'] == 'sub043') {
            $cate_num = 4;
            $page_num = 3;
            $cate_title = '홍보센터';
            $page_title = '홍보영상';
        } else if($board['bo_table'] == 'sub044') {
            $cate_num = 4;
            $page_num = 4;
            $cate_title = '홍보센터';
            $page_title = '갤러리';
        }
        ?>




<div id="sub">
    <section class="subTop">
        <div class="sub_banner"
            style="background-image:url(<?= G5_THEME_URL ?>/image/sub/subBanner_0<?= $cate_num ?>.jpg)">
            <h2><?= $cate_title ?></h2>
        </div>
        <div class="sub_nav">
            <? include G5_THEME_PATH.'/doc/nav0'.$cate_num.'.php';?>
        </div>
    </section>
    <article id="article">

        <script>
        $(function() {
            var num = <?= $page_num ?>;
            var cate_num = <?= $cate_num ?>;
            $('.sub_nav ul>li').eq(num - 1).addClass('on');

            if (cate_num == 1 && num == 1) {
                $('article').addClass('brand_story');
            } else if (cate_num == 1 && num == 2) {
                $('article').addClass('brand_ceo');
            } else if (cate_num == 1 && num == 3) {
                $('article').addClass('brand_history');
            } else if (cate_num == 1 && num == 4) {
                $('article').addClass('brand_ci');
            } else if (cate_num == 1 && num == 5) {
                $('article').addClass('brand_map');
            }
            if (cate_num == 2) {
                $('#article').addClass('business');
                $('#sub .business').prepend(`
                <section class="sec subTitle">
                    <div class="inner sub_tit">
                        <h3><?= $page_title ?></h3>
                        <p><?= $page_desc_top ?></p>
                        <span><?= $page_desc_btm ?></span>
                    </div>
                </section>`);
            } else if (cate_num == 3) {
                $('#article').addClass('management');
                $('#sub .management').prepend(`
                <section class="sec subTitle">
                    <h3><?= $page_title ?></h3>
                    <div class="inner" style="background-image:url(<?= G5_THEME_URL ?>/image/sub/sub_tit_bg03<?= $page_num ?>.jpg)">
                        <p><?= $page_desc_top ?></p>
                        <span><?= $page_desc_btm ?></span>
                    </div>
                </section>`);
            } else if (cate_num == 4) {
                $('#article').addClass('bando_news');
                $('body .bando_news').prepend(`
                <section class="sec subTitle">
                    <h3><?= $page_title ?></h3>
                </section>`);
            }
            if (cate_num == 3 && num == 1) {
                $('section:nth-of-type(2)').addClass('manage_esg');
            } else if (cate_num == 3 && num == 2) {
                $('section:nth-of-type(2)').addClass('manage_qual');
            } else if (cate_num == 3 && num == 3) {
                $('section:nth-of-type(2)').addClass('manage_com');
            } else if (cate_num == 3 && num == 4) {
                $('section:nth-of-type(2)').addClass('manage_safe');
            } else if (cate_num == 3 && num == 5) {
                $('section:nth-of-type(2)').addClass('manage_contribution');
            } else if (cate_num == 3 && num == 6) {
                $('section:nth-of-type(2)').addClass('manage_sin');
            } else if (cate_num == 4 && num == 1) {
                $('.inner').addClass('news');
            }

        })
        </script>

        <?php if($cate_num > 1) {?>
        <section>
            <div class="inner">
                <?php } ?>