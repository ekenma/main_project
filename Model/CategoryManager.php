<?php
class Category {
    public $id = null;
    public $name = null;
    public $icon = null;

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
    }
    
    public static function getList(){
        $conn = new PDO(DBCON, USERNAME, PASSWORD);
        $sql = "SELECT Id, Name, Icon FROM categories";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        $list = array();
        
        while($row = $stmt->fetch()){
            $n = new Category($row);
            $list[] = $n;
        }
        
        $conn = null;
        
        return (array("results"=>$list));
    }
    
    public static function getByName($name){
        $conn = new PDO(DBCON, USERNAME, PASSWORD);
        $sql = "SELECT Id, Name, Icon FROM categories WHERE Name = :name LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":name", $name, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        
        $conn = null;
        
        if($row)
            return new Category ($row);
    }

}

?>