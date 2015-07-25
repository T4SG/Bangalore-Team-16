 <?php include "header.php"; 
if (isset($_SESSION['isloggedin'])) {
    header("Location: index.php");
    die();
}
?>
<?php echo $_SESSION['msg'];$_SESSION['msg'] =""; ?>
<h2>Login</h2>
        
            <fieldset>
                <legend>&nbsp;</legend>
                <form action="logincheck.php" method="post">
                    <p><label for="email">Email:</label> 
                    <input align="right" name="email" id="email" value="" type="text" /></p>
                    <p><label for="pwd">Password:</label>
                    <input align="right" name="pwd" id="pwd" value="" type="password" /></p>

                    <p><input name="save" style="margin-left: 150px;" class="formbutton" value="Login" type="submit" /></p>
                </form>
            </fieldset> 
        
        </section>
        
        <aside class="sidebar">
    
            
        
        </aside>

<?php include "footer.php"; ?>
