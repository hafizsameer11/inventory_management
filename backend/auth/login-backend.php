<?php
include_once '../config/config.php';
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pass=$_POST['pass'];
    $select="SELECT * FROM users WHERE `name`='$username' OR `email`='$username' and `pass`='$pass'";
    $sql=mysqli_query($mysqli,$select);
    if(mysqli_num_rows($sql)==1){
        echo "hello wolrd";
        $row=mysqli_fetch_assoc($sql);
        session_start();
        $_SESSION['uid']=$row['id'];
        $_SESSION['uname']=$row['name'];
        $_SESSION['ustatus']=$row['status'];
        $_SESSION['uemail']=$row['email'];
        header('location:../../index.php');

    }else{
        echo "<script>alert('Username or Password is incorrect!');
        history.back();
        </script>
        
        ";
    }
    
}

?>