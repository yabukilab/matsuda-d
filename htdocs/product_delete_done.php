<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>商品削除</title>
    </head>
    <body>
   
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
		<a href="admin_top.php">戻る</a>

    </body>
</html>
