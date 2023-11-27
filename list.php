<?
  session_start();
?>
<meta charset="UTF-8">
<?
  include "dbconn.php";

  $mode = $_GET['search'];
  $page = $_GET['page'];   #페이지번호

  $find = $_POST['find'];
  $search = $_POST['search'];

  if( isset($_GET['mode']) )
    $mode = $_GET['mode'];
  else
    $mode = '';

  #한 화면에 표시되는 글의 수
  $scale = 10;

  if( $mode == "search" ){
    if( !$search ){
      echo ("<script>
      window.alert('검색할 단어를 입력해주세요.');
      history.go(-1);
      </script>");
      exit;
    }
    $sql = "select * from board where $find like '%$search%' order by num desc";
  }
  else {
    $sql = "select * from board order by num desc";
  }
  $result = mysqli_query($connect, $sql);
  // $total_record = mysqli_query($connect, $sql);

  #전체 글의 수
  $total_record = mysqli_num_rows($result);
  if( $total_record % $scale == 0 ){
    ## 전체 글의 수와 한 화면에 표시되는 글의 수를 나눴을 때, 나머지가 0이면
    $total_page = floor( $total_record / $scale );
  }
  else {
    $total_page = floor( $total_record / $scale ) + 1;
  }

  if( !$page ){
    #페이지 번호($page)가 0일 때, 페이지 번호를 1로 초기화.
    $page = 1;
  }
  #표시할 페이지($page)에 따라 $start 계산
  $start = ($page - 1) * $scale;
  $number = $total_record - $start;
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>오로지</title>
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/board.css">
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/sementic.js"></script>
  <style>
    .list_content {
      border-top: none;
    }
    #mob-header .m_header .m_logo h1 {
      position: relative;
      top: 18px;
    }
    #tab-logo h1{
      position: absolute;
      top: 18px;
      left: 0;
    }
    #pc-header #pc-logo h1 {
      position: absolute;
      top: 17px;
      left: 0;
    }
    .tt {
      background-color: rgba(167, 170, 102, 0.8);
    }
  </style>
</head>
<body>
  <div id="wrap">
    <? include "header.html"; ?>

    <div id="list-table">
      <h3>상품 사용후기</h3>
      <form action="list.php?mode=search" name="board_form" method="post">
        <div>
          <div class="list_search1">▶ 총 <?= $total_record ?> 개의 게시물이 있습니다.</div>
          <!-- <div class="list_search2"><input type="text" name="search"></div>
          <div class="list_search3"><input type="submit" value="검색"></div> -->
        </div>
      </form>
      
      <table border="1" class="list_title">
        <tr width="100%" height="25px" class="tt">
          <td class="list_1">번호</td>
          <td class="list_2">제목</td>
          <td class="list_3">작성자</td>
          <td class="list_4">등록일</td>
          <td class="list_5">조회</td>
        </tr>
      </table>
      
      <table border="1" class="list_content">
  <?
        for( $i = $start; $i < $start+$scale && $i < $total_record; $i++) {
          mysqli_data_seek( $result, $i );   #가져올 레코드로 위치(포인터) 이동
          $row = mysqli_fetch_array($result);   #하나의 레코드 가져오기
          
          $item_num = $row['num'];
          $item_id = $row['id'];
          $item_name = $row['name'];
          $item_hit = $row['hit'];   #조회수
          
          $item_date = $row['to_day'];   #오늘날짜
          $item_date = substr( $item_date, 0, 10 );   #날짜출력을 0~10번째까지
          $item_subject = str_replace(" ", "&nbsp;", $row['subject']);   #$nbsp;를 공백으로 변환
  ?>
        <tr height="40px" class="list_item">
          <td class="list_1"><?= $number ?></td>
          <td class="list_2">
            <!-- <a href="view.php?num=<?= $item_num ?>$page=<?= $page ?>"> -->
            <a href="comming_soon.html">
              <?= $item_subject ?>
            </a>
          </td>
          <td class="list_3"><?= $item_name ?></td>
          <td class="list_4"><?= $item_date ?></td>
          <td class="list_5"><?= $item_hit ?></td>
          <?
          $number--;
        }#for문 종료
  ?>
        <div class="clear"></div>
      </tr>
    </table>
    <div id="page-btn" class="cf">
      <div class="page_num">
        ◀ 이전&nbsp;&nbsp;&nbsp;
<?
        #게시판 목록 하단에 페이지링크 번호 출력
        for( $i = 1; $i <= $total_page; $i++){
          if( $page == $i ) {
            echo "<b>&nbsp;$i&nbsp;</b>";
          }
          else {
            echo "<a href='list.php?page=$i'>&nbsp;$i&nbsp;</a>";
          }
        }
?>
        &nbsp;&nbsp;&nbsp;다음 ▶
      </div>
      
      <div class="board_btn">
        <a class="bb_list" href="list.php?page=<?= $page ?>">목록</a>
        <?
        if( $_SESSION['userid'] ) {
          ?>
          <a href="form_write.php">글쓰기</a>
          <?
        }
        ?>
      </div>
    </div> <!-- page버튼 끝 -->
  </div>
  
  <? include "footer.html"; ?>
</div>
</body>
</html>