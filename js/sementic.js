$(function(){
/** header */
  // 반응형 header에 마우스를 올리면 메뉴 + Sign In & Cart 글자색 변경
  $("#mob-header ul li a, .m_menus li a, .m_menus li span, #tab-menu ul li a, #pc-menu ul li a").on("mouseover", function(){
    $("#mob-header ul li a, .m_menus li a, .m_menus li span, #tab-menu ul li a, #pc-menu ul li a").css("color", "#111");
    $(this).css("color", "#a7aa66");
  }).on("mouseleave", function() {
    $("#mob-header ul li a, .m_menus li a, .m_menus li span, #tab-menu ul li a, #pc-menu ul li a").css("color", "#111");
  });

  // mobile 햄버거를 클릭했을 때, 메뉴 열고닫기
  $("#mob-gnb").hide();
  $(".m_icon").on("click", function() {
    $("#mob-gnb").stop().slideToggle(300);
    $(".m_items").stop().slideUp(300);
    $(".m_menus li span").removeClass("p_up");
    $(".m_menus li span").addClass("p_down");
  });
  // mobile sub_menu 클릭했을 때
  $(".list span").on("click", function(e) {
    e.preventDefault();
    // 제품메뉴의 sub메뉴가 열려있으면 닫기.
    if ( $(this).parent().next().is(":visible")) {
      $(this).parent().next().stop().slideUp(300);
      $(".m_menus li span").removeClass("p_up");
      $(".m_menus li span").addClass("p_down");
    } else {
      $(this).parent().next().stop().slideDown(300);
      $(".m_menus li span").addClass("p_up");
      $(".m_menus li span").removeClass("p_down");
    }
  });

  // tablet, pc 메인메뉴에 마우스를 올렸을 때, 글자 밑에 언더라인 생김
  $(".tab_menus li a, .pc_menus li a").on("mouseover", function(e) {
    e.preventDefault();
    $(".tab_menus li a, .pc_menus li a")
      .css("textDecoration", "none");
    $(this).css("textDecoration", "solid underline 2px")
            .css("textUnderlineOffset", "5px");
  }).on("mouseout", function() {
    $(".tab_menus li a, .pc_menus li a")
      .css("textDecoration", "none");
  });


/** footer */
  // mobile footer menu를 클릭했을 때, 열고닫기
  $(".f_m_text").hide();
  $(".f_menu p").on("click", function() {
    $(".f_m_text").slideToggle(300);
  });



  
  // $(this).css("textDecoration", "solid underline 2px")
  // .css("textUnderlineOffset", "5px");
});