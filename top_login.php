<?
session_start();
?>
<?php
// 로그인 아이디x
if( !$_SESSION['userid']){
  ?>
  <a href="form_login.php">로그인</a>
  <?
}
else {
  // 로그인 했을 때
  ?>
  <?=$_SESSION['username']?> 님 |
  <a href="logout.php">로그아웃</a>
  <?
}
?>