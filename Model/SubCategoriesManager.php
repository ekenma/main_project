<?php

class SubCategory {
    public $id = null;
    public $name = null;
    public $icon = null;
    public $category = null;

    public function __construct($data = array()) {
        if (isset($data["Id"])) {
            $this->id = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Id"]);
        }
        if (isset($data["Name"])) {
            $this->name = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Name"]);
        }
        if (isset($data["Icon"])) {
            $this->icon = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Icon"]);
        }
        if (isset($data["Category"])) {
            $this->category = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Category"]);
        }
    }
    
    public static function getByCategoryName($categoryName){
        $conn = new PDO(DBCON, USERNAME, PASSWORD);
        $sql = "SELECT s.Id, s.Name, s.Icon, s.Category 
                FROM sub_categories s 
                INNER JOIN categories c ON c.Id = s.Category
                WHERE c.Name=:category ORDER BY Name ASC";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":category", $categoryName, PDO::PARAM_STR);
        $stmt->execute();
        
        $list = array();
        
        while($row = $stmt->fetch()){
            $n = new SubCategory($row);
            $list[] = $n;
        }
        
        $conn = null;
        
        return $list;
    }
    
    public static function getByCategoryId($categoryId){
        $conn = new PDO(DBCON, USERNAME, PASSWORD);
        $sql = "SELECT Id, Name, Icon, Category
                FROM sub_categories
                WHERE Category = :catId";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":catId", $categoryId, PDO::PARAM_STR);
        $stmt->execute();
        
        $list = array();
        
        while($row = $stmt->fetch()){
            $n = new SubCategory($row);
            $list[] = $n;
        }
        
        $conn = null;
        
        return $list;
    }

}

?>