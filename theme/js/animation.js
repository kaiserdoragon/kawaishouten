// 監視対象をすべて取得
const targets = document.querySelectorAll('.js_target');

// Intersection Observer のオプション
const options = {
  root: null,
  rootMargin: '0px',
  threshold: 0.1
};

// コールバック
const callback = (entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('txt_animation_underup');
      // 一度付与したら監視を停止
      observer.unobserve(entry.target);
    } else {
      // 画面外に出たらクラスを外したい場合は↓を有効化
      // entry.target.classList.remove('txt_animation_underup');
    }
  });
};

// Observer を作成
const observer = new IntersectionObserver(callback, options);

// すべての対象を監視開始
targets.forEach(el => observer.observe(el));





document.addEventListener('DOMContentLoaded', function () {
  var fadein = document.querySelectorAll('.fadein');

  function onScroll() {
    var hSize = window.innerHeight;
    var scroll = window.scrollY;

    fadein.forEach(function (element, i) {
      if (scroll > element.getBoundingClientRect().top - hSize + 50) {
        setTimeout(function () {
          element.classList.add('active');
        }, i * 1000);
      }
    });
  }

  window.addEventListener('load', onScroll);
  window.addEventListener('scroll', onScroll);
});
