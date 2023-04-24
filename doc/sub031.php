<?php
$cate_num = 3;
$page_num = 1;
$cate_title = '지속가능경영';
$page_title = 'ESG경영';
$page_desc_top ='더불어 함께 사는 BANDO ESG';
$page_desc_btm ='ESG 경영이라는 반도의 핵심 경영 가치를 준수하기 위해
환경, 안전, 상생, 윤리까지 투명하고 사회적 책임을 마다하지 않는 기업이 되겠습니다.';

include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>





<strong class="esg_tit">ESG Framework</strong>
<div class="esg_desc">
    <p>
        <em>
            앞선 ESG경영 실천으로 사회적 가치를 최우선으로 생각하는 지속가능한 건설기업
        </em>
        반도건설은 기존 재무적 성과에 초점을 맞췄던 경영방식을 벗어나 기업의 사회적 책임과 투명성, 친환경 건설문화 등
        지속가능성을 강조 하는 ‘ESG경영’을 핵심 경영방침으로 설정해 실천하고 있습니다.
    </p>
</div>
<div class="esg_itm_case">
    <div class="itm itm01">
        <strong class="itm_tit">Goal</strong>
        <p>안전, 상생, 친환경 건설문화로 기업의 지속가능 성장모델 구축</p>
    </div>
    <div class="itm itm02">
        <strong class="itm_tit">Mission</strong>
        <p>친환경 건축 기술로 선순환 가치를 창출하고 지속가능한 건축문화 조성</p>
    </div>
    <div class="itm itm03">
        <strong class="itm_tit">Strategy</strong>
        <ul class="flex">
            <li>
                <span>친환경 주택문화 확립</span>
                <figure>
                    <img src="<?php echo G5_THEME_URL; ?>/image/sub/manage01.jpg" alt="">
                </figure>
                <ul>
                    <li>건설사 환경가치 실천</li>
                    <li>에너지효율, 기후변화 대응 기술 개발</li>
                    <li>폐기물 감축 및 재활용 촉진</li>
                </ul>
            </li>
            <li>
                <span>안전문화/상생협력 강화</span>
                <figure>
                    <img src="<?php echo G5_THEME_URL; ?>/image/sub/manage02.jpg" alt="">
                </figure>
                <ul>
                    <li>사고 없는 안전한 일터</li>
                    <li>인권존중, 차별 없는 문화</li>
                    <li>동반성장, 공정거래 문화 확립</li>
                </ul>
            </li>
            <li>
                <span>윤리경영/투명경영 실천</span>
                <figure>
                    <img src="<?php echo G5_THEME_URL; ?>/image/sub/manage03.jpg" alt="">
                </figure>
                <ul>
                    <li>준법, 윤리경영 문화 확산</li>
                    <li>전사 리스크 관리체계 구축/정보 공개</li>
                    <li>ESG관리 추진체계 확립</li>
                </ul>
            </li>
        </ul>
    </div>
</div>





<?php
include_once(G5_THEME_PATH.'/tail.php');
?>