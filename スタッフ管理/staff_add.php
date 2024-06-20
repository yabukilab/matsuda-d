<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>スタッフ追加</title>
    </head>
    <body>
    <link rel="stylesheet" href="staff_add.css">
    スタッフ追加<br>
    <br>
    <form method="post"action="staff_add_check.php">
    スタッフ名を入力してください。<br>
    <input type="text"name="name"style="width: 200px"><br>
    パスワードを入力してください<br>
    <input type="text"name="pass"style="width: 200px;"><br>
    もう一度パスワードを入力してください<br>
    <input type="text"name="pass2"style="width: 200px;"><br>
    <input type="button"onclick="history.back()"value="戻る">
    <input type="submit"value="次へ">
    </form>
    
    </body>    
</html>    
