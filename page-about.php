<?php
    /* Template Name: About */
    $template_uri = get_template_directory_uri();

    get_header();
?>
<main class="page-about">
    <section class="sec-heading">
        <div class="inner">
            <h1 class="c-ttl__01">
                <span class="c-ft--en">About</span>
                <span class="c-ft--jp">当院について</span>
            </h1>
        </div>
    </section>
    <section class="sec-promise">
        <div class="inner">
            <h2 class="c-ttl__01 c-al--c js-scrollin mbpc-65">
                <span class="c-ft--en">Promise</span>
                <span class="c-ft--jp">患者さまへのお約束</span>
            </h2>
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
            <div class="flex-end sp js-scrollin">
                <a href="" class="c-btn__01">
                    <span>当院について詳しく見る</span>
                </a>
            </div>
        </div>
    </section>
    <section class="sec-clinic">
        <div class="inner">
            <h2 class="c-ttl__01 c-al--c js-scrollin mbpc-65">
                <span class="c-ft--en">Clinic</span>
                <span class="c-ft--jp">院内紹介</span>
            </h2>
            <ul class="clinic-list">
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img src="<?php echo $template_uri; ?>/img/about/img-01.jpg" alt="立地">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">立地</h3>
                            <p> 横浜市営地下鉄ブルーラインとグリーンラインが通るセンター北駅より徒歩3分。地元の方はもちろん、遠方からの患者様にも通いやすい、便利な立地です。 </p>
                        </div>
                    </div>
                </li>
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img src="<?php echo $template_uri; ?>/img/about/img-02.jpg" alt="受付">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">受付</h3>
                            <p> 常に気持ちよくご来院いただけるよう、スタッフ一同心がけております。ご不明点や心配なことがございましたら、お気軽におたずねください。 </p>
                        </div>
                    </div>
                </li>
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img src="<?php echo $template_uri; ?>/img/about/img-03.jpg" alt="清潔で衛生的な環境">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">清潔で衛生的な環境</h3>
                            <p> 院内の空気の清浄化や換気はもちろん、診療スペース・共用部分の消毒・除菌を徹底し、常に清潔な環境づくりを目指しております。 </p>
                        </div>
                    </div>
                </li>
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img src="<?php echo $template_uri; ?>/img/about/img-04.jpg" alt="落ち着ける空間">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">落ち着ける空間</h3>
                            <p> 医療機関を受診する際には、緊張される方も多いと思います。インテリアや待合スペースの配置など、落ち着ける空間づくりを心がけております。 </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="sec-facilities">
        <div class="inner">
            <h2 class="c-ttl__01 c-al--c js-scrollin mbpc-65">
                <span class="c-ft--en">Facilities</span>
                <span class="c-ft--jp">設備紹介</span>
            </h2>
            <ul class="clinic-list">
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img src="<?php echo $template_uri; ?>/img/about/img-05.jpg" alt="口腔内カメラ">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">口腔内カメラ</h3>
                            <p> 見えにくい口腔内を、細部まで鮮明に映し出すことができる歯科用カメラです。 </p>
                        </div>
                    </div>
                </li>
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img src="<?php echo $template_uri; ?>/img/about/img-06.jpg" alt="モニター">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">モニター</h3>
                            <p> 口腔内の状態を「見える化」し、歯科治療そして予防への意識を高めることができます。 </p>
                        </div>
                    </div>
                </li>
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img src="<?php echo $template_uri; ?>/img/about/img-07.jpg" alt="滅菌器">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">滅菌器</h3>
                            <p> 安心して治療を受けていただけるよう、医療器具の徹底した衛生管理を行っております。 </p>
                        </div>
                    </div>
                </li>
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img src="<?php echo $template_uri; ?>/img/about/img-08.jpg" alt="完全個室診察室">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">完全個室診察室</h3>
                            <p> プライバシーに配慮した、完全個室の診察室もございます。 </p>
                        </div>
                    </div>
                </li>
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img src="<?php echo $template_uri; ?>/img/about/img-05.jpg" alt="口腔内カメラ">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">口腔内カメラ</h3>
                            <p> 見えにくい口腔内を、細部まで鮮明に映し出すことができる歯科用カメラです。 </p>
                        </div>
                    </div>
                </li>
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img src="<?php echo $template_uri; ?>/img/about/img-06.jpg" alt="モニター">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">モニター</h3>
                            <p> 口腔内の状態を「見える化」し、歯科治療そして予防への意識を高めることができます。 </p>
                        </div>
                    </div>
                </li>
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img src="<?php echo $template_uri; ?>/img/about/img-07.jpg" alt="滅菌器">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">滅菌器</h3>
                            <p> 安心して治療を受けていただけるよう、医療器具の徹底した衛生管理を行っております。 </p>
                        </div>
                    </div>
                </li>
                <li class="clinic-list__item js-scrollin">
                    <div class="clinic-list__box">
                        <div class="clinic-list__img">
                            <img src="<?php echo $template_uri; ?>/img/about/img-08.jpg" alt="完全個室診察室">
                        </div>
                        <div class="clinic-list__ct c-txt__basic">
                            <h3 class="clinic-list__ct-ttl">完全個室診察室</h3>
                            <p> プライバシーに配慮した、完全個室の診察室もございます。 </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="sec-policy">
        <h2 class="c-ttl__01 c-al--c js-scrollin mbpc-65">
            <span class="c-ft--en">Director</span>
            <span class="c-ft--jp">院長挨拶</span>
        </h2>
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
                <p class="js-scrollin"> 患者さまの不安や疑問、要望にしっかりと耳を傾け、<br class="pc">適切かつ正確な検査を行うことで、<br class="pc">患者さま一人ひとりのお口の状況をしっかり把握し、<br class="pc"> 治療を進めてまいります。 </p>
                <p class="js-scrollin"> 治療に関しては現在の状態、問題点、治療の選択肢、<br class="pc">それぞれのメリットとデメリットを細かく説明し、<br class="pc">納得いただいた上で、<br class="pc">どの治療が患者さまに適しているのか<br class="pc"> 患者さまと相談しながら決定していきます。 </p>
                <p class="js-scrollin"> 歯科医院にあまり良い印象を持っていない人でも<br class="pc"> 来院したいと思える環境や治療を提供することを<br class="pc"> 目指しております。 </p>
                <p class="js-scrollin pc"> 院長 青木栄人 </p>
                <div class="policy-block__ct-flex js-scrollin">
                    <a href="" class="c-btn__01">
                        <span>執筆記事一覧はこちら</span>
                    </a>
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