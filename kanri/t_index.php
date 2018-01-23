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
<title>商品一覧</title>
<link rel="stylesheet" href="kanri.css">
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6H568D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<table>
  <?php foreach ($goods as $g) { ?>
    <tr>
      <td>
        <?php echo img_tag($g['code']) ?>
      </td>
      <td>
        <p class="goods"><?php echo $g['name'] ?></p>
        <p><?php echo nl2br($g['comment']) ?></p>
      </td>
      <td width="80">
        <p><?php echo $g['price'] ?> 円</p>
        <p><a href="edit.php?code=<?php echo $g['code'] ?>">修正</a></p>
        <p><a href="upload.php?code=<?php echo $g['code'] ?>">画像</a></p>
        <p><a href="delete.php?code=<?php echo $g['code'] ?>" onclick="return confirm('削除してよろしいですか？')">削除</a></p>
      </td>
    </tr>
  <?php } ?>
</table>
<div class="base">
  <a href="insert.php">新規追加</a>　
  <a href="../index.php" target="_blank">サイト確認</a>
</div>
</body>
</html>
