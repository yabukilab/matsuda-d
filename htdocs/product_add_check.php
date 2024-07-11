<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>商品追加確認</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1>在庫管理システム</h1>
        </div>
        <div class="form">
        <h2>商品追加</h2>
    <?php

        $product_name=$_POST['name'];
        $product_price=$_POST['price'];
        $product_zaikosuu=$_POST['zaikosuu'];
        $product_gazou=$_FILES['gazou'];

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
        if($product_gazou['size']>0)
        {
            
            if($product_gazou['size']>1000000)
                {
                    print'画像サイズが大きすぎます。';
                }
            else
                {
                    move_uploaded_file($product_gazou['tmp_name'],'gazou'.$product_gazou['name']);
                    print'<img src=".gazou'.$product_gazou['name'].'">';
                    print'<br>';
                }
            }

        if($product_name==''||$product_price==''||$product_zaikosuu==''||$product_gazou['size']>1000000)
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
            print'<input type="hidden"name="gazou_name"value="'.$product_gazou['name'].'">';
            print'<br>';
            print'<div class="form-actions">';
            print'<input type="button"onclick="history.back()"value="戻る">';
            print'<input type="submit"value="次へ">';
            print'</div>';
            print'</form>';
        }
    ?>

    </body>    
</html>    
