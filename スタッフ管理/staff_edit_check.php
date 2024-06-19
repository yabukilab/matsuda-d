<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>スタッフ編集確認</title>
    </head>
    <body>
    
    <?php

require_once 'db(2).php';

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
    $s_pass = $rec['pass'];

}
catch(Exception $e)
{
    echo 'エラーが発生しました。内容: ' . h($e->getMessage());
     exit();
}

?>

商品修正<br />
<br />

<form method="post" action="staff_edit_done.php">

スタッフコード <?php print $s_code; ?><br />
<input type="hidden" name="code" value="<?php print $s_code; ?>"><br />

スタッフ名<br />
<input type="text" name="name" style="width:200px" value="<?php print $s_name; ?>"><br />

パスワード<br />
<input type="text" name="pass" style="width:50px" value="<?php print $s_pass; ?>"><br /><br >

<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="ＯＫ">

</form>


    </body>    
</html>    
