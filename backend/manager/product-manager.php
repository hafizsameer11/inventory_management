<?php
include_once '../config/config.php';
include_once '../controller/dbfunctions.php';
include_once '../controller/db.php';

$check=check('create',$_POST);
if($check){
$title=$_POST['title'];
$price=$_POST['price'];
$sku=$_POST['sku'];
$product_code=$_POST['product_code'];
$discription=$_POST['discription'];
$insert="INSERT INTO `product` (`product_code`,`discription`,`SKU`,`price`,`title`) VALUES('$product_code','$discription','$sku','$price','$title')";
$sqlclass=new db();
$sqlclass->insert($insert,'../../create-product.php');


}

?>