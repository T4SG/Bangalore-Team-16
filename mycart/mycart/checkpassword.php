<?php include "header.php";
include "dbcon.php";

 if ($_POST) {
	$uid = $_SESSION['uid'];
	$oldpassword = md5($_POST['opwd']);
	$newpassword = md5($_POST['pwd']);

	$query = mysql_query("select * from users where uid=$uid and password = '$oldpassword'") or die(mysql_error());
        $count = mysql_num_rows($query);
        if ($count > 0) {
                $query = mysql_query("update users set password = '$newpassword' where uid=$uid") or die(mysql_error());
                 $_SESSION['msg'] = '<code>password Updated Successfully!</code>';
		header("Location: index1.php");
            }
            else
            {
              echo "access denied!";
              }
                        }