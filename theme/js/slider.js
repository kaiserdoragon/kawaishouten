const swiper = new Swiper(".swiper_business", {
  // ベース（= 765px以下）
  slidesPerView: "auto",
  spaceBetween: 20,
  speed: 1500,
  slidesPerView: 1.2,
  pagination: { el: ".swiper-pagination", clickable: true },
  autoplay: { delay: 2000 },
  loop: true,
  freeMode: { enabled: true, sticky: true },
  grabCursor: true,

  breakpoints: {
    766: {
      // 766px以上（PC）
      loop: true,
      centeredSlides: true,
      speed: 3000,
      slidesPerView: 3.8,
      initialSlide: 0,
      spaceBetween: 50,
      // freeModeを無効化したい場合
      freeMode: { enabled: false },
      pagination: { el: ".swiper-pagination", clickable: true },
      autoplay: { delay: 5000 },
    },
  },
});
