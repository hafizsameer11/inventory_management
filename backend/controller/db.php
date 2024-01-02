<?php
class db{
    protected $mysqli;
    function __construct() {
            $this->mysqli=mysqli_connect('localhost','root','','inventory_management');
      }
      //inserting data into database
    //   public function insertnew($table,$data){
    //     if(count($data) != 0){
    //         $fields = implode(',',array_keys($data));
    //         $values = "'".implode("','",$data)."'";
    //         $query="INSERT INTO ".$table." (".$fields.") VALUES (".$values.");";
    //         return mysqli_query($this->mysqli, $query);
    //         }else{
    //             echo 'No Data to Insert';
    //             }
    //   }

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
    public function delete($paramter,$table,$primarykey,$location=null){
        $delete="DELETE FROM `$table` WHERE `$primarykey`=$paramter";
   
        $sql=mysqli_query($this->mysqli,$delete);
        if($sql){
            if($location!=null){
                header('location:'.$location);
            }
            return true;

        }else{
            return false;
        }
    }
    public function select($column='*',$table,$where=null){
        if($where==null){
            $select="SELECT ".$column." FROM `".$table."`;";
        }else{
            $select=" SELECT ".$column." FROM `".$table."` WHERE ".$where." ; ";
        }
        $result=mysqli_query($this->mysqli,$select);
        $records=[];
        while($row=mysqli_fetch_assoc($result)){
            array_push($records, $row);
        }
        return $records;
    }
    // public function select($select='*',$from,$where=null) {
    //     if($where==null){
    //         $selct="SELECT $select FROM $from ";

    //     }else{
    //         $selct="SELECT $select FROM $from $where";

    //     }
    //     $result = mysqli_query($this->mysqli,$selct);
    //     $rows=[];
    //     while ($r = mysqli_fetch_assoc($result)) {
    //         array_push($rows, $r);
    //         }
    //         return $rows;
    //         }
}


?>