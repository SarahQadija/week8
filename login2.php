<?php
session_start();

$username = $_SESSION['username'];
$password = $_SESSION['password'];


if ($username == 'admin' && $password == 'admin') {
    if (!empty($_POST["remember"])) {
        setcookie("username", $_POST["username"], time() + 30);
        setcookie("password", $_POST["password"], time() + 30);
        echo "Cookies Set Successfuly";
    } else {
        setcookie("username", "");
        setcookie("password", "");
        echo "Cookies Not Set";
    }
} else {
?>
    <script>
        alert('Maaf, kata laluan salah');
        window.location = './';
    </script>
<?php
}
