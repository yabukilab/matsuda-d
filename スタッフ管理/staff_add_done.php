<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>スタッフ追加完了</title>
    </head>
        <body>
    
            <?php

            try
            {

            require 'db(2).php'; 

            $s_name=$_POST['name'];
            $s_pass=$_POST['pass'];
     
            #$s_name=h($s_name,ENT_QUOTES,'UTF-8');
            #$s_pass=h($s_pass,ENT_QUOTES,'UTF-8');

            $sql='insert into 管理者情報管理 (name,pass) values(:s_name,:s_pass)';                    # SQL文
            $prepare = $db->prepare($sql); # 準備
            $prepare->bindValue(':s_name', $s_name, PDO::PARAM_STR); # 埋め込み1
            $prepare->bindValue(':s_pass', $s_pass, PDO::PARAM_STR); # 埋め込み2
            $prepare->execute(); # 実行
            $dbh=null;

            print $s_name;
            print'を追加しました。<br>';

            }catch(Exception$e)
            {
            
            print'ただいま障害によりご迷惑をおかけしております。';
            exit();
            }

            ?>

            <a href="admin_top.php">戻る</a>

        </body>    
</html>    
