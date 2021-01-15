<?php
if(isset($_POST["Submit"])){  
      
    if(!empty($_POST['UserName']) && !empty($_POST['Password'])) {  
        $username=$_POST['UserName'];
        $password=$_POST['Password'];  




        $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
        mysqli_select_db($con,'best_music') or die("cannot select DB");  
      
        $query=mysqli_query($con, "SELECT * FROM users WHERE UserName='".$username."' AND Password='".$password."' ");  
        $numrows=mysqli_num_rows($query);  



        if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($query))  
        {  
        $dbusername=$row['username'];
        $dbpassword=$row['password'];  
        }  

      
        if($username == $dbusername && $password == $dbpassword)  
        {  
         include('butoane.php');
        }  
        } else {  
          echo '<b><h1 style="color:indigo;text-align: center; margin-top=20px">Datele utilizatorului sunt incorecte!</h1></b>'; 
     }  
      
    } 
    else {  
        echo "<b><h1>All fields are required!</h1></b>";  
    }  
}
   ?>