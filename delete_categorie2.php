<?php
    $username="root";
    $password="";
    $database="best_music";
    //Connect with MYSQL
    $conn   = new mysqli('localhost', $username, $password,'best_music');
    $sql    = "DELETE FROM `categorie` WHERE id_categorie='$_GET[id]'";
    if($conn->query($sql))
        header("refresh:0.5; url=delete_categorie.php");
    else 
        echo "Not DELETED";
?>