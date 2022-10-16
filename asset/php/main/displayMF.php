<?php
    class classDisplay{
        function displayData(){
            // File Connection Database
            require_once("./asset/php/helper/connectionHF.php");

            // Class
            $classDataBaseConnection = new classDataBaseConnection();

            // DISPLAY
            $fetch_data = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM person_tbl");
            while($row = mysqli_fetch_assoc($fetch_data)){
                $db_person_id = $row["person_id"];
                $db_person_first_name = $row["person_first_name"];
                $db_person_last_name = $row["person_last_name"];

                echo"
                    <table>
                        <tr>
                            <td>$db_person_id</td>
                            <td>$db_person_first_name</td>
                            <td>$db_person_last_name</td>
                            <td><button id='edit' data-id='$db_person_id'>Edit</button></td>
                            <td><button id='delete' data-id='$db_person_id'>Delete</button></td>
                        </tr>
                    </table>
                ";
            }
        }
    }
?>