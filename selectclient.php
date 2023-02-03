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
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
<style>
      body {
        background-color: #f7f7f7;
      }
      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 40px;
      }
      .form-group {
        display: flex;
        align-items: center;
        width: 500px;
        height: 50px;
        margin-bottom: 20px;
        border-radius: 25px;
        background-color: #fff;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
      }
      .form-control {
        width: 80%;
        height: 100%;
        border: none;
        border-radius: 25px;
        padding-left: 20px;
        font-size: 18px;
      }
      .btn {
        width: 20%;
        height: 100%;
        border: none;
        background-color: #01a8fe;
        color: #fff;
        font-size: 18px;
        border-radius: 25px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
      }
      .btn:hover {
        background-color: #007bff;
      }
      .second-button {
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 4px;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  
  cursor: pointer;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  position: absolute;
    left: 50%;
    transform: translate(-50%, 0);
}
#spaceforquery {
  position: relative;
    left: 50%;
    transform: translate(-50%, 0);
  display: flex;
  align-items: center;
  border: none;
  border-radius:5px;
  box-shadow: 2px 2px 5px #333;
  padding: 10px;
  width: 600px; 
  font-size:30px;
  font-family:arial;
  text-transform:uppercase;
}

#spaceforquery img {
  max-width: 300px;
  height: auto;
}

    </style>

</head>
<body>
<?php if(isset($_POST['submit'])){
   
   $id=$_POST['select'];
   $sql="SELECT * FROM clients WHERE ID='$id'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
   $firstname=$row['firstname'];
   $lastname=$row['lastname'];
   $pic=$row['picture'];
   $_SESSION['id']=$id;
   //$_SESSION['cutomerid']=$id;
  //  echo "<script>alert('Continue');
  //  formaction='checklist.php'
  //  </script>";
 
  echo"<div id='spaceforquery'> <img src='uploads/clientimg/$pic'> <tab>$firstname $lastname</div>";
     if(isset($_POST['check'])){
      header("Location:checklist.php");}
   }?>
   <div class="search-container">
    <form action="selectclient.php" method="post">
   <!-- <input type="texfield" class="search-testfield" name="select" placeholder="Enter ID number of client"><br>
   <input type ="submit" value="Check" class="search-container" name="submit" /> -->
   <div class="container">
      <div class="form-group">
        <input
        name="select"
          type="textfield"
          class="form-control"
          placeholder="Search ID..."
        />
        <button class="btn" name="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
</form>

<form action="checklist.php" method="post">
  
  <input type="submit" value="submit" class="second-button" name="cert"/>
  </form>
</body>
</html> 



