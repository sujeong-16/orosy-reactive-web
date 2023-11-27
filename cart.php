<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>오로지</title>
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/orosy_form.css">
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/sementic.js"></script>
  <style>
    html, body, #wrap {
      width: 100%;
    }
    #cart {
      position: relative;
      top: 80px;
      left: 0;
      text-align: center;
      margin: 0 auto;
      padding-bottom: 120px;

      width: 90%;
      font-size: 14px;
      max-width: 600px;
    }
    #cart-header {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div id="wrap">
    <?php include "header.html"; ?>
    <div id="cart">
      <header id="cart-header">
        <h2>장바구니</h2>
      </header>
  
      <?php include "cart_list.php"; ?>
    </div>
    <?php include "footer.html"; ?>
  </div>
</body>
</html>