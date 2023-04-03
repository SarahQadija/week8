<?php
if (!isset($_COOKIE['Donelogin']) || $_COOKIE['Donelogin'] != true) {
    header('Location: login.php');
    exit;
} else {
    if (time() > $_COOKIE['expire']) {
        header('Location: logout.php');
        exit;
    } else {
        setcookie('expire', $_COOKIE['expire'], time()+30);
    }
}
?>

