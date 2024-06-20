<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>スタッフ情報削除確認</title>
    </head>
    <body>

    <?php

    $s_code=$_POST['code'];

    $s_code=htmlspecialchars($s_code,ENT_QUOTES,'UTF-8');
    
    if($s_code=='')
    {
        print'スタッフコードが入力されていません。<br>';
    }
    else
    {
        print'スタッフコード:';
        print$s_code;
        print'<br>';
    }

    if($s_code=='')
    {
        print'<form>';
        print'<input type="button"onclick="history.back()"value="戻る">';
        print'</form>';
    }
    else
    {
        
        print'<form method="post"action="staff_delete_done.php">';
        print'<input type="hidden"name="code"value="'.$s_code.'">';
        print'<br>';
        print'<input type="button"onclick="history.back()"value="戻る">';
        print'<input type="submit"value="次へ">';
        print'</form>';
    }
    ?>

    </body>    
</html>    
