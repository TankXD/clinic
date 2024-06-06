<!-- header -->
<?php get_header();?>
<!-- /header -->

<!-- swiper -->
<?php get_template_part('template-parts/swiper')?>
<!-- /swiper -->

<!-- main -->
<main class="l-main">
    <!-- info -->
    <section class="l-info">
        <div class="p-info__news">
            <div class="p-info__news__title-wrap">
                <div class="p-info__news__head">
                    <h2 class="p-info__news__title">お知らせ</h2>
                    <p class="p-info__news__sub-title">NEWS</p>
                </div>
                <div class="p-info__news__list">
                    <?php $category_slug = 'opening';
                        $category_link = get_term_link($category_slug,'category')
                    ?>
                    <a href="<?php echo $category_link;?>">過去のお知らせはこちら</a>
                </div>
            </div>
            <?php $new_post = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        
                        )
                )?>
            <?php if($new_post->have_posts()): ?>
            <?php while($new_post->have_posts()):?>
            <?php $new_post->the_post();?>
            <a href="<?php the_permalink(); ?>" class="p-info__news__article">
                <time class="p-info__news__time" datetime="<?php the_time('c') ?>">
                    <?php the_time('Y.m.d')?>
                </time>
                <p class="p-info__news__article-title">
                    <?php the_title();?>
                </p>
            </a>
            <?php endwhile;?>
            <?php endif;?>
            <?php wp_reset_postdata();?>
        </div>
        <div class="p-info__time-table">
            <picture>
                <source media="(min-width: 768px)"
                    srcset="<?php echo get_template_directory_uri().'/img/front-page/medical-time-pc.png'?>">
                <img src="<?php echo get_template_directory_uri().'/img/front-page/medical-time-sp.png'?>" alt="営業時間">
            </picture>
        </div>
    </section>
    <!-- /info -->
    <!-- concept -->
    <section class="l-concept p-right-bg">
        <div class="p-concept__content">
            <div class="p-concept__img">
                <img src="<?php echo get_template_directory_uri().'/img/front-page/concept-img.jpg' ?>">
            </div>
            <div class="p-concept__body">
                <span class="p-concept__subtitle">CONCEPT</span>
                <h2 class="p-concept__title">健康的で素敵な笑顔あふれる<br>
                    街づくりを目指して</h2>
                <p class="p-concept__description">
                    私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。<br>
                    お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
                <div class="p-concept__link-btn c-link-btn"><a href="<?php echo getPageLink('about') ?>">当院について</a>
                </div>
            </div>
        </div>
        <!-- 他のページでも使用されます。p-right-bgセクションクラスも -->
        <div class="p-right-bg__img">
            <picture>
                <source media="(min-width: 768px)"
                    srcset="<?php echo get_template_directory_uri().'/img/common/concept-bg.png' ?>">
                <img src="<?php echo get_template_directory_uri().'/img/common/concept-bg_sp.png' ?>">
            </picture>
        </div>
    </section>
    <!-- /concept -->
    <!-- recommend -->
    <section class="l-recommend">
        <div class="p-recommend__title-wrap">
            <h2 class="p-recommend__title c-section-title">
                当院の3つのおすすめ
            </h2>
        </div>
        <div class="p-recommend__cards-list">
            <div class="p-recommend-card-item">
                <h3 class="p-recommend-card__title"><img
                        src="<?php echo get_template_directory_uri().'/img/front-page/recommend-1.svg' ?>" alt="おすすめ1">
                </h3>
                <div class="p-recommend-card__img"><img
                        src="<?php echo get_template_directory_uri().'/img/front-page/recommend-img-01.svg' ?>"></div>
                <p class="p-recommend-card__description">歯の治療において、小さな違和感は大きなストレスにつながります。<br>
                    私たちは常に快適な歯科医療技術の研究を行っております。</p>
            </div>
            <div class="p-recommend-card-item">
                <h3 class="p-recommend-card__title"><img
                        src="<?php echo get_template_directory_uri().'/img/front-page/recommend-2.svg' ?>" alt="おすすめ2">
                </h3>
                <div class="p-recommend-card__img"><img
                        src="<?php echo get_template_directory_uri().'/img/front-page/recommend-img-02.svg' ?>"></div>
                <p class="p-recommend-card__description">「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</p>
            </div>
            <div class="p-recommend-card-item">
                <h3 class="p-recommend-card__title"><img
                        src="<?php echo get_template_directory_uri().'/img/front-page/recommend-3.svg' ?>" alt="おすすめ3">
                </h3>
                <div class="p-recommend-card__img"><img
                        src="<?php echo get_template_directory_uri().'/img/front-page/recommend-img-03.svg' ?>"></div>
                <p class="p-recommend-card__description">朝から夜までお仕事をされている方のために、診療時間を見直しました。<br>
                    <span class="p-recommend-card__text-red">※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</span>
                </p>
            </div>
        </div>
    </section>
    <!-- /recommend -->
    <!-- medical -->
    <section class="l-medical p-bg-star">
        <div class="p-bg-star-top">
            <picture>
                <source media="(min-width: 768px)"
                    srcset="<?php echo get_template_directory_uri().'/img/common/bg-top.svg' ?>">
                <img src="<?php echo get_template_directory_uri().'/img/common/bg-top-sp.svg' ?>">
            </picture>
        </div>
        <div class="p-bg-star__inner">
            <div class="p-medical__inner">
                <div class="p-medical__title-wrap">
                    <h2 class="p-medical__title c-section-title">
                        診療案内
                    </h2>
                </div>
                <div class="p-medical__body">
                    <div class="p-medical__cards">
                        <a href="<?php echo getPageLink('medical').'#general' ?>" class="p-medical__card">
                            <div class="p-medical__card__text-wrap">
                                <h3 class="p-medical__card__title">一般診療</h3>
                                <p class="p-medical__card__description">虫歯・入れ歯・小児歯科</p>
                            </div>
                        </a>
                        <a href="<?php echo getPageLink('medical').'#special' ?>" class="p-medical__card">
                            <div class="p-medical__card__text-wrap">
                                <h3 class="p-medical__card__title">特殊診療</h3>
                                <p class="p-medical__card__description">インプラント・ホワイトニング<br>
                                    予防歯科・口腔外科・審美歯科</p>
                            </div>
                        </a>
                    </div>
                    <p class="p-medical__text">当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。<br>
                        痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。<br>
                        <span class="u-color-red">※特殊性の高い矯正治療などは保険の適応外となります。 これらの治療を行う際は事前に詳細と費用のご説明いたします。</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="p-bg-star-bottom">
            <picture>
                <source media="(min-width: 768px)"
                    srcset="<?php echo get_template_directory_uri().'/img/common/bg-bottom.svg' ?>">
                <img src="<?php echo get_template_directory_uri().'/img/common/bg-bottom-sp.svg' ?>">
            </picture>
        </div>
    </section>
    <!-- /medical -->
    <!-- blog コンテンツを作成したら修正が必要です -->
    <section class="l-blog">
        <div class="p-blog__title-wrap">
            <h2 class="p-blog__title c-section-title">
                スタッフブログ
            </h2>
        </div>
        <div class="p-blog__card-list">
            <?php $recent_blog_posts = new WP_Query(
                    array(
                        'post_type' => 'blog',
                        'posts_per_page' => 6,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    )
                    );
            ?>
            <?php if($recent_blog_posts->have_posts()):?>
            <?php while($recent_blog_posts->have_posts()):?>
            <?php $recent_blog_posts->the_post();?>
            <a href="<?php the_permalink(); ?>" class="p-blog__card">
                <div class="p-blog__card__img">
                    <?php if(has_post_thumbnail()):?>
                    <?php the_post_thumbnail();?>
                    <?php else:?>
                    <img src="<?php echo get_template_directory_uri().'/img/archive/noimg.png' ?>" alt="noimg">
                    <?php endif;?>
                </div>
                <div class="p-blog__card__text-wrap">
                    <span class="p-blog__card__category">
                        <?php $terms = get_the_terms(get_the_ID(),'blog-category');
                            foreach($terms as $term):?>
                        <?php echo $term->name;?>
                        <?php endforeach;?>
                    </span>
                    <h3 class="p-blog__card__title">
                        <?php the_title();?>
                    </h3>
                    <time class="p-blog__card__time" datetime="<?php the_time('c') ?>">
                        <?php the_time('Y.m.d')?>
                    </time>
                </div>
            </a>
            <?php endwhile;?>
            <?php endif;?>
            <?php wp_reset_postdata();?>
        </div>
        <div class="p-blog__link-btn c-link-btn">
            <a href="<?php echo get_post_type_archive_link('blog'); ?>">スタッフブログ一覧はこちら</a>
        </div>
    </section>
    <!-- /blog -->
</main>
<!-- /main -->

<?php get_footer();?>