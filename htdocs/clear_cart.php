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
</head>
<body>

カートを空にしました。<br />
<a href="shop_cartlook.php">戻る</a>

</body>
</html>