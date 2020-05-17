<?php
    session_start();
    require_once("connection.php");
    $dpub=$_GET["id_d"];
    $sql=("delete from publication where id_P = '$dpub'");
    $prepare=$db->prepare($sql);
        $prepare->execute();
        $row=$prepare->rowCount();
        if($row>0){
            header("location:profil.php");
        }else{
            echo "error";
        }
    
?>