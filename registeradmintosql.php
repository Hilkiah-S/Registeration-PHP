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


//$user=$_POST['name'];

if(isset($_POST['submit']) && isset($_FILES['file'])){
    
 $file=$_FILES['file'];
 print_r($file);
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];

    $fileextend=explode('.',$fileName);
    $fileActualExtension = strtolower(end($fileextend));
    $allowed = ['jpg','jpeg','png'];
    
    if(in_array($fileActualExtension,$allowed)){
if($fileError===0){
    if($fileSize<5000000){
        
        $fileNewName=$firstname.$lastname.date("d-m-y-h-i-s").".".$fileActualExtension;
        $fileNewDistination='uploads/personsimg/'.$fileNewName;
        move_uploaded_file($fileTmpName,$fileNewDistination);
        
      
        // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO tableofadmin (adminfirstname, adminlastname,adminpassword, email, adminpic)
VALUES ('$firstname', '$lastname','$userpassword','$email','$fileNewName')";


if (mysqli_multi_query($conn, $sql)) {
  
  header("Location:login.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


    }else{
 echo "File size not allowed";
    }}
else{
    echo "Some thing went wrong";
}

}}
else{
    echo"Not set";
}




?>