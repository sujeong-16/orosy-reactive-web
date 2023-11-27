<?
session_start();
?>
<?php
// 로그인 아이디x
if( !$_SESSION['userid']){
  ?>
  <a href="form_login.php" class="i_user"></a>
  <?
}
else {
  // 로그인 했을 때
  ?>
  <div class="login_user">
    <a href="logout.php" class="i_user_black"></a>
  </div>
  <?
}
?>