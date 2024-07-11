<?php
require 'db.php';

$sql='SELECT code,name,pass FROM 管理者情報管理 WHERE 1';
$stmt=$db->prepare($sql);
$stmt->execute();

$rec=$stmt->fetchall(PDO::FETCH_ASSOC);
foreach ($rec AS $r){
    echo $r['code'];
    echo $r['name'];
    echo $r['pass'];
    echo "<br>";
}
?>