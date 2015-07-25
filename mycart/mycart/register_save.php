<?php 
require "dbcon.php";

if ($_POST) {
	$name = trim($_POST['uname']);
	$email = trim($_POST['email']);
	$password = md5($_POST['pwd']);

	$query = mysql_query("insert into users (name, email, password,dor) values ('$name','$email','$password',NOW())") or die(mysql_error());
	if ($query) {
                $_SESSION['msg'] = '<code>Registration Done Successfully! Please wait for admin approval...</code>';
		header("Location: index1.php");
	}
} else {
	echo "Access Denied!";
}
?>