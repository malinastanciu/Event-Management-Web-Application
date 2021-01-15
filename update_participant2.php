  <?php
        $username="root";
        $password="";
        $database="best_music";
            //Connect with MYSQL
            $conn   = new mysqli('localhost', $username, $password,'best_music');
            //UPDATE QUERY
            $sql    = "UPDATE `participanti` SET nume='$_POST[Nume]', prenume='$_POST[Prenume]', CNP='$_POST[CNP]', telefon='$_POST[Telefon]' WHERE id_participant='$_POST[id]'";
            //$result = $conn->query($sql);
            if($conn->query($sql))
                header("refresh:0.5; url= update_participant.php");
            else 
                echo "Not UPDATE";
  ?>