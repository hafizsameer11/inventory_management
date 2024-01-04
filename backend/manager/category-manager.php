<?php
include_once '../config/config.php';
include_once '../controller/db.php';
include_once '../controller/dbfunctions.php';

$db = new db();

$check = check('create',$_POST);
if($check){
    $name = $_POST['name'];
    $insert = "INSERT INTO `categories`(`cat_name`) VALUES ('$name')";
    $db->insert($insert, '../../all-category.php');
}


if(isset($_GET['cid'])){
    $uid=$_GET['cid'];
    $db->delete($uid,'categories','cat_id','../../all-category.php');
}

if(isset($_POST['update'])){
    $records = $_POST;
    $cid = $_POST['cat_id'];
    $condition  = "`cat_id`='$cid'";
    unset($records['cat_id']);
    unset($records['update']);
    if($db->update('categories',$records,$condition)){
        header("location: ../../all-category.php");
    }else{
        echo 'eroor';
    }
}
?>