jQuery(function ($) {
  $(document).ready(function () {
    // ハンバーガーメニュー
    $(".l-header__icon").click(function () {
      $(this).toggleClass("active");
      $(".l-header__nav--sp").toggleClass("active");
      $(".l-header").toggleClass("fixed");
      $("body").toggleClass("menu-open");
    });
  });

  $(window).on("hashchange", function () {
    if ($(".l-header__nav--sp").hasClass("active")) {
      $(".l-header__icon").removeClass("active");
      $(".l-header__nav--sp").removeClass("active");
      $(".l-header").removeClass("fixed");
      $("body").removeClass("menu-open");
    }
  });

  /*===========================================================*/
  /* アニメーション
  /*===========================================================*/
  function fadeAnime() {
    function handleClassOnScroll(elements, className) {
      elements.forEach(function (element) {
        let elemPos = element.getBoundingClientRect().top + window.scrollY - 50;
        let scroll = window.scrollY;
        let windowHeight = window.innerHeight;
        if (scroll >= elemPos - windowHeight) {
          element.classList.add(className);
        } else {
          element.classList.remove(className);
        }
      });
    }

    let fadeUpTriggers = document.querySelectorAll(".fadeUpTrigger");
    let flipLeftTriggers = document.querySelectorAll(".flipLeftTrigger");
    let slideInFromLeftTriggers = document.querySelectorAll(
      ".slideInFromLeftTrigger"
    );
    let slideInFromRightTriggers = document.querySelectorAll(
      ".slideInFromRightTrigger"
    );

    handleClassOnScroll(fadeUpTriggers, "fadeUp");
    handleClassOnScroll(flipLeftTriggers, "flipLeft");
    handleClassOnScroll(slideInFromLeftTriggers, "slideInFromLeft");
    handleClassOnScroll(slideInFromRightTriggers, "slideInFromRight");
  }

  /*===========================================================*/
  /* 関数をまとめる*/
  /*===========================================================*/
  // ページの読み込みが完了した時にfadeAnimeを実行
  window.addEventListener("DOMContentLoaded", fadeAnime);

  // スクロールイベント時にfadeAnimeを実行
  window.addEventListener("scroll", fadeAnime);
});
