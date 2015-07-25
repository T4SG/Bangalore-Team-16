<?php
@session_start();
//Database Connections
$con = mysql_connect("localhost", "root", "") or die(mysql_error());
$db = mysql_select_db("team16", $con) or die(mysql_error());	


if ($_POST) {
	echo "test1";
	$com = trim($_POST['com']);
	echo "test2";
	//	$com;
	echo "test3";
	$name= $_SESSION['name'];
	$myquery = sprintf("insert into comments (priorityid,username,comment) values (7,'$name','$com')");
	//echo $myquery;	
	$query = mysql_query($myquery) or die(mysql_error());
	echo "test4";
	//$query;
	echo "test5";
	if ($query) {
		echo "test6";
        $_SESSION['msg'] = '<code>User Details Updated Successfully!</code>';
        header("Location: leaderhome.php");
	}
  	              	
	}
else {
	echo "Access Denied!";
}
?>