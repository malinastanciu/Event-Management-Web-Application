<?php
if(isset($_POST['Search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `categorie` join eveniment on categorie.id_categorie=eveniment.id_categorie where categorie.nume='$valueToSearch'";
    $search_result = filterTable($query);
}
else {
    $query = "SELECT * FROM `eveniment`";
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
            <title> Detalii categorie</title>
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
    <h1>Vizualizarea concertelor in functie de categorie</h1>
        <form action="detalii_categorie.php" method="post">
        <input type="text" name="valueToSearch" placeholder="Introduceti nume categorie"><br></br>
        <input type="submit" name="Search" value="Filter"> <br></br>

            <table>
                <tr>
                    <th>Nume concert</th>
                    
                </tr>
                <?php while($row = mysqli_fetch_array($search_result)): ?>
                <tr>
                    <td><?php echo $row['nume_eveniment'];?></td>
                    
                </tr>
                <?php endwhile; ?>
            </table>
        </form>
    </center>
    </body>        
</html>