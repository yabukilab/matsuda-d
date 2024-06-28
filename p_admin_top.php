<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>商品一覧</title>
    </head>
    <body>
    在庫管理<br>
    <br>
    <a href="product_add.php">商品追加</a>
    <a href="product_delete.php">商品削除</a>
    <a href="product_edit.php">商品編集</a><br>
    <br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "在庫system";

// データベースに接続
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続エラーチェック
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// データを取得するSQLクエリ
$sql = "SELECT * FROM 在庫管理";

// SQL実行
$result = $conn->query($sql);

// データを表示
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "商品コード: " . $row["code"] .
         " 商品名: " . $row["name"] .
         "値段: " . $row["price"] .
         "在庫数: " . $row["zaikosuu"] .
         "<br>";
    }
} else {
    echo "0 results";
}

// 接続解除
$conn->close();
?>
    <br>
    <a href="admin_top.php">管理者top</a>
    <a href="s_admin_top.php">スタッフ管理</a>
    <a href="product_buy.php">注文確認</a>
    </body>    
    </html>    
