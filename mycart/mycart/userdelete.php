<?php 
require "dbcon.php";

if ($_GET) {
        $uid = $_GET['id'];
	$query = mysql_query("delete from users where uid = $uid") or die(mysql_error());
	if ($query) {
                $_SESSION['msg'] = '<code>User Deleted Successfully!</code>';
		header("Location: userslist.php");
	}
} else {
	echo "Access Denied!";
}
?>