<?php

    $database   = '';       // database type "mysql"

    $host       = '';       // host ip or url (127.0.0.1 or localhost for xampp)
    $db         = '';       //database name
    $port       =  0;       // connection port (3306 for xampp)
    
    $user       = '';       // username
    $password   = '';
 
    $dns        = $database . ':host=' . $host . ';
                                dbname='.$db.';
                                port=' . $port;

try {

    $connection = new PDO($dns, $user, $password);
    
    //$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //return $connection; *boolean

    echo "Connected!";

} catch (PDOException $e) {

    echo $e->getMessage();

}
