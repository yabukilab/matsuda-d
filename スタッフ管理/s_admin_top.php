<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>スタッフ一覧</title>
    </head>
    <body>
    
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
$sql = "SELECT * FROM 管理者情報管理";

// SQL実行
$result = $conn->query($sql);

// データを表示
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo " スタッフコード: " . $row["code"] . " 名前: " . $row["name"] ."<br>";
    }
} else {
    echo "0 results";
}

// 接続解除
$conn->close();
?>
    </body>    
    </html>    
