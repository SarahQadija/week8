<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>LOGIN </h1>
    <form action="login2.php" method="POST">
        <label for="username" name="username">USERNAME:</label>
        <input for="username" type="text">

        <label for="password" name="password">PASSWORD</label>
        <input for="password" type="text">
        <input type="checkbox" name="remember" /> Remember me
        <button type="submit"></button>
    </form>
</body>

</html>