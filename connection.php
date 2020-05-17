<?php
    $dsn="mysql:host=localhost;dbname=gestionpub;port=3308";
    $user="root";
    $pass="";
    
    
    try{
        $db =new PDO($dsn,$user,$pass);
        echo "connected";
    }catch(PDOException $er){
        echo "err".$er->getMessage();
    }    
?>