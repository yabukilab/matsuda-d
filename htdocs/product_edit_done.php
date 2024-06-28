<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>DB登録</title>
	</head>
	<body>
		<?php

			require 'db(1).php';
			$p_code=$_POST['code'];
			$p_name=$_POST['name'];
			$p_price=$_POST['price'];
			$p_zaikosuu=$_POST['zaikosuu'];
			$p_gazou=$_POST['gazou'];

			try
			{
				$db = new PDO($dsn, $dbUser, $dbPass);
				$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$sql='UPDATE 在庫管理 SET name=:name,price=:price,zaikosuu=:zaikosuu,gazou=:gazou WHERE code=:code';
				$stmt=$db->prepare($sql);
				$stmt->bindValue(':name', $p_name, PDO::PARAM_STR);
				$stmt->bindValue(':price', $p_price, PDO::PARAM_INT);
				$stmt->bindValue(':code', $p_code, PDO::PARAM_INT);
				$stmt->bindValue(':zaikosuu', $p_zaikosuu, PDO::PARAM_INT);
				$stmt->bindValue(':gazou', $p_gazou, PDO::PARAM_STR);

				$db=null;

				print '修正しました。<br />';

			}
			catch(Exception$e)
			{
				echo 'エラーが発生しました。内容: ' . h($e->getMessage());
	 			exit();
			}

		?>
		<a href="p_admin_top.php">戻る</a>
	</body>
</html>