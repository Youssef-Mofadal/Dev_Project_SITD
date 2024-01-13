<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sun Beauty</title>
    <link rel="stylesheet" href="css/search.css">
</head>
<body>
    <header class="site-header">
        <div class="logo-container">
            <img src="Images/icons/logo.png" alt="Sun Beauty Logo" class="logo" id="sunBeautyLogo">
            <span id="businessName">Sun Beauty</span>
        </div>
      
        <div class="nav-container">
            <img src="Images/icons/account-icon.png" alt="Account" id="accountIcon" class="nav-icon" title="Account">
            <img src="Images/icons/cart-icon.png" alt="Cart" id="cartIcon" class="nav-icon" title="Cart">
            <img src="Images/icons/shop-icon.png" alt="Shop" id="shopIcon" class="nav-icon" title="Shop">
        </div>
    </header>
    
 <?php

include_once 'db/dbcart.php';
include_once 'includes/header.php';


if (isset($_GET['q'])) {
    $searchTerm = $_GET['q'];

    
    $sqlSearch = "SELECT * FROM products_and_packs WHERE name LIKE :searchTerm";
    $stmtSearch = $pdo->prepare($sqlSearch);
    $stmtSearch->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
    $stmtSearch->execute();
    $searchResults = $stmtSearch->fetchAll(PDO::FETCH_ASSOC);

    
    if (!empty($searchResults)) {
        echo '<h2>Search Results</h2>';
        foreach ($searchResults as $result) {
            echo '<div class="result-container">';
            echo '<span class="result-name">' . $result['name'] . '</span>';
            echo '<span class="result-price">' . $result['price'] . ' Dh</span>';
            
            echo '</div>';
        }
    } else {
        echo '<p>No results found for "' . $searchTerm . '".</p>';
    }
} else {
    
    echo '<p>Please enter a search term.</p>';
}


include_once 'includes/footer.php';
?> 

    
    <script src="script.js"></script>
</body>
</html>