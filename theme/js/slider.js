const swiper = new Swiper(".swiper", {
  loop: true, // ループ
  centeredSlides: true, // これ重要
  speed: 1500, // 少しゆっくり(デフォルトは300)
  slidesPerView: 3.8, // 一度に表示する枚数
  spaceBetween: 50, // スライド間の距離
  centeredSlides: true, // アクティブなスライドを中央にする
  autoplay: {
    delay: 2000, // 1秒後に次のスライド
  },
  // ページネーション
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
