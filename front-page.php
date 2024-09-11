<?php
    get_header();
    $template_uri = get_template_directory_uri();
?>

<main class="page-index">
    <section class="sec-mv">
        <ul class="mv-slider js-mv-slider">
            <li class="mv-slider__item">
                <img src="<?php echo $template_uri; ?>/img/index/mv-01.jpg" alt="DENTAL CLINIC AOKI" class="pc">
                <img src="<?php echo $template_uri; ?>/img/index/mv-01-sp.jpg" alt="DENTAL CLINIC AOKI" class="sp">
            </li>
            <li class="mv-slider__item">
                <img src="<?php echo $template_uri; ?>/img/index/mv-02.jpg" alt="DENTAL CLINIC AOKI" class="pc">
                <img src="<?php echo $template_uri; ?>/img/index/mv-02-sp.jpg" alt="DENTAL CLINIC AOKI" class="sp">
            </li>
            <li class="mv-slider__item">
                <img src="<?php echo $template_uri; ?>/img/index/mv-03.jpg" alt="DENTAL CLINIC AOKI" class="pc">
                <img src="<?php echo $template_uri; ?>/img/index/mv-03-sp.jpg" alt="DENTAL CLINIC AOKI" class="sp">
            </li>
            <li class="mv-slider__item">
                <img src="<?php echo $template_uri; ?>/img/index/mv-04.jpg" alt="DENTAL CLINIC AOKI" class="pc">
                <img src="<?php echo $template_uri; ?>/img/index/mv-04-sp.jpg" alt="DENTAL CLINIC AOKI" class="sp">
            </li>
           
        </ul>
        <div class="mv-block">
            <div class="mv-block__heading">
                <span class="mv-block__heading-note">代々木駅 徒歩<span>3</span>分</span>
                <h1 class="mv-block__heading-ttl">
                    <p>
                        <span>不安を解消し、</span>
                        <span>安心の治療を。</span>
                    </p>
                </h1>
                <div class="mv-block__heading-ct">
                    <p> 患者様への<br class="pc-tb">丁寧な説明を<br class="pc-tb">心がけています。 </p>
                </div>
            </div>
            <div class="mv-block__items">
                <div class="mv-block__item">
                    <img src="<?php echo $template_uri; ?>/img/common/icon-03.png" alt="歯周病専門医によるオーダーメイド治療">
                    <p> 歯周病専門医による<br>オーダーメイド治療 </p>
                </div>
                <div class="mv-block__item">
                    <img src="<?php echo $template_uri; ?>/img/common/icon-04.png" alt="丁寧な検査と診断から最適な歯科医療">
                    <p> 丁寧な検査と診断から<br>最適な歯科医療 </p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-policy">
        <div class="policy-block">
            <div class="policy-block__img">
                <div class="policy-block__img--sticky">
                    <div class="sticky-box">
                        <img src="<?php echo $template_uri; ?>/img/index/policy-img-02.jpg" alt="丁寧な検査と診断から最適な歯科医療">
                    </div>
                </div>
            </div>
            <div class="policy-block__ct">
                <h2 class="c-ttl__01 js-scrollin">
                    <span class="c-ft--en">Policy</span>
                    <span class="c-ft--jp"> 患者さま<br class="sp"><span>一人ひとりに合った</span><br>
                        <span>オーダーメイド治療</span>を<br> 提供いたします </span>
                </h2>
                <p class="js-scrollin"> 当院は、歯周病専門医の知識と技術をもとに、<br class="pc">歯周治療を中心とした包括的治療を提供いたします。 </p>
                <p class="js-scrollin"> 患者さまの不安や疑問、要望にしっかりと耳を傾け、<br class="pc">適切かつ正確な検査を行うことで、<br class="pc">患者さま一人ひとりのお口の状況をしっかり把握し、<br class="pc">治療を進めてまいります。 </p>
                <p class="js-scrollin"> 治療に関しては現在の状態、問題点、治療の選択肢、<br class="pc">それぞれのメリットとデメリットを細かく説明し、<br class="pc">納得いただいた上で、<br class="pc">どの治療が患者さまに適しているのか<br class="pc"> 患者さまと相談しながら決定していきます。 </p>
                <p class="js-scrollin"> 歯科医院にあまり良い印象を持っていない人でも<br class="pc"> 来院したいと思える環境や治療を提供することを<br class="pc"> 目指しております。 </p>
                <p class="js-scrollin pc"> 院長 青木栄人 </p>
            </div>
        </div>
    </section>
    <section class="sec-promise">
        <div class="inner">
            <div class="writing-block">
                <div class="writing-block__heading js-scrollin">
                    <h2 class="c-ttl__02">
                        <span class="c-ft--en">Promise</span>
                        <span class="c-ft--jp"> 患者さまへの<br class="pc">お約束 </span>
                    </h2>
                </div>
                <div class="writing-block__ct">
                    <ul class="promise-list js-promise-list">
                        <li class="promise-list__item js-scrollin">
                            <div class="promise-list__box">
                                <div class="promise-list__img">
                                    <img src="<?php echo $template_uri; ?>/img/index/promise-img-01.jpg" alt="しっかりとした説明で安心して治療を受けていただきます">
                                </div>
                                <div class="promise-list__ct c-txt__basic">
                                    <span class="promise-list__ct-number">Promise.01</span>
                                    <h3 class="promise-list__ct-ttl">しっかりとした説明で安心して治療を受けていただきます</h3>
                                    <p> 歯科治療に積極的でなかったり、不安を抱いている人にも、安心していただけるような歯科医療を提供いたします。 </p>
                                </div>
                            </div>
                        </li>
                        <li class="promise-list__item js-scrollin">
                            <div class="promise-list__box">
                                <div class="promise-list__img">
                                    <img src="<?php echo $template_uri; ?>/img/index/promise-img-02.jpg" alt="検査と診断に基づいた質の高い治療を提供します">
                                </div>
                                <div class="promise-list__ct c-txt__basic">
                                    <span class="promise-list__ct-number">Promise.02</span>
                                    <h3 class="promise-list__ct-ttl">検査と診断に基づいた質の高い治療を提供します</h3>
                                    <p> お口の中の状態を正しく検査・診断し、エビデンスに基づいた質の高い歯科治療の提供を行っております。 </p>
                                </div>
                            </div>
                        </li>
                        <li class="promise-list__item js-scrollin">
                            <div class="promise-list__box">
                                <div class="promise-list__img">
                                    <img src="<?php echo $template_uri; ?>/img/index/promise-img-03.jpg" alt="予防・メインテナンスを重視します">
                                </div>
                                <div class="promise-list__ct c-txt__basic">
                                    <span class="promise-list__ct-number">Promise.03</span>
                                    <h3 class="promise-list__ct-ttl">予防・メインテナンスを重視します</h3>
                                    <p> 歯科治療においてブラッシングは非常に重要です。<br> 当院では治療だけでなく、歯磨き指導や予防、メインテナンスに力を入れております。 </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="flex-end js-scrollin">
                        <a href="" class="c-btn__01">
                            <span>当院について詳しく見る</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
    $srv_args = array('post_type' => 'oc_cpt_service', 'posts_per_page' => 9, 'post_status' => 'publish', 'orderby' => 'DESC');
    $srv_query = new WP_Query($srv_args);
    ?>
    <section class="sec-service">
        <div class="inner">
            <h2 class="c-ttl__01 c-al--c js-scrollin">
                <span class="c-ft--en">Service</span>
                <span class="c-ft--jp">診療内容</span>
            </h2>
            <div class="heading-note c-txt__basic js-scrollin">
                <p> 歯周病専門医である院長を中心に、<br> 各科の専門医・認定医の連携により、<br class="sp">歯科全般の診療に対応いたします。<br> お口のことならなんでもご相談ください。 </p>
            </div>
            <?php if($srv_query->have_posts()) : ?>
            <ul class="service-list">
                <?php $i = 1;
                while($srv_query->have_posts()) : $srv_query->the_post();
                $srv_id = get_the_ID();
                $srv_icon = wp_get_original_image_url(get_field('service_icon'));
                $srv_title = get_field('service_title');
                if($i <= 4){ ?>
                <li class="service-list__item js-scrollin">
                    <a href="<?php echo get_the_permalink($srv_id); ?>" class="service-list__box">
                        <img src="<?php echo $srv_icon; ?>" alt="<?php echo get_the_title($srv_id); ?>">
                        <?php if($srv_title){ ?>
                        <span class="pc"><?php echo get_the_title($srv_id); ?></span>
                        <span class="sp"><?php echo $srv_title; ?></span>
                        <?php }else{ ?>
                        <span><?php echo get_the_title($srv_id); ?></span>
                        <?php } ?>
                    </a>
                </li>
                <?php } $i++; endwhile; ?>
            </ul>
            <?php endif; wp_reset_postdata(); ?>
            <?php if($srv_query->have_posts()) : ?>
            <ul class="service-list service-list--02">
                <?php $i = 1;
                while($srv_query->have_posts()) : $srv_query->the_post();
                $srv_id = get_the_ID();
                $srv_icon = wp_get_original_image_url(get_field('service_icon'));
                $srv_title = get_field('service_title');
                if($i > 4 && $i <= 9){ ?>
                <li class="service-list__item js-scrollin">
                    <a href="<?php echo get_the_permalink($srv_id); ?>" class="service-list__box">
                        <img src="<?php echo $srv_icon; ?>" alt="<?php echo get_the_title($srv_id); ?>">
                        <?php if($srv_title){ ?>
                        <span class="pc"><?php echo get_the_title($srv_id); ?></span>
                        <span class="sp"><?php echo $srv_title; ?></span>
                        <?php }else{ ?>
                        <span><?php echo get_the_title($srv_id); ?></span>
                        <?php } ?>
                    </a>
                </li>
                <?php } $i++; endwhile; ?>
            </ul>
            <?php endif; wp_reset_postdata(); ?>
            <div class="flex-end js-scrollin">
                <a href="" class="c-btn__01">
                    <span>料金表はこちら</span>
                </a>
            </div>
        </div>
    </section>
    <?php 
    $nws_args = array('post_type' => 'post', 'posts_per_page' => 4, 'post_status' => 'publish', 'orderby' => 'DESC');
    $nws_query = new WP_Query($nws_args);
    ?>
    <section class="sec-news">
        <div class="inner">
            <div class="writing-block">
                <div class="writing-block__heading js-scrollin">
                    <h2 class="c-ttl__02">
                        <span class="c-ft--en">News</span>
                        <span class="c-ft--jp"> お知らせ </span>
                    </h2>
                </div>
                <div class="writing-block__ct">
                    <?php if($nws_query->have_posts()) : ?>
                    <ul class="news-list c-txt__basic">
                        <?php while($nws_query->have_posts()) : $nws_query->the_post();
                        $nws_id = get_the_ID();
                        $nws_date = get_the_date('Y.m.d');
                        $nws_cate = get_the_terms($nws_id, 'category')[0]; ?>
                        <li class="news-list__item js-scrollin">
                            <a href="<?php echo get_the_permalink($nws_id); ?>" title="<?php echo get_the_title($nws_id); ?>">
                                <span class="news-list__date"><?php echo $nws_date; ?></span>
                                <span class="news-list__category"><?php echo $nws_cate->name; ?></span>
                                <p> <?php echo get_the_title($nws_id); ?> </p>
                            </a>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; wp_reset_postdata(); ?>
                    <div class="flex-end js-scrollin">
                        <a href="" class="c-btn__01">
                            <span>お知らせを見る</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-question">
        <div class="inner">
            <h2 class="c-ttl__01 c-al--c mbpc-60 mbsp-30 js-scrollin">
                <span class="c-ft--en">Q&A</span>
                <span class="c-ft--jp">よくある質問</span>
            </h2>
            <ul class="question-list">
                <li class="question-list__item js-scrollin">
                    <div class="question-list__box">
                        <span class="c-fc--gray">妊娠中</span>でも<br> 歯の治療はしてもらえる？ </div>
                </li>
                <li class="question-list__item js-scrollin">
                    <div class="question-list__box"> 他の医院で<span class="c-fc--gray">歯を抜くしかない</span>と<br> 言われたのだけど… </div>
                </li>
                <li class="question-list__item js-scrollin">
                    <div class="question-list__box">
                        <span class="c-fc--gray">インプラント</span>ってどんな<br> 治療方法？ </div>
                </li>
            </ul>
            <div class="heading-note c-txt__basic mbsp-35 js-scrollin">
                <p> 当院の設備や診療・治療内容についてなど、<br class="sp">患者様よりよく寄せられる質問を<br class="sp">まとめました。<br> この他にもご不明な点がございましたら、<br class="sp">当院までお気軽にお問い合わせください。 </p>
            </div>
            <div class="flex-end js-scrollin">
                <a href="" class="c-btn__01">
                    <span>よくある質問を見る</span>
                </a>
            </div>
        </div>
    </section>
    <section class="sec-contact">
        <div class="inner">
            <h2 class="c-ttl__01 c-al--c mbpc-60 js-scrollin">
                <span class="c-ft--en">Contact</span>
                <span class="c-ft--jp">お問い合わせ</span>
            </h2>
            <div class="heading-note mbpc-35 mbsp-30 c-txt__basic js-scrollin">
                <p> ご予約やご質問は、<br class="sp">お電話またはお問い合わせフォームより<br class="sp">お気軽にご連絡ください。<br>
                </p>
                <p>
                    <small> ※当院は予約制となっております。<br class="sp">ご来院の前にご予約をお願いいたします。 </small>
                </p>
            </div>
            <a href="tel:0973800X0X" class="contact-tel mbpc-38 js-scrollin"><span>09-7380-0X0X</span></a>
            <a href="" class="c-btn__02 c-btn__02--email js-scrollinl">
                <span>お問い合わせはこちら</span>
            </a>
        </div>
    </section>
</main>

<?php
    get_footer();
?>