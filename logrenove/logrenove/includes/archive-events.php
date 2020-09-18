<main class="pb-0">
    <section class="section_event bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php get_template_part('template-parts/events/breadcrumb','event') ?>
                    <h3> <img class="img-fluid mr-1" src="<?=IMAGE_PATH;?>/1x/i_event.svg" width="24"> イベント内容</h3>
                    <ul class="list_event">
                        <li><a href="#">物件探し</a></li>
                        <li><a href="#">設計・プラン</a></li>
                        <li><a href="#">資金計画・ローン</a></li>
                        <li><a class="disabled" href="#" tabindex="-1" role="button" aria-disabled="true">◯◯◯◯◯</a></li>
                        <li><a class="disabled" href="#">◯◯◯◯◯</a></li>
                        <li><a href="/events">すべて</a></li>
                    </ul>
                    <h3><img class="img-fluid mr-1" src="<?=IMAGE_PATH;?>/1x/i_date.svg" width="20"> 開催曜日</h3>
                    <ul class="list_event">
                        <li><a href="#">土曜日</a></li>
                        <li><a href="#">日曜日</a></li>
                        <li><a href="#">平日</a></li>
                        <li><a href="/events">すべて</a></li>
                    </ul>

                    <?php get_template_part( 'template-parts/events/archive', 'default' ); ?>

                    <div class="banner_online">
                        <a href="https://www.logrenove.jp/service/" target="_tbank"><img src="<?=IMAGE_PATH;?>/1x/online_consultation.png" alt="" class="img-fluid d-none d-lg-block"></a>
                        <a href="https://www.logrenove.jp/service/" target="_tbank"><img src="<?=IMAGE_PATH;?>/1x/online_consultation_sp.png" alt="" class="img-fluid d-block d-lg-none"></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>