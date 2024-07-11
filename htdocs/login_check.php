<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ログイン確認</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="header">
    <h1>在庫管理システム</h1>
    </div>
    <div class="form">
        <h2>スタッフログイン</h2>
<?php

try
{

$s_code=$_POST['code'];
$s_pass=$_POST['pass'];

$s_code=htmlspecialchars($s_code,ENT_QUOTES,'UTF-8');
$s_pass=htmlspecialchars($s_pass,ENT_QUOTES,'UTF-8');

require 'db.php';

$sql='SELECT name FROM 管理者情報管理 WHERE code='.$s_code.' AND pass='.$s_pass;
$stmt=$db->prepare($sql);
#$data[]=$s_code;
#$data[]=$s_pass;
$stmt->execute();

#$db=null;

$rec=$stmt->fetch(PDO::FETCH_ASSOC);

if($rec==false)
{
    print'スタッフコードかパスワードが間違っています。<br>';
    print'<a href="login.php">戻る</a>';
}
else
{
    header('Location:admin_top.php');
    exit();
}

}
catch(Exception $e)
{
    print'ただいま障害により大変ご迷惑をおかけしております。';
    exit();
}
?>

    </body>    
</html>   