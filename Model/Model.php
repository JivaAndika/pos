<?php

require_once __DIR__ . "/../DB/Connection.php";
require_once __DIR__ . "/../interface/modelInterface.php";
abstract class Model extends Connection implements ModelInterface{
     public function create_data($datas,$table){
        $key = array_keys($datas);
        $value = array_values($datas);
        $key = implode(",",$key);
        $value = implode("','",$value);
        $query = "INSERT INTO $table ($key) VALUES ('$value')";
        var_dump($query);
        $result = mysqli_query($this->db,$query);
        return $result;
    }
    public function all_data($table){
        $query = "SELECT * FROM $table";
        $result = mysqli_query($this->db, $query);
        return $this->convert_data($result);
    }
    public function convert_data($datas){
        $data = [];
        while($row = mysqli_fetch_assoc($datas)){
            $data[] = $row;

        }
        return $data;
        
    }
    public function find_data($id,$table){
        $query = "SELECT * FROM $table WHERE id = $id";
        $result = mysqli_query($this->db, $query);
        return $this->convert_data($result);
    }
    public function update_data($id, $datas,$table){
        $key = array_keys($datas);
        $value = array_values($datas);
        $query = "UPDATE $table SET";
        for($i = 0 ; $i < count($key); $i++){
            $query .= $key[$i] . "= `" . $value[$i] . "`";
            if($i != count($key) - 1){
                $query .= ","; 
            }
        }
        $query = "WHERE id = $id";
        $result = mysqli_query($this->db, $query);
        if($result){
            return $datas;
        }{
            return false;
        }
        // return $result;
        }
    public function delete_data($id,$table){
        $query = "DELETE * FROM $table WHERE id = $id";
        $result = mysqli_query($this->db,$query);
        
        return $result;
    }

}