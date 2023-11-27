<?php
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
  <div id="join-wrap">
    <? include "header.html"; ?>

  <!-- 회원가입Join -->
    <div id="join">
      <header id="join-header">
        <h2>회원가입</h2>
      </header>
      <div class="line"></div>

      <form action="insert.php" method="post" name="form_join">
        <div id="join-form">
        <!-- id -->
          <div class="j_item">
            <label for="user_id">아이디</label>
            <span>*</span>
          </div>
          <!-- required = 반드시 채워져있어야 하는 입력필드를 의미 -->
          <div id="nn">
            <input type="text" id="user_id" name="id" minlength="4" maxlength="16" class="id_btn" required>
            <button type="button" class="id_check" onclick="id_check()">중복확인</button>
          </div>
          <p>(영문소문자/숫자, 4~16자)</p>
          <p class="nn_text"></p>

          <!-- pw -->
          <div class="j_item">
            <label for="user_pw">비밀번호</label>
            <span>*</span>
          </div>
          <input type="password" id="user_pw" name="pw" minlength="8" maxlength="16" required>
          <p>(영문 소문자/숫자/특수문자 중 2가지 이상 조합, 8~16자)</p>
        
          <!-- pw1 -->
          <div class="j_item">
            <label for="user_pw1">비밀번호확인</label>
            <span>*</span>
          </div>
          <input type="password" id="user_pw1" name="pw1" minlength="8" maxlength="16" required>
          <!-- <p>비밀번호가 일치하지 않습니다.</p> -->

          <!-- name -->
          <div class="j_item">
            <label for="user_name">이름</label>
            <span>*</span>
          </div>
          <input type="text" id="user_name" name="name" required>

          <!-- phone -->
          <div class="j_item">
            <label for="user_phone">전화번호</label>
            <span>*</span>
          </div>
          <input type="tel" id="user_phone" name="phone" maxlength="11" placeholder="숫자만 입력해주세요" required>

          <!-- email -->
          <div class="j_item">
            <label for="user_email">이메일</label>
            <span>*</span>
          </div>
          <input type="email" id="user_email" name="email" required>
          <!-- <p>유효한 이메일을 입력해주세요.</p> -->
        
          <!-- 회원가입 버튼 -->
          <input type="submit" value="회원가입" onclick="input_check()">
          <!-- <input type="button"> -->
          <a href="orosy.html"><div class="main_back">취소하기</div></a>
        </div>
      </form>
    </div>
    
    <!-- footer -->
    <? include "footer.html"; ?>
  </div>
  <script src="js/join_script.js"></script>
</body>
</html>