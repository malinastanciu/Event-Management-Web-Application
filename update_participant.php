<html>
<head>
<title>Update inregistrari tabel PARTICIPANTI</title>
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
    $sql    = "SELECT * FROM `participanti`";
    $result = $conn->query($sql);
?>
<h1><center>UPDATE Participant</center></h1>
<center>
<table>
<tr>
    <th>Nume</th>
    <th>Prenume</th>
    <th>CNP</th>
    <th>Telefon</th>
</tr>
    <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr><form action=update_participant2.php method = post>";
            echo "<td><input type=text name=Nume value='".$row['nume']."'</td>";
            echo "<td><input type=text name=Prenume value='".$row['prenume']."'</td>";
            echo "<td><input type=text name=CNP value='".$row['CNP']."'</td>";
            echo "<td><input type=text name=Telefon value='".$row['telefon']."'</td>";
            echo "<input type=hidden name=id value='".$row['id_participant']."'>";
            echo "<td><input type=submit>";
            echo "</form></tr>";
        }
    ?>
</table>
</center>
</body>
</html>