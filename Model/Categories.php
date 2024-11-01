<?php
require_once __DIR__ . "/Model.php";

// define("TABLE","cars");
class Categories extends Model {
    protected $table = 'categories';
    public function create($datas){
        return parent::create_data($datas,$this->table);

    }
    public function all(){
        return parent::all_data($this->table);
    }
    public function find($id){
        return parent::find_data($id,$this->table);
    }
    public function update($id,$datas){
        return parent::update_data($id,$datas, $this->table);
    }
    public function delete($id){
        return parent::delete_data($id,$this->table);
    }
    public function search($keyword, $startData = null, $limit = null){
        $queryLimit = "";
        if(isset($limit) && isset($startData)){
            $queryLimit = "LIMIT $startData, $limit";
          }
        $keyword = "WHERE name LIKE '%{$keyword}%' $queryLimit";
        return parent::search_data($keyword, $this->table);
    }
    public function pagginate($starData,$limit){
       
        $keyword = "LIMIT $starData , $limit";
        return parent::paggination_data($starData,$limit, $this->table);
    }
}