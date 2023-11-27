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
    <? include "header.html"; ?>

    <!--로그인-->
    <div id="login">      
      <header id="login-header">
        <h2>Login</h2>
      </header>
      <div class="line"></div>
  
      <form action="login.php" method="post">
        <div id="login-form">
          <div class="j_item"><label for="login_id">아이디</label></div>
          <input type="text" name="id" id="login_id" placeholder="아이디를 입력해주세요" required>
          <div class="j_item"><label for="login_pw">비밀번호</label></div>
          <input type="password" name="pw" id="login_pw" placeholder="비밀번호를 입력해주세요" autocomplete="on" required>
        </div>
        <div class="line"></div>
        <div id="find-go">
          <div class="find_login">
            <a href="form_find_id.php" class="find_id">아이디찾기</a>
            <span>/</span>
            <a href="form_find_pw.php" class="find_pw">비밀번호찾기</a>
          </div>
          <div class="go_join">
            <a href="form_join.php">회원가입</a>
          </div>
        </div>
        <input type="submit" class="text_in" value="로그인">
      </form>
    </div>
    <? include "footer.html"; ?>
  </div>
</body>
</html>