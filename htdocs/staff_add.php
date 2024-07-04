<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>スタッフ追加</title>
    </head>
    <body>
        <link rel="stylesheet" href="staff_add.css">
        <div class="header">
            <h1>在庫管理システム<br></h1>
        </div>
        <br>
        <div class="login-form">
            <h2>スタッフ追加</h2>
            <form method="post"action="staff_add_check.php">
                <label for="name">スタッフ名を入力してください。<br></label>
                    <input type="text"name="name"style="width: 200px"><br>
                <label for="pass">パスワードを入力してください<br></label>
                    <input type="password"name="pass"style="width: 200px;"><br>
                <label for="pass2">もう一度パスワードを入力してください<br></label>
                    <input type="password"name="pass2"style="width: 200px;"><br>
                    <input type="button"onclick="history.back()"value="戻る">
                    <input type="submit"value="次へ">
            </form>
    
        </div>
    </body>    
</html>    
