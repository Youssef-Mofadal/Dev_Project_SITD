<?php

include_once 'db/database.php';
include_once 'includes/header.php';



$userEmail = $_SESSION['email'];
$sqlUserId = "SELECT id FROM client.users WHERE email = :email";
$stmtUserId = $pdo->prepare($sqlId);
$stmtUserId->bindParam(':email', $userEmail);
$stmtUserId->execute();
$userID = $stmtUserId->fetchColumn();


$sqlCartItems = "SELECT * FROM cart.products_and_packs WHERE user_id = :userID";
$stmtCartItems = $pdo->prepare($sqlCartItems);
$stmtCartItems->bindParam(':userID', $userID);
$stmtCartItems->execute();
$cartItems = $stmtCartItems->fetchAll(PDO::FETCH_ASSOC);
?>

<header class="site-header">
    
</header>

<section class="cart-content">
    <h2>Your Cart</h2>

    <?php if (empty($cartItems)) : ?>
        <p>Your cart is empty.</p>
    <?php else : ?>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cartItems as $item) : ?>
                    <tr>
                        <td><?php echo $item['name']; ?></td>
                        <td><?php echo $item['price']; ?> Dh</td>
                        <td><?php echo $item['quantity']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</section>


<?php include_once 'includes/footer.php'; ?>
