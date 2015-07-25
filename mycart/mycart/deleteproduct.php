<?php include "header.php"; 
//Checking if user is logged in or not...
if ($_SESSION['type']!= 'admin') {
    header("Location: index1.php");
    die();
}
//?>

<h2>Delete Products</h2>
	    
            <fieldset>
               
                <form action="productdelete.php" method="post">
                    
                    <p><label for="pname">Product Name:</label>
                    <input name="pname" id="pname" value="" type="text" /></p>
                    
                    

                    <p><input name="psave" style="margin-left: 150px;" class="formbutton" value="Submit" type="submit" /></p>
                </form>
            </fieldset>	
		
        </section>
        
        <aside class="sidebar">
	
            
		
        </aside>

<?php include "footer.php"; ?>
