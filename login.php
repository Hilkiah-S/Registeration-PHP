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
  $_SESSION['User']=$row['firstname'];
  $_SESSION['Pass']=$row['password'];
  $_SESSION['id']=$row['ID'];
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
<title>Title of the document</title>
</head>

<body>
<div id="login-card" class="card" style="background-color: #8ccaff;">
<div class="card-body">
  <h2 class="text-center">Login form</h2>
  <br>
  <form action="login.php" method="post">
    <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="email" placeholder="Enter password" name="pswd">
    </div>
    <button type="submit" id="button" class="btn btn-primary deep-purple btn-block " name="submit">LOGIN</button>
    <!-- <p>Don't have an account?<p><a href="register.php">REGISTER</a> -->
<br>
    <br>
    
    <!-- <div id="btn" class="text-center">
   <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-facebook"></i></button>
   <button type="button" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-google"></i></button>
   <button type="button" class="btn btn-info btn-circle btn-sm"><i class="fa fa-twitter"></i></button>
   </div> -->
 
  </form>
</body>

</html>