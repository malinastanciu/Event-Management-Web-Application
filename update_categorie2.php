<?php
        $username="root";
        $password="";
        $database="best_music";
            //Connect with MYSQL
            $conn   = new mysqli('localhost', $username, $password,'best_music');
            //UPDATE QUERY
            $sql    = "UPDATE `categorie` SET nume='$_POST[Nume]' WHERE id_categorie='$_POST[id]'";
            //$result = $conn->query($sql);
            if($conn->query($sql))
                header("refresh:0.5; url= update_categorie.php");
            else 
                echo "Not UPDATE";
  ?>