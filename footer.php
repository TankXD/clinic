<div class="p-footer-bg-wave">

</div>
<footer class="l-footer">
    <div class="l-footer__inner">
        <div class="p-footer__info p-footer-info">
            <div class="p-footer-info__left">
                <div class="p-footer-info__logo"><img
                        src="<?php echo get_template_directory_uri().'/img/common/logo.svg' ?>" alt="みなみ歯科クリニック"></div>
                <p class="p-footer-info__address">〒166-0001<span>東京都杉並区阿佐谷北7-3-1</span></p>
                <a href="tel:03-1234-5678" class="p-footer-info__tel">
                    <img src="<?php echo get_template_directory_uri().'/img/common/tel.svg' ?>">
                    <span>03-1234-5678</span>
                </a>
                <p class="p-footer-info__time">(年中無休 AM9:00〜PM22:00)</p>
                <div class="p-footer-info__btn-wrap">
                    <a href="" class="p-footer-info__btn c-footer-btn c-footer-btn--blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" viewBox="0 0 30 20" fill="none">
                            <path
                                d="M26.988 6.36243H22.0414C21.4562 6.36243 20.9814 6.83721 20.9814 7.42241V16.6089C20.9814 17.1941 21.4562 17.6689 22.0414 17.6689H26.988C27.5732 17.6689 28.048 17.1941 28.048 16.6089V7.42241C28.048 6.83721 27.5732 6.36243 26.988 6.36243ZM24.5147 16.9623C24.1239 16.9623 23.8081 16.6465 23.8081 16.2556C23.8081 15.8647 24.1239 15.5489 24.5147 15.5489C24.9056 15.5489 25.2214 15.8647 25.2214 16.2556C25.2214 16.6465 24.9056 16.9623 24.5147 16.9623ZM26.988 14.5773C26.988 14.723 26.8688 14.8423 26.723 14.8423H22.3064C22.1607 14.8423 22.0414 14.723 22.0414 14.5773V7.6874C22.0414 7.54166 22.1607 7.42241 22.3064 7.42241H26.723C26.8688 7.42241 26.988 7.54166 26.988 7.6874V14.5773Z"
                                fill="white" />
                            <path
                                d="M18.1274 3H4.37522C3.61598 3 3 3.61598 3 4.37521V13.5433C3 14.3025 3.61598 14.9185 4.37522 14.9185H9.87609L9.41769 16.2937H7.35486C6.97381 16.2937 6.66725 16.6003 6.66725 16.9814C6.66725 17.3624 6.97381 17.669 7.35486 17.669H15.1478C15.5288 17.669 15.8354 17.3624 15.8354 16.9814C15.8354 16.6003 15.5288 16.2937 15.1478 16.2937H13.0849L12.6265 14.9185H18.1274C18.8866 14.9185 19.5026 14.3025 19.5026 13.5433V4.37521C19.5026 3.61598 18.8866 3 18.1274 3ZM17.669 13.0849H4.83362V4.83362H17.669V13.0849Z"
                                fill="white" />
                        </svg><span>WEB予約</span>
                    </a>
                    <a href="" class="p-footer-info__btn c-footer-btn c-footer-btn--white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M4 3.99976H20C21.1 3.99976 22 4.89976 22 5.99976V17.9998C22 19.0998 21.1 19.9998 20 19.9998H4C2.9 19.9998 2 19.0998 2 17.9998V5.99976C2 4.89976 2.9 3.99976 4 3.99976Z"
                                stroke="#1391E6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M22 6.13599L12 13.6125L2 6.13599" stroke="#1391E6" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg><span>お問い合わせ</span>
                    </a>
                </div>
                <div class="p-footer-info__time-table">
                    <picture>
                        <source media="(min-width: 768px)"
                            srcset="<?php echo get_template_directory_uri().'/img/common/medical-time-pc.png' ?>">
                        <img src="<?php echo get_template_directory_uri().'/img/common/medical-time-sp.png' ?>">
                    </picture>
                </div>
            </div>
            <div class="p-footer-info__right">
                <div class="p-footer-info__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12959.46242111935!2d139.6361231!3d35.7049247!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f2767eb9e92b%3A0xc2d0573363890acc!2z7JWE7IKs6rCA7JW8IOyXrQ!5e0!3m2!1sko!2sjp!4v1713922564134!5m2!1sko!2sjp"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
        <ul class="p-footer__nav p-footer-nav">
            <li class="p-footer__nav-item">
                <a class="p-footer-item__title" href="<?php echo home_url('/'); ?>">TOP</a>
            </li>
            <li class="p-footer__nav-item">
                <span class="p-footer-item__title">当院について</span>
                <ul class="p-footer-nav__link-list">
                    <a href="<?php echo getPageLink('about').'#about-common' ?>" class="p-footer-nav__link">ポリシーと特徴</a>
                    <a href="<?php echo getPageLink('about').'#about-gallery' ?>" class="p-footer-nav__link">当院の様子</a>
                </ul>
            </li>
            <li class="p-footer__nav-item">
                <span class="p-footer-item__title">スタッフ紹介</span>
                <ul class="p-footer-nav__link-list">
                    <a href="<?php echo getPageLink('staff').'#staff-doctor' ?>" class="p-footer-nav__link">院長のあいさつ</a>
                    <a href="<?php echo getPageLink('staff').'#staff-introduce' ?>" class="p-footer-nav__link">スタッフ</a>
                    <a href="<?php echo get_post_type_archive_link('blog') ?>" class="p-footer-nav__link">スタッフブログ</a>
                </ul>
            </li>
            <li class="p-footer__nav-item">
                <span class="p-footer-item__title">診療内容</span>
                <div class="p-footer-nav__link-list__wrap">
                    <ul class="p-footer-nav__link-list">
                        <a href="<?php echo getPageLink('medical').'#100' ?>" class="p-footer-nav__link">一般歯科</a>
                        <a href="<?php echo getPageLink('medical').'#102' ?>" class="p-footer-nav__link">小児歯科</a>
                        <a href="<?php echo getPageLink('medical').'#104' ?>" class="p-footer-nav__link">予防歯科</a>
                        <a href="<?php echo getPageLink('medical').'#106' ?>" class="p-footer-nav__link">入れ歯</a>
                    </ul>
                    <ul class="p-footer-nav__link-list">
                        <a href="<?php echo getPageLink('medical').'#108' ?>" class="p-footer-nav__link">矯正歯科</a>
                        <a href="<?php echo getPageLink('medical').'#110' ?>" class="p-footer-nav__link">ホワイトニング</a>
                        <a href="<?php echo getPageLink('medical').'#112' ?>" class="p-footer-nav__link">口腔外科</a>
                        <a href="<?php echo getPageLink('medical').'#114' ?>" class="p-footer-nav__link">レーザー治療</a>
                    </ul>
                </div>
            </li>
            <li class="p-footer__nav-item">
                <span class="p-footer-item__title">お問い合わせ</span>
                <ul class="p-footer-nav__link-list">
                    <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>"
                        class="p-footer-nav__link">お問い合わせフォーム</a>
                    <a href="<?php echo get_permalink(get_page_by_path('reservation')) ?>"
                        class="p-footer-nav__link">WEB予約</a>
                </ul>
            </li>
        </ul>
    </div>
    <div class="l-footer__copyright p-footer__copyright p-footer-copyright">
        <small>©︎2020-2021 みなみ歯科クリニック</small>
    </div>
