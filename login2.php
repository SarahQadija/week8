<?php

session_start();

if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 30);
	setcookie ("password",$_POST["password"],time()+ 30);
	echo "Cookies Set Successfuly";
} else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
}
