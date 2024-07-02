<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>DB登録</title>
	</head>
	<body>
		<?php

			require 'db.php';
			$s_code=$_POST['code'];
			$s_name=$_POST['name'];
			$s_pass=$_POST['pass'];

			try
			{
				$db = new PDO($dsn, $dbUser, $dbPass);
				$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$sql='UPDATE 管理者情報管理 SET name=:name,pass=:pass WHERE code=:code';
				$stmt=$db->prepare($sql);
				$stmt->bindValue(':name', $s_name, PDO::PARAM_STR);
				$stmt->bindValue(':pass', $s_pass, PDO::PARAM_INT);
				$stmt->bindValue(':code', $s_code, PDO::PARAM_INT);
				$stmt->execute();

				$db=null;

				print '修正しました。<br />';

			}
			catch(Exception$e)
			{
				echo 'エラーが発生しました。内容: ' . h($e->getMessage());
	 			exit();
			}

		?>
		<a href="s_admin_top.php">戻る</a>
	</body>
</html>