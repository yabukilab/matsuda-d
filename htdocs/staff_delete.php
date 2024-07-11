<!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="UTF-8">
            <title>スタッフ削除</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <div class="header">
                <h1>在庫管理システム</h1>
            </div>
            <div class="form">
                    <h2>スタッフ削除</h2>
                <form method="post"action="staff_delete_check.php">
                    <label for="code">スタッフコードを入力してください。</label>
                        <input type="text"id="code"name="code"required>
                        
                    <div class="form-actions">
                        <input type="button"onclick="history.back()"value="戻る">
                        <input type="submit"value="次へ">
                    </div>
                </form>
            </div>
        </body>    
    </html>    
