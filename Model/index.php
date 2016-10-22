<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'model_generator.php';
        include 'db.php';

        $mg = new ModelGenerator();
        $mg->prepareStatement('cities');
        $mg->generate();
        
        /*$file = fopen("Buyers.csv", "r");
        $conn = new PDO(DBCON, USERNAME, PASSWORD);
        while (!feof($file)) {
            //print_r(fgetcsv($file));
            // echo"<br/><br/>";
            $arr = fgetcsv($file);

            $sql = "INSERT INTO buyers (BYCODE, NAME, VAT_NO) VALUES (:bycode,  :name, :vatno)";
            $stmt = $conn->prepare($sql);

            $stmt->bindValue(":bycode", $arr[0]);
            $stmt->bindValue(":name", $arr[1]);
            $stmt->bindValue(":vatno", $arr[2]);
            $pdoErroInfo = $stmt->errorInfo();
            $stmt->execute();


            //$conn = null;
        }
         
                  
         fclose($file);*/
        ?>
    </body>
</html>
