<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>商品管理</title>
    </head>
    <body>
		<link rel="stylesheet" href="style.css">
		<div class="header">
			<h1>在庫管理システム<h1>
		</div>
	<div class="link">
		<a href="product_add.php"class=nav>商品追加</a>
		<a href="product_delete.php"class=nav>商品削除</a>
		<a href="product_edit.php"class=nav>商品編集</a>
	</div>
	<div class="formtop">
	<?php

require 'db.php';

try
			{
				$db = new PDO($dsn, $dbUser, $dbPass);
				$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$sql='SELECT * FROM 在庫管理';
				$stmt=$db->prepare($sql);
				$stmt->execute();

				$db=null;

				print '<h2>商品管理</h2>';

				$count = $stmt -> rowCount();
				for ($i = 0; $i < $count; $i++)
				{
					$rec=$stmt->fetch(PDO::FETCH_ASSOC);
					print h($rec['code']).' ';
					print h($rec['name']).' ';
					print h($rec['price']);
                    print'円'.' ';
					print h($rec['zaikosuu']);
					print'コ';
					print '<br />';
				}

			}
			catch (Exception $e)
			{
				echo 'エラーが発生しました。内容: ' . h($e->getMessage());
	 			exit();
			}
?>
</div>
    <br>
    <a href="admin_top.php"class=tra>管理者top</a>
    <a href="s_admin_top.php"class=tra>スタッフ管理</a>
    </body>    
    </html>    
