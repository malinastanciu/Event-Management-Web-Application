<?php
echo '<b><h1 style="text-align: center; margin-top=20px; color: indigo;">Best Music</h1></b> ';
include('conexiune.php')
?>

<html>
<head>
<style>

body { 
   background-image: linear-gradient(rgba(0,0,0,0.35),rgba(0,0,0,0.8)),url(9.jpg);
   height: 95vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment:fixed;
}
h3{color:pink;}
</style>
</head>
<body>
<center>
<?php
echo"<br></br>";
echo"<br></br>";
echo"<br></br>";
echo'<input type="button" style="width:170px; height: 40px; color:pink;background-color:purple" value="CATEGORIE" onclick="window.location=\'categorie.php\'"/>';
echo ' ';
echo"<br></br>";
echo"<br></br>";
echo'<input type="button" style="width:170px; height: 40px; color:pink;background-color:purple" value="EVENIMENT" onclick="window.location=\'eveniment.php\'"/>';
echo ' ' ;
echo'<input type="button" style="width:170px; height: 40px; color:pink;background-color:purple" value="PARTICIPANTI" onclick="window.location=\'participanti.php\'"/>';
echo ' ';
echo"<br></br>";
echo"<br></br>";
echo'<input type="button" style="width:170px; height: 40px; color:pink;background-color:purple" value="ARTIST" onclick="window.location=\'artist.php\'"/>';
echo ' ';

echo'<input type="button" style="width:170px; height: 40px; color:pink;background-color:purple" value="EvenimentArtist" onclick="window.location=\'evenimentartist.php\'"/>';
echo ' ';

echo'<input type="button" style="width:170px; height: 40px; color:pink;background-color:purple" value="ParticipantiEveniment" onclick="window.location=\'participantieveniment.php\'"/>';
echo ' ';

?>
</center>

<?php
echo "<div align='right'>";
echo"<br></br>";
echo"<br></br>";
echo"<br></br>";
echo"<br></br>";
echo"<br></br>";
echo'<input type="button" style="width:120px; height: 25px; color:pink;background-color:purple" value="Users" onclick="window.location=\'users.php\'"/>';
echo ' '
?>
</right>
</body>
</html>