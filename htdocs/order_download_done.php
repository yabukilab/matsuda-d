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


$year=$_POST['year'];
$month=$_POST['month'];
$day=$_POST['day'];

require "db.php";
$sql='SELECT
	dat_sales.code,
	dat_sales.data,
	dat_sales.name AS dat_sales_name,
	dat_sales.email,
	dat_sales.postal1,
	dat_sales.postal2,
	dat_sales.address,
	dat_sales.tel,
	dat_sales_product.code_product,
	在庫管理.name AS 在庫管理_name,
	dat_sales_product.price,
	dat_sales_product.quantity
FROM
	dat_sales,dat_sales_product,在庫管理
WHERE
	dat_sales.code=dat_sales_product.code_sales
	AND dat_sales_product.code_product=在庫管理.code
	AND substr(dat_sales.data,1,4)=?
	AND substr(dat_sales.data,6,2)=?
	AND substr(dat_sales.data,9,2)=?
';

$stmt=$db->prepare($sql);
$data[]=$year;
$data[]=$month;
$data[]=$day;
$stmt->execute($data);

$db=null;

$csv='注文コード,注文日時,お名前,メール,郵便番号,住所,TEL,商品コード,商品名,価格,数量';
$csv.="\n";
while(true)
{
	$rec=$stmt->fetch(PDO::FETCH_ASSOC);
	if($rec==false)
	{
		break;
	}
	$csv.=$rec['code'];
	$csv.=',';
	$csv.=$rec['data'];
	$csv.=',';
	$csv.=$rec['dat_sales_name'];
	$csv.=',';
	$csv.=$rec['email'];
	$csv.=',';
	$csv.=$rec['postal1'].'-'.$rec['postal2'];
	$csv.=',';
	$csv.=$rec['address'];
	$csv.=',';
	$csv.=$rec['tel'];
	$csv.=',';
	$csv.=$rec['code_product'];
	$csv.=',';
	$csv.=$rec['在庫管理_name'];
	$csv.=',';
	$csv.=$rec['price'];
	$csv.=',';
	$csv.=$rec['quantity'];
	$csv.="\n";
}

//print nl2br($csv);

$file=fopen('./chumon.csv','w');
$csv=mb_convert_encoding($csv,'SJIS','UTF-8');
fputs($file,$csv);
fclose($file);



?>

<a href="chumon.csv">注文データのダウンロード</a><br />
<br />
<a href="order_download.php">日付選択へ</a><br />
<br />
<a href="admin_top.php">トップメニューへ</a><br />

</body>
</html>