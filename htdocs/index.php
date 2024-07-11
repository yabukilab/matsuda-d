<?php
session_start();
session_regenerate_id(true);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>商品一覧</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <h1>いらっしゃいませ</h1>
    </div>
	<div class="link">
	<a href="login.php"class=nav>スタッフの方はこちら</a>
	<a href="shop_cartlook.php"class=nav>カートを見る</a>
	</div>
    <div class="formtop">
        <h2>商品一覧</h2>
<?php

try
{

require 'db.php';

$sql='SELECT code,name,price FROM 在庫管理 WHERE 1';
$stmt=$db->prepare($sql);
$stmt->execute();

$dbh=null;

while(true)
{
	$rec=$stmt->fetch(PDO::FETCH_ASSOC);
	if($rec==false)
	{
		break;
	}
	print '<a href="shop_product.php?procode='.$rec['code'].'">';
	print $rec['name'].'---';
	print $rec['price'].'円';
	print '</a>';
	print '<br />';
}

}
catch (Exception $e)
{
	 print 'ただいま障害により大変ご迷惑をお掛けしております。';
	 exit();
}

?>
</body>
</html>