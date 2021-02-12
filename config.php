<?php
    $base_url = "http://localhost/Job-Search/";
    // To connect to database 
    // Required - username, password, dbname, domainname
    function connection(){
        $host = "localhost";
        $user = "root_user";
        $password = "root_user";
        $database = "job_search";
        $conn = mysqli_connect($host, $user, $password, $database);
        if(!$conn)
            return false;
        return $conn;    
    }

    function disconnect($conn){
        mysqli_disconnect($conn);
    }
