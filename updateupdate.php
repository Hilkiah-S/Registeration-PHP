<?php 
session_start();
$conn = mysqli_connect("localhost","root","","admin");
$ide=$_SESSION['id'];
if(isset($_POST['submit'])){
        
    if(isset($_POST['newfirstname'])){
        $newfirstname=$_POST['newfirstname'];
        $sql="SELECT * FROM admintable WHERE ID='$ide'";
        mysqli_query($conn,$sql);
        $sqlone="UPDATE admintable SET firstname='$newfirstname' WHERE ID='$ide' ";
        if(mysqli_query($conn,$sqlone))
              {
        echo"<script>alert(`${ide} ${newfirstname} SUCCEFULLY UPDATED`);
    
    </script>";
              }
    }
    if(isset($_POST['newlastname'])){
        $newlastname=$_POST['newlastname'];
        $sql="SELECT * FROM admintable WHERE ID='$ide'";
        mysqli_query($conn,$sql);
        $sqltwo="UPDATE admintable SET lastname='$newlastname' WHERE ID='$ide' ";
        if(mysqli_query($conn,$sqltwo)){
        echo"<script>alert(`${ide} ${newlastname} SUCCEFULLY UPDATED`);
    
    </script>";
        }
    }
    if(isset($_POST['newemail'])){
        $newemail=$_POST['newemail'];
        $sql="SELECT * FROM admintable WHERE ID='$ide'";
        mysqli_query($conn,$sql);
        $sqlthree="UPDATE admintable SET email='$newemail' WHERE ID='$ide' ";
        if(mysqli_query($conn,$sqlthree)){
        echo"<script>alert(`${ide} ${newemail} SUCCEFULLY UPDATED`);
                     window.location='tabledisplay.php';
    </script>";
        }
    }}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>