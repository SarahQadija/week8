<?php
session_start();

if(!isset($_SESSION['username'])){
	header('location:login.php');
}else{
	header('location:admin.php');
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
<?php
/**
* Script Name: PHP Form Login Remember Functionality with Cookies
* Source: www.TutorialsClass.com
**/
?>
<form action="admin.php" method="post" style="border: 2px dotted blue; text-align:center; width: 400px;">
	<p>
		Username: <input name="username" type="text" value="" class="input-field">
	</p>
		 <p>Password: <input name="password" type="password" value="" class="input-field">
	</p>
		<p><button><a href="admin.php" name="remember">LOGIN</button></p>
		
</form>
</body>

</html>