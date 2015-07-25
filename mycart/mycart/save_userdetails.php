<?php 
require "dbcon.php";

if ($_POST) {
	$name = trim($_POST['uname']);
	$email = trim($_POST['email']);
	$status = $_POST['status'];
        $uid = $_POST['uid'];
	$query = mysql_query("update users set name = '$name', email = '$email', status = '$status' where uid = $uid") or die(mysql_error());
	if ($query) {
                $_SESSION['msg'] = '<code>User Details Updated Successfully!</code>';
		header("Location: userslist.php");
	}
} else {
	echo "Access Denied!";
}
?>