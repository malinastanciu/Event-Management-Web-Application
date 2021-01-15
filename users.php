
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
<body style="background:url(user2.jpg); background-repeat:no-repeat;background-size:100% 100%">
</body>
</head>
</html>
<?php
  
include('conexiune.php');
$conn   = new mysqli('localhost', $username, $password,'best_music');
$sql    = "SELECT * FROM `users`";
$result = $conn->query($sql);
echo "<body style='background-color:#FFFAF0'>";
echo '<br/>';
echo '<h3 style="color:#800080;"><center>USERS</center></h3>';
if(is_object($result)){
    if($result->num_rows > 0){
        echo '<center>';
        echo '<table cellpadding="5">';
        echo '<tr style="color:#800080;"><th>USERNAME</th><th>PASSWORD</th>';
        while($row = $result->fetch_assoc()){
            
            echo '<tr>';
            echo '<td style="color:#800080;">'.$row['username'].'</td>';
                echo '<td style="color:#800080;">'.$row['password'].'</td>';
            echo '</tr>';
            echo '</center>';
        }
        echo '</table>';
    } else{
        echo '<h2 style="color:red;">Nu exista niciun user!</h2>';
    }
} else{
    echo '<h2 style="color:red;">Eroare!</h2>';
}

?>