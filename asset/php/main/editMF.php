<?php
    if(isset($_POST["updateDataID"]) || isset($_POST["updateupdateFirstName"]) || isset($_POST["updateupdateLastName"])){
        $classEdit = new classEdit($_POST["updateDataID"] ,$_POST["updateFirstName"] ,$_POST["updateLastName"]);
        $classEdit->updateData();
    }

    class classEdit{
        // Properties
        private $updateDataID;
        private $updateFirstName;
        private $updateLastName;

        // Methods
        function __construct($updateDataID,$updateFirstName,$updateLastName){
            $this->updateDataID = $updateDataID;
            $this->updateFirstName = $updateFirstName;
            $this->updateLastName = $updateLastName;
        }

        function updateData(){
            // File Connection Database
            require_once("../helper/connectionHF.php");
            
            // Class
            $classDataBaseConnection = new classDataBaseConnection();

            // Update Code
            $query_update = mysqli_query($classDataBaseConnection->connect(),"UPDATE person_tbl SET person_first_name = '$this->updateFirstName' ,person_last_name = '$this->updateLastName' WHERE person_id ='$this->updateDataID'");
        
            if($query_update){
                echo "Success Update";
            }
        }
    }
?>