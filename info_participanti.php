<html>
<head>
<style>

</style>
<body style="background:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.5)),url(f2.jpg); background-repeat:no-repeat;background-size:100% 100%">
</body>
</head>
</html>
<?php
// include('conexiune.php');
echo"<left>";
echo "<h3>Vizualizarea participantilor in functie de eveniment</h3>";
echo'<input type="button" style="width:170px; height: 30px; color:black;background-color:orange" value="View" onclick="window.location=\'detalii_participant.php\'"/>';
echo ' ';
echo"<br></br>";
echo"<br></br>";
echo"<br></br>";
echo "<h3>Vizualizare participanti fara eveniment</h3>";
echo'<input type="button" style="width:170px; height: 30px; color:black;background-color:orange" value="View" onclick="window.location=\'detalii_participant2.php\'"/>';
echo ' ';

?>