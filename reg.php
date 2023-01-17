<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$userpassword=$_POST['password'];
//$user=$_POST['name'];





$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO admintable (firstname, lastname,password, email)
VALUES ('$firstname', '$lastname','$userpassword','$email');";


if (mysqli_multi_query($conn, $sql)) {
  header("Location:login.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>