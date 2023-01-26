<?php 

session_start();
// function logout(){
// session_destroy();
// header("Location:login.php");
// }

// if(isset($_SESSION['User'])){
//     echo"WELCOME ".$_SESSION['User']."<tab><tab><script><input type="button" value='Logout' onclick='logout()'/></script>" ;
// }
// else{
//     echo"NOT SET";
// }
// ;
if(isset($_SESSION['User'])){
       echo"WELCOME ".$_SESSION['User'];}
?>


<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>
<body>
    <p>WELCOME TO THE ADMIN PAGE</p>
   <a href="registercustomers1.php"> <input type="button" value="Register New Client" name="register"/></a>
    <a href="selectclient.php"><input type="button" value="Cutomer Checklist" name="checklist"/></a>
    <a href="showdb.php"><input type="button" value="Show DataBase" name="Database"/></a>

</body>
</html>


