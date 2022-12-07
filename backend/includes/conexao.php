<?php

try{
    define('SERVERNAME',"10.97.47.61");
    define('USERNAME',"autoplanner");
    define('PASSWORD',"12345");
    define('DADABASE',"auto_planner");

    $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DADABASE, USERNAME, PASSWORD);
    // set the PDO error mode to exception
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $error){
echo "Connection failed".$error->getMessage();}
?>
