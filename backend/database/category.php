<?php
include_once '../config/config.php';

$producttable = "CREATE TABLE categories (
    cat_id INT PRIMARY KEY AUTO_INCREMENT,
    cat_name VARCHAR(255) NOT NULL
);";
$sql = mysqli_query($mysqli, $producttable);
if (!$sql) {
    die("Error creating table: " . mysqli_error($mysqli));
} else {
    echo "Table created successfully!<br>";
}
?>
