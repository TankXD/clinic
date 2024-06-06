<!-- sidebar -->
<aside class="l-archive__sidebar p-sidebar">
    <!-- クリニックの紹介 -->
    <div class="p-sidebar-about">
        <h2 class="p-sidebar__title p-sidebar-about__title">
            <img src="<?php echo get_template_directory_uri().'/img/sidebar/about_icon.svg' ?>">
            クリニックの紹介
        </h2>
        <div class="p-sidebar-about__img"><img src="<?php echo get_template_directory_uri().'/img/sidebar/about.jpg'?>">
        </div>
        <h3 class="p-sidebar-about__sub-title">みなみ歯科クリニック</h3>
        <p class="p-sidebar-about__description">お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
        <a href="" class="p-sidebar-about__link">
            <span>当院について</span>
        </a>
    </div>
    <!-- 新着記事 -->
    <div class="p-sidebar-articles">
        <h2 class="p-sidebar__title">
            <img src="<?php echo get_template_directory_uri().'/img/sidebar/articles_icon.svg' ?>">
            新着記事
        </h2>
        <div class="p-sidebar-articles__list">
            <?php $recent_posts = new WP_Query(
                                array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 5,
                                    'orderby' => 'date',
                                    'order' => 'DESC'
                                )
                            );
                            if($recent_posts->have_posts()):?>
            <?php while($recent_posts->have_posts()):?>
            <?php $recent_posts->the_post();?>
            <!-- ポストがある場合は、そのポストのサムネイルを左側に表示し、カテゴリとタイトル、日付を右側に表示します -->
            <a href="<?php the_permalink(); ?>" class="p-sidebar-articles__item">
                <div class="p-sidebar-articles__thumb">
                    <?php if(has_post_thumbnail()):?>
                    <?php the_post_thumbnail();?>
                    <?php else:?>
                    <img src="<?php get_template_directory_uri().'/img/archive/noimg.png' ?>" alt="noimg">
                    <?php endif;?>
                </div>
                <div class="p-sidebar-articles__body">
                    <p class="p-sidebar-articles__category">
                        <?php $categories = get_the_category(); 
                                if($categories[0]){echo $categories[0]->name;}?>
                    </p>
                    <div class="p-sidebar-articles__title">
                        <?php $maxLength = 18;
                                    $Title = get_the_title();
                                    $TitleLength =  mb_strlen($Title);
                                ?>
                        <?php if($TitleLength<=$maxLength):?>
                        <?php the_title();?>
                        <?php else:?>
                        <?php echo mb_substr(get_the_title(), 0, $maxLength)."...";?>
                        <?php endif;?>
                    </div>
                    <time class="p-sidebar-articles__date" datetime="<?php the_time('c') ?>">
                        <?php the_time("Y.m.d")?>
                    </time>
                </div>
            </a>
            <?php endwhile;?>
            <?php endif;?>
            <?php wp_reset_postdata();?>
        </div>
    </div>
    <!-- category list -->
    <div class="p-sidebar-category">
        <h2 class="p-sidebar__title">
            <img src="<?php echo get_template_directory_uri().'/img/sidebar/category_icon.svg' ?>">
            カテゴリー
        </h2>
        <ul class="p-sidebar-category__list">
            <?php $categories = get_categories();
                            foreach($categories as $category):?>
            <li class="p-sidebar-category__item">
                <a href="<?php echo get_category_link($category->term_id);?>" class="p-sidebar-category__link">
                    <?php echo $category->name;?>
                </a>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</aside>
<!-- /side widget -->