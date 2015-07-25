<?php 


require "dbcon.php";

if ($_POST) {
        $email = ($_POST['uname']);
        $password = ($_POST['pwd']);

        $query = mysql_query("select * from users where username = '$email' and pwd = '$password'") or die(mysql_error());
        $count = mysql_num_rows($query);
        
        if ($count > 0) {
                $res = mysql_fetch_array($query) or die(mysql_error());
                $_SESSION['uid'] = $res['uid'];
                $_SESSION['name'] = $res['username'];
                $_SESSION['type'] = $res['type'];
                
                $_SESSION['isloggedin'] = TRUE;
                
                $_SESSION['msg'] = '<code>You are successfully logged in!</code>';
                if ($_SESSION['type'] == 'Leader') {
                header("Location: leaderhome.php");}
                else if ($_SESSION['type'] == 'staff') {
                        header("Location: staffhome.php");
                }
        } else {
                $_SESSION['msg'] = '<code>Invalid Login Details!</code>';
                header("Location: index.php");
        }
} else {
        echo "Access Denied!";
}
                
?>