<?php

try {
    $db = new PDO('mysql:dbname=c_php;host=localhost;charset=utf8', 'root', 'root');
} catch(PDOException $e) {
    print('DB接続エラー :' . $e->getMessage());
}

?>