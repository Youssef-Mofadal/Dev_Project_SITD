CREATE DATABASE IF NOT EXISTS cart;
use cart;
CREATE TABLE products_and_packs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    type VARCHAR(20) NOT NULL,
    quantity INT NOT NULL
);


INSERT INTO products_and_packs (name, price, type, quantity)
VALUES
    ('Curcum and Flower Water Mask', 99.00, 'Product', 100),
    ('NILA Sahraouiya Mask', 99.00, 'Product', 150),
    ('Aker Fasi & Roses Mask', 99.00, 'Product', 120),
    ('Blue Nila Sahraouiya Mask', 99.00, 'Product', 200),
    ('Louban Dakar Pack', 350.00, 'Pack', 50),
    ('Blue Nila Sahraouiya Pack', 350.00, 'Pack', 30);
