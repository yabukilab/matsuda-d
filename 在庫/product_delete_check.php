<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>商品削除確認</title>
    </head>
    <body>

    <?php

    $p_code=$_POST['code'];

    $p_code=htmlspecialchars($p_code,ENT_QUOTES,'UTF-8');
    
    if($p_code=='')
    {
        print'商品コードが入力されていません。<br>';
    }
    else
    {
        print'商品コード:';
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
        
        print'<form method="post"action="product_delete_done.php">';
        print'<input type="hidden"name="code"value="'.$p_code.'">';
        print'<br>';
        print'<input type="button"onclick="history.back()"value="戻る">';
        print'<input type="submit"value="次へ">';
        print'</form>';
    }
    ?>

    </body>    
</html>    
