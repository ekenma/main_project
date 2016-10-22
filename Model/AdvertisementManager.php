<?php

class Advertisement {
    public $id = null;
    public $title = null;
    public $description = null;
    public $price = null;
    public $added_date = null;
    public $rating = null;
    public $views = null;
    public $contact_no = null;
    public $email = null;
    public $category = null;
    public $sub_category = null;
    public $destrict = null;
    public $user = null;
    public $status = null;

    public function __construct($data = array()) {
        if (isset($data["Id"])) {
            $this->id = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Id"]);
        }
        if (isset($data["Title"])) {
            $this->title = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Title"]);
        }
        if (isset($data["Description"])) {
            $this->description = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Description"]);
        }
        if (isset($data["Price"])) {
            $this->price = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Price"]);
        }
        if (isset($data["Added_Date"])) {
            $this->added_date = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Added_Date"]);
        }
        if (isset($data["Rating"])) {
            $this->rating = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Rating"]);
        }
        if (isset($data["Views"])) {
            $this->views = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Views"]);
        }
        if (isset($data["Contact_No"])) {
            $this->contact_no = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Contact_No"]);
        }
        if (isset($data["Email"])) {
            $this->email = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Email"]);
        }
        if (isset($data["Category"])) {
            $this->category = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Category"]);
        }
        if (isset($data["Sub_category"])) {
            $this->sub_category = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Sub_category"]);
        }
        if (isset($data["Destrict"])) {
            $this->destrict = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Destrict"]);
        }
        if (isset($data["User"])) {
            $this->user = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["User"]);
        }
        if (isset($data["Status"])) {
            $this->status = preg_replace("/[^\.\,\-\_'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data["Status"]);
        }
    }
    
    public static function getAdCountByCategory($category){
        $conn = new PDO(DBCON, USERNAME, PASSWORD);
        $sql = "SELECT COUNT(*) AS AdCount FROM advertisements WHERE Category = :category";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":category", $category, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        
        $count = 0;
        
        if($row){
            $count = $row["AdCount"];
        }
        
        $conn = null;
            
        return $count;  
    }
    
    public static function getAdsByCategoryName($categoryName){
        $conn = new PDO(DBCON, USERNAME, PASSWORD);
        $sql = "SELECT a.Id, a.Title, a.Description, a.Price, a.Added_Date, a.Ratings, a.Views, a.ContactNo, a.Email, a.Category, 
               a.Sub_Category, a.Destrict, a.User, a.Status
               FROM advertisements a
               INNER JOIN categories c ON c.Id = a.Category
               WHERE c.Name = :categoryname
               ORDER BY a.Added_Date";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":categoryname", $categoryName, PDO::PARAM_STR);
        $stmt->execute();
        $list = array();
        
        while($row = $stmt->fetch()){
            $n = new Advertisement($row);
            $list[] = $n;
        }
        
        $conn = null;
        
        return $list;
    }
    
    public static function getAdCountByDistrictname($district){
        $conn = new PDO(DBCON, USERNAME, PASSWORD);
        $sql = "SELECT COUNT(*) AS Ad_Count
                FROM advertisements a
                INNER JOIN destricts d ON d.Id = a.Destrict
                WHERE d.Name = :district
                GROUP BY d.Id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":district", $district, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        
        $count = 0;
        
        if($row){
            $count = $row["Ad_Count"];
        }
        
        $conn = null;
            
        return $count;  
    }

}

?>