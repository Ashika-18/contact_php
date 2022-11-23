<?php

session_start();

require('dbconnect.php');

if(!empty($_POST)) {
    $_SESSION['query'] = $_POST;
    header('Location:');
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
    
</body>
</html>