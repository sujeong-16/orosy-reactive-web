$(function() {
// 페이지 로딩 시 제일 상단으로 스크롤 이동.
  $("html, body, #wrap").stop().animate({"scrollTop": 0}, 1000, "swing");

//퀵 메뉴quick menu
  // id="quick_menu"의 css top의 값을 defaultTop 변수에 저장
  const defaultTop = parseInt( $("#quick-menu").css("top") );

  $(window).on("scroll", function() {
    // 마우스 스크롤이 이동된만큼 scv 변수에 저장.
    const scv = $(window).scrollTop();
    $("#quick-menu").stop().animate({
      // 마우스 스크롤이 이동된 거리 + css top의 값
      top: scv + defaultTop + "px"
    }, 300);
  });
  // 퀵메뉴 버튼들 눌렀을 때
  $("#quick-menu .top").on("click", function() {
    $.scrollTo(this.hash || 0, 500);
  });


  // 배너에 fade효과
  $("#mob-banner").slick({
    autoplay: true,
    autoplaySpeed: 5000,
    infinite: true,
    dots: true,
    speed: 700,
    fade: true,
    cssEase: 'linear',
  });
  $("#tab-banner").slick({
    autoplay: true,
    autoplaySpeed: 5000,
    infinite: true,
    dots: true,
    speed: 700,
    fade: true,
    cssEase: 'linear',
  });
  $("#pc-banner").slick({
    autoplay: true,
    autoplaySpeed: 5000,
    infinite: true,
    dots: true,
    speed: 700,
    fade: true,
    cssEase: 'linear',
  });

  $(".intro").slick({
    autoplay: false,
    dots: false,
    infinite: false,
    arrows: false,
  });


  // const img = document.getElementsByClassName("shop_img");
  // $(".shop_img").stop().hide();
  // $("#product ul li img").on("mouseenter", function() {
  //   $(this).closest("p").siblings(img).fadeIn(500);
  // }).on("mouseleave", function() {
  //   $(".shop_img").stop().fadeOut(200);
  // });

  // $(".shop_img").on("mouseenter", function() {
  //   $(this).stop().show();
  // }).on("mouseleave", function() {
  //   $(".shop_img").stop().hide();
  // });
});