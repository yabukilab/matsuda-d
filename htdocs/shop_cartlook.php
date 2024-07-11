<?php
session_start();
session_regenerate_id(true);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>カート確認</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <h1>いらっしゃいませ</h1>
	</div>
    <div class="form">
        <h2>カート内商品</h2>
<?php

try
{

if(isset($_SESSION['cart'])==true)
{
	$cart=$_SESSION['cart'];
	$kazu=$_SESSION['kazu'];
	$max=count($cart);
}
else
{
	$max=0;
}

if($max==0)
{
	print 'カートに商品が入っていません。<br />';
	print '<br />';
	print '<a href="index.php"class=tra>商品一覧へ戻る</a>';
	exit();
}

require 'db.php';

foreach($cart as $key=>$val)
{
	$sql='SELECT code,name,price,gazou FROM 在庫管理 WHERE code=?';
	$stmt=$db->prepare($sql);
	$data[0]=$val;
	$stmt->execute($data);

	$rec=$stmt->fetch(PDO::FETCH_ASSOC);

	$pro_name[]=$rec['name'];
	$pro_price[]=$rec['price'];
	if($rec['gazou']=='')
	{
		$pro_gazou[]='';
	}
	else
	{
		$pro_gazou[]='<img src="../product/gazou/'.$rec['gazou'].'">';
	}
}
$dbh=null;

}
catch(Exception $e)
{
	print'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

<form method="post" action="kazu_change.php">
<table border="1">
<tr>
<td>商品</td>
<td>価格</td>
<td>数量</td>
<td>小計</td>
</tr>
<?php for($i=0;$i<$max;$i++)
	{
?>
<tr>
	<td><?php print $pro_name[$i]; ?></td>
	<td><?php print $pro_price[$i]; ?>円</td>
	<td><input type="text" name="kazu<?php print $i; ?>" value="<?php print $kazu[$i]; ?>"style="width:10px"s></td>
	<td><?php print $pro_price[$i]*$kazu[$i]; ?>円</td>
</tr>
<?php
	}
?>
</table>
<input type="hidden" name="max" value="<?php print $max; ?>">
<br>
<div class="form-actions">
<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="数量変更">
</div>
</form>
<br />

<a href="clear_cart.php"class=cart>カートを空にする</a><br>
<a href="shop_form.html"class=cart>ご購入手続きへ進む</a><br />

</body>
</html>