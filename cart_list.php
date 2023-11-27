<?php
  include "dbconn.php";

  $no = $_POST['no'];   #제품들의 고유번호

  $name = $_POST['name'];
  $comment = $_POST['comment'];
  $price = $_POST['price'];
  $img = $_POST['img'];

  $sql = "select * from cart";
  $result = mysqli_query($connect, $sql);
?>
<style>
  table {
    width: 100%;
    text-align:center;
    border-collapse: collapse;
    margin: 0 auto;
    font-size: 14px;
  }
  .del:hover {
    color: tomato;
    text-decoration: underline;
  }
  img {
    width: 70%;
  }
  .td_name {
    padding: 0 10px;
  }
  .td_img {
    width: 25%;
  }
  .td_price {
    width: 23%;
  }
  .td_del {
    width: 10%;
  }
  .tt {
    background-color: rgba(167, 170, 102, 0.8);
  }
</style>

<table width="80%" border="1">
  <tr height="30px" class="tt">
    <td>상품명</td>
    <td class="td_img">이미지</td>
    <td class="td_price">금액</td>
    <td class="td_del">삭제</td>
  </tr>
<?php
  # mysqli_fetch_array → 데이터를 하나씩 저장
  while( $data = mysqli_fetch_array($result)) {
?>
  <tr>
    <td class="td_name"><?= $data['name'] ?></td>
    <td><a href="product_soon2.html"><img src="./<?= $data['img'] ?>" alt="img"></a></td>
    <td><?= number_format($data['price'])."원" ?></td>
    <!-- number_format 세번째에 ,(반점)찍도록 설정하고 $data['price'] + 원 -->
    <td><a href="delete.php?no=<?= $data['no'] ?>" class="del">삭제</a></td>
  </tr>
<?php
  }
  mysqli_close($connect);
?>
</table>