<?php
@session_start();
//Database Connections
$con = mysql_connect("localhost", "root", "") or die(mysql_error());
$db = mysql_select_db("team16", $con) or die(mysql_error());	
if ($_POST) {
	
	$com1 = ($_POST['comment1']);
	$com2 = ($_POST['comment2']);
	$com3 = ($_POST['comment3']);
	echo $com1;
	
	//	$com;
	
	$name= $_SESSION['name'];
	$myquery = sprintf("insert into feedback (username,comment1,comment2,comment3) values ('$name','$com1','$com2','$com3')");
	//echo $myquery;	
	$query = mysql_query($myquery) or die(mysql_error());
	
	if ($query) {
		
        $_SESSION['msg'] = '<code>User Details Updated Successfully!</code>';
  	            header("Location: leaderhome.php");
	}  	
	}
 else {
	echo "Access Denied!";
}
?>