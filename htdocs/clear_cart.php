<?php
session_start();
$_SESSION=array();
if(isset($_COOKIE[session_name()])==true)
{
	setcookie(session_name(),'',time()-42000,'/');
}
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>カート内商品削除</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <h1>いらっしゃいませ</h1>
	</div>
    <div class="form">
        <h2>カート内商品</h2>
カートを空にしました。<br />
<a href="shop_cartlook.php">戻る</a>

</body>
</html>