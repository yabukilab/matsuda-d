<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>スタッフ一覧</title>
    </head>
    <body>
    スタッフ管理<br>
    <br>
    <a href="staff_add.php">スタッフ追加</a>
    <a href="staff_delete.php">スタッフ削除</a>
    <a href="staff_edit.php">スタッフ編集</a><br>
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
$sql = "SELECT * FROM 管理者情報管理";

// SQL実行
$result = $conn->query($sql);

// データを表示
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo " コード: " . $row["code"] . " 名前: " . $row["name"] ."<br>";
    }
} else {
    echo "0 results";
}

// 接続解除
$conn->close();
?>

<input type="hidden" name="code" value="<?php print $s_code; ?>"><br />

<br>
    <a href="admin_top.php">管理者top</a>
    <a href="p_admin_top.php">在庫管理</a>
    <a href="product_buy.php">注文確認</a>
    </body>    
    
    </html>    
