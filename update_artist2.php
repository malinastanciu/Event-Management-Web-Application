<?php
        $username="root";
        $password="";
        $database="best_music";
            //Connect with MYSQL
            $conn   = new mysqli('localhost', $username, $password,'best_music');
            //UPDATE QUERY
            $sql    = "UPDATE `artist` SET nume='$_POST[Nume]', prenume='$_POST[Prenume]',  telefon='$_POST[Telefon]' , pret='$_POST[Pret]' WHERE id_artist='$_POST[id]'";
            //$result = $conn->query($sql);
            if($conn->query($sql))
                header("refresh:0.5; url= update_artist.php");
            else 
                echo "Not UPDATE";
  ?>