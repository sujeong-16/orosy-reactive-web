<!-- 아이디 찾기 눌렀을 때 -->
<?
session_start();
?>
<meta charset="utf-8">
<?php
include "dbconn.php";
mysqli_query($connect, 'set names utf8');

$name = $_POST['name'];
$phone = $_POST['phone'];

$sql = "select * from orosy where name='$name' AND phone='$phone'";
$result = mysqli_query($connect, $sql);

$num_match = mysqli_fetch_array($result);
// !empty = 값이 들어오면
if( !empty($num_match) ){
  echo "<script>
    alert('회원님의 아이디는 $num_match[id]입니다. 로그인해주세요');
    location.href = 'form_login.php';
  </script>";
} else {
  echo "<script>
    alert('아이디 찾기를 실패했습니다.\\n다시 입력해주세요.');
  </script>";
}
mysqli_close($connect);

echo "<script>location.href = 'form_find_id.php';</script>";
?>