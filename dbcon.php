<?php
try{
    $con=new PDO("mysql:host=localhost;dbname=mfinancedu","root","");
}
catch(PDOException $e){
    die("Connection failed".$e->getmessage());
}
?>