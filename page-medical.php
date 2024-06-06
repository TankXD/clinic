<?php get_header();?>

<section class="p-page-top">
    <div class="p-page-top__inner">
        <picture>
            <source media="(min-width: 768px)"
                srcset="<?php echo get_template_directory_uri().'/img/medical/page-medical_top.jpg' ?>">
            <img src="<?php echo get_template_directory_uri().'/img/medical/page-medical_top-sp.jpg' ?>"
                class="p-page-top__img">
        </picture>
        <div class="p-page-top__text-wrap">
            <h1 class="p-page-top__title">診療案内</h1>
            <p class="p-page-top__sub-title">MEDICAL</p>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/breadcrumb');?>


<!-- taxonomyのスラッグ名、単数名を取得し、taxonomy内の投稿を取得する -->
<?php 
    $general_taxonomy = get_taxonomy('general');
    $special_taxonomy = get_taxonomy('special');
    // 'general' 分類に属する 'plan' ポストを取得する
    $general_posts = new WP_Query(
        array(
            'post_type' => 'plan',
            'posts_per_page' => -1,
            // order를 desc 반대로
            'orderby' => 'date',
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'general',
                    'operator' => 'EXISTS',
                )
            )
        ));
    $special_posts = new WP_Query(
        array(
            'post_type' => 'plan',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'special',
                    'operator' => 'EXISTS',
                )
            )
        ));
?>


<main class="l-main">
    <section class="l-medical-top">
        <div class="l-inner">
            <div class="p-medical-category__wrap">
                <div class="p-medical-category__title-wrap">
                    <h2 class="p-medical-category__title"><?php echo $general_taxonomy->labels->name?></h2>
                    <span class="p-medical-category__label is-blue"><?php echo $general_taxonomy->description?></span>
                </div>
                <div class="p-medical-category__list">
                    <?php 
                        if($general_posts->have_posts()):
                            while($general_posts->have_posts()):
                                $general_posts->the_post();
                    ?>
                    <a href="<?php echo '#'.get_the_ID();?>" class="p-medical-category__link">
                        <?php the_title();?>
                    </a>
                    <?php 
                        endwhile;
                        endif;
                    ?>
                </div>
            </div>
            <div class="p-medical-category__wrap">
                <div class="p-medical-category__title-wrap">
                    <h2 class="p-medical-category__title"><?php echo $special_taxonomy->labels->name?></h2>
                    <span class="p-medical-category__label is-red"><?php echo $special_taxonomy->description?></span>
                </div>
                <div class="p-medical-category__list">
                    <?php 
                        if($special_posts->have_posts()):
                            while($special_posts->have_posts()):
                                $special_posts->the_post();
                            
                    ?>
                    <a href="<?php echo '#'.get_the_ID();?>" class="p-medical-category__link">
                        <?php the_title();?>
                    </a>
                    <?php 
                        endwhile;
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section id="general" class="l-medical-body1 p-bg-star">
        <div class="p-bg-star-top">
            <picture>
                <source media="(min-width: 768px)"
                    srcset="<?php echo get_template_directory_uri().'/img/common/bg-top.svg' ?>">
                <img src="<?php echo get_template_directory_uri().'/img/common/bg-top-sp.svg' ?>">
            </picture>
        </div>
        <div class="p-medical-posts p-bg-star__inner">
            <div class="p-medical-inner l-inner">
                <div class="p-medical__title-wrap">
                    <h2 class="p-medical__title c-section-title">
                        <?php echo $general_taxonomy->labels->name?>
                    </h2>
                </div>
                <div class="p-medical__posts-wrap">
                    <?php
                        if($general_posts->have_posts()):
                            while($general_posts->have_posts()):
                                $general_posts->the_post();
                    ?>
                    <div class="p-medical-post" id="<?php echo get_the_ID();?>">
                        <picture class="p-medical-post__tag">
                            <source media="(min-width: 768px)"
                                srcset="<?php echo get_template_directory_uri().'/img/medical/tag-01.svg' ?>">
                            <img src="<?php echo get_template_directory_uri().'/img/medical/tag-01-sp.svg' ?>"
                                alt="保険対象">
                        </picture>
                        <div class="p-medical-post__title-wrap">
                            <h3 class="p-medical-post__title"><?php the_title();?></h3>
                            <p class='p-medical-post__sub-title'><?php the_field('subtitle')?></p>
                        </div>
                        <div class="p-medical__post-content">
                            <p class="p-medical-post__description">
                                <?php the_field('description');?>
                                <br><br>
                                <?php the_field('description');?>
                            </p>
                            <div class="p-medical-post__img">
                                <?php the_post_thumbnail();?>
                            </div>
                        </div>
                    </div>
                    <?php 
                        endwhile;
                        endif;
                    ?>
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
    <section id="special" class="l-medical-body2 p-bg-star">
        <div class="p-bg-star-top">
            <picture>
                <source media="(min-width: 768px)"
                    srcset="<?php echo get_template_directory_uri().'/img/common/bg-top.svg' ?>">
                <img src="<?php echo get_template_directory_uri().'/img/common/bg-top-sp.svg' ?>">
            </picture>
        </div>
        <div class="p-medical-posts p-bg-star__inner">
            <div class="p-medical-inner l-inner">
                <div class="p-medical__title-wrap">
                    <h2 class="p-medical__title c-section-title">
                        <?php echo $special_taxonomy->labels->name?>
                    </h2>
                </div>
                <div class="p-medical__posts-wrap">
                    <?php
                        if($special_posts->have_posts()):
                            while($special_posts->have_posts()):
                                $special_posts->the_post();
                    ?>
                    <div class="p-medical-post" id="<?php echo get_the_ID();?>">
                        <picture class="p-medical-post__tag">
                            <source media="(min-width: 768px)"
                                srcset="<?php echo get_template_directory_uri().'/img/medical/tag-02.svg' ?>">
                            <img src="<?php echo get_template_directory_uri().'/img/medical/tag-02-sp.svg' ?>"
                                alt="保険対象">
                        </picture>
                        <div class="p-medical-post__title-wrap">
                            <h3 class="p-medical-post__title"><?php the_title();?></h3>
                            <p class='p-medical-post__sub-title'><?php the_field('subtitle')?></p>
                        </div>
                        <div class="p-medical__post-content">
                            <p class="p-medical-post__description">
                                <?php the_field('description');?>
                                <br><br>
                                <?php the_field('description');?>
                            </p>
                            <div class="p-medical-post__img">
                                <?php the_post_thumbnail();?>
                            </div>
                        </div>
                    </div>
                    <?php 
                        endwhile;
                        endif;
                    ?>
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
</main>


<?php get_footer();?>