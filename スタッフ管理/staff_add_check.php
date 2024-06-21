<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>スタッフ追加確認</title>
    </head>
    <body>
    <link rel="stylesheet" href="staff_add.css">
    <?php

    $s_name=$_POST['name'];
    $s_pass=$_POST['pass'];
    $s_pass2=$_POST['pass2'];

    $s_name=htmlspecialchars($s_name,ENT_QUOTES,'UTF-8');
    $s_pass=htmlspecialchars($s_pass,ENT_QUOTES,'UTF-8');
    $s_pass2=htmlspecialchars($s_pass2,ENT_QUOTES,'UTF-8');

    if($s_name=='')
    {
        print'スタッフ名が入力されていません。<br>';
    }

    if($s_pass=='')
    {
        print'パスワードが入力されていません。<br>';
    }

    if($s_pass!=$s_pass2)
    {
        print'パスワードが一致しません。';
    }

    if($s_name==''||$s_pass==''||$s_pass2==''||$s_pass!=$s_pass2)
    {
        print'<form>';
        print'<input type="button"onclick="history.back()"value="戻る">';
        print'</form>';
    }
    else
    {
        
        $s_pass=md5($s_pass);
        print'<form method="post"action="staff_add_done.php">';
        print'<input type="hidden"name="name"value="'.$s_name.'">';
        print'<input type="hidden"name="pass"value="'.$s_pass.'">';
        print'<br>';
        print'<input type="button"onclick="history.back()"value="戻る">';
        print'<input type="submit"value="次へ">';
        print'</form>';
    }
    ?>

    </body>    
</html>    
