<?php 


if(isset($_POST['submit'])){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "admin";
$sessionnum=$_POST['sessionstr'];
$sugarinv=$_POST['sugarinv'];
$oilinv=$_POST['oilinv'];

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($sessionnum)){
  
  
$sqlone = "UPDATE clients SET Sessionnumber = '$sessionnum'";


if ($conn->query($sqlone) === TRUE) {

   $sqlturn="UPDATE clients SET oilbool='true',sugarbool='true'";
   mysqli_query($conn,$sqlturn);

    echo"<script>alert('SESSION NUMBER UPDATED,SUCCESFULLY')</script>";
} else {
    echo "Error updating record: " . $conn->error;
}

}
if(isset($oilinv)){
 $sql="SELECT InventoryOil FROM items";

 $result=$conn->query($sql);
 $row=$result->fetch_assoc();
 if(empty($row)){
  $sql="INSERT INTO items(InventoryOil) VALUES ('$oilinv')";
  if ($conn->query($sql) === TRUE) {
    echo"<script>alert('OIL INVENTORY CREATED,SUCCESFULLY')</script>";
} else {
    echo "Error updating record: " . $conn->error;
}

 }
elseif(!(empty($row))){
  $sqltwo = "UPDATE items SET InventoryOil = '$oilinv'";

  if ($conn->query($sqltwo) === TRUE) {
      echo"<script>alert('OIL INVENTORY UPDATED,SUCCESFULLY')</script>";
  } else {
      echo "Error updating record: " . $conn->error;
  }

}


}
if(isset($sugarinv)){
  $sql="SELECT InventorySugar FROM items";

 $result=$conn->query($sql);
 $row=$result->fetch_assoc();
 if(empty($row)){
  $sql="INSERT INTO items(InventorySugar) VALUES ('$sugarinv')";
  if ($conn->query($sql) === TRUE) {
    echo"<script>alert('SUGAR INVENTORY CREATED, SUCCESFULLY')</script>";
} else {
    echo "Error updating record: " . $conn->error;
}

 }
 elseif(!(empty($row))){
  $sqlthree = "UPDATE items SET InventorySugar ='$sugarinv'";

  if ($conn->query($sqlthree) === TRUE) {
      echo"<script>alert('SUGAR INVENTORY UPDATED, SUCCESFULLY')</script>";
  } else {
      echo "Error updating record: " . $conn->error;
  }
}
}


}


?>

<html>
    <head></head>
    <body>
  <input type="button" value="Register Employee">
  <input type="button" value="See Database">
  <br/>
<form action="adminpage.php" method="post">
<lable for="oilinv">ENTER TOTAL AMOUNT OF OIL INVENTORY:</lable>
  <input type="textfield" id="oilinv" name="oilinv" /><br>
  
<lable for="sugarinv">ENTER TOTAL AMOUNT OF SUGAR INVENTORY:</lable>
  <input type="textfield" id="sugarinv" name="sugarinv" /><br>

<lable for="sessionstr">SESSION NUMBER</lable>
    <input type="textfield" name="sessionstr" id="sessionstr"/><br>
    <input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>