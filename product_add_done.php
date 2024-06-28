<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>商品追加完了</title>
    </head>
        <body>
        <link rel="stylesheet" href="product_add.css">
            <?php

            try
            {

            require 'db(1).php'; 

            $product_name=$_POST['name'];
            $product_price=$_POST['price'];
            $product_zaikosuu=$_POST['zaikosuu'];
            $product_gazou_name=$_POST['gazou_name'];

            $sql='insert into 在庫管理 (name,price,zaikosuu,gazou) values(:product_name,:product_price,:product_zaikosuu,:product_gazou_name)';                    # SQL文
            $prepare = $db->prepare($sql); # 準備
            $prepare->bindValue(':product_name', $product_name, PDO::PARAM_STR); # 埋め込み1
            $prepare->bindValue(':product_price', $product_price, PDO::PARAM_STR); # 埋め込み2
            $prepare->bindValue(':product_zaikosuu', $product_zaikosuu, PDO::PARAM_STR); # 埋め込み3
            $prepare->bindValue(':product_gazou_name', $product_gazou_name, PDO::PARAM_STR); # 埋め込み4
            $prepare->execute(); # 実行
            $dbh=null;

            print $product_name;
            print'を追加しました。<br>';

            }catch(Exception$e)
            {
            
                print'ただいま障害によりご迷惑をおかけしております。';
            exit();
            }

            ?>

            <a href="p_admin_top.php">戻る</a>

        </body>    
</html>    
