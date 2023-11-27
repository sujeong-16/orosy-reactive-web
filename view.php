<?
  session_start();

  include "dbconn.php";

  $num = $_GET['num'];
  $page = $_GET['page'];

  $sql = "select * from board where num=$num";
  $result = mysqli_query($connect, $sql);
  // $row = mysqli_query($connect, $sql);

  #하나의 레코드 가져오기
  $row = mysqli_fetch_array($result); #오류남

  $item_num = $row['num'];
  $item_id = $row['id'];
  $item_name = $row['name'];
  $item_hit = $row['hit'];   #조회수

  $item_date = $row['to_day'];   #오늘날짜

  $item_subject = str_replace(" ", "&nbsp;", $row['subject']);   #$nbsp;를 공백으로 변환

  $item_content = $row['content'];
  $is_html = $row['is_html'];

  if( $is_html != 'y'){
    $item_content = str_replace(" ", "&nbsp;", $item_content);
    $item_content = str_replace("\n", "<br>", $item_content);
  }

  #목록의 글을 읽을때마다 조회수 증가시킴.
  $new_hit = $item_hit + 1;
  $sql = "update board set hit=$new_hit where num=$num";
  mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>오로지</title>
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/view.css">
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/sementic.js"></script>
</head>
<script>
  function del(href) {
    if( confirm("한번 삭제한 자료는 복구할 수 없습니다.\n\n정말 삭제하시겠습니까?")) {
      document.location.href = href;
    }
  }
</script>
<body>
  <div id="wrap">
    <? include "header.html"; ?>
    
    <div id="content">
      <div id="title">가입인사?</div>
      <div id="view_comment">&nbsp;</div>
      <div id="view_title">
        <div class="view_title1"><?= $item_subject ?></div>
        <div class="view_title2"><?= $item_name ?> | 조회 : <?= $item_hit ?> | <?= $item_date ?></div>
      </div>

      <div class="view_content"><?= $item_content ?></div>
      <div class="view_btn">
        <a href="list.php?page=<?= $page ?>">목록</a>
<?
        $userid = $_SESSION['userid'];
        $item_id = $_SESSION['userid'];
        if( $userid == $item_id || $userlevel == 1 || $userid == "admin"){
?>
          <a href="form_modify.php?num=<?= $num ?>&page=<?= $page ?>">수정</a>
          <a href="javascript:del('board_delete.php?num=<?= $num ?>')">삭제</a>
<?
        }
?>
<?
        if( $userid ){
?>
          <a href="form_write.php">글쓰기</a>
<?
      }
?>
      </div> <!-- view 버튼 끝 -->
    </div>

    <? include "footer.html"; ?>
  </div>
</body>
</html>