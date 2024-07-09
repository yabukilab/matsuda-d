<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>スタッフ編集確認</title>
        <link rel="stylesheet" href="edit.css">
    </head>
    <body>
    <div class="header">
        在庫管理システム
    </div>
    <div class="edit-form">
    <?php

require_once 'db.php';

$s_code=$_GET['code'];

try
{

    $sql='SELECT * FROM 管理者情報管理 WHERE code = :code';
    $stmt=$db->prepare($sql);
    $stmt->bindValue(':code', $s_code, PDO::PARAM_INT);
    $stmt->execute();

    $dbh=null;

    $rec=$stmt->fetch(PDO::FETCH_ASSOC);

    if($rec==false)
    {
        print'スタッフコードが正しくありません。';
        print'<a href="staff_edit.php">戻る</a>';
        print '<br />';
        exit();
    }

    $s_name = $rec['name'];

}
catch(Exception $e)
{
    echo 'エラーが発生しました。内容: ' . h($e->getMessage());
     exit();
}

?>

スタッフ修正<br />
<br />

<form method="post" action="staff_edit_done.php">

スタッフコード <?php print $s_code; ?><br />
<input type="hidden" name="code" value="<?php print $s_code; ?>"><br />

スタッフ名<br />
<input type="text" name="name" style="width:200px" value="<?php print $s_name; ?>"><br />

<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="次へ">

</form>

</div>
    </body>    
</html>    
