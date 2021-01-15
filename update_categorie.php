<html>
<head>
<title>Update inregistrari tabel CATEGORIE</title>
<style>
body { 
    color: white;
   background-image:url(f.jpg);
   height: 500px;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment:fixed;
 
  
}
body table{
    margin: 10px auto 0;
    background-color: Transparent;
    background-repeat:no-repeat;
    cursor:pointer;
    overflow: hidden;
    position:relative;
    
}
body h1{
    margin: 70px auto 0;
}

</style>
</head>
<body>
<?php
$username="root";
$password="";
$database="best_music";
    //Connect with MYSQL
    $conn   = new mysqli('localhost', $username, $password,'best_music');
    $sql    = "SELECT * FROM `categorie`";
    $result = $conn->query($sql);
?>
<h1><center>UPDATE Artist</center></h1>
<center>
<table>
<tr>
    <th>Nume</th>
</tr>
    <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr><form action=update_categorie2.php method = post>";
            echo "<td><input type=text name=Nume value='".$row['nume']."'</td>";
            echo "<input type=hidden name=id value='".$row['id_categorie']."'>";
            echo "<td><input type=submit>";
            echo "</form></tr>";
        }
    ?>
</table>
</center>
</body>
</html>