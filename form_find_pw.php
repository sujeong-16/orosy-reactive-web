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
  <link rel="stylesheet" href="css/orosy_form.css">
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/sementic.js"></script>
</head>
<body>
  <div id="login-wrap">
    <!-- header -->
    <? include "header.html"; ?>

    <div id="find">
      <header id="find-header">
        <div class="arrow_left">
          <a href="form_login.php"></a>
        </div>
        <h2>
          <a href="form_find_id.php">아이디 찾기</a>
        </h2>
        <span>/</span>
        <h2 class="h2_click">
          <a href="form_find_pw.php">비밀번호 찾기</a>
        </h2>
      </header>
      <div class="line"></div>
  
      <form action="pw_search.php" method="post" name="form_find">
        <div id="find-form">

          <div class="j_item">
            <label for="find_id">아이디</label>
          </div>
          <input type="text" id="find_id" name="id" required>
          
          <div class="j_item">
            <label for="find_name">이름</label>
          </div>
          <input type="text" id="find_name" name="name" required>

          <div class="j_item">
            <label for="find_phone">전화번호</label>
          </div>
          <input type="tel" id="find_phone" name="phone" maxlength="11" required>
        </div>
        <input type="submit" class="text_in" value="찾기">
      </form>
    </div>

    <!-- footer -->
    <? include "footer.html"; ?>
  </div>
</body>
</html>