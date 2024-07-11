<?php
	session_start();
	session_regenerate_id(true);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>注文実行</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <h1>いらっしゃいませ</h1>
	</div>
    <div class="form">
        <h2>注文完了</h2>
<?php

try
{

require_once 'common.php';

$post=sanitize($_POST);

$onamae=$post['onamae'];
$email=$post['email'];
$postal1=$post['postal1'];
$postal2=$post['postal2'];
$address=$post['address'];
$tel=$post['tel'];

print $onamae.'様<br />';
print 'ご注文ありがとうござました。<br />';

$cart=$_SESSION['cart'];
$kazu=$_SESSION['kazu'];
$max=count($cart);

require 'db.php';

for($i=0;$i<$max;$i++)
{
	$sql='SELECT name,price FROM 在庫管理 WHERE code=?';
	$stmt=$db->prepare($sql);
	$data[0]=$cart[$i];
	$stmt->execute($data);

	$rec=$stmt->fetch(PDO::FETCH_ASSOC);

	$name=$rec['name'];
	$price=$rec['price'];
	$kakaku[]=$price;
	$suryo=$kazu[$i];
	$shokei=$price*$suryo;

}

$sql='LOCK TABLES dat_sales WRITE,dat_sales_product WRITE';
$stmt=$db->prepare($sql);
$stmt->execute();

$sql='insert into dat_sales (name,email,postal1,postal2,address,tel) values(:onamae,:email,:postal1,:postal2,:address,:tel)';                    # SQL文

            $prepare = $db->prepare($sql); # 準備
            $prepare->bindValue(':onamae', $onamae, PDO::PARAM_STR); # 埋め込み2
			$prepare->bindValue(':email', $email, PDO::PARAM_STR);
			$prepare->bindValue(':postal1', $postal1, PDO::PARAM_STR);
			$prepare->bindValue(':postal2', $postal2, PDO::PARAM_STR);
			$prepare->bindValue(':address', $address, PDO::PARAM_STR);
			$prepare->bindValue(':tel', $tel, PDO::PARAM_STR);

            $prepare->execute(); # 実行
$sql='SELECT LAST_INSERT_ID()';
$stmt=$db->prepare($sql);
$stmt->execute();
$rec=$stmt->fetch(PDO::FETCH_ASSOC);
$lastcode=$rec['LAST_INSERT_ID()'];

for($i=0;$i<$max;$i++)
{
	$sql='INSERT INTO dat_sales_product (code_sales,code_product,price,quantity) VALUES (?,?,?,?)';
	$stmt=$db->prepare($sql);
	$data=array();
	$data[]=$lastcode;
	$data[]=$cart[$i];
	$data[]=$kakaku[$i];
	$data[]=$kazu[$i];
	$stmt->execute($data);
}


$sql='UNLOCK TABLES';
$stmt=$db->prepare($sql);
$stmt->execute();

$dbh=null;
}
catch (Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

<br />
<a href="index.php">商品画面へ</a>

</body>
</html>