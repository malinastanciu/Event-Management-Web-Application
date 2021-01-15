<?php
    $username="root";
    $password="";
    $database="best_music";
    //Connect with MYSQL
    $conn   = new mysqli('localhost', $username, $password,'best_music');
    $sql    = "DELETE FROM `participanti` WHERE id_participant='$_GET[id]'";
    if($conn->query($sql))
        header("refresh:0.5; url=delete_participant.php");
    else 
        echo "Not DELETED";
?>