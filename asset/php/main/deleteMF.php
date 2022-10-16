<?php
    if(isset($_POST["deleteDataID"])){
        $classDelete = new classDelete($_POST["deleteDataID"]);
        $classDelete->deleteData();
    }

    class classDelete{
        // Properties
        private $deleteID;

        // Methods
        function __construct($deleteDataID){
            $this->deleteDataID = $deleteDataID;
        }

        function deleteData(){
            // File Connection Database
            require_once("../helper/connectionHF.php");
            
            // Class
            $classDataBaseConnection = new classDataBaseConnection();

            $query_delete = mysqli_query($classDataBaseConnection->connect(),"DELETE FROM person_tbl WHERE person_id = '$this->deleteDataID'");
            
            if($query_delete){
                echo "Success Delete";
            }
        }
    }
?>