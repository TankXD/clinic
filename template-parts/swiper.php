<div class="l-slider">
    <!-- Slider main container -->
    <div class="swiper p-swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper p-swiper-wrap">
            <!-- Slides -->
            <div class="swiper-slide p-swiper-slide">
                <div class="p-swiper__img">
                    <img src="<?php echo get_template_directory_uri().'/img/slider/slider-01.jpg' ?>" alt="">
                </div>
                <div class="p-swiper__text-img">
                    <picture>
                        <source media="(min-width: 768px)"
                            srcset="<?php echo get_template_directory_uri().'/img/slider/slider-text.svg' ?>">
                        <img src="<?php echo get_template_directory_uri().'/img/slider/slider-text-sp.svg '?>"
                            alt="街の皆さまの笑顔を守るアットホームな歯医者さん">
                    </picture>
                </div>
            </div>
            <div class="swiper-slide p-swiper-slide">
                <div class="p-swiper__img">
                    <img src="<?php echo get_template_directory_uri().'/img/slider/slider-02.jpg' ?>" alt="">
                </div>
                <div class="p-swiper__text-img">
                    <picture>
                        <source media="(min-width: 768px)"
                            srcset="<?php echo get_template_directory_uri().'/img/slider/slider-text.svg' ?>">
                        <img src="<?php echo get_template_directory_uri().'/img/slider/slider-text-sp.svg'?>"
                            alt="街の皆さまの笑顔を守るアットホームな歯医者さん">
                    </picture>
                </div>
            </div>
            <div class="swiper-slide p-swiper-slide">
                <div class="p-swiper__img">
                    <img src="<?php echo get_template_directory_uri().'/img/slider/slider-03.jpg' ?>" alt="">
                </div>
                <div class="p-swiper__text-img">
                    <picture>
                        <source media="(min-width: 768px)"
                            srcset="<?php echo get_template_directory_uri().'/img/slider/slider-text.svg' ?>">
                        <img src="<?php echo get_template_directory_uri().'/img/slider/slider-text-sp.svg'?>"
                            alt="街の皆さまの笑顔を守るアットホームな歯医者さん">
                    </picture>
                </div>
            </div>
            ...
        </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination p-swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev p-swiper-prev-btn"></div>
    <div class="swiper-button-next p-swiper-next-btn"></div>


</div>