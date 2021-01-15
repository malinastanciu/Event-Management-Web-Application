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
    
    $SQL_INSERT = "INSERT INTO `categorie`
                    (id_categorie, nume)
                    VALUES (DEFAULT, '$nume')";
    if(!mysqli_query ($conn, $SQL_INSERT)){
        echo 'Categoria nu a fost adaugata';
    } else{
        echo 'Categoria a fost inserata cu succes';
    }

?>