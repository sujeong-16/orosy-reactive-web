$(function() {
  // ex. 스타벅스 홈페이지. 스크롤 내렸을 때, 움찔거리는 사진들.
  $(".wp1").waypoint(function() {
    $(".wp1").addClass("animate fadeInLeft");
  }, {
    offset: "75%"
  });

  //차례대로 fadeIn Out 되면서 나타남
  $(".wp2").waypoint(function() {
    $(".wp2").addClass("animate fadeInUp");
  }, {
    offset: "75%"
  });
  $(".wp3").waypoint(function() {
    $(".wp3").addClass("animate fadeInUp");
  }, {
    offset: "75%"
  });
  $(".wp4").waypoint(function() {
    $(".wp4").addClass("animate fadeInUp");
  }, {
    offset: "75%"
  });

  $(".wp5").waypoint(function() {
    $(".wp5").addClass("animate fadeInDown");
  }, {
    offset: "75%"
  });
  $(".wp6").waypoint(function() {
    $(".wp6").addClass("animate fadeInDown");
  }, {
    offset: "75%"
  });
  $(".wp7").waypoint(function() {
    $(".wp7").addClass("animate fadeInDown");
  }, {
    offset: "75%"
  });
});