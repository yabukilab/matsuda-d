<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>商品追加</title>
    </head>
    <body>
    
    商品追加<br>
    <br>
    <form method="post"action="product_add_check.php">
    商品名を入力してください。<br>
    <input type="text"name="name"style="width: 200px"><br>
    価格を入力してください<br>
    <input type="text"name="price"style="width: 50px"><br>
    在庫数を入力してください<br>
    <input type="text"name="zaikosuu"style="width: 50px"><br>
    <input type="button"onclick="history.back()"value="戻る">
    <input type="submit"value="OK">
    </form>
    
    </body>    
</html>    
