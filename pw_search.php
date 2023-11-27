<!-- 비밀번호 찾기 버튼을 눌렀을 때 -->
<?
session_start();
?>
<meta charset="utf-8">
<?
include "dbconn.php";
mysqli_query($connect,'set names utf8');

$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];

$sql = "select * from orosy where id='$id' AND name='$name' AND phone='$phone'";
$result = mysqli_query($connect, $sql);

$num_match = mysqli_fetch_array($result);
// !empty = 값이 들어오면
if( !empty($num_match) ){
  echo "<script>
    alert('회원님의 비밀번호는 $num_match[pw]입니다. 로그인해주세요');
    location.href = 'form_login.php';
  </script>";
} else {
  echo "<script>
    alert('비밀번호 찾기를 실패했습니다.\\n다시 입력해주세요.');
  </script>";
}
mysqli_close($connect);
echo "<script>location.href = 'form_find_pw.php';</script>";
?>

