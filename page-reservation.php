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
            <h1 class="p-page-top__title">WEB予約</h1>
            <p class="p-page-top__sub-title">RESERVE</p>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/breadcrumb');?>


<main class="l-main">
    <div class="l-contact-inner">
        <div class="p-contact-info">
            <h2 class="p-contact-info__title">お電話でのご予約/ご相談</h2>
            <div class="p-contact-info__tel-wrap">
                <a href="tel:03-1234-5678" class="p-contact-info__tel">
                    <img src="<?php echo get_template_directory_uri().'/img/common/tel.svg' ?>"
                        alt="番号03-1234-5678"><span>03-1234-5678</span>
                </a>
                <p class="p-contact-info__time">(年中無休 AM9:00〜PM22:00)</p>
            </div>
            <p class="p-contact-info__description">お急ぎの方は電話での連絡がスムーズです。<br>
                混雑状況によっては当日受診をご利用いただけない場合がございます。<br>
                あらかじめご了承ください。</p>
        </div>
        <div class="p-contact-info">
            <h2 class="p-contact-info__title">メールでのご予約/ご相談</h2>
            <p class="p-contact-info__description">【ご予約に関しての注意点】<br>
                メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
                ※24時間以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</p>
        </div>
        <div class="p-contact__title-wrap c-section-title-wrap">
            <h2 class="p-contact__title c-section-title">
                予約フォーム
            </h2>
        </div>
        <div class="p-contact-form">
            <?php echo do_shortcode('[contact-form-7 id="d0c3ad0" title="reservation form"]')?>
        </div>
    </div>

</main>

<?php get_footer();?>