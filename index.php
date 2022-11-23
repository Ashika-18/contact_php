<!-- index -->
<?php

session_start();

require('dbconnect.php');

if(!empty($_POST)) {
    $_SESSION['query'] = $_POST;
    header('Location:input.php');
    exit();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
    <title>contact_php</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">名前</label>
        <input type="text" id="name" name="name" value="">

        <label for="imail">メールアドレス</label>
        <input id="email" type="text" name="email" value="">

        <label for="pass">パスワード</label>
        <input type="text" id="pass" name="pass" value="">

        <input type="submit" id="submit" value="確認画面へ">
    </form>
</body>
</html>