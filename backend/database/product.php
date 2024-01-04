<?php
include_once '../config/config.php';

$table_name = "product";
$column_name = "cat_id";

// Check if the table exists
$table_check_query = "SHOW TABLES LIKE '$table_name'";
$table_result = $mysqli->query($table_check_query);

if ($table_result->num_rows > 0) {
    // Table exists, modify it
    $alter_query = "ALTER TABLE $table_name ADD $column_name INT(11) AFTER discription";
    $alter_result = $mysqli->query($alter_query);

    if ($alter_result) {
        echo "Altered table successfully!<br>";
    } else {
        die("Error altering table: " . $mysqli->error);
    }
} else {
    // Table doesn't exist, create it first and then modify
    $create_table_query = "CREATE TABLE $table_name (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        price INT(11) NOT NULL,
        SKU VARCHAR(255),
        product_code VARCHAR(255),
        discription VARCHAR(255),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $create_table_result = $mysqli->query($create_table_query);

    if ($create_table_result) {
        echo "Table created successfully!<br>";

        // Now modify the table
        $alter_query = "ALTER TABLE $table_name ADD $column_name INT(11) AFTER discription";
        $alter_result = $mysqli->query($alter_query);

        if ($alter_result) {
            echo "Altered table successfully!<br>";
        } else {
            die("Error altering table: " . $mysqli->error);
        }
    } else {
        die("Error creating table: " . $mysqli->error);
    }
}

// Close connection
$mysqli->close();
?>

