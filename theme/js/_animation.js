// 監視対象をすべて取得
const targets = document.querySelectorAll('.js_target');

// DOMの読み込みが完了してから処理を実行
document.addEventListener('DOMContentLoaded', () => {
  // 監視対象をすべて取得
  const targets = document.querySelectorAll('.js_target');

  if (targets.length === 0) {
    return;
  }

  // Intersection Observer のオプション
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1 // 要素が10%表示されたらトリガー
  };

  // コールバック関数
  const callback = (entries, observer) => {
    entries.forEach(entry => {
      // isIntersectingプロパティで交差しているか判定
      if (entry.isIntersecting) {
        // 'txt_animation_underup' クラスを付与
        entry.target.classList.add('txt_animation_underup');
        // 一度クラスを付与したら、この要素の監視を停止
        observer.unobserve(entry.target);
      }
    });
  };

  // Observer を作成
  const observer = new IntersectionObserver(callback, options);

  // すべての対象要素を監視開始
  targets.forEach(el => observer.observe(el));
});






document.addEventListener('DOMContentLoaded', () => {
  // 監視対象をすべて取得
  const targets = document.querySelectorAll('.js_target_lower');

  if (targets.length === 0) {
    return;
  }

  // Intersection Observer のオプション
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1 // 要素が10%表示されたらトリガー
  };

  // コールバック関数
  const callback = (entries, observer) => {
    entries.forEach(entry => {
      // isIntersectingプロパティで交差しているか判定
      if (entry.isIntersecting) {
        // 'txt_animation_underup' クラスを付与
        entry.target.classList.add('txt_animation_underup_lower');
        // 一度クラスを付与したら、この要素の監視を停止
        observer.unobserve(entry.target);
      }
    });
  };

  // Observer を作成
  const observer = new IntersectionObserver(callback, options);

  // すべての対象要素を監視開始
  targets.forEach(el => observer.observe(el));
});






// 左から順番にフェードで出現していく
document.addEventListener('DOMContentLoaded', function () {
  // 対象の要素を全て取得
  const fadeinElements = document.querySelectorAll('.is_fadein');

  function onScroll() {
    // ウィンドウの高さを取得
    const windowHeight = window.innerHeight;

    fadeinElements.forEach(function (element, i) {
      // 要素のビューポート内での位置を取得
      const rect = element.getBoundingClientRect();
      if (!element.classList.contains('active') && rect.top < windowHeight - 50) {
        setTimeout(function () {
          element.classList.add('active');
        }, i * 500); // 1秒(1000)は少し長いため、0.5秒(500)に調整
      }
    });
  }

  // ページ読み込み時とスクロール時に実行
  window.addEventListener('load', onScroll);
  window.addEventListener('scroll', onScroll, { passive: true }); // パフォーマンス向上のため passive: true を推奨
});
