<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>スタッフ追加</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="header">
            <h1>在庫管理システム</h1>
        </div>
        <div class="form">
            <h2>スタッフ追加</h2>
            <form method="post"action="staff_add_check.php">

                <label for="name">スタッフ名<br></label>
                    <input type="text"id="name"name="name"required><br>

                <label for="pass">パスワード※半角数字<br></label>
                    <input type="password"id="pass"name="pass"required><br>

                <label for="pass2">パスワード確認※半角数字<br></label>
                    <input type="password"id="pass2"name="pass2"required><br>

                <div class="form-actions">
                <input type="button"onclick="history.back()"value="戻る">
                <input type="submit"value="次へ">
                </div>
            </form>
    
        </div>
    </body>    
</html>    
