<?php      
        $host = "localhost";  
        $user = "root";  // SET TO YOUR OWN DATABASE
        $password = '';  
        $db_name = "deberain";  
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
    ?>  