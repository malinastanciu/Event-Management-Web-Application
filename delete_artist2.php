<?php
    $username="root";
    $password="";
    $database="best_music";
    //Connect with MYSQL
    $conn   = new mysqli('localhost', $username, $password,'best_music');
    $sql    = "DELETE FROM `artist` WHERE id_artist='$_GET[id]'";
    if($conn->query($sql))
        header("refresh:0.5; url=delete_artist.php");
    else 
        echo "Not DELETED";
?>