<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> 注文データダウンロード</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <h1>在庫管理システム</h1>
	</div>
    <div class="form">
        <h2>注文確認</h2>
<?php
require_once('common.php');
?>

ダウンロードしたい注文日を選んでください。<br />
<form method="post" action="order_download_done.php">
<?php pulldown_year(); ?>
年
<?php pulldown_month(); ?>
月
<?php pulldown_day(); ?>
日<br />
<br />
<input type="submit" value="ダウンロードへ">
</form>

</body>
</html>