<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>商品編集確認</title>
    </head>
    <body>
    
    <?php

require_once 'db(1).php';

$p_code=$_GET['code'];

try
{

    $sql='SELECT * FROM 在庫管理 WHERE code = :code';
    $stmt=$db->prepare($sql);
    $stmt->bindValue(':code', $p_code, PDO::PARAM_INT);
    $stmt->execute();

    $dbh=null;

    $rec=$stmt->fetch(PDO::FETCH_ASSOC);

    if($rec==false)
    {
        print'商品コードが正しくありません。';
        print'<a href="product_edit.php">戻る</a>';
        print '<br />';
        exit();
    }

    $p_name = $rec['name'];
    $p_price = $rec['price'];
    $p_zaikosuu=$rec['zaikosuu'];

}
catch(Exception $e)
{
    echo 'エラーが発生しました。内容: ' . h($e->getMessage());
     exit();
}

?>

商品修正<br />
<br />

<form method="post" action="product_edit_done.php">

商品コード <?php print $p_code; ?><br />
<input type="hidden" name="code" value="<?php print $p_code; ?>"><br />

商品名<br />
<input type="text" name="name" style="width:200px" value="<?php print $p_name; ?>"><br />

値段<br />
<input type="text" name="price" style="width:50px" value="<?php print $p_price; ?>"><br />

在庫数<br />
<input type="text" name="zaikosuu" style="width:50px" value="<?php print $p_zaikosuu; ?>"><br /><br >

<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="次へ">

</form>


    </body>    
</html>    
