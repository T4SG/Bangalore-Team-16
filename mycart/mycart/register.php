<?php include "header.php"; 
//Checking if user is logged in or not...
if (isset($_SESSION['isloggedin'])) {
    header("Location: index.php");
    die();
}
//?>

<h2>User Registration</h2>
	    
            <fieldset>
                <p><legend><sup>*</sup> All fields are mandatory</legend></p>
                <form action="register_save.php" method="post">
                    <p><label for="uname">Name:</label>
                    <input name="uname" id="uname" value="" type="text" /></p>
                    <p><label for="email">Email:</label>
                    <input name="email" id="email" value="" type="text" /></p>
                    <p><label for="pwd">Password:</label>
                    <input name="pwd" id="pwd" value="" type="password" /></p>
                    <p><label for="cpwd">Confirm Password:</label>
                    <input name="cpwd" id="cpwd" value="" type="password" /></p>

                    <p><input name="save" style="margin-left: 150px;" class="formbutton" value="Submit" type="submit" /></p>
                </form>
            </fieldset>	
		
        </section>
        
        <aside class="sidebar">
	
            
		
        </aside>

<?php include "footer.php"; ?>
