<?php include "header.php"; 
//Checking if user is logged in or not...
if (!isset($_SESSION['isloggedin'])) {
    header("Location: index1.php");
    die();
}
//
?>

<h2>Card Details</h2>
	    
            <fieldset>
                <p><legend><sup>*</sup> All fields are mandatory</legend></p>
                <form action="ordersave.php" method="post">
                    <p><label for="uname">Name:</label>
                    <input name="uname" id="uname" value="" type="text" /></p>
                    <p><label for="pin">pincode:</label>
                    <input name="pin" id="pin" value="" type="text" /></p>
                    <p><label for="pwd">Address:</label>
                    <p><textarea name="add" id="add" value="" type="text" /></textarea></p>
                    <p><label for="cardno">CardNo.</label>
                    <input name="cardno" id="cardno" value="" type="text" /></p>
<p><label for="expdate">Expirydate</label>
                    <input name="expdate" id="expdate" value="" type="text" /></p>

<p><label for="cvv">Cvv</label>
                    <input name="cvv" id="cvv" value="" type="text" /></p>


                    <p><input name="save" style="margin-left: 150px;" class="formbutton" value="Submit" type="submit" /></p>


<input type="hidden" name="item_name['.$cart_items.']" value="'.$itmname[].'" />;


<input type="hidden" name="item_code" value="'.$itmcode[].'" />;
			
			<input type="hidden" name="item_qty" value="'.$itmqty[].'" />;
                </form>
            </fieldset>	
		
        </section>
        
        <aside class="sidebar">
	
            
		
        </aside>


<?php include "footer.php"; ?>
