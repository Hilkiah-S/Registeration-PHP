<?php
session_start();
require_once 'phpqrcode/qrlib.php';



$email=$_SESSION['email'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="SELECT * FROM clients WHERE email='$email'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$email=$row['email'];
$phone=$row['phone'];
$id=$row['ID'];
$image=$row['picture'];
$fileget=explode('.',$image);
$filenewnameqr = strtolower($fileget[0]);

// $path='uploads/clientqrcode/';
// $qrcode=$path."A.png";
// QRcode :: png("some code",$qrcode,'H',4,4);



?>
<html>
<title>Customer Info</title>
<head>
<style>
   body{
    font-family:arial;
   } 
#image{
  /* border: 1px solid #ddd; */
  border-radius: 6px;
  padding: 5px;
  width: 200px;
  height:auto;
}
#makeid{
    border: 3px solid #ddd;
    padding: 5px;
    display: flex;
    margin-left:50px;
}
#innermake{

    alignment:float-right;
}
#main{
display:flex;
justify-self: center;
align-items:center;
height: 100vh;

}

</style>
</head>
<body>


<div id="main">

<input type="hidden" value="<?php echo $phone  ?>" id="qr-data">
<p>Click on the Picture:</p>

<div id="makeid"><img src="uploads/clientimg/<?php echo $image; ?>" width="400" height="400" onclick="generateQR()" id="image"/><br>
<div id="innermake">
NAME: <?php echo "$firstname $lastname";?></br>
PHONE: 0<?php echo $phone;?><br>
ID: <?php echo $id; ?>
<div id="qrcode"></div>
</div>
</div>
</div>
</body>

<script src="qrcode.min.js"></script>
    <script>
        var qrdata=document.getElementById('qr-data');
        var qrcode=new QRCode(document.getElementById('qrcode'));
        function generateQR(){
            var data =qrdata.value;
            qrcode.makeCode(data);
            
        }
    </script>

</html>


