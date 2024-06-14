<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>スタッフ情報削除確認</title>
    </head>
    <body>

    <?php

    $p_code=$_POST['code'];

    $p_code=htmlspecialchars($p_code,ENT_QUOTES,'UTF-8');
    
    if($p_code=='')
    {
        print'スタッフコードが入力されていません。<br>';
    }
    else
    {
        print'スタッフコード:';
        print$p_code;
        print'<br>';
    }

    if($p_code=='')
    {
        print'<form>';
        print'<input type="button"onclick="history.back()"value="戻る">';
        print'</form>';
    }
    else
    {
        
        print'<form method="post"action="staff_delete_done.php">';
        print'<input type="hidden"name="code"value="'.$p_code.'">';
        print'<br>';
        print'<input type="button"onclick="history.back()"value="戻る">';
        print'<input type="submit"value="OK">';
        print'</form>';
    }
    ?>

    </body>    
</html>    
