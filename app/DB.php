<?php

    require_once 'include/RB.php';

    $host = '127.0.0.1';
	$user = 'root';
	$password = '';
	$database = 'edmeteo';

    R::setup("mysql:host=" . $host . ";dbname=" . $database, $user, $password);
    R::freeze(true);
    
    if(!R::testConnection()) {
        try{
            $db = new PDO("mysql:host=" . $host . ";dbname=" . $database, $user, $password);
        } catch(PDOException $exception){
            echo "Error! {$exception->getmessage()}";
        }
    }
    
    R::close();

?>