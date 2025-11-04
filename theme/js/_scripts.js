function add_script(url) {
  let script = document.createElement("script");
  script.src = url;
  document.body.appendChild(script);
}

// ヘッダーのスクロール位置を取得 /////////////////////////////////////////////
// headerの高さ分スクロールしたら、-fixedクラスをつける。
const Header = document.getElementById("js-header");
if (Header) {
  const options = {
    root: null,
    rootMargin: `${Header.offsetHeight}px 0px ${document.body.clientHeight}px 0px`,
    threshold: 1,
  };

  const observer = new IntersectionObserver(change_header, options);
  observer.observe(document.body);
  function change_header(entries) {
    if (!entries[0].isIntersecting) {
      Header.classList.add("-fixed");
    } else {
      Header.classList.remove("-fixed");
    }
  }
}

// グローバルナビゲーション //////////////////////////////////////////////////////
const Gnav_btn = document.getElementById("js-gnav_btn");
const Gnav = document.getElementById("js-gnav");

// スクロール位置を保存する変数
let scrollPosition = 0;

if (Gnav_btn) {
  // iOS Safari対応: touchstartイベントも追加
  const handleMenuToggle = (e) => {
    e.preventDefault();
    e.stopPropagation();

    const isOpen = Gnav.classList.contains("is-open");

    if (!isOpen) {
      // メニューを開く
      scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
      document.body.style.top = `-${scrollPosition}px`;
      document.body.classList.add("menu-open");
      Gnav_btn.classList.add("is-open");
      Gnav.classList.add("is-open");
    } else {
      // メニューを閉じる
      closeMenu();
    }
  };

  // メニューを閉じる関数
  const closeMenu = () => {
    Gnav_btn.classList.remove("is-open");
    Gnav.classList.remove("is-open");
    document.body.classList.remove("menu-open");
    document.body.style.top = "";
    window.scrollTo(0, scrollPosition);
    scrollPosition = 0;
  };

  // クリックとタッチイベントの両方に対応
  Gnav_btn.addEventListener("click", handleMenuToggle);
  Gnav_btn.addEventListener("touchstart", handleMenuToggle, { passive: false });

  // メニューのどこかが押されたら閉じる
  Gnav.addEventListener("click", (e) => {
    // メニュー自体のクリックは無視（子要素のクリックのみ処理）
    if (e.target === Gnav) {
      closeMenu();
    }
  });

  // メニュー外をクリックしたら閉じる
  document.addEventListener("click", (e) => {
    if (
      Gnav.classList.contains("is-open") &&
      !Gnav.contains(e.target) &&
      !Gnav_btn.contains(e.target)
    ) {
      closeMenu();
    }
  });

  // ESCキーでメニューを閉じる
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && Gnav.classList.contains("is-open")) {
      closeMenu();
    }
  });
}

// アンカーリンクのスムーススクロール //////////////////////////////////////////////
// iOSでスムーススクロールをするためには「<script src=" https://polyfill.io/v3/polyfill.min.js?features=smoothscroll"></script>」を読み込む必要がある。
const headerHeight = ((load) => {
  return load ? document.getElementsByClassName("header")[0].offsetHeight : 0;
})(false); // ※ヘッダー高さをロード時にはかりたいときは、ここをtrueにする

const anchor = document.querySelectorAll("a[href*='#']:not(.is-noscroll)"); // 発火しない場合は「.is-noscroll」
[...anchor].forEach((element) => {
  const target = ((hash) => {
    return hash
      ? document.querySelector(element.hash)
      : console.error(`リンクが空です。 ${element.outerHTML}`);
  })(element.hash);

  if (target) {
    element.addEventListener("click", (e) => {
      e.preventDefault();
      window.scrollTo({
        top: target.offsetTop - headerHeight,
        behavior: "smooth",
      });
    });
  }
});

//別URLからやってきたときに発火
window.addEventListener("load", () => {
  const url = window.location.href;
  if (url.indexOf("#") !== -1) {
    const id = url.split("#");
    const target = document.getElementById(id[id.length - 1]);
    if (target) {
      window.scroll({ top: 0 });
      window.scroll({ top: target.offsetTop - headerHeight, behavior: "smooth" });
    }
  }
});

(function ($, root, undefined) {
  $(function () {
    // 'js-select'クラスが付いている要素を全て取得
    const select = $(".js-select");
    // is-emptyクラスを付与
    select.addClass("is-empty");

    // selectのoptionを切り替え時
    select.on("change", function () {
      // option選択時
      if ($(this).val() !== "") {
        // is-emptyクラスを削除
        $(this).removeClass("is-empty");
      }
      // placeholder選択時
      else {
        // is-emptyクラスを付与
        $(this).addClass("is-empty");
      }
    });
  });
})(jQuery, this);
