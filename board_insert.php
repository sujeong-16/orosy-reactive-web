<?
  session_start();
?>
<meta charset="utf-8">
<?
  $userid = $_POST['userid'];
  $username = $_SESSION['username'];
  $subject = $_POST['subject'];   #글제목
  $content = $_POST['content'];   #글내용


  if( !$_SESSION['userid'] ){
    echo("<script>
      window.alert('로그인 후에 다시 이용해주세요.')
      history.go(-1)
    </script>");
    exit;
  }

  if( !$_POST['subject'] ){
    echo("<script>
      window.alert('제목을 입력해주세요.')
      history.go(-1)
    </script>");
    exit;
  }

  if( !$_POST['content'] ){
    echo("<script>
      window.alert('내용을 입력해주세요.')
      history.go(-1)
    </script>");
    exit;
  }

  $to_day = date("Y-m-d (H:i)");   #현재의 '년-월-일-시-분'을 저장

  include "dbconn.php";

  $mode = $_GET['modify'];
  $num = $_GET['num'];

  if( isset($_GET["mode"]))
    $mode = $_GET["mode"];
  else
    $mode = "";


  if( $mode == "modify" ){
    $sql = "update board set subject='$subject', content='$content' where num=$num";
  }
  else {
    if( $html_ok == "y" ){
      $is_html = "y";
    }
    else {
      $is_html = "";
      $content = htmlspecialchars($content);
      #htmlspecialchars → 문자열에서 특수문자를 HTML 엔티티로 변환. 이 함수를 사용하면 악성 사용자로부터 XSS 공격을 방지할 수 있음.
    }

    $sql = "insert into board (id, name, subject, content, to_day, hit, is_html)";
    $sql .= "values('$userid', '$username', '$subject', '$content', '$to_day', 0, '$is_html')";
  }

  mysqli_query($connect, $sql);
  mysqli_close($connect);

  echo("<script>
    location.href = 'list.php?page=$page';
  </script>");
?>