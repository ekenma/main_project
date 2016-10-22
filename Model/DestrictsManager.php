<?php

class Destrict {
    public $id = null;
    public $name = null;

    public function __construct($data = array()) {
        if (isset($data["Id"])) {
            $this->id = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Id"]);
        }
        if (isset($data["Name"])) {
            $this->name = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Name"]);
        }
    }
    
    public static function  getFirstTenOrderByName(){
        $conn = new PDO(DBCON, USERNAME, PASSWORD);
        $sql = "SELECT Id, Name FROM destricts ORDER BY NAME ASC LIMIT 10";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        $list = array();
        
        while($row = $stmt->fetch()){
            $n = new Destrict($row);
            $list[] = $n;
        }
        
        $conn = null;
        
        return $list;
    }

}

?>