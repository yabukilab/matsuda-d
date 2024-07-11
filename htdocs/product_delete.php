<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>商品削除</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body><div class="header">
                <h1>在庫管理システム</h1>
            </div>
            <div class="form">
                    <h2>商品削除</h2>
    
    <form method="post"action="product_delete_check.php">
    商品コードを入力してください。<br>
    <input type="text"name="code"><br>
    <div class="form-actions">
    <input type="button"onclick="history.back()"value="戻る">
    <input type="submit"value="次へ">
    </div>
    </form>
    </div>
    </body>    
</html>    
