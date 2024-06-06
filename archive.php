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
            <h1 class="p-page-top__title">お知らせ一覧</h1>
            <p class="p-page-top__sub-title">
                <!-- 해당페이지의 카테고리의 설명을 가져와서 표시 -->
                <?php $category = get_the_category(); echo $category[0]->description;?>
            </p>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/breadcrumb')?>

<main class="l-main-wrap">
    <div class="l-inner">
        <section class="l-archive">
            <div class="l-archive__articles p-articles">
                <!-- post list -->
                <div class="p-articles__lists">
                    <?php if(have_posts()):?>
                    <?php while(have_posts()):?>
                    <?php the_post();?>
                    <!-- 포스트가 있으면 해당 포스트의 썸네일을 좌측, 카테고리와 제목 그리고 날짜를 우측에 표시 -->
                    <a href="<?php the_permalink(); ?>" class="p-articles__item">
                        <div class="p-articles__thumb">
                            <?php if(has_post_thumbnail()):?>
                            <?php the_post_thumbnail();?>
                            <?php else:?>
                            <img src="<?php get_template_directory_uri().'/img/archive/noimg.png' ?>" alt="noimg">
                            <?php endif;?>
                        </div>
                        <div class="p-articles__body">
                            <p class="p-articles__category">
                                <?php $categories = get_the_category(); 
                                if($categories[0]){echo $categories[0]->name;}?>
                            </p>
                            <div class="p-articles__title">
                                <?php $maxLength = 24;
                                    $Title = get_the_title();
                                    $TitleLength =  mb_strlen($Title);
                                ?>
                                <?php if($TitleLength<$maxLength):?>
                                <?php the_title();?>
                                <?php else:?>
                                <?php echo mb_substr(get_the_title(), 0, $maxLength)."...";?>
                                <?php endif;?>
                            </div>
                            <time class="p-articles__date" datetime="<?php the_time('c') ?>">
                                <?php the_time("Y.m.d")?>
                            </time>
                        </div>
                    </a>
                    <?php endwhile;?>
                    <?php endif;?>
                </div>
                <!-- /post list -->

                <!-- pagination -->
                <div class="p-articles__pagination">
                    <?php if(paginate_links()):?>
                    <?php 
                        echo paginate_links(
                            array(
                                'end_size' => 20,
                                'mid_size' => 4,
                                'prev_next' => true,
                                'prev_text' => '前へ',
                                'next_text' => '次へ',
                            )
                        );
                    ?>
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