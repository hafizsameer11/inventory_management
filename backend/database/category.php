<?php
include_once '../config/config.php';

$producttable = "CREATE TABLE Categories (
    cat_id INT PRIMARY KEY AUTO_INCREMENT,
    cat_Name VARCHAR(255) NOT NULL
);";
$sql = mysqli_query($mysqli, $producttable);
if (!$sql) {
    die("Error creating table: " . mysqli_error($mysqli));
} else {
    echo "Table created successfully!<br>";
}
?>
