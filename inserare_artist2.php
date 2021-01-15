<?php
$username="root";
$password="";
$database="best_music";
 
$sql=mysqli_connect("localhost",$username,$password) or die ('Eroare');

$db=mysqli_select_db($sql,$database) or die("Nu gasesc o baza de date cu numele " .$database);

?>
<!DOCTYPE html>
<html>
<head>

    <meta charset = "UTF-8">
    <title>Inserare artist</title> 
<style>
body { 
   background-image:url(fundal_insert.jpg);
   height: 500px;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment:fixed;
 
  
}
.insertbox{
    margin: 150px auto 0;
    background-color: Transparent;
    background-repeat:no-repeat;
    border-radius:10px;
    cursor:pointer;
    overflow: hidden;
    position:relative;
    border-color:pink;
}

</style>
</head>
<body>
<div class = "insertbox">
    <h1><center>Inserare Artist</center></h1>
    <form action = 'inserare_artist.php' method = "post"><center>
        <input type="text" name="nume" placeholder = "Nume" required>
        <br></br>
        <input type="text" name="prenume" placeholder = "Prenume" required>
        <br></br>
        <input type="text" name="telefon" placeholder = "Telefon" required>
        <br></br>
        <input type="text" name="pret" placeholder = "Pret" required>
        <br></br>
        <input type="submit" name="" placeholder = "Inserarea artist">
    </center>
    </form>
</div>
</body>
</html>

