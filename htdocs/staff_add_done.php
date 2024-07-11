<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>スタッフ追加完了</title>
        <link rel="stylesheet" href="style.css">
    </head>
        <body>
            <div class="header">
                <h1>在庫管理システム</h1>
            </div>
            <div class="form">
                <h2>スタッフ追加</h2>
                    <?php

                

                        require 'db.php'; 
                        $s_name=$_POST['name'];
                        $s_pass=$_POST['pass'];
                        $sql='insert into 管理者情報管理 (name,pass) values(:s_name,:s_pass)';                    # SQL文
                        $prepare = $db->prepare($sql); # 準備
                        $prepare->bindValue(':s_name', $s_name, PDO::PARAM_STR); # 埋め込み1
                        $prepare->bindValue(':s_pass', $s_pass, PDO::PARAM_STR); # 埋め込み2
                        $prepare->execute(); # 実行
                        $dbh=null;
                        print $s_name;
                        print'を追加しました。<br><br>';

                        
                    ?>

                <a href="s_admin_top.php"class="button">OK</a>
                </div>
        </body>    
</html>    
