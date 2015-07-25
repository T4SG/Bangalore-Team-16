<?php
session_start();

session_destroy();

session_start();
$_SESSION['msg'] = '<code>You are successfully logged out!</code>';
header("Location: login.php");

?>