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
    $telefon = $_POST['telefon'];
    $pret = $_POST['pret'];
    $SQL_INSERT = "INSERT INTO `artist`
                    (id_artist, nume, prenume, telefon, pret)
                    VALUES (DEFAULT, '$nume', '$prenume', '$telefon', '$pret')";
    if(!mysqli_query ($conn, $SQL_INSERT)){
        echo 'Artistul nu a fost adaugat';
    } else{
        echo 'Artistul a fost inserat cu succes';
    }

?>