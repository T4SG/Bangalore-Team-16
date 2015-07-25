<?php 
require "dbcon.php";

if ($_POST) {
	$code = $_POST['pcode'];
	$name = $_POST['pname'];
	$desc = $_POST['desc'];
	$imgname = $_POST['imgname'];
	$price = $_POST['price'];
	$ptype = $_POST['ptype'];

	$query = mysql_query("insert into products (product_code,product_name,product_desc,product_img_name,price,ptype) values ('$code','$name','$desc','$imgname','$price','$ptype')") or die(mysql_error());
	if ($query) {
                $_SESSION['msg'] = '<code>product added ...</code>';
		header("Location: index1.php");
	}
} else {
	echo "Access Denied!";
}
?>