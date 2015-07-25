<?php 
require "dbcon.php";

if ($_POST) {
        $pname = $_POST['pname'];
	$query = mysql_query("delete from products where product_name = 'MOTOE'") or die(mysql_error());
	if ($query) {
                $_SESSION['msg'] = '<code>product Deleted Successfully!</code>';
		header("Location: index1.php");
	}
} else {
	echo "Access Denied!";
}
?>