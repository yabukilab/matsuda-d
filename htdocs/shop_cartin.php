<?php
session_start();
session_regenerate_id(true);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>カート追加</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <h1>いらっしゃいませ</h1>
	</div>
    <div class="form">
        <h2>カート追加</h2>
<?php

try
{

$pro_code=$_GET['procode'];

if(isset($_SESSION['cart'])==true)
{
	$cart=$_SESSION['cart'];
	$kazu=$_SESSION['kazu'];
	if(in_array($pro_code,$cart)==true)
	{
		print 'その商品はすでにカートに入っています。<br />';
		print '<a href="index.php">商品一覧に戻る</a><br>';
		print'<a href="shop_cartlook.php">カートを見る</a><br>';

		exit();
	}
}
$cart[]=$pro_code;
$kazu[]=1;
$_SESSION['cart']=$cart;
$_SESSION['kazu']=$kazu;

}
catch(Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

カートに追加しました。<br />
<br />
<a href="index.php">商品一覧に戻る</a><br>
<a href="shop_cartlook.php">カートを見る</a><br />


</body>
</html>