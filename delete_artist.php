<html>
<head>
<title>Stergere inregistrari tabel ARTISTI</title>
<style>
body { 
   background-image:url(fundal_insert.jpg);
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
<h1><center>DELETE Artist</center></h1>
<center>
<table border=1 cellpadding=1 cellspacing=1>
    <tr>
        <th>Nume</th>
        <th>Prenume</th>
         <th>Telefon</th>
        <th>Pret</th>
        <th>Delete</th>
    </tr>
    <?php
        $username="root";
        $password="";
        $database="best_music";
        //Connect with MYSQL
        $conn   = new mysqli('localhost', $username, $password,'best_music');
        $sql    = "SELECT * FROM `artist`";
        $result = $conn->query($sql);
        while($row=mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['nume']."</td>";
            echo "<td>".$row['prenume']."</td>";
            echo "<td>".$row['telefon']."</td>";
            echo "<td>".$row['pret']."</td>";
            echo "<td><a href=delete_artist2.php?id=".$row['id_artist'].">Delete</a></td>";
        }
    ?>
</table>
</center>
</body>
</html>