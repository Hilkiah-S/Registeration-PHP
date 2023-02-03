<?php 
session_start();
$id=$_POST['getid'];
$_SESSION['id']=$id;
$conn = mysqli_connect("localhost","root","","admin");
if(isset($_POST['submitone'])){

// if(!($_POST['newid']==null)){
//     $ide=$_POST['newid'];
// if(!($_POST['newfirstname']==null)){
//     $newfirstname=$_POST['newfirstname'];
//     $sqlone="UPDATE admintable SET firstname='$newfirstname' WHERE ID='$ide' ";
//     mysqli_query($conn,$sqlone);
//     echo"<script>alert('SUCCEFULLY UPDATED');

// </script>";

// }
// if(!($_POST['newlastname']==null)){
//     $newlastname=$_POST['newlastname'];
//     $sqltwo="UPDATE admintable SET lastname='$newlastname' WHERE ID='$ide' ";
//     mysqli_query($conn,$sqltwo);
//     echo"<script>alert('SUCCEFULLY UPDATED');

// </script>";
    
// }
// if(!($_POST['newemail']==null)){
//     $newemail=$_POST['newemail'];
//     $sqlthree="UPDATE admintable SET email='$newemail' WHERE ID='$ide' ";
//     mysqli_query($conn,$sqlthree);
//     echo"<script>alert('SUCCEFULLY UPDATED');

// </script>";
    
}
// $sql = "SELECT * FROM admintable WHERE ID='$id'";
// $result= mysqli_query($conn,$sql);
// $row=mysqli_fetch_assoc($result);

// if(isset($_POST['submitone'])){


// $conn = mysqli_connect("localhost","root","","admin");
// $sql = "SELECT * FROM admintable WHERE ID='$id'";
// $result= mysqli_query($conn,$sql);
// $row=mysqli_fetch_assoc($result);
// $firstname=$row['firstname'];
// $lastname=$row['lastname'];
// $email=$row['email'];

// }
// if(isset($_POST['submit'])){
    
    // $conn = mysqli_connect("localhost","root","","admin");
    
    // $ide=$_POST['forid'];
    // $sql = "SELECT * FROM admintable WHERE ID='$ide'";
    // mysqli_query($conn,$sql);
   
    
// }

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
    <form action ="updateupdate.php" method ="post">
     <lable for="firstname">NEW FIRSTNAME</lable>
     <input type="text" name="newfirstname" id="firstname"/><br>
     <lable for="lastname">NEW LASTNAME</lable>
     <input type="text" name="newlastname" id="lastname"/><br>
     <lable for="email">NEW EMAIL</lable>
     <input type="text" name="newemail" id="email"/><br>
     <!-- <input type="hidden" name="newid" value="<?php $id ?>"/> -->
     <input type="submit" name="submit" value="UPDATE" />
    
</form>
    
</body>
</html>