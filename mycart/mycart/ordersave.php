
<?php 


 

require "dbcon.php";
$cart_items = 0;

if ($_POST) {
        foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
           $qty=$cart_itm["qty"];
           $results = mysql_query("SELECT product_name,product_desc, price FROM products WHERE product_code='$product_code' LIMIT 1");
           $obj = mysql_fetch_array($results);
           
          
           $name=$_POST['uname'];

           $cardno=$_POST['cardno'];
	 $query = mysql_query("INSERT INTO `order`(`custname`, `cardno`, `itmname`, `qty`, `code`) VALUES ('".$name."','".$cardno."','".$obj['product_name']."','".$qty."','".$product_code."')")  or die(mysql_error());

	if ($query) {
                $_SESSION['msg'] = '<code>order successfully placed</code>';
		header("Location: mail.php");
	}
}} else {
	echo "Access Denied!";
}
?>