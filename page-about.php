<?php get_header();?>

<section class="p-page-top">
    <div class="p-page-top__inner">
        <picture>
            <source media="(min-width: 768px)"
                srcset="<?php echo get_template_directory_uri().'/img/about/page-about_top.jpg' ?>">
            <img src="<?php echo get_template_directory_uri().'/img/about/page-about_top-sp.jpg' ?>"
                class="p-page-top__img">
        </picture>
        <div class="p-page-top__text-wrap">
            <h1 class="p-page-top__title">当院について</h1>
            <p class="p-page-top__sub-title">ABOUT OUR CLINIC</p>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/breadcrumb');?>

<!-- main -->
<div class="l-main l-main-about">
    <section id="about-common" class="l-about-common__wrap">
        <div class="c-section-title-wrap">
            <h2 class="c-section-title">
                ポリシーと特徴
            </h2>
        </div>
        <div class="p-about-common__list">
            <div class="p-about-common p-about-policy p-right-bg">
                <div class="p-about-common__content">
                    <div class="p-about-common__img">
                        <img src="<?php echo get_template_directory_uri().'/img/about/policy.jpg' ?>">
                    </div>
                    <div class="p-about-common__body">
                        <span class="p-about-common__subtitle">POLICY</span>
                        <h3 class="p-about-common__title">コミュニケーションから始まる最適な医療提供</h3>
                        <p class="p-about-common__description">
                            当院ではまず患者様から詳しくお話を伺います。<br>
                            難しい言葉は使わず、実際に感じている小さな違和感からあらゆる可能性を考え、最適な治療方法をご提案いたします。
                            <br>
                            <br>
                            「どこよりも本音で話せる歯医者さん」を目指し、スタッフ一同、「人間力の向上」にも勤めております。
                        </p>
                    </div>
                </div>
                <?php get_template_part('template-parts/right-bg-img');?>
            </div>
            <div class="p-about-common p-about-feature">
                <div class="p-about-common__content is-reverse">
                    <div class="p-about-common__img">
                        <img src="<?php echo get_template_directory_uri().'/img/about/feature.jpg' ?>">
                    </div>
                    <div class="p-about-common__body">
                        <span class="p-about-common__subtitle">FEATURE</span>
                        <h3 class="p-about-common__title">「医療技術の追求」と<br>「通いやすさ」</h3>
                        <p class="p-about-common__description">
                            歯の治療において、小さな違和感は大きなストレスにつながります。私たちは常に快適な歯科医療技術の研究を行っております。
                            また、「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。
                            <br><br>
                            朝から夜までお仕事をされている方のために診療時間を見直し、平日でもご利用いただけるようにいたしました。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about-gallery" class="l-about-gallery">
        <div class="c-section-title-wrap">
            <h2 class="c-section-title">
                院内の様子
            </h2>
        </div>
        <div class="l-inner">
            <div class="p-about-gallery__photos">
                <img src="<?php echo get_template_directory_uri().'/img/about/1.jpg' ?>">
                <img src="<?php echo get_template_directory_uri().'/img/about/2.jpg' ?>">
                <img src="<?php echo get_template_directory_uri().'/img/about/3.jpg' ?>">
                <img src="<?php echo get_template_directory_uri().'/img/about/4.jpg' ?>">
                <img src="<?php echo get_template_directory_uri().'/img/about/5.jpg' ?>">
                <img src="<?php echo get_template_directory_uri().'/img/about/6.jpg' ?>">
            </div>
        </div>
    </section>
</div>
<!-- /main -->

<?php get_footer();?>