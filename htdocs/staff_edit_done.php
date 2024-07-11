<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>DB登録</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<div class="header">
        <h1>在庫管理システム<h1>
    </div>
    <div class="form">
		<?php

			require 'db.php';
			$s_code=$_POST['code'];
			$s_name=$_POST['name'];

			try
			{
				
				$sql='UPDATE 管理者情報管理 SET name=:name WHERE code=:code';
				$stmt=$db->prepare($sql);
				$stmt->bindValue(':name', $s_name, PDO::PARAM_STR);
				$stmt->bindValue(':code', $s_code, PDO::PARAM_INT);
				$stmt->execute();

				$db=null;

				print'<h2>スタッフ修正<br /></h2>';
				print '修正しました。<br /><br>';

			}
			catch(Exception$e)
			{
				echo 'エラーが発生しました。内容: ' . h($e->getMessage());
	 			exit();
			}

		?>
		<a href="s_admin_top.php"class="button">OK</a>
</div>
	</body>
</html>