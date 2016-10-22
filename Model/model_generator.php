<?php
class ModelGenerator extends PDO{
    private $sql = "";
    private $classname = "";
    
    public function ModelGenerator(){
        
        $dsn = "mysql:host=".HOST.";dbname=".DATABASE.";";
        
        parent::__construct($dsn, USERNAME, PASSWORD);
    }
    
    public function prepareStatement($table){
        $sql = "SELECT COLUMN_NAME, COLUMN_TYPE, EXTRA  FROM information_schema.columns WHERE table_schema = '".DATABASE."' AND table_name = '$table'";
        
        $this->sql = $sql;
        $this->classname = $table;
        
    }
    
    public function generate() {
        $st = $this->prepare($this->sql);
        $st->execute();

        $list = array();

        while ($row = $st->fetch()) {
            $list[] = $row;
        }

        $attrs = "";
        $param = '$data = array()';
        $publicattrs = "";

        foreach ($list as $row) {
            $publicattrs = $publicattrs . "\n" . "public $" . strtolower($row["COLUMN_NAME"]) . "=null;";
            $curval = '$data["' . $row["COLUMN_NAME"] . '"]';
            $attrs = $attrs . "\nif(isset($curval)){
        " . '$this->' . strtolower($row["COLUMN_NAME"]) . '= preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", ' . $curval . ');
            }';
        }

        $code = "<?php 
        class $this->classname {
            $publicattrs
            public function __construct($param) {
                $attrs  
            }
            " . '
        }
        ?>';

        file_put_contents($this->classname.".php", $code);
    }
}
?>
