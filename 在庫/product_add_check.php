<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>商品追加確認</title>
    </head>
    <body>

    <?php

    $product_name=$_POST['name'];
    $product_price=$_POST['price'];
    $product_zaikosuu=$_POST['zaikosuu'];

    $product_name=htmlspecialchars($product_name,ENT_QUOTES,'UTF-8');
    $product_price=htmlspecialchars($product_price,ENT_QUOTES,'UTF-8');
    $product_zaikosuu=htmlspecialchars($product_zaikosuu,ENT_QUOTES,'UTF-8');

    if($product_name=='')
    {
        print'商品名が入力されていません。<br>';
    }
    else
    {
        print'商品名:';
        print$product_name;
        print'<br>';
    }

    if($product_price=='')
    {
        print'値段が入力されていません。<br>';
    }
    else
    {
        print'値段:';
        print$product_price;
        print'<br>';
    }
    if($product_zaikosuu=='')
    {
        print'在庫数が入力されていません。<br>';
    }
    else
    {
        print'在庫数:';
        print$product_zaikosuu;
        print'<br>';
    } 
    if($product_name==''||$product_price==''||$product_zaikosuu=='')
    {
        print'<form>';
        print'<input type="button"onclick="history.back()"value="戻る">';
        print'</form>';
    }
    else
    {
        
        print'<form method="post"action="product_add_done.php">';
        print'<input type="hidden"name="name"value="'.$product_name.'">';
        print'<input type="hidden"name="price"value="'.$product_price.'">';
        print'<input type="hidden"name="zaikosuu"value="'.$product_zaikosuu.'">';
        print'<br>';
        print'<input type="button"onclick="history.back()"value="戻る">';
        print'<input type="submit"value="OK">';
        print'</form>';
    }
    ?>

    </body>    
</html>    
