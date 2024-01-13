<?php  include_once'includes/header.php'?>
<header class="site-header">
        <div class="logo-container">
         <a href="index.php">
            <img src="Images/icons/logo.png" alt="Sun Beauty Logo" class="logo" id="sunBeautyLogo">
            <span id="businessName">Sun Beauty</span>
         </a>
        </div>
        <div class="nav-container">
            <a href="account.php">
                <img src="Images/icons/account-icon.png" alt="Account" id="accountIcon" class="nav-icon" title="Account">
            </a>
            <a href="cart.php">
                <img src="Images/icons/cart-icon.png" alt="Cart" id="cartIcon" class="nav-icon" title="Cart">
            </a>
            <a href="shop.php">
                <img src="Images/icons/shop-icon.png" alt="Shop" id="shopIcon" class="nav-icon" title="Shop">
            </a>
        </div>
        
    </header>   
<main class="main-container" >
    <div class="form-container-2">
        <h1 class="form-header">Sign-Up</h1> 
        <form action="SignUp.php" method="post" >
            <div>
                <label for="">First Name:</label>
                <input type="text" name="FirstName">
            </div>
            <div>
                <label for="">Last Name:</label>
                <input type="text" name="LastName">
            </div>
            <div>  
                <label for="">Email:</label>
                <input type="text" name="Email">
            </div>
            <div>
                <label for="">Password:</label>
                <input type="password" name="Password">
            </div>

            <input type="submit" value="Sign Up" name="SignUp">
        </form>
        <?php  include_once'db/database.php';
        include_once'db/databaseControlleur.php';
        $conn=new dbcontroller($bdd);
        if(isset($_POST['SignUp'])){
            if($_POST['FirstName']!=null && $_POST['LastName']!=null && $_POST['Email']!=null && $_POST['Password']!=null ){
                $add=$conn->addClient($_POST['FirstName'],$_POST['LastName'],$_POST['Email'],$_POST['Password']);
                if($add){
                    echo"Congrats!! You now have an account.. <a href='account.php'>Sign-In</a>";
                }
                

            }
            else{
                echo 'empty inputs';
            }
        }
        
        ?>


    </div>
</main>    

<?php  include_once'includes/footer.php'?>

