<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #ffffff;
            text-align: center;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000; /* ヘッダーを他の要素の上に表示するための設定 */
        }

        .login-form {
            width: 300px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 60px; /* ヘッダーの下にフォームが来るようにマージンを追加 */
        }

        .login-form h2 {
            text-align: center;
            color: #333333;
        }

        .login-form form {
            display: flex;
            flex-direction: column;
        }

        .login-form label {
            margin-bottom: 8px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"],
        .login-form input[type="submit"] {
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        .login-form input[type="submit"] {
            background-color: #0066cc;
            color: #ffffff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-form input[type="submit"]:hover {
            
            background-color: #0052a3;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>在庫管理システム</h1>
</div>

<div class="login-form">
    <h2>IDとパスワードを入力してください。</h2>

    <form method="post" action="login_check.php">
        <label for="code">スタッフコード</label>
        <input type="text" id="code" name="code" required><br><br>

        <label for="pass">パスワード</label>
        <input type="password" id="pass" name="pass" required><br><br>

        <input type="submit" value="ログイン">
    </form>
</div>

</body>
</html>
