<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ログイン確認</title>
    </head>
    <body>
    <link rel="stylesheet" href="login.css">
<?php

try
{

$s_code=$_POST['code'];
$s_pass=$_POST['pass'];

$s_code=htmlspecialchars($s_code,ENT_QUOTES,'UTF-8');
$s_pass=htmlspecialchars($s_pass,ENT_QUOTES,'UTF-8');

$s_pass=md5($s_pass);

require 'db.php';

$sql='SELECT name FROM 管理者情報管理 WHERE code=? AND pass=?';
$stmt=$db->prepare($sql);
$data[]=$s_code;
$data[]=$s_pass;
$stmt->execute($data);

$db=null;

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