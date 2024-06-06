// front page swiper

const swiper = new Swiper(".p-swiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  cssmode: true,

  // If we need pagination
  pagination: {
    el: ".p-swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".p-swiper-next-btn",
    prevEl: ".p-swiper-prev-btn",
  },
  zoom: true,
  keyboard: true,
});

// staff swiper

const staffSwiper = new Swiper(".p-staff-swiper__container", {
  speed: 10000,
  loop: true,
  slidesPerView: 1.84,
  spaceBetween: 10,
  cssmode: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
  breakpoints: {
    768: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
  },
});
