<?
session_start();
?>
<meta charset="utf-8">
<?
# join 폼에서 넘어옴
$id = $_POST['id'];
$pw = $_POST['pw'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

# 방문자의 IP 주소를 저장
$ip = $Remote_addr;

include "dbconn.php";
mysqli_query($connect, 'set names utf8');

$sql = "select * from orosy where id='$id'";
$result = mysqli_query($connect, $sql);

$exist_id = mysqli_num_rows($result);
#만약 아이디가 있다면
if( $exist_id ){
  echo("<script>
    window.alert('해당 아이디가 존재합니다.')
    history.go(-1)
  </script>");
  // history.go(-1) => 이전페이지로
  exit;
}
else {
  $sql = "insert into orosy(id, pw, name, email, phone) ";
  $sql .= "values('$id', '$pw', '$name', '$email', $phone)";
}

mysqli_query($connect, $sql);  #sql에 저장된 명령 실행

mysqli_close($connect);
Header("Location:form_login.php");
?>