<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>スタッフ一覧</title>
    </head>
    <body>
    スタッフ管理<br>
    <br>
    <a href="staff_add.php">スタッフ追加</a>
    <a href="staff_delete.php">スタッフ削除</a>
    <a href="staff_edit.php">スタッフ編集</a><br>
    <br>
<?php

require 'db.php';

try
			{
				$db = new PDO($dsn, $dbUser, $dbPass);
				$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$sql='SELECT * FROM 管理者情報管理';
				$stmt=$db->prepare($sql);
				$stmt->execute();

				$db=null;

				print 'スタッフ一覧<br /><br />';

				$count = $stmt -> rowCount();
				for ($i = 0; $i < $count; $i++)
				{
					$rec=$stmt->fetch(PDO::FETCH_ASSOC);
					print h($rec['code']).' ';
					print h($rec['name']).' ';
					print '<br />';
				}

			}
			catch (Exception $e)
			{
				echo 'エラーが発生しました。内容: ' . h($e->getMessage());
	 			exit();
			}
?>

<input type="hidden" name="code" value="<?php print $s_code; ?>"><br />

<br>
    <a href="admin_top.php">管理者top</a>
    <a href="p_admin_top.php">在庫管理</a>
    </body>    
    
    </html>    
