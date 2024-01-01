<?php
function check($parameter,$method){
    if(isset($method[$parameter])){
        return true;
    }else{
        return false;
    }
}

?>