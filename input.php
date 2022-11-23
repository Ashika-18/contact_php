<?php

session_start();

require('dbconnect.php');

if (!empty($_POST)) {
    $statement = $db->prepare('INSERT INTO users SET user_name=?, email=?, password=?, user_time=NOW()');

    echo $statement->execute(array(

        $_SESSION['query']['name'],
        $_SESSION['query']['email'],
        sha1($_SESSION['query']['pass'])

    ));

    // セッションを削除する
    unset($_SESSION['query']);

    //登録完了画面に移動する
    header('Location:input_end');
    exit();
}

?>