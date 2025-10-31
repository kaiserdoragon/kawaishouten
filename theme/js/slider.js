const swiper = new Swiper(".swiper_business", {
  // --- 767px以下のデフォルト設定 (スマホ用の設定) ---
  slidesPerView: 1.5,  // 例: スマホでは1.5枚表示
  spaceBetween: 20,     // 例: スマホではスペースを20pxに
  loop: true,
  centeredSlides: true,
  speed: 3000,
  initialSlide: 0,
  pagination: { el: ".swiper-pagination", clickable: true },
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },

  breakpoints: {
    768: {
      slidesPerView: 3.8,  // PC用の設定 (元の値)
      spaceBetween: 50,     // PC用の設定 (元の値)
    }
  }
});