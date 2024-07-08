<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>商品一覧</title>
    </head>
    <body>
	<link rel="stylesheet" href="p_admin_top.css">
    在庫管理<br>
    <br>
    <a href="product_add.php">商品追加</a>
    <a href="product_delete.php">商品削除</a>
    <a href="product_edit.php">商品編集</a><br>
    <br>
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

				print '商品一覧<br /><br />';

				$count = $stmt -> rowCount();
				for ($i = 0; $i < $count; $i++)
				{
					$rec=$stmt->fetch(PDO::FETCH_ASSOC);
					print h($rec['code']).' ';
					print h($rec['name']).' ';
					print h($rec['price']);
                    print'円';
					print '<br />';
				}

			}
			catch (Exception $e)
			{
				echo 'エラーが発生しました。内容: ' . h($e->getMessage());
	 			exit();
			}
?>
    <br>
    <a href="admin_top.php">管理者top</a>
    <a href="s_admin_top.php">スタッフ管理</a>
    </body>    
    </html>    