</footer>

<div class="p-top-button">
    <a href="#">
        <img src="<?php echo get_template_directory_uri().'/img/common/to-top.svg' ?>" alt="トップへ戻る">
    </a>
</div>

<div class="p-footer-contact">
    <div class="p-footer-contact__tel-wrap">
        <a href="tel:03-1234-5678" class="p-footer-contact__tel">
            <img src="<?php echo get_template_directory_uri().'/img/common/tel.svg' ?>" alt="tel-icon">
            <span>03-1234-5678</span>
        </a>
        <p class="p-footer-contact__time">(年中無休 AM9:00〜PM22:00)</p>
    </div>
    <a href="<?php echo get_permalink(get_page_by_path('reservation')) ?>" class="p-footer-contact__btn">
        <img src="<?php echo get_template_directory_uri().'/img/common/icon-pc.svg' ?>" alt="pc-icon">
        <p class="p-footer-contact__btn-text">
            <span>WEB予約</span><br>
            <span>はこちら</span>
        </p>
    </a>
</div>

<a class="p-reserve-link" href="<?php echo get_permalink(get_page_by_path('reservation')) ?>">
    <img src="<?php echo get_template_directory_uri().'/img/common/icon-pc.svg' ?>" alt="pc-icon">
    <p>
        WEB予約<br>
        はこちら
    </p>
</a>

<?php wp_footer();?>
</body>

</html>