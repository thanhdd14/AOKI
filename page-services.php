<?php
    /* Template Name: Service */
    $template_uri = get_template_directory_uri();

    get_header();

    $srv_args = array('post_type' => 'oc_cpt_service', 'posts_per_page' => 9, 'post_status' => 'publish', 'orderby' => 'DESC');
    $srv_query = new WP_Query($srv_args);
?>

<main class="page-service">
    <section class="sec-heading">
        <div class="inner">
            <h1 class="c-ttl__01">
                <span class="c-ft--en">Service</span>
                <span class="c-ft--jp">診療内容・料金表</span>
            </h1>
        </div>
    </section>
    <section class="sec-service service-page">
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
    <section class="sec-flow">
        <div class="inner">
            <h2 class="c-ttl__01 c-al--c mbpc-67 js-scrollin">
                <span class="c-ft--en">Flow</span>
                <span class="c-ft--jp">診療の流れ</span>
            </h2>
            <ul class="flow-list">
                <li class="flow-list__item js-scrollin">
                    <div class="flow-list__box">
                        <h3 class="flow-list__ttl">
                            <span class="c-ft--en">Flow.01</span>
                            <span class="c-ft--jp">カウンセリング</span>
                        </h3>
                        <div class="flow-list__ct c-txt__basic">
                            <p> 患者様の現在のお口のお悩みとともにこれまでの症状などをお伺いします。<br> 治療に対する不安やご要望なども遠慮なくお話しください。<br> 今後の治療計画に役立てます。ご質問にも丁寧にお答えします。 </p>
                        </div>
                    </div>
                </li>
                <li class="flow-list__item js-scrollin">
                    <div class="flow-list__box">
                        <h3 class="flow-list__ttl">
                            <span class="c-ft--en">Flow.02</span>
                            <span class="c-ft--jp">診断と検査</span>
                        </h3>
                        <div class="flow-list__ct c-txt__basic">
                            <p> 治療を行う上で的確な診断は必要不可欠です。<br> 精密検査では、患者様のお口の状態に応じて、レントゲン撮影や歯周病検査などを行い、病気の原因を探し適切な治療計画をご提案します。 </p>
                        </div>
                    </div>
                </li>
                <li class="flow-list__item js-scrollin">
                    <div class="flow-list__box">
                        <h3 class="flow-list__ttl">
                            <span class="c-ft--en">Flow.03</span>
                            <span class="c-ft--jp">治療</span>
                        </h3>
                        <div class="flow-list__ct c-txt__basic">
                            <p> 患者様が治療計画をご理解し、ご納得いただけましたら治療を開始します。<br> 治療途中であっても、不安や疑問に感じることがあればいつでもお気軽におたずねください。 </p>
                        </div>
                    </div>
                </li>
                <li class="flow-list__item js-scrollin">
                    <div class="flow-list__box">
                        <h3 class="flow-list__ttl">
                            <span class="c-ft--en">Flow.04</span>
                            <span class="c-ft--jp">定期検診</span>
                        </h3>
                        <div class="flow-list__ct c-txt__basic">
                            <p> 治療後は、お口の健康維持のためにメンテナンス・定期健診をおすすめしています。<br> 当院では、予防に重点を置いたメニューを各種ご用意しております。<br> 虫歯や歯周病の再発および、新たなトラブルを未然に防ぐためにも、積極的にメンテナンスを受けましょう。 </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="sec-treatment">
        <div class="inner">
            <h2 class="c-ttl__01 c-al--c mbpc-67 js-scrollin">
                <span class="c-ft--en">Treatment details</span>
                <span class="c-ft--jp">保険診療と<br class="sp">自費診療について</span>
            </h2>
            <div class="heading-note c-txt__basic mbsp-30 js-scrollin"> 当医院では、保険診療と自費診療（自由診療、保険外診療）があります。<br> 治療前に患者様のご要望をお聞きし、<br> 患者様一人ひとりにとって最適な治療を行えるようにしております。<br> お気軽にご相談ください。 </div>
            <div class="treatment-block c-txt__basic">
                <div class="treatment-block__item js-scrollin">
                    <h3 class="treatment-block__ttl">
                        <span class="c-fc--gray"><span>保</span><span>険</span>診療</span>とは </h3>
                    <p> 国が定めた材料と治療方法の範囲内で行う治療で、<span class="c-fc--gray">同じ内容の診療であれば他医院と違いはなく、日本全国同一料金</span>です。<br> 虫歯や歯周病などの治療は可能な限り保険診療を行いますが、全ての治療が保険でできるわけではありません。 </p>
                    <div class="treatment-block__box">
                        <h4 class="treatment-block__box-ttl">
                            <span class="c-fc--gray">保険診療</span>での<br class="sp-sm">「詰め物・かぶせ物」について </h4>
                        <p> 保険診療での「銀の詰め物・かぶせ物(金銀パラジウム合金)」は、金属アレルギーを引き起こす可能性があります。<br> また、金属イオンによる歯茎の黒ずみや見た目の問題など、様々な問題点があげられます。<br> また、保険診療での材料は、詰め物・かぶせ物と歯の間の境目にすき間が出来やすく、虫歯の再発リスクを高めることになります。 </p>
                    </div>
                </div>
                <div class="treatment-block__item js-scrollin">
                    <h3 class="treatment-block__ttl">
                        <span class="c-fc--gray"><span>自</span><span>費</span>診療</span>とは </h3>
                    <p> 保険診療適用の範囲外の材料や技術を使う治療を自費診療（自由診療、保険外診療）といいます。<br> 保険診療上の制限はなく、<span class="c-fc--gray">目的に合わせて最適な材料と治療技術を使い、機能性や審美性を重視することのできる治療</span>のことです。
                    </p>
                    <div class="treatment-block__box">
                        <h4 class="treatment-block__box-ttl">
                            <span class="c-fc--gray">自費診療</span>での<br class="sp-sm">「詰め物・かぶせ物」について </h4>
                        <p> 自費診療での詰め物・かぶせ物は、金属を使わない治療ができることで、金属アレルギーの心配がありません。<br> また詰め物・かぶせものと歯の間をぴったり埋めることが可能な良質な材料を使用するため、虫歯の再発リスクが限りなく小さくなります。<br> 自費診療は見た目の美しさに加えて、「虫歯再発リスクの低下」、「体への優しさ」にもつながる最良の選択といえるのです。 </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-price">
        <div class="inner">
            <h2 class="c-ttl__01 c-al--c mbpc-41 js-scrollin">
                <span class="c-ft--en">Price list</span>
                <span class="c-ft--jp">料金表</span>
            </h2>
            <div class="price-show">
                <div class="price-show__item">
                    <h3 class="c-ttl__03 js-scrollin"> 一般歯科 </h3>
                    <ul class="price-list c-txt__basic">
                        <li class="price-list__item js-scrollin">
                            <div class="price-list__ct">
                                <h4 class="price-list__ct-ttl">診療名1</h4>
                                <p> 説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。 </p>
                            </div>
                            <div class="price-list__oder">
                                <span class="c-fc--gray">保険適応</span>
                            </div>
                        </li>
                        <li class="price-list__item js-scrollin">
                            <div class="price-list__ct">
                                <h4 class="price-list__ct-ttl">診療名2</h4>
                                <p> 説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。 </p>
                            </div>
                            <div class="price-list__oder">
                                <span class="c-fc--gray">保険適応</span>
                            </div>
                        </li>
                        <li class="price-list__item js-scrollin">
                            <div class="price-list__ct">
                                <h4 class="price-list__ct-ttl">診療名3</h4>
                                <p> 説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。 </p>
                            </div>
                            <div class="price-list__oder">
                                <span class="c-fc--gray">保険適応</span>
                                <span class="price-list__oder-num"> 20 〜 40<small>万円</small>
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="price-show__item">
                    <h3 class="c-ttl__03 js-scrollin"> 一般歯科(自費治療） </h3>
                    <ul class="price-list c-txt__basic">
                        <li class="price-list__item js-scrollin">
                            <div class="price-list__ct">
                                <h4 class="price-list__ct-ttl">診療名1</h4>
                                <p> 説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。 </p>
                            </div>
                            <div class="price-list__oder">
                                <span class="price-list__oder-num"> 3,000<small>円</small> 〜
                                </span>
                            </div>
                        </li>
                        <li class="price-list__item js-scrollin">
                            <div class="price-list__ct">
                                <h4 class="price-list__ct-ttl">診療名2</h4>
                                <p> 説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。 </p>
                            </div>
                            <div class="price-list__oder">
                                <span class="price-list__oder-num"> 3,000<small>万円</small>
                                </span>
                            </div>
                        </li>
                        <li class="price-list__item js-scrollin">
                            <div class="price-list__ct">
                                <h4 class="price-list__ct-ttl">診療名3</h4>
                                <p> 説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。 </p>
                            </div>
                            <div class="price-list__oder">
                                <span class="price-list__oder-num"> 20 〜 40<small>万円</small>
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="price-show__item">
                    <h3 class="c-ttl__03 js-scrollin"> クラウン【 被せ物（ 自費治療 ）】 </h3>
                    <ul class="price-list c-txt__basic">
                        <li class="price-list__item js-scrollin">
                            <div class="price-list__ct">
                                <h4 class="price-list__ct-ttl">診療名1</h4>
                                <p> 説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。 </p>
                            </div>
                            <div class="price-list__oder">
                                <span class="price-list__oder-num"> 3,000<small>円</small> 〜
                                </span>
                            </div>
                        </li>
                        <li class="price-list__item js-scrollin">
                            <div class="price-list__ct">
                                <h4 class="price-list__ct-ttl">診療名2</h4>
                                <p> 説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。 </p>
                            </div>
                            <div class="price-list__oder">
                                <span class="price-list__oder-num"> 3,000<small>万円</small>
                                </span>
                            </div>
                        </li>
                        <li class="price-list__item js-scrollin">
                            <div class="price-list__ct">
                                <h4 class="price-list__ct-ttl">診療名3</h4>
                                <p> 説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。 </p>
                            </div>
                            <div class="price-list__oder">
                                <span class="price-list__oder-num"> 20 〜 40<small>万円</small>
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="price-show__item">
                    <h3 class="c-ttl__03 js-scrollin"> 矯正歯科 </h3>
                    <ul class="price-list c-txt__basic">
                        <li class="price-list__item js-scrollin">
                            <div class="price-list__ct">
                                <h4 class="price-list__ct-ttl">診療名1</h4>
                                <p> 説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。 </p>
                            </div>
                            <div class="price-list__oder">
                                <span class="price-list__oder-num"> 3,000<small>万円</small>
                                </span>
                            </div>
                        </li>
                        <li class="price-list__item js-scrollin">
                            <div class="price-list__ct">
                                <h4 class="price-list__ct-ttl">診療名2</h4>
                                <p> 説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。 </p>
                            </div>
                            <div class="price-list__oder">
                                <span class="price-list__oder-num"> 3,000<small>万円</small>
                                </span>
                            </div>
                        </li>
                        <li class="price-list__item js-scrollin">
                            <div class="price-list__ct">
                                <h4 class="price-list__ct-ttl">診療名3</h4>
                                <p> 説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。 </p>
                            </div>
                            <div class="price-list__oder">
                                <span class="price-list__oder-num"> 20 〜 40<small>万円</small>
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="price-show__item">
                    <h3 class="c-ttl__03 js-scrollin"> インプラント </h3>
                    <ul class="price-list c-txt__basic">
                        <li class="price-list__item js-scrollin">
                            <div class="price-list__ct">
                                <h4 class="price-list__ct-ttl">診療名1</h4>
                                <p> 説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。 </p>
                            </div>
                            <div class="price-list__oder">
                                <span class="price-list__oder-num"> 3,000<small>万円</small>
                                </span>
                            </div>
                        </li>
                        <li class="price-list__item js-scrollin">
                            <div class="price-list__ct">
                                <h4 class="price-list__ct-ttl">診療名2</h4>
                                <p> 説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。 </p>
                            </div>
                            <div class="price-list__oder">
                                <span class="price-list__oder-num"> 3,000<small>万円</small>
                                </span>
                            </div>
                        </li>
                        <li class="price-list__item js-scrollin">
                            <div class="price-list__ct">
                                <h4 class="price-list__ct-ttl">診療名3</h4>
                                <p> 説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。 </p>
                            </div>
                            <div class="price-list__oder">
                                <span class="price-list__oder-num"> 20 〜 40<small>万円</small>
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-payment">
        <div class="inner">
            <h2 class="c-ttl__01 c-al--c js-scrollin">
                <span class="c-ft--en">Payment</span>
                <span class="c-ft--jp">お支払い方法</span>
            </h2>
            <div class="heading-note c-txt__basic js-scrollin"> 当院では、現金でのお支払いのほかに、分割払い、クレジットカードでお支払いいただけます。<br> ※保険診療の場合、現金でお支払いのみ対応となります。 </div>
            <div class="payment-list">
                <div class="payment-list__item js-scrollin">
                    <div class="payment-list__box c-txt__basic">
                        <div class="payment-list__box-icon">
                            <img src="<?php echo $template_uri; ?>/img/common/icon-17.png" alt="現金支払い/振込支払い">
                        </div>
                        <h3 class="payment-list__box-ttl">現金支払い/振込支払い</h3>
                        <p> 当院受付でのお支払い、または当院指定の<br class="pc-xl">銀行口座へお振込み <sup class="c-txt__note">※</sup>ください。 </p>
                        <p class="c-txt__note pc">※ 銀行口座へのお振込み手数料は患者さまの<br class="pc">ご負担となります。</p>
                    </div>
                </div>
                <div class="c-txt__note sp js-scrollin">※ 銀行口座へのお振込み手数料は患者さまの<br class="pc">ご負担となります。</div>
                <div class="payment-list__item js-scrollin">
                    <div class="payment-list__box c-txt__basic">
                        <div class="payment-list__box-icon">
                            <img src="<?php echo $template_uri; ?>/img/common/icon-18.png" alt="デンタルローン">
                        </div>
                        <h3 class="payment-list__box-ttl">デンタルローン</h3>
                        <p> デンタルローンをご用意しております。<br> 詳しくはお問い合わせください。 </p>
                    </div>
                </div>
                <div class="payment-list__item js-scrollin">
                    <div class="payment-list__box c-txt__basic">
                        <div class="payment-list__box-icon">
                            <img src="<?php echo $template_uri; ?>/img/common/icon-19.png" alt="クレジットカード">
                        </div>
                        <h3 class="payment-list__box-ttl">クレジットカード</h3>
                        <p> クレジットカードでも<br class="sp">お支払い可能です </p>
                        <img src="<?php echo $template_uri; ?>/img/common/card.png" alt="card" width="167">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-contact">
        <div class="inner">
            <h2 class="c-ttl__01 c-al--c mbpc-60 js-scrollin">
                <span class="c-ft--en">Contact</span>
                <span class="c-ft--jp">お問い合わせ</span>
            </h2>
            <div class="heading-note mbpc-35 mbsp-24 c-txt__basic js-scrollin">
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