<?php

class City {
    public $id = null;
    public $name = null;
    public $district = null;

    public function __construct($data = array()) {
        if (isset($data["Id"])) {
            $this->id = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Id"]);
        }
        if (isset($data["Name"])) {
            $this->name = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Name"]);
        }
        if (isset($data["District"])) {
            $this->district = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["District"]);
        }
    }
    
    public static function getByDistric($district){
        $conn = new PDO(DBCON, USERNAME, PASSWORD);
        $sql = "SELECT Id, Name, District FROM cities WHERE District = :district";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":district", $district, PDO::PARAM_STR);
        $stmt->execute();
        
        $list = array();
        
        while($row = $stmt->fetch()){
            $n = new City($row);
            $list[] = $n;
        }
        
        $conn = null;
        
        return $list;
    }

}

?>