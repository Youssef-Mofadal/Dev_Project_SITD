<?php  include_once'includes/header.php'?>
    <header class="site-header">
     <link rel="stylesheet" href="css/shop.css">
        <div class="logo-container">
         <a href="index.php">
            <img src="Images/icons/logo.png" alt="Sun Beauty Logo" class="logo" id="sunBeautyLogo">
            <span id="businessName">Sun Beauty</span>
         </a>

        </div>
        <div class="search-bar-container">
            <input type="text" id="searchBar" class="search-bar" placeholder="Search">
            <img src="Images/icons/search-icon.png" alt="Search Icon" class="search-icon">
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
    <body>


<section class="main-content">
    <h2>Shop</h2>

    <!-- Product 1 -->
    <div class="product-container" onmouseover="showDescription('product1');" onmouseout="hideDescription('product1');">
        <img src="Images/icons/Prodcut1.jpeg" alt="Product 1" class="product-image">
        <div class="product-details">
            <span class="product-name">Curcum and Flower Water Mask</span>
            <span class="product-price">99 Dh</span>
            <div class="add-to-cart" onclick="redirectToSignIn()">Add to Cart</div>
        </div>
        <div class="product-description" id="description1">Description for Product 1</div>
    </div>

    <!-- Product 2 -->
    <div class="product-container" onmouseover="showDescription('product2');" onmouseout="hideDescription('product2');">
        <img src="Images/icons/Product2.jpeg" alt="Product 2" class="product-image">
        <div class="product-details">
            <span class="product-name">NILA Sahraouiya Mask</span>
            <span class="product-price">99 Dh</span>
            <div class="add-to-cart" onclick="redirectToSignIn()">Add to Cart</div>
        </div>
        <div class="product-description" id="description2">Description for Product 2</div>
    </div>

    <!-- Product 3 -->
    <div class="product-container" onmouseover="showDescription('product3');" onmouseout="hideDescription('product3');">
        <img src="Images/icons/Product3.jpeg" alt="Product 3" class="product-image">
        <div class="product-details">
            <span class="product-name">Aker Fasi & Roses Mask</span>
            <span class="product-price">99 Dh</span>
            <div class="add-to-cart" onclick="redirectToSignIn()">Add to Cart</div>
        </div>
        <div class="product-description" id="description3">Description for Product 3</div>
    </div>

    <!-- Product 4 -->
    <div class="product-container" onmouseover="showDescription('product4');" onmouseout="hideDescription('product4');">
        <img src="Images/icons/Product4.jpeg" alt="Product 4" class="product-image">
        <div class="product-details">
            <span class="product-name">Blue Nila Sahraouiya Mask</span>
            <span class="product-price">99 Dh</span>
            <div class="add-to-cart" onclick="redirectToSignIn()">Add to Cart</div>
        </div>
        <div class="product-description" id="description4">Description for Product 4</div>
    </div>

    <div class="pack-container" id="pack1" onmouseover="showDescription('pack1');" onmouseout="hideDescription('pack1');">
        <img src="Images/icons/Pack1_1.jpeg" alt="Pack 1" class="pack-image">
        <img src="Images/icons/Pack1_2.jpeg" alt="Pack 1 Alt" class="hover-image">
        <div class="product-details">
            <span class="product-name">Louban Dakar Pack</span>
            <span class="product-price">350.00 Dh</span>
            <div class="add-to-cart" onclick="redirectToCart()">Add to Cart</div>
        </div>
        <div class="product-description" id="descriptionPack1">Description for Louban Dakar Pack</div>
    
    </div>

    <div class="pack-container" id="pack2" onmouseover="showDescription('pack2');" onmouseout="hideDescription('pack2');">
        <img src="Images/icons/Pack2_1.jpeg" alt="Pack 2" class="pack-image">
        <img src="Images/icons/Pack2_2.jpeg" alt="Pack 2 Alt" class="hover-image">
        <div class="product-details">
            <span class="product-name">Blue Nila Sahraouiya Pack</span>
            <span class="product-price">350.00 Dh</span>
            <div class="add-to-cart" onclick="redirectToCart()">Add to Cart</div>
        </div>
        <div class="product-description" id="descriptionPack2">Description for Blue Nila Sahraouiya Pack</div>
    </div>

</section>
</body>

<?php include_once 'includes/footer.php'; ?>
