<?php

try{
    define('SERVERNAME',"localhost");
    define('USERNAME',"root");
    define('PASSWORD','');
    define('DADABASE',"auto_planner");
    

    $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DADABASE, USERNAME, PASSWORD);
    // set the PDO error mode to exception
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $error){
echo "Connection failed".$error->getMessage();}
?>
