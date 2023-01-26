
<?php
session_start();

?>



<form action="registercustomers.php" method="post" enctype="multipart/form-data" >
    <div class="form-group">
      <label for="firstname">FIRST-NAME:</label>
      <input type="textfield" class="form-control" id="firstname" placeholder="First name" name="firstname">
      <br>
    </div>
    <div class="form-group">
    <label for="lastname">LAST-NAME:</label>
      <input type="textfield" class="form-control" id="lastname" placeholder="Last name" name="lastname">
      <label for="email">EMAIL-ADDRESS:</label>
      <input type="textfield" class="form-control" id="email" placeholder="Email address" name="email">
      <label for="phone">PHONE-NUMBER:</label>
      <input type="textfield" class="form-control" id="phone" placeholder="phone number..." name="phone">
      <br>
      <label for="browse">PICTURE:</label>
      <input type="file" name="file" />
    </div>
    <button type="submit" id="button" class="btn btn-primary deep-purple btn-block " name="submit">register</button>
     
<br>
    <br>
    
   
 
  </form>