<?php 
// 
// Template Name: Reservation Thanks Page
// 

?>


<?php get_header();?>

<section class="p-page-top">
    <div class="p-page-top__inner">
        <picture>
            <source media="(min-width: 768px)"
                srcset="<?php echo get_template_directory_uri().'/img/contact/page-contact_top.jpg' ?>">
            <img src="<?php echo get_template_directory_uri().'/img/contact/page-contact_top-sp.jpg' ?>"
                class="p-page-top__img">
        </picture>
        <div class="p-page-top__text-wrap">
            <h1 class="p-page-top__title">お問い合わせ</h1>
            <p class="p-page-top__sub-title">CONTACT</p>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/breadcrumb');?>


<main class="l-main">
    <div class="l-contact-inner">
        <p class="p-contact__text">WEBよりご予約いただき誠にありがとうございます。<br>
            送信いただいた内容を確認して1営業日以内に返信いたします。<br>
            <span class="u-color-red">※1営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。 </span>
        </p>
    </div>
</main>

<?php get_footer();?>