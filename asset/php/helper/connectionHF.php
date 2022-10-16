<?php 
    class classDataBaseConnection{
        // Properties
        private $serverName = "localhost";
        private $dbName = "crud_db";
        private $userName = "root";
        private $password = "";
        
        // Methods
        public function connect(){
            // function to connect in database
            $connection = mysqli_connect($this->serverName,$this->userName,$this->password,$this->dbName);
            
            // for error
            if(mysqli_connect_errno()){
                echo "FAILED TO CONNECT TO MYSQL: " . mysqli_connect_error();
            }
            
            // Condition to check the database is connected to this script
            // else{
            //     echo "CONNECTED";
            // }
            return $connection;
        }
    }
?>


