<?php
if(isset($_POST['Search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $valueToSearch2 = $_POST['valueToSearch2'];
    $query = "select eveniment.sponsor from eveniment join evenimentartist on eveniment.id_eveniment=evenimentartist.id_eveniment join artist on evenimentartist.id_artist=artist.id_artist join categorie on eveniment.id_categorie=categorie.id_categorie WHERE artist.nume='$valueToSearch' and categorie.nume='$valueToSearch2'";
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
            <title> Detalii artist</title>
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
    <h1>Vizualizarea sponsorilor in functie artist si categroie</h1>
        <form action="detalii_eveniment2.php" method="post">
        <input type="text" name="valueToSearch" placeholder="Introduceti nume artist"><br></br>
        <input type="text" name="valueToSearch2" placeholder="Introduceti nume categorie"><br></br>
        <input type="submit" name="Search" value="Filter"> <br></br>

            <table>
                <tr>
                    <th>Nume sponsor</th>
                    
                </tr>
                <?php while($row = mysqli_fetch_array($search_result)): ?>
                <tr>
                    <td><?php echo $row['sponsor'];?></td>
                    
                </tr>
                <?php endwhile; ?>
            </table>
        </form>
    </center>
    </body>        
</html>