<html>
<head>
<style>
table, th, td {
    border: 3px solid black;
    border-collapse: collapse;
    border-color: #800080;
  }
h3{
    
}

</style>
<body style="background:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.5)),url(fundal.jpg); background-repeat:no-repeat;background-size:100% 100%">
</body>
</head>
</html>
<?php  
include('conexiune.php');

$conn   = new mysqli('localhost', $username, $password,'best_music');
$sql    = "SELECT * FROM `participantieveniment`";
$result = $conn->query($sql); // executam query-ul 
echo "<body style='background-color:#FFFAF0'>";
echo '<br/>';
echo '<h3 style="color:#800080;"><center>ParticipantiEveniment</center></h3>';
if(is_object($result)){
    # In caz ca query-ul nu a avut erori
    if($result->num_rows > 0){
        echo '<center>';
        echo '<table cellpadding="3">';
        echo '<tr style="color:#800080;"><th>ID participant</th><th>ID eveniment</th>';
        # Metoda(functia) fetch_assoc() returneaza cate o linie pe rand din rezultate
        # iar cand nu mai sunt rezultate returneaza FALSE si astfel while se opreste
        while($row = $result->fetch_assoc()){
            echo '<tr>';
            echo '<td style="color:#800080;">'.$row['id_participant'].'</td>';
                echo '<td style="color:#800080;">'.$row['id_eveniment'].'</td>';
            echo '</tr>';
            echo '</center>';
        }
        echo '</table>';
    } else{
        echo '<h2 style="color:red;">Nu exista nicio categorie!</h2>';
    }
} else{
    echo '<h2 style="color:red;">Eroare!</h2>';
}
?>