<?php

if(isset($_COOKIE['username']) && $_COOKIE['Donelogin'] == true){
	header('location:login.php');
	exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
        setcookie('Donelogin',true, time()+30);
        header('Location: admin.php');
        exit;
    } else {
        $error = 'Invalid login';
    }
}
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
<?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>"" method="post" style="border: 2px dotted blue; text-align:center; width: 400px;">
	<p>
		Username: <input name="username" type="text" value="" class="input-field">
	</p>
		 <p>Password: <input name="password" type="password" value="" class="input-field">
	</p>
		<button type="submit">LOGIN</button>
		
</form>
</body>
</html>