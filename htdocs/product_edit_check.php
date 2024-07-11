<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>商品編集確認</title>
    </head>
    <link rel="stylesheet" href="style.css">
    <body>
    <div class="header">
        <h1>在庫管理システム</h1>
    </div>
    <div class="form">
    <?php

require_once 'db.php';

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
    $p_gazou=$rec['gazou'];

}
catch(Exception $e)
{
    echo 'エラーが発生しました。内容: ' . h($e->getMessage());
     exit();
}

?>

<h2>商品修正<br /></h2>
<br />

<form method="post" action="product_edit_done.php">

商品コード <?php print $p_code; ?><br />
<input type="hidden" name="code" value="<?php print $p_code; ?>"><br />

商品名<br />
<input type="text" name="name"  value="<?php print $p_name; ?>"><br />

値段<br />
<input type="text" name="price"  value="<?php print $p_price; ?>"><br />

在庫数<br />
<input type="text" name="zaikosuu"  value="<?php print $p_zaikosuu; ?>"><br />

商品画像<br>
<input type="file" name="gazou" style="width: 400px" value="<?php print $p_gazou; ?>"><br><br>
<div class="form-actions">
<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="次へ">
</div>
</form>


    </body>    
</html>    
