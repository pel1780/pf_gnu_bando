<article>
                <section>
                <div>
                <h3><?= $page_title ?></h3>
                <p><?= $page_desc_top ?></p>
                <span><?= $page_desc_btm ?></span>
                </div>
                </section>

                <!-- <script>
        $(function(){
            var num = <?= $page_num ?>;
            $('.sub_nav ul>li').eq(num-1).addClass('on');
            const SUB = $('body #sub article')
            if(<?= $cate_num ?>>1){
                SUB.html(`
                <section>
                <div>
                <h3><?= $page_title ?></h3>
                <p><?= $page_desc_top ?></p>
                <span><?= $page_desc_btm ?></span>
                </div>
                </section>
                `)
                $('article section').addClass('sec sectionTitle');
                $('article div').addClass('inner');
            }
        })
        </script> -->