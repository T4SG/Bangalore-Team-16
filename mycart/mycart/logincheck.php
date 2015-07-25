<?php 
require "dbcon.php";

if ($_POST) {
	$email = trim($_POST['email']);
	$password = md5($_POST['pwd']);

	$query = mysql_query("select * from users where email = '$email' and password = '$password' and status = 'A'") or die(mysql_error());
        $count = mysql_num_rows($query);
        
	if ($count > 0) {
                $res = mysql_fetch_array($query) or die(mysql_error());
                $_SESSION['uid'] = $res['uid'];
                $_SESSION['name'] = $res['name'];
                $_SESSION['type'] = $res['type'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['isloggedin'] = TRUE;
                
                $_SESSION['msg'] = '<code>You are successfully logged in!</code>';
		header("Location: index1.php");
	} else {
                $_SESSION['msg'] = '<code>Invalid Login Details!</code>';
		header("Location: login.php");
        }
} else {
	echo "Access Denied!";
}
?>