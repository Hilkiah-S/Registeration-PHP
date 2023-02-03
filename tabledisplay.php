<?php

if(isset($_POST['submit'])){
    $id=$_POST["data"];
    $conn = mysqli_connect("localhost","root","","admin");
    $sql="DELETE FROM admintable WHERE id='$id'";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('DELETE SUCCESFULL')</script>";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See all the data</title>
    <style>
     input[type='button']{
        background-color:aqua;
        border-radius:4px;
        color:white;
        float:right;
     }
     input[type='submit']{
        background-color:blue;
        border:1px solid blue;
        border-radius:4px;
        color:white;
     }

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="margin:50px">                                               <a href='adminpage.php'><input type='button' value='USERMENU'></a>
    <h1>LIST OF EMPLOYEES</h1>
    <br>
    <table class="table">
        <thread>
        <tr>
            <th>FIRSTNAME</th>
            <th>LASTNAME</th>
            <th>Email</th>
            <th>ACTION</th>
        </tr>
</thread>
<tbody>
    <?php
    $conn = mysqli_connect("localhost","root","","admin");
    $sql="SELECT * FROM admintable";
    $result = mysqli_query($conn,$sql);

    if(!$result){
        die("Invalid query: ".$conn->error);
    }
    while($row=mysqli_fetch_assoc($result)){
       
        $id=$row['ID'];
        echo "<tr>
        <td>".$row['firstname']."</td>
        <td>".$row['lastname']."</td>
        <<td>".$row['email']."</td>
        <td><form action='update.php' method='post'><input type='hidden'  name='getid' value='$id'/><input type='submit' value='UPDATE' name='submitone'/></form>
        
    </td>
    </tr>";
    // 
    // <form action='tabledisplay.php' method='post'><input type='hidden' name ='data' value='$id' /><input type='submit' value='DELETE' name='submit'/></form>
    // <!-- <th>PHONE NUMBER</th> -->
    // <td>".$row['phone']."</td>
    }


?>
</tbody>
    </table>
    
</table>
</body>
</html>