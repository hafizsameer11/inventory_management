<?php
include_once '../config/config.php';

$producttable="CREATE TABLE product (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    price INT(11) NOT NULL,
    SKU VARCHAR(255),
    product_code VARCHAR(255),
    discription VARCHAR(255),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $sql=mysqli_query($mysqli,$producttable);
    if(!$sql){
        die("Error creating table: ". mysqli_error($mysqli));
        }else{
            echo "Table created successfully!<br>";
            }
?>