<?php include "header.php"; ?>
<script type="text/javascript">            
        function checkvalidations(form) {
            if (form.opwd.value == "") {
                alert("Please enter your old password");
                form.opwd.focus();

                return false;

            }
            
            if (form.pwd.value == "") {
                alert("Please enter your new password");
                form.pwd.focus();
                return false;
            }
            if (form.cpwd.value != form.pwd.value) {
                alert("Password & Confirm Password Mismatched");
                form.cpwd.focus();
                return false;
            }
        }
            </script>

<h2>Change Password</h2>
	    
            <fieldset>
                <legend><sup>*</sup> All fields are mandatory</legend>
                <form action="checkpassword.php" method="post" onsubmit="return checkvalidations(this)">
                    <p><label for="opwd">Old Password:</label>
                    <input name="opwd" id="opwd" value="" type="password" /></p>
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
