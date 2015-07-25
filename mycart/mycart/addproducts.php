<?php include "header.php"; 
//Checking if user is logged in or not...
if ($_SESSION['type']!= 'admin') {
    header("Location: index1.php");
    die();
}
//?>

<h2>Add Products</h2>
	    
            <fieldset>
                <p><legend><sup>*</sup> All fields are mandatory</legend></p>
                <form action="productsave.php" method="post">
                    <p><label for="pcode">Product code:</label>
                    <input name="pcode" id="pcode" value="" type="text" /></p>
                    <p><label for="pname">Product Name:</label>
                    <input name="pname" id="pname" value="" type="text" /></p>
                    <p><label for="desc">Description:</label>
                    <input name="desc" id="desc" value="" type="text" /></p>
                    <p><label for="imgname">Image name:</label>
                    <input name="imgname" id="imgname" value="" type="text" /></p>
                    <p><label for="price">Product price:</label>
                    <input name="price" id="price" value="" type="text" /></p>
                    <p><label for="ptype">Product type:</label>
                    <input name="ptype" id="ptype" value="" type="text" /></p>
                    

                    <p><input name="psave" style="margin-left: 150px;" class="formbutton" value="Submit" type="submit" /></p>
                </form>
            </fieldset>	
		
        </section>
        
        <aside class="sidebar">
	
            
		
        </aside>

<?php include "footer.php"; ?>
