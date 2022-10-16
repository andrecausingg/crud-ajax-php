<?php
    if(isset($_POST["firstName"]) || isset($_POST["lastName"])){
        $classInsert = new classInsert($_POST["firstName"], $_POST["lastName"]);
        $classInsert->insertData();
    }

    class classInsert{
        // Properties
        private $firstName;
        private $lastName;

        // Methods
        function __construct($firstName,$lastName){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }

        function insertData(){
            // File Connection Database
            require_once("../helper/connectionHF.php");
            
            // Class
            $classDataBaseConnection = new classDataBaseConnection();

            // Insert Code
            $query_insert = mysqli_query($classDataBaseConnection->connect(),"INSERT INTO person_tbl (person_first_name, person_last_name) VALUES ('$this->firstName', '$this->lastName')");
        
            if($query_insert){
                echo "Success Insert";
            }
        }
    }
?>