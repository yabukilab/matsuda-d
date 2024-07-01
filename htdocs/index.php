<?php
session_start();
session_regenerate_id(true);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>商品一覧</title>
</head>
<body>

<a href="login.php">スタッフの方はこちら</a>

<?php

try
{

$dsn='mysql:dbname=在庫system;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT code,name,price FROM 在庫管理 WHERE 1';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$dbh=null;

print '商品一覧<br /><br />';

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

print '<br />';
print '<a href="shop_cartlook.php">カートを見る</a><br />';

}
catch (Exception $e)
{
	 print 'ただいま障害により大変ご迷惑をお掛けしております。';
	 exit();
}

?>
<a href="login.php">スタッフの方はこちら</a>
</body>
</html>