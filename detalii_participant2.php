<?php
if(isset($_POST['Search']))
{
    // $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT P.nume, P.prenume FROM participanti P WHERE NOT EXISTS (SELECT * FROM participantieveniment PE WHERE PE.id_participant = P.id_participant)";
    $search_result = filterTable($query);
}
else {
    $query = "SELECT * FROM `participanti`";
    $search_result = filterTable($query);
}
function filterTable($query)
{
    $connect = mysqli_connect("localhost","root","","best_music");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<html>
    <head>
            <title> Detalii participanti</title>
            <style>
                body { 
                background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.5)),url(f3.jpg);
                height: 100%;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment:fixed;
                background-size:100% 100%
                
                
                }
                
                body table{
                    
                    background-color: Transparent;
                    background-repeat:no-repeat;
                    cursor:pointer;
                    overflow: hidden;
                    position:relative;
                    
                }
                table, tr,th, td{
                    border: 1px solid black;
                    
                }
                body h1{
                    margin-top: 70px auto 0;
                }
            </style>
    </head>
    
    <body>
    <center>
    <br></br> <br></br> <br></br> <br></br>
    <h1>Vizualizarea persoanelor care nu participa la evenimente</h1>
        <form action="detalii_participant2.php" method="post">
        <!-- <input type="text" name="valueToSearch" placeholder="Introduceti nume eveniment"><br></br> -->
        <input type="submit" name="Search" value="Filter"> <br></br>

            <table>
                <tr>
                    <th>Nume</th>
                    <th>Prenume</th>
                </tr>
                <?php while($row = mysqli_fetch_array($search_result)): ?>
                <tr>
                    <td><?php echo $row['nume'];?></td>
                    <td><?php echo $row['prenume'];?></td>
                </tr>
                <?php endwhile; ?>
            </table>
        </form>
    </center>
    </body>        
</html>