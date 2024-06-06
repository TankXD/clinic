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
        <p class="p-contact__text">お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。<br>
            以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。<br>
            また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
            <span class="u-color-red">※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span>
        </p>
        <div class="p-contact__title-wrap c-section-title-wrap">
            <h2 class="p-contact__title c-section-title">
                お問い合わせ<br class="u-hidden-pc">フォーム
            </h2>
        </div>
        <div class="p-contact-form">
            <?php echo do_shortcode('[contact-form-7 id="d7453c0" title="contact form"]');?>
        </div>
    </div>

</main>

<?php get_footer();?>