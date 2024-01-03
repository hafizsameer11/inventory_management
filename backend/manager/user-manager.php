<?php
include_once '../config/config.php';
include_once '../controller/dbfunctions.php';
include_once '../controller/db.php';
$db=new db();
$check = check('create',$_POST);
if($check){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['user_role'];
    $insert = "INSERT INTO `users`(`name`,`pass`,`email`,`status`) VALUES('$name','$password','$email','$role')";
    $db->insert($insert,'../../all-user.php');
}
if(isset($_GET['uid'])){
    $uid = $_GET['uid'];
    $db->delete($uid,'users','id','../../all-user.php');
}
?>