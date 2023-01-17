<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// if(isset($_POST['check'])){
// $id=$_POST['select'];
// $some="SELECT * FROM clients WHERE ID='$id'";
// $res=mysqli_query($conn,$sql);
// $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
// $firstname=$row['firstname'];
// $lastname=$row['lastname'];
// echo $firstname;
// echo $lastname;
// echo "<script>alert('Selected'+$fistname+$lastname)</script>";
// }
function check(){
  $id=$_POST['select'];
$some="SELECT * FROM clients WHERE ID='$id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
$firstname=$row['firstname'];
$lastname=$row['lastname'];
   
$_SESSION['customer']=$firstname;
echo "<script>alert('Selected'+$fistname+$lastname)</script>";
    }
if(isset($_POST['submit'])){
   
    $id=$_POST['select'];
    $sql="SELECT * FROM clients WHERE ID='$id'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
    $firstname=$row['firstname'];
    $lastname=$row['lastname'];
    //$_SESSION['cutomerid']=$id;
    echo "<script>alert(`${firstname} ${lastname}`);</script>";
      if(isset($_POST['check'])){
       header("Location:checklist.php");}
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>
<body>
<?php if(isset($_POST['submit'])){
   
   $id=$_POST['select'];
   $sql="SELECT * FROM clients WHERE ID='$id'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
   $firstname=$row['firstname'];
   $lastname=$row['lastname'];
   $_SESSION['id']=$id;
   //$_SESSION['cutomerid']=$id;
   echo "<script>alert('Continue');
   formaction='checklist.php'
   </script>";
     if(isset($_POST['check'])){
      header("Location:checklist.php");}
   }?>
    <form action="selectclient.php" method="post">
   <input type="texfield" name="select" placeholder="Enter ID number of client"><br>
   <input type ="submit" value="Check" name="submit" />
</form>
<form action="checklist.php" method="post">
  
  <input type="submit" value="submit" name="cert"/>
  </form>
</body>
</html>