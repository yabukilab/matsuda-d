<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>商品追加</title>
    </head>
    <body>
        <link rel="stylesheet" href="style.css">
        <div class="header">
            <h1>在庫管理システム<br></h1>
        </div>
        <div class="form">
            <h2>商品追加</h2>
            <form method="post"action="product_add_check.php"enctype="multipart/form-data">
                <label for="name">商品名を入力してください。<br></label>
                    <input type="text"id="name"name="name"><br>
                <label for="price">価格を入力してください。※半角数字<br></label>
                    <input type="text"id="price"name="price"><br>
                <label for="zaikosuu">在庫数を入力してください。※半角数字<br></label>
                    <input type="text"id="zaikosuu"name="zaikosuu"><br>
                <label for="gazou">画像を選択してください。<br></label>
                    <input type="file" id="gazou"name="gazou" ><br><br>
                    <div class="form-actions">
                <input type="button"onclick="history.back()"value="戻る">
                <input type="submit"value="次へ">
                </div>
            </form>
        </div>
    </body>    
</html>    
