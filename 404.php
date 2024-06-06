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
            <h1 class="p-page-top__title">404</h1>
            <p class="p-page-top__sub-title">NOT FOUND</p>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/breadcrumb');?>
<main class="l-main">
    <div class="l-contact-inner">
        <h1 class="p-undefined__title">コンテンツが存在しません</h1>
        <p class="p-undefined__description">申し訳ございません。<br>お探しのページが見つかりませんでした。</p>
    </div>
</main>

<?php get_footer();?>