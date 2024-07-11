<!DOCTYPE html>
<html lang="ja">
<head>
        <meta charset="UTF-8">
        <title>スタッフ削除確認</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="header">
        <h1>在庫管理システム</h1>
    </div>
    <div class="form">
    <h2>スタッフ削除</h2>
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
        print'を削除します';
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
        print'<div class="form-actions">';
        print'<input type="button"onclick="history.back()"value="戻る">';
        print'<input type="submit"value="次へ">';
        print'</div>';
        print'</form>';
    }
    ?>
    </div>
    </body>    
</html>    
