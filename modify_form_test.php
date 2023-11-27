<? 
	session_start(); 
	include "dbconn.php";
	$num=$_GET['num'];

	$sql = "select * from greet where num=$num";
	$result = mysqli_query( $connect,$sql);

	$row = mysqli_fetch_array($result);       	
	$item_subject     = $row['subject'];
	$item_content     = $row['content'];
?>
<html>
<head> 
<meta charset="utf-8">
<link href="css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="css/greet.css" rel="stylesheet" type="text/css" media="all">

<link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/exam.css">

	<script src="js/jquery-1.11.2.min.js"></script>
<script>
$(function(){
 $(".nav2> li >a").on("mouseenter",function(){
   $(".nav2 li a").css("background","none");
   $(".sub").stop().slideUp(500);
   $(".nav2 li a").css("text-decoration","none");
   $(".nav2 li a").css("color","gray");
	$(this).css("background","#2c2a29");
	$(this).css("text-decoration","underline").css("color","#64a70b");	
	$(this).next().stop().slideDown(500);
 });
 
     $(".menu").on("mouseleave",function(){
     $(".nav2 li a").css("background","none");
	 $(".sub").stop().slideUp(500);
	 $(".nav2 li a").css("color","gray");
	 $(".nav2 li a").css("text-decoration","none");
	});

});
</script>
</head>

<body>
<div id="header">
		<? include "header.html"; ?>
    </div>

<div id="wrap">
  

  <div id="content">
	

	<div id="col2">        
		<div id="title">
			<img src="img/title_greet.gif">
		</div>

		<div class="clear"></div>

		<div id="write_form_title">
			<img src="img/write_form_title.gif">
		</div>

		<div class="clear"></div>
		<form  name="board_form" method="post" action="insert.php?mode=modify&num=<?=$num?>&page=<?=$page?>"> 
		<div id="write_form">
			<div class="write_line"></div>
			<div id="write_row1">
				<div class="col1"> 이름 </div>
				<!-- <div class="col1"> 닉네임 </div> -->
				<!-- <div class="col2"><?=$_SESSION['usernick']?></div> -->
				<div class="col2"><?=$_SESSION['username']?></div>
			</div>
			<div class="write_line"></div>
			<div id="write_row2"><div class="col1"> 제목   </div>
			 <div class="col2"><input type="text" name="subject" value="<?=$item_subject?>" ></div>
			</div>
			<div class="write_line"></div>
			<div id="write_row3"><div class="col1"> 내용   </div>
			                     <div class="col2"><textarea rows="15" cols="79" name="content"><?=$item_content?></textarea></div>
			</div>
			<div class="write_line"></div>
		</div>

		<div id="write_button"><input type="image" src="img/ok.png">&nbsp;
								<a href="list.php?page=<?=$page?>"><img src="img/list.png"></a>
		</div>
		</form>

	</div> <!-- end of col2 -->
  </div> <!-- end of content -->
</div> <!-- end of wrap -->

</body>
</html>