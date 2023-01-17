
<?php
session_start();
if(isset($_POST['submit'])){
    header("Location:welcome.php");
}
?>



<form action="registercustomers.php" method="post">
    <div class="form-group">
      <input type="textfield" class="form-control" id="email" placeholder="Enter name" name="firstname">
    </div>
    <div class="form-group">
      <input type="textfield" class="form-control" id="email" placeholder="Enter password" name="lastname">
    </div>
    <button type="submit" id="button" class="btn btn-primary deep-purple btn-block " name="submit">register</button>
   
<br>
    <br>
    
    <!-- <div id="btn" class="text-center">
   <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-facebook"></i></button>
   <button type="button" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-google"></i></button>
   <button type="button" class="btn btn-info btn-circle btn-sm"><i class="fa fa-twitter"></i></button>
   </div> -->
 
  </form>