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
    <div class="form-container">
        <h1 class="form-header">Sign-in</h1> 
        <form action="account.php" method="post" >
            <div>  
                <label for="">Email:</label>
                <input type="text" name="Email">
            </div>
            <div>
                <label for="">Password:</label>
                <input type="Password" name="Password">
            </div>
            <input type="submit" value="Sign in" name="connect">
        </form>
        <p >You don't have an account yet ? <a href="SignUp.php">Sign Up</a></p>
    </div>
    <?php  include_once'db/database.php';
        include_once'db/databaseControlleur.php';
        $conn=new dbcontroller($bdd);
        if(isset($_POST['connect'])){
                $res=$conn->fetchCLient($_POST['Email'],$_POST['Password']);
                

               if(sizeof($res)>0){
                    session_start();
                    $_SESSION['info']=$res[0];
                    header('location:clientPage.php');
                }
                else{
                    echo'nothing is added';
                }

            }
            else{
                echo '';
            }

    ?>
 </main>    