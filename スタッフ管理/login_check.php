<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ログイン確認</title>
    </head>
    <body>
    
<?php

try
{

$s_code=$_POST['code'];
$s_pass=$_POST['pass'];

$s_code=htmlspecialchars($s_code,ENT_QUOTES,'UTF-8');
$s_pass=htmlspecialchars($s_pass,ENT_QUOTES,'UTF-8');

$s_pass=md5($s_pass);

$dsn='mysql:dbname=在庫system;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT name FROM 管理者情報管理 WHERE code=? AND pass=?';
$stmt=$dbh->prepare($sql);
$data[]=$s_code;
$data[]=$s_pass;
$stmt->execute($data);

$dbh=null;

$rec=$stmt->fetch(PDO::FETCH_ASSOC);

if($rec==false)
{
    print'スタッフコードかパスワードが間違っています。<br>';
    print'<a href="staff_login.html">戻る</a>';
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