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
<!-- <html>
<head>
<title>Title of the document</title>
</head>
<body>
    
   <a href="registercustomers1.php"> <input type="button" value="Register New Client" name="register"/></a>
    <a href="selectclient.php"><input type="button" value="Cutomer Checklist" name="checklist"/></a>
    <a href="showdb.php"><input type="button" value="Show DataBase" name="Database"/></a>

</body>
</html> -->

  <head>
    <style>
      .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 60px;
        background-color: white;
        padding: 50 px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        position: fixed;
        top: 0;
        width: 100%;
        margin: 0;
        margin-left:0;
      }
      .navbar img {
  height: 40px;
  width: 40px;
  border-radius: 50%;
  right: 50px;
  margin-right: 60px;
}
      .body {
        background-color:rgb(230, 230, 230);
        height: 100%;
        width:100%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .btn {
        background-color: grey;
        color: white;
        padding: 10px 20px;
        border: 2px solid grey;
        border-radius:4px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0.5, 0.5);
        margin: 20px;
      }
    </style>
  </head>
  <body>
    <div class="navbar">
      <h3 style="color:grey;font-family:arial;text-transform:uppercase;"><?php if(isset($_SESSION['User'])){
       echo"WELCOME ".$_SESSION['User'];}?></h3>
       <?php 
       if(isset($_SESSION['User'])){
        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";
         $conn = mysqli_connect($servername, $username, $password, $dbname);
         $cid=$_SESSION['id'];
         $sql="SELECT * FROM admintable WHERE ID='$cid'";
         $res=mysqli_query($conn,$sql);
         $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
         $pic=$row['picture'];
       }
       ?>
      <?php echo "<img src='uploads/personsimg/$pic' >"?>
    </div>
    <div class="body">
    <!-- <a href="selectclient.php"><input type="button" value="Cutomer Checklist" name="checklist"/></a>
    <a href="showdb.php"><input type="button" value="Show DataBase" name="Database"/></a> -->
    <a href="registercustomers1.php"> <button class="btn" name="register">Register New Client</button></a>
    <a href="selectclient.php"> <button class="btn" name="checklist">Customer Checklist</button></a>
      <!-- <button class="btn">Button 1</button>
      <button class="btn">Button 2</button>
      <button class="btn">Button 3</button> -->
    </div>
  </body>
</html>



