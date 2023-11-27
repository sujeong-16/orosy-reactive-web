<?
session_start();
?>
<meta charset="utf-8">
<?
  $id = $_POST['id']; 
  if( !$id ) {
    echo("<script>
      window.alert('아이디를 입력하세요.')
      history.go(-1)
      </script>");
    exit;
  }
  $pw = $_POST['pw'];  
  if(!$pw) {
    echo("<script>
      window.alert('비밀번호를 입력하세요.')
      history.go(-1)
      </script>");
    exit;
  }  
  //  history.go(-1) : 이전페이지로

  include "dbconn.php";
  mysqli_query($connect,'set names utf8');
  $sql = "select * from orosy where id='$id'";

  $result = mysqli_query($connect, $sql);
  $num_match = mysqli_num_rows($result);

  if( !$num_match ) {
    echo("<script>
      window.alert('등록되지 않은 아이디입니다.')
      history.go(-1)
      </script>");
  }
  else {
    $row = mysqli_fetch_array($result);

    $db_pw = $row['pw'];
    if( $pw != $db_pw ){
      echo("<script>
        window.alert('비밀번호가 틀립니다.')
        history.go(-1)
        </script>");
      exit;  
    }
    else {
      $userid = $row['id'];
      $username = $row['name'];

      $_SESSION['userid'] = $userid;
		  $_SESSION['username'] = $username;
      echo("<script>
        location.href = 'orosy.html';
        </script>");
    }
  }
?>