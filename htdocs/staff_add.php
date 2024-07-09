<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>スタッフ追加</title>
        <link rel="stylesheet" href="add.css">
    </head>
    <body>
        <div class="header">
            <h1>在庫管理システム<br></h1>
        </div>
        <br>
        <div class="login-form">
            <h2>スタッフ追加</h2>
            <form method="post"action="staff_add_check.php">

                <label for="name">スタッフ名を入力してください。<br></label>
                    <input type="text"id="name"name="name"required><br>

                <label for="pass">パスワードを入力してください<br></label>
                    <input type="password"id="pass"name="pass"required><br>

                <label for="pass2">もう一度パスワードを入力してください<br></label>
                    <input type="password"id="pass2"name="pass2"required><br>

                <input type="button"onclick="history.back()"value="戻る">
                <input type="submit"value="次へ">
            </form>
    
        </div>
    </body>    
</html>    
