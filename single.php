<?php get_header();?>

<section class="p-page-top">
    <div class="p-page-top__inner">
        <picture>
            <source media="(min-width: 768px)"
                srcset="<?php echo get_template_directory_uri().'/img/archive/archive_top.jpg' ?>">
            <img src="<?php echo get_template_directory_uri().'/img/archive/archive_top-sp.jpg' ?>"
                class="p-page-top__img">
        </picture>
        <div class="p-page-top__text-wrap">
            <div class="p-page-top__title">お知らせ一覧</div>
            <p class="p-page-top__sub-title">
                <!-- そのページのカテゴリの説明を取得して表示 -->
                <?php $category = get_the_category(); echo $category[0]->description;?>
            </p>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/breadcrumb')?>

<main class="l-main-wrap">
    <div class="l-inner">
        <section class="l-archive">
            <div class="l-archive__articles p-post">
                <!-- post -->
                <?php if(have_posts()):?>
                <?php while(have_posts()):?>
                <?php the_post();?>
                <div class="p-post__content">
                    <h1 class="p-post__title">
                        <?php the_title();?>
                    </h1>
                    <div class="p-post__meta">
                        <time class="p-post__meta--date" datetime="<?php the_time('c') ?>">
                            <?php the_time("Y.m.d")?>
                        </time>
                        <p class="p-post__meta--category">
                            <?php $categories = get_the_category(); 
                            if($categories[0]){echo $categories[0]->name;}?>
                        </p>
                    </div>
                    <div class="p-post__body">
                        <?php the_content();?>
                    </div>
                </div>
                <?php endwhile;?>
                <?php endif;?>

                <!-- /post -->
                <!-- pagination -->
                <div class="p-post__links">
                    <?php if(get_previous_post()):?>
                    <a href="<?php echo get_permalink(get_previous_post()->ID); ?>" class="p-post__links--prev">
                        前の記事
                    </a>
                    <?php endif;?>
                    <?php $category = get_the_category();?>
                    <?php if($category[0]):?>
                    <a href="<?php echo get_category_link($category[0]->term_id) ?>" class="p-post__links--archive">
                        記事一覧
                    </a>
                    <?php endif;?>
                    <?php if(get_next_post()):?>
                    <a href="<?php echo get_permalink(get_next_post()->ID); ?>" class="p-post__links--next">
                        次の記事
                    </a>
                    <?php endif;?>
                </div>
                <!-- /pagination -->
            </div>
            <!-- sidebar -->
            <?php get_sidebar();?>
            <!-- /sidebar -->

        </section>
    </div>
</main>

<?php get_footer();?>