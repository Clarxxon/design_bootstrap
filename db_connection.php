<?php session_start();
try {    
    $connection = new PDO('mysql:host=localhost;dbname=jana_base;charset=utf8', 'root','');
}

 catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>