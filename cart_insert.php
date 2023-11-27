<?php
include "dbconn.php";

$img = $_POST['img'];
$name = $_POST['name'];
$comment = $_POST['comment'];
$price = $_POST['price'];


$sql = "insert into cart(name, comment, price, img)";
$sql .= "values('$name', '$comment', '$price', '$img')";

mysqli_query($connect, $sql);
mysqli_close($connect);

?>
<script>
  location.href="cart.php";
</script>