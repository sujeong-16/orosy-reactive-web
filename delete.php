<?php
  session_start();
  $no = $_GET['no'];

  include "dbconn.php";
  $sql = "delete from cart where no = '$no'";
  
  mysqli_query($connect, $sql);
  mysqli_close($connect);

  echo "<script>
    location.href = 'cart.php';
  </script>";
?>