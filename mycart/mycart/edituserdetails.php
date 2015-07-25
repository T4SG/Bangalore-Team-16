<?php include "header.php"; 
require "dbcon.php";

$uid = $_GET['id'];
$query = mysql_query("SELECT * FROM `users` WHERE uid = $uid") or die(mysql_error());
$count = mysql_num_rows($query);
if ($count == 0) {
    header("Location: userslist.php");
}
$res = mysql_fetch_array($query);
?>

<h2>Edit User Details</h2>
	    
            <fieldset>
                <legend><sup>*</sup> All fields are mandatory</legend>
                <form action="save_userdetails.php" method="post">
                    <p><label for="uname">Name:</label>
                    <input name="uname" id="uname" value="<?php echo $res['name'];?>" type="text" /></p>
                    <p><label for="email">Email:</label>
                    <input name="email" id="email" value="<?php echo $res['email'];?>" type="text" /></p>
                    <p><label for="status">Status:</label>
                        <select name="status" id="status">
                            <option value="A" <?php if ($res['status'] == 'A') echo "selected";?>>Active</option>
                            <option value="NA" <?php if ($res['status'] == 'NA') echo "selected";?>>Not Active</option>
                            <option value="B" <?php if ($res['status'] == 'B') echo "selected";?>>Blocked</option>
                        </select>
                    </p>

                    <p>
                        <input type="hidden" name="uid" value="<?php echo $res['uid'];?>">
                        <input name="save" style="margin-left: 150px;" class="formbutton" value="Submit" type="submit" /></p>
                </form>
            </fieldset>	
		
        </section>
        
        <aside class="sidebar">
	
            
		
        </aside>

<?php include "footer.php"; ?>
