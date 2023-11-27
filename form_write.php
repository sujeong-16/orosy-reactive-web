<?
  session_start();
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
    <?php include "header.html"; ?>

    <div id="content">
      <div>
        <h2 id="write">글쓰기</h2>

        <form action="board_insert.php" name="board_form" method="post">
          <div class="write_form">

            <div class="write_row1">
              <div>이름</div>
              <div class="ww_name"><?= $_SESSION['username'] ?></div>
              <div class="ww_check"><input type="checkbox" name="html_ok" value="y">HTML 쓰기</div>
            </div>
            
            <div class="write_row2">
              <div class="ww_title">제목</div>
              <div><input type="text" name="subject"></div>
            </div>
            
            <div class="write_row3">
              <div class="ww_content">내용</div>
              <div><textarea name="content" cols="79" rows="15"></textarea></div>
            </div>
          </div>

          <div class="write_btn">
            <input type="submit" value="저장">
            <a href="list.php?page=<?= $page ?>">취소</a>
          </div>
        </form>
      </div>
    </div>

    <?php include "footer.html"; ?>
  </div>
</body>
</html>