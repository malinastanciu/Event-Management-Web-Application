<?php
$username="root";
$password="";
$database="best_music";
 
$sql=mysqli_connect("localhost",$username,$password) or die ('Eroare');

$db=mysqli_select_db($sql,$database) or die("Nu gasesc o baza de date cu numele " .$database);
if($db)
echo '<b><h1 style="color: indigo;">Ati reusit conectarea la baza de date</h1></b> ';

