<!-- login -->
<?php

session_start();

require('dbconnect.php');

if ($_POST['email'] != '' && $_POST['pass'] != '') {

    $login = $db->prepare('SELECT * FROM users WHERE email=? AND password=?');
    $login->execute(array(
        $_POST['email'],
        sha1($_POST['pass'])
    ));
    $member = $login->fetch();

    if ($member) {
        $_SESSION['id'] = $member['id'];
        $_SESSION['time'] = time();

        header('Location: posts.php');
        exit();
    }
}
?>