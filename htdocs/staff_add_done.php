<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>スタッフ追加完了</title>
    </head>
        <body>
        <link rel="stylesheet" href="login.css">
        <div class="header">
        <h1>在庫管理システム</h1>
        </div>
        <div class="login-form">
        <h2>スタッフ追加確認</h2>
            <?php

            try
            {

                require 'db.php'; 
print'a';
            $s_name=$_POST['name'];
            $s_pass=$_POST['pass'];
            $sql='insert into 管理者情報管理 (name,pass) values(:s_name,:s_pass)';                    # SQL文
            $prepare = $db->prepare($sql); # 準備
print'a';
            $prepare->bindValue(':s_name', $s_name, PDO::PARAM_STR); # 埋め込み1
            $prepare->bindValue(':s_pass', $s_pass, PDO::PARAM_STR); # 埋め込み2
            $prepare->execute(); # 実行
            $dbh=null;
print'a';
            print $s_name;
            print'を追加しました。<br>';

            }catch(Exception$e)
            {
            
            print'ただいま障害によりご迷惑をおかけしております。';
            exit();
            }

            ?>

            <a href="s_admin_top.php">戻る</a>
            </div>
        </body>    
</html>    
