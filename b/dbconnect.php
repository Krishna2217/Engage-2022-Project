<?php
        // connect to database
        $servername = "localhost";
        $username  = "root";
        $password = "";
        $database = "criminal_info";

        $conn = mysqli_connect($servername,$username,$password,$database);

        if($conn){
            echo "Connection Ban Gyaa";
        }
        else{
            echo "Connection nhii bnaa";
        }

?>