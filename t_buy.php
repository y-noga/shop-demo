<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N6H568D');</script>
<!-- End Google Tag Manager -->
<title>購入 | Noodle Shop</title>
<link rel="stylesheet" href="shop.css">
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6H568D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<h1>購入</h1>
<div class="base">
  <?php if ($error) echo "<span class=\"error\">$error</span>" ?>
  <form action="buy.php" method="post">
    <p>
      お名前<br>
      <input type="text" name="name" value="<?php echo $name ?>">
    </p>
    <p>
      ご住所<br>
      <input type="text" name="address" size="60" value="<?php echo $address ?>">
    </p>
    <p>
      電話番号<br>
      <input type="text" name="tel" value="<?php echo $tel ?>">
    </p>
    <p>
      <input type="submit" name="submit" value="購入">
    </p>
  </form>
</div>
<div class="base">
  <a href="index.php">お買い物に戻る</a>　
  <a href="cart.php">カートに戻る</a>
</div>
</body>
</html>
