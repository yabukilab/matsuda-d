<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>商品追加</title>
    </head>
    <body>
        <link rel="stylesheet" href="add.css">
        <div class="header">
            <h1>在庫管理システム<br></h1>
        </div>
        <br>
        <div class="login-form">
            <form method="post"action="product_add_check.php"enctype="multipart/form-data">
                <label for="name">商品名を入力してください。<br></label>
                <input type="text"name="name"style="width: 200px"><br>
                <label for="price">価格を入力してください。<br></label>
                <input type="text"name="price"style="width: 50px"><br>
                <label for="zaikosuu">在庫数を入力してください。<br></label>
                <input type="text"name="zaikosuu"style="width: 50px"><br>
                <label for="gazou">画像を選択してください。<br></label>
                <input type="file" name="gazou" style="width: 400px;"><br>
                <br>
                <div class="bt">
                <input type="button"onclick="history.back()"value="戻る">
                <input type="submit"value="次へ">
                </div>
            </form>
        </div>
    </body>    
</html>    
