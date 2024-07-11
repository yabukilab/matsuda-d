<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <h1>在庫管理システム</h1>
</div>

<div class="form">
    <h2>スタッフログイン</h2>
    <form method="post" action="login_check.php">
        <label for="code">スタッフコード</label>
        <input type="text" id="code" name="code" required><br><br>

        <label for="pass">パスワード</label>
        <input type="password" id="pass" name="pass" required><br><br>
        <div class="form-actions">
        <input type="button"onclick="history.back()"value="戻る"><br>
        <input type="submit" value="ログイン"><br>
        </div>
    </form>
</div>

</body>
</html>
