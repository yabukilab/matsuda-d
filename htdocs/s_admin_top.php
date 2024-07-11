<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>スタッフ一覧</title>
    </head>
    <body>
		<link rel="stylesheet" href="style.css">
		<div class="header">
			<h1>在庫管理システム<h1>
			
		</div>
		<div class="link">
			<a href="staff_add.php"class=nav>スタッフ追加</a>
			<a href="staff_delete.php"class=nav>スタッフ削除</a>
			<a href="staff_edit.php"class=nav>スタッフ編集</a>
		</div>	
		<div class="formtop">
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

						print '<h2>スタッフ管理</h2>';

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
			</div>

			<input type="hidden" name="code" value="<?php print $s_code; ?>"><br />

	
			<a href="admin_top.php"class=tra>管理者top</a>
			<a href="p_admin_top.php"class=tra>在庫管理</a>

		</div>
    </body>
    
    </html>    
