<?php
class db{
    protected $mysqli;
    function __construct() {
            $this->mysqli=mysqli_connect('localhost','root','','inventory_management');
      }
   public function insert($query,$location=null){

        $sql=mysqli_query($this->mysqli,$query);
        if($sql){
            if($location!=null){
                header('location:'.$location);
            }
            return true;
        }else{
            return false;
        }
    }
   public function check($parameter,$method){
        if(isset($method[$parameter])){
            return true;
        }else{
            return false;
        }
    }
    public function update($query,$location){
        $sql=mysqli_query($this->mysqli,$query);
        if($sql){
            if($location!=null){
                header('location:'.$location);
            }
            return true;
        }else{
            return false;
        }
    }
    public function delete($id,$table,$primarykey){
        $delete="DELETE FROM `$table` WHERE `$primarykey`=$id";
        $sql=mysqli_query($this->mysqli,$delete);
        if($sql){
            
        }
    }
}


?>