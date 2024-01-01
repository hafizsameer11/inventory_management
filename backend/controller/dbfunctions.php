<?php
function insert($query,$mysqli,$location=null){

    $sql=mysqli_query($mysqli,$query);
    if($sql){
        if($location!=null){
            header('location:'.$location);
        }
        return true;
    }else{
        return false;
    }
}
function check($parameter,$method){
    if(isset($method[$parameter])){
        return true;
    }else{
        return false;
    }
}
?>