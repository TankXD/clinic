<?php get_header();?>

<section class="p-page-top">
    <div class="p-page-top__inner">
        <picture>
            <source media="(min-width: 768px)"
                srcset="<?php echo get_template_directory_uri().'/img/staff/page-staff_top.jpg' ?>">
            <img src="<?php echo get_template_directory_uri().'/img/staff/page-staff_top-sp.jpg' ?>"
                class="p-page-top__img">
        </picture>
        <div class="p-page-top__text-wrap">
            <h1 class="p-page-top__title">スタッフ紹介</h1>
            <p class="p-page-top__sub-title">STAFF</p>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/breadcrumb');?>

<!-- main -->
<main class="l-main">
    <section id="staff-doctor" class="p-staff-greeting p-greeting">
        <div class="l-inner">
            <div class="c-section-title-wrap">
                <h2 class="c-section-title">
                    院長のあいさつ
                </h2>
            </div>
            <div class="p-greeting__body">
                <div class="p-greeting__content">
                    <h3 class="p-greeting__sub-title">気軽に相談できる<br>
                        街の歯医者さんでありたい。</h3>
                    <p class="p-greeting__description">当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。<br>
                        <br>「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。
                    </p>
                    <p class="p-greeting__description2">みなみ歯科クリニック<br>
                        院長　南 俊雄</p>
                    <div class="p-greeting__img u-hidden-pc">
                        <img src="<?php echo get_template_directory_uri().'/img/staff/doctor.jpg' ?>">
                    </div>
                    <div class="p-greeting-info">
                        <div class="p-greeting-career">
                            <p class="p-greeting-career__sub-title">経歴</p>
                            <div class="p-greeting-career__text-wrap">
                                <p class="p-greeting-career__text">2004年</p>
                                <p class="p-greeting-career__text">東京医科歯科大学歯学部 卒業</p>
                            </div>
                            <div class="p-greeting-career__text-wrap">
                                <p class="p-greeting-career__text">2008年</p>
                                <p class="p-greeting-career__text">東京歯科大学歯学研究科大学院修了<br>
                                    博士(歯学)取得</p>
                            </div>
                            <div class="p-greeting-career__text-wrap">
                                <p class="p-greeting-career__text">2012年</p>
                                <p class="p-greeting-career__text">みなみ歯科クリニック 開院</p>
                            </div>
                        </div>
                        <div class="p-greeting-license">
                            <p class="p-greeting-license__sub-title">資格</p>
                            <div class="p-greeting-license__text-wrap">
                                <p class="p-greeting-license__text">歯科医師臨床研修指導歯科医</p>
                            </div>
                            <div class="p-greeting-license__text-wrap">
                                <p class="p-greeting-license__text">博士(歯学)</p>
                            </div>
                            <div class="p-greeting-license__text-wrap">
                                <p class="p-greeting-license__text">衛生検査技師</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-greeting__img u-hidden-sp">
                    <img src="<?php echo get_template_directory_uri().'/img/staff/doctor.jpg' ?>">
                </div>
            </div>
        </div>
    </section>
    <!-- Swiper Container -->
    <div class="p-staff__gallery">
        <div class="swiper p-staff-swiper__container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper p-staff-swiper__wrapper">
                <!-- Slides -->
                <div class="swiper-slide p-staff-swiper__slide">
                    <img src="<?php echo get_template_directory_uri().'/img/staff/staff-swiper_1.jpg' ?>">
                </div>
                <div class="swiper-slide p-staff-swiper__slide">
                    <img src="<?php echo get_template_directory_uri().'/img/staff/staff-swiper_2.jpg' ?>">
                </div>
                <div class="swiper-slide p-staff-swiper__slide">
                    <img src="<?php echo get_template_directory_uri().'/img/staff/staff-swiper_3.jpg' ?>">
                </div>
                <div class="swiper-slide p-staff-swiper__slide">
                    <img src="<?php echo get_template_directory_uri().'/img/staff/staff-swiper_4.jpg' ?>">
                </div>
                <div class="swiper-slide p-staff-swiper__slide">
                    <img src="<?php echo get_template_directory_uri().'/img/staff/staff-swiper_5.jpg' ?>">
                </div>
            </div>
        </div>
    </div>
    <!-- swiper container -->
    <section id="staff-introduce" class="l-staffs">
        <div class="l-inner">
            <div class="c-section-title-wrap">
                <h2 class="c-section-title">
                    スタッフ紹介
                </h2>
            </div>
            <div class="p-staffs__body">
                <h3 class="p-staffs__sub-title">
                    歯科衛生士
                </h3>
                <div class="p-staffs__card-wrap">
                    <?php 
                        $hygienist_posts = new WP_Query(array(
                            'post_type' => 'staffs', 
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'staffs_job', 
                                    'field' => 'slug', 
                                    'terms' => 'hygienist' 
                                )
                            )
                        ));
                    ?>
                    <?php 
                    if($hygienist_posts->have_posts()):
                        while($hygienist_posts->have_posts()): 
                            $hygienist_posts->the_post();
                            $category_name = get_the_terms(get_the_ID(), 'staffs_job')[0]->name;
                    ?>
                    <div class="p-staffs__card">
                        <div class="p-staffs__img">
                            <?php if(has_post_thumbnail()):?>
                            <?php the_post_thumbnail();?>
                            <?php else:?>
                            <img src="<?php echo get_template_directory_uri().'/img/common/noimg.png' ?>" alt="noimg">
                            <?php endif;?>
                        </div>
                        <div class="p-staffs__nameWrap">
                            <span class="p-staffs__job"><?php echo $category_name;?></span>
                            <span class="p-staffs__name"><?php the_title();?></span>
                        </div>
                        <div class="p-staffs__info-wrap">
                            <div class="p-staffs__info">
                                <p class="p-staffs__info--left">出身地</p>
                                <p class="p-staffs__info--right"><?php the_field('region')?></p>
                            </div>
                            <div class="p-staffs__info">
                                <p class="p-staffs__info--left">趣味</p>
                                <p class="p-staffs__info--right"><?php the_field('hobby')?></p>
                            </div>
                            <div class="p-staffs__info">
                                <p class="p-staffs__info--left">好きな食べ物</p>
                                <p class="p-staffs__info--right"><?php the_field('favorite')?></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
                    <?php endif;?>
                    <?php wp_reset_postdata();?>
                </div>
            </div>
            <div class="p-staffs__body">
                <h3 class="p-staffs__sub-title">
                    歯科助手
                </h3>
                <div class="p-staffs__card-wrap">
                    <?php 
                        $assistant_posts = new WP_Query(array(
                            'post_type' => 'staffs', 
                            'posts_per_page' => -1, 
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'staffs_job', 
                                    'field' => 'slug', 
                                    'terms' => 'assistant'
                                )
                            )
                        ));
                    ?>
                    <?php 
                    if($assistant_posts->have_posts()):
                        while($assistant_posts->have_posts()): 
                            $assistant_posts->the_post();
                            $category_name = get_the_terms(get_the_ID(), 'staffs_job')[0]->name;
                    ?>
                    <div class="p-staffs__card">
                        <div class="p-staffs__img">
                            <?php if(has_post_thumbnail()):?>
                            <?php the_post_thumbnail();?>
                            <?php else:?>
                            <img src="<?php echo get_template_directory_uri().'/img/common/noimg.png' ?>" alt="noimg">
                            <?php endif;?>
                        </div>
                        <div class="p-staffs__nameWrap">
                            <span class="p-staffs__job"><?php echo $category_name;?></span>
                            <span class="p-staffs__name"><?php the_title();?></span>
                        </div>
                        <div class="p-staffs__info-wrap">
                            <div class="p-staffs__info">
                                <p class="p-staffs__info--left">出身地</p>
                                <p class="p-staffs__info--right"><?php the_field('region')?></p>
                            </div>
                            <div class="p-staffs__info">
                                <p class="p-staffs__info--left">趣味</p>
                                <p class="p-staffs__info--right"><?php the_field('hobby')?></p>
                            </div>
                            <div class="p-staffs__info">
                                <p class="p-staffs__info--left">好きな食べ物</p>
                                <p class="p-staffs__info--right"><?php the_field('favorite')?></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
                    <?php endif;?>
                    <?php wp_reset_postdata();?>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- /main -->


<?php get_footer();?>