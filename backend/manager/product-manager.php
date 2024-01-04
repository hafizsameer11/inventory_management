<?php
include_once '../controller/db.php';
include_once '../controller/dbfunctions.php';
$db = new db();
$check = check('create', $_POST);
if ($check) {
   $title = $_POST['title'];
   $price = $_POST['price'];
   $sku = $_POST['sku'];
   $product_code = $_POST['product_code'];
   $discription = $_POST['discription'];

   $cat_id = $_POST['cat_id'];
   $select = "SELECT * FROM `product` JOIN `categories` ON `product`.`cat_id` = `categories`.`cat_id` WHERE `product`.`cat_id` = '$cat_id'";

   $insert = "INSERT INTO `product` (`product_code`,`discription`,`SKU`,`price`,`title`,`cat_id`) VALUES('$product_code','$discription','$sku','$price','$title','$cat_id')";
   // $sqlclass = new db();
   $db->insert($insert, '../../all-product.php');
}
if (isset($_GET['pid'])) {
   $pid = $_GET['pid'];
   if ($db->delete($pid, 'product', 'id', '../../all-product.php')) {
      echo "Dleted";
   } else {
      echo "failed";
   }
}
if (isset($_POST['update'])) {
   $record = $_POST;
   $pid = $_POST['pid'];
   $condition = "`id`='$pid'";
   unset($record['pid']);
   unset($record['update']);
   if ($db->update('product', $record, $condition)) {
      header('Location:../../all-product.php');
   } else {
      echo "rror";
   }
}
