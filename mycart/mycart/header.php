<?php session_start(); ?>
<!doctype html>
<html>
    <head>
        <title>Sample Webpage</title>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <!-- Header Begins -->
        <header>
            <div class="container">
                <a href="index.html">Budget Bazar</a>
            </div>
           
            
        </header>
        <!-- /* Header Ends -->

        <!-- Navigation Begins -->
        <nav>
                <div class="width">
                   
                </div>
          
      
            <div class="container">
                <ul id="lal">
                 <ul>
                        <li class="selected"><a href="index1.php">Home</a></li>
                      <?php if (isset($_SESSION['isloggedin'])) { ?>
                        <li class="sub"><a href="#">men</a>
        <ul>
            <li><a href="menfootwear.php">footwear</a></li>
            <li><a href="#">clothing</a></li>
            <li><a href="menwatches.php">watches</a></li>
             
        </ul>
    </li>
    <li class="sub"><a href="#">women</a>
        <ul>
            <li><a href="womenethnic.php">ethnic wear</a></li>
            <li><a href="womenwestern.php">western wear</a></li>
            <li><a href="#">footwear</a></li>
            <li><a href="womenjewellery.php">jewellery</a></li>
            <li><a href="womenbags.php">bags</a></li> 
        </ul>
    </li>
    <li class="sub"><a href="#">electronics</a>
        <ul>
            <li><a href="mobiles.php">mobile</a></li>
            <li><a href="#">tablet</a></li>
            <li><a href="laptops.php">laptop</a></li>
            <li><a href="television.php">television</a></li>
            <li><a href="cameras.php">cameras</a></li> 
        </ul>
    </li>
    <li class="sub"><a href="#">books</a>
        <ul>
            <li><a href="bestsellers.php">bestsellers</a></li>
            <li><a href="children.php">children</a></li>
            <li><a href="politics.php">history & politics</a></li>
            <!--<li><a href="#">Product 4</a></li>
            <li><a href="#">Product 5</a></li> -->
        </ul>
        </li>
        
      <?php if ($_SESSION['type'] == 'admin') { ?>
                        <li><a href="userslist.php">Users List</a></li>
                        <li><a href="editproducts.php">Edit Products</a></li>
                        <?php } ?>
                        <li><a href="changepassword.php">Change Password</a></li>
                        <li><a href="logout.php">Logout</a></li>
                       <?php } else { ?>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="login.php">Login</a></li>
                        <?php } ?>
                    </ul>
                    
    
    
    <!--<li><a href="#">Contact us</a></li>-->
</ul>
            </div>
            <div class="clearfix"></div>
        </nav>
        <!-- /* Navigation Ends -->

        <!-- Content Block -->
        <div class="container">
        <section>