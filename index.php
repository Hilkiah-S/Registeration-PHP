<?php  
session_start();
if(isset($_POST['submit'])){

$mail=$_POST['email'];
$userpassword=$_POST['pswd'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="SELECT * FROM admintable WHERE email='$mail'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
$sqlone="SELECT * FROM tableofadmin WHERE email='$mail'";
$resone=mysqli_query($conn,$sqlone);
$rowone=mysqli_fetch_array($resone,MYSQLI_ASSOC);

if($mail==$row['email'] && $userpassword==$row['password']){
  // if($rowone['id']==11111111){
  //   $_SESSION['User']=$rowone['adminfirstname'];
  //   || 
  //   
  // }
  $_SESSION['id']=$row['id'];
  // mine
  $_SESSION['User']=$row['firstname'];
  $_SESSION['Pass']=$row['password'];
  $name=$row['adminfirstname'];
  echo $rowone['adminfirstname'];  
  echo $rowone['adminpassword']; 
  header("Location:welcome.php");
}
elseif ($mail==$rowone['email'] && $userpassword==$rowone['adminpassword']) {
  $email=$rowone['email'];
  header("Location:adminpage.php?id=1&email=$email");
}
else{
  echo "<script>
  alert('email or password is incorrect');
  </script>";
}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
      body {
  background-image: url("africa.jpg");
  background-size: cover;
  backdrop-filter: blur(5px);
  height: 100vh;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
}
      .container-shadow {
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
        background-color: white;
        border-radius: 5px;
        display: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        padding: 20px;
      }

      .close-icon {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
      }
      body {
  background-color: rgba(0, 0, 0, 0.5);
}
    </style>
  </head>
  <body style="background-color: white;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="backgroundcolor:black;color:white">
      <a class="navbar-brand" href="#">My Landing Page</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <button id="login-btn" class="btn btn-primary">Login</button>
          </li>
        </ul>
      </div>
    </nav>

    <div id="container" class="container-shadow">
      <span class="close-icon">&times;</span>
      <form action="index.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="pswd">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function() {
        $("#login-btn").click(function() {
          $("#container").show();
        });
        $(".close-icon").click(function() {
          $("#container").hide();
        });
      });
    </script>
  </body>
</html>

