<?php 
@session_start();
//Database Connections
$con = mysql_connect("localhost", "root", "") or die(mysql_error());
$db = mysql_select_db("team16", $con) or die(mysql_error());


?>