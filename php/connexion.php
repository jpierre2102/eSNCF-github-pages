<?php
    $dbname = "csesncf";
    $host='localhost';
    $user='root';
    $pass='root';

    $db = new PDO("mysql:host=$host;dbname=$dbname;Encrypt=true;charset=UTF8", "$user", "$pass");


?>