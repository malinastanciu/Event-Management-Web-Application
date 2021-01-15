<?php

$username="root";
$password="";
$database="best_music";
 
//$sql=mysqli_connect("localhost",$username,$password) or die ('Eroare');

//$db=mysqli_select_db($sql,$database) or die("Nu gasesc o baza de date cu numele " .$database);
$conn = mysqli_connect('localhost', 'root', '', 'best_music');

// if(!$conn) {
//     echo 'Nu s-a conectat';
// }
// else {
//     echo 'S-a conectat';
// }
    
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $CNP = $_POST['CNP'];
    $telefon = $_POST['telefon'];
    $SQL_INSERT = "INSERT INTO `participanti`
                    (id_participant, nume, prenume, CNP, telefon)
                    VALUES (DEFAULT, '$nume', '$prenume', '$CNP', '$telefon')";
    if(!mysqli_query ($conn, $SQL_INSERT)){
        echo 'Participantul nu a fost adaugat';
    } else{
        echo 'Participantul a fost inserat cu succes';
    }

?>