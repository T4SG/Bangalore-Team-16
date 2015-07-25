<?php 
include "header.php"; 
//Checking if user is logged in or not...
if ($_SESSION['isloggedin'] != TRUE || $_SESSION['type'] != 'admin') {
    $_SESSION['msg'] = '<code>Access Denied!</code>';
    header("Location: index.php");
    die();
}
//
require "dbcon.php";

$query = mysql_query("select * from users") or die(mysql_error());
$count = mysql_num_rows($query);
?>
    
<?php echo $_SESSION['msg'];$_SESSION['msg'] = "";?>
            
            <h2>User Management</h2>
            <table cellspacing="5" cellpadding="5">
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th colspan="2"><a href="#" class="button">Add New</a></th>
                </tr>
                
                <?php 
                    if ($count > 0) { $sno = 1;
                        while($res = mysql_fetch_array($query)) {
                ?>
 
                <tr>
                    <td><?php echo $sno++; ?></td>
                    <td><?php echo $res['name'] ?></td>
                    <td><?php echo $res['email'] ?></td>
                    <td><a href="edituserdetails.php?id=<?php echo $res['uid'] ?>"><img src="images/edit.png" alt="Edit"></a></td>
                    <td><a onclick="return confirm('Are you sure to delete this?')" href="userdelete.php?id=<?php echo $res['uid'] ?>"><img src="images/delete.png" alt="Delete"></a></td>
                </tr>

                <?php }} else { ?>
                <tr>
                    <td colspan="5">No Records Found!</td>
                </tr>
                <?php } ?>

            </table>    
        
        </section>
        
        <aside class="sidebar">
    
            
        
        </aside>


<?php include "footer.php"; ?>
