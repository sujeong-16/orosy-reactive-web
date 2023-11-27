<?
	session_start();

	include "dbconn.php";

	$num = $_GET['num'];
  
	$sql = "select * from board where num=$num";

	$result = mysqli_query($connect, $sql);
	// $row = mysqli_query( $connect, $sql );

	$row = mysqli_fetch_array($result);  #오류남     	
	$item_subject = $row['subject'];
	$item_content = $row['content'];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>오로지</title>
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/form_write.css">
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/sementic.js"></script>
</head>
<body>
  <div id="wrap">
    <? include "header.html"; ?>

    <div id="content">
		<div id="col2">        
			<div id="title">가입인사2</div>
			<div class="clear"></div>

			<div id="write_form_title">글쓰기</div>
			<div class="clear"></div>

			<form name="board_form" method="post"
					action="board_insert.php?mode=modify&num=<?= $num ?>&page=<?= $page ?>"> 
				<div id="write_form">
					<div class="write_line"></div>
					<div id="write_row1">
						<div class="col1"> 이름 </div>
						<div class="col2"><?= $_SESSION['username'] ?></div>
					</div>
					<div class="write_line"></div>
					<div id="write_row2">
						<div class="col1"> 제목   </div>
						<div class="col2"><input type="text" name="subject" value="<?= $item_subject ?>" ></div>
					</div>
					<div class="write_line"></div>
					<div id="write_row3">
						<div class="col1"> 내용   </div>
						<div class="col2">
              <textarea rows="15" cols="79" name="content"><?= $item_content ?></textarea>
            </div>
					</div>
					<div class="write_line"></div>
				</div>
				<div id="write_button"><input type="submit" value="완료">&nbsp;
					<a href="list.php?page=<?= $page ?>">목록</a>
				</div>
			</form>
		</div> <!-- end of col2 -->
	</div> <!-- end of content -->

    <? include "footer.html"; ?>
  </div>
</body>
</html>