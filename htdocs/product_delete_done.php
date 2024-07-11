<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>商品削除</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="header">
        <h1>在庫管理システム</h1>
    </div>
    <div class="form">
    <h2>商品削除</h2>
    <?php

        require 'db.php';

        $p_code=$_POST['code'];

    try
    {
        $db = new PDO($dsn, $dbUser, $dbPass);
				$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$sql='DELETE FROM 在庫管理 WHERE code = :code';
				$stmt=$db->prepare($sql);
				$stmt->bindValue(':code', $p_code, PDO::PARAM_INT);
				$stmt->execute();

				$db=null;

				print '削除しました。<br />';
    }    
    catch(Exception$e)
			{
				echo '障害により大変ご迷惑をおかけしております。' . h($e->getMessage());
	 			exit();
			}

		?>
		<a href="p_admin_top.php"class=button>OK</a>
        </div>
    </body>
</html>
