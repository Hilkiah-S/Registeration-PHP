<html>

<body>
    <div class="form-container">
<form name="registerForm" action="registeradmintosql.php" method="post" enctype="multipart/form-data">
    <label for="firstName">First Name *</label>
    <input type="text" id="firstName" placeholder="FIRST NAME" name="firstname" required/>
    <label for="lastName">Last Name *</label>
    <input type="text" id="lastName" placeholder="LASTNAME" name="lastname" required/>
    
</div>
<div class="form-container">

    <label for="e-mail">E-mail address *</label>
    <input type="text" id="e-mail" placeholder="example@gmail.com" name="email" required/>
    <label for="e-mail">Password *</label>
    <input type="password" id="password" name="password" placeholder="Enter password" required/>
    <p class="error-message"></p>

</div>
<div class="form-container">
    <div class="radio-question">
        <p>GENDER</p>
        <input class="radio-input" type="radio" name="media" value="MALE" /> MALE <br>
        <input class="radio-input" type="radio" name="media" value="FEMALE" /> FEMALE <br>
        
    </div>
    <br>
 
</div>
<label for="browse">CHOOSE PICTURE</label>
    <input type="file" id="browse" name="file" value="Choosephoto"/> 
<br>
<div class="form-container">
	<input class="button" type="submit" value="submit" name="submit" onClick="formValidation()" />
</div>
</form>
</body>

</html>