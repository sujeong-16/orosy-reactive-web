$(function(){
  $("#mob-container").fullpage({
    verticalCentered: false,
    // verticalCentered: 기본값이 false. 구역 내 컨텐츠가 수직으로 중심에 위치하도록 함.
    anchors: [
      'asection0','asection1','asection2','asection3','asection4'
    ],

    //색션에 도착하면,
    // afterLoad: function(anchorLink, index) {
    //   if (index % 2 == 0) $("h2").addClass("down");
    //   else $("h2").removeClass('down'); 
    // },
  });
});