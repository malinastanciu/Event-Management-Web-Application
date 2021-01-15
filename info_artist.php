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
echo "<h3>Vizualizare artisti in functie de eveniment</h3>";
echo'<input type="button" style="width:170px; height: 30px; color:black;background-color:orange" value="View" onclick="window.location=\'detalii_artist.php\'"/>';
echo ' ';
echo"<br></br>";
echo "<div align='right'>";
echo "<h3>Vizualizare artisti in functie de anul in care au participat</h3>";
echo'<input type="button" style="width:170px; height: 30px; color:black;background-color:orange" value="View" onclick="window.location=\'detalii_artist2.php\'"/>';
echo ' ';
echo '</div>';
echo"<br></br>";

echo "<h3>Vizualizare artisti in functie de categoria la care au participat</h3>";
echo'<input type="button" style="width:170px; height: 30px; color:black;background-color:orange" value="View" onclick="window.location=\'detalii_artist3.php\'"/>';
echo ' ';
echo"<br></br>";
echo "<div align='right'>";
echo "<h3>Vizualizare artisti in functie de numarul de evenimente la care participa</h3>";
echo'<input type="button" style="width:170px; height: 30px; color:black;background-color:orange" value="View" onclick="window.location=\'detalii_artist4.php\'"/>';
echo ' ';
echo '</div>';
echo "<h3>Vizualizare artisti in functie de pret</h3>";
echo'<input type="button" style="width:170px; height: 30px; color:black;background-color:orange" value="View" onclick="window.location=\'detalii_artist5.php\'"/>';
echo ' ';
?>