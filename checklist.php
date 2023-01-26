<?php 
session_start();
echo $_SESSION['id'];

if(isset($_POST['submit'])){
  

  $items = $_POST['common'];
  
  foreach($items as $key=>$values){
    echo $values.",";
  };
  if(is_null($items)){
    echo "<script>alert('You can't submit Empty, try again ');
    formaction('checklist.php')</script>";
  }
  if(count($items)!=0){
 


  if(count($items)==2){
    echo"both";
    $oil=1;
    $sugar=1;
  }
  else if($items[0]=='oil'){
    echo"  oil only";
    $oil=1;
    $sugar=0;
  }
  else if($items[0]=='sugar'){
    echo "  sugar only";
    $oil=0;
    $sugar=1;
  }
}
// session_start();
// function logout(){
// session_destroy();
// header("Location:login.php");
// }

// if(isset($_SESSION['User'])){
//     echo"WELCOME ".$_SESSION['User']."<tab><tab><script><input type="button" value='Logout' onclick='logout()'/></script>" ;
// }
// else{
//     echo"NOT SET";
// }
;


}


?>
<!DOCTYPE html>
<html>
<head>
    <style>
    
    * {
  font-family: Lato;
  margin: 0;
  padding: 0;
  --transition: 0.15s;
  --border-radius: 0.5rem;
  --background: #ffc107;
  --box-shadow: #ffc107;
}
#values{
  padding: 40px;

}


.cont-bg {
  min-height: 100vh;
  background-image: radial-gradient(
    circle farthest-corner at 7.2% 13.6%,
    rgba(37, 249, 245, 1) 0%,
    rgba(8, 70, 218, 1) 90%
  );
  padding: 1rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.cont-title {
  color: white;
  font-size: 1.25rem;
  font-weight: 600;
  margin-bottom: 1rem;
}

.cont-main {
  display: flex;
  flex-wrap: wrap;
  align-content: center;
  justify-content: center;
}

.cont-checkbox {
  width: 150px;
  height: 100px;
  border-radius: var(--border-radius);
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
  background: white;
  transition: transform var(--transition);
}

.cont-checkbox:first-of-type {
  margin-bottom: 0.75rem;
  margin-right: 0.75rem;
}

.cont-checkbox:active {
  transform: scale(0.9);
}

input type["checkbox"] {
  display: none;
}

input:checked + label {
  opacity: 1;
  box-shadow: 0 0 0 3px var(--background);
}

input:checked + label img {
  -webkit-filter: none; /* Safari 6.0 - 9.0 */
  filter: none;
}

input:checked + label .cover-checkbox {
  opacity: 1;
  transform: scale(1);
}

input:checked + label .cover-checkbox svg {
  stroke-dashoffset: 0;
}

label {
  display: inline-block;
  cursor: pointer;
  border-radius: var(--border-radius);
  overflow: hidden;
  width: 100%;
  height: 100%;
  position: relative;
  opacity: 0.6;
}

label img {
  width: 100%;
  height: 70%;
  object-fit: cover;
  clip-path: polygon(0% 0%, 100% 0, 100% 81%, 50% 100%, 0 81%);
  -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);
}

label .cover-checkbox {
  position: absolute;
  right: 5px;
  top: 3px;
  z-index: 1;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: var(--box-shadow);
  border: 2px solid #fff;
  transition: transform var(--transition),
    opacity calc(var(--transition) * 1.2) linear;
  opacity: 0;
  transform: scale(0);
}

label .cover-checkbox svg {
  width: 13px;
  height: 11px;
  display: inline-block;
  vertical-align: top;
  fill: none;
  margin: 5px 0 0 3px;
  stroke: #fff;
  stroke-width: 2;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-dasharray: 16px;
  transition: stroke-dashoffset 0.4s ease var(--transition);
  stroke-dashoffset: 16px;
}

label .info {
  text-align: center;
  margin-top: 0.2rem;
  font-weight: 600;
  font-size: 0.8rem;
}

.btn {
  position: relative;
  display: inline-block;
  width: 200px;
  height: 60px;
  text-align: center;
  line-height: 60px;
  color: #fff;
  font-size: 24px;
  text-transform: uppercase;
  text-decoration: none;
  font-family: sans-serif;
  box-sizing: border-box;
  background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
  background-size: 400%;
  border-radius: 30px;
  z-index: 1;
}
 
.btn:hover {
  animation: animate 8s linear infinite;
}
 
@keyframes animate {
  0% {
    background-position: 0%;
  }
  100% {
    background-position: 400%;
  }
}
 
.btn:before {
  content: "";
  position: absolute;
  top: -5px;
  right: -5px;
  bottom: -5px;
  left: -5px;
  z-index: -1;
  background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
  background-size: 400%;
  border-radius: 40px;
  opacity: 0;
  transition: .5s;
}
 
.btn:hover:before {
  filter: blur(20px);
  opacity: 1;
  animation: animate 8s linear infinite;
}




        </style>
<title>Check box</title>
</head>
<body>
<div class="cont-bg">
  <div class="cont-title">Checkbox</div>
  <div class="cont-main">
    <div class="cont-checkbox">
      <form action="lastpage.php" method="post">
      <input type="checkbox" id="myCheckbox-1" name="common[]" value="oil" />
      <label for="myCheckbox-1">
        <img
          src="img/oil-min.jpg"
        />
        <span class="cover-checkbox">
          <svg viewBox="0 0 12 10">
            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
          </svg>
        </span>
        <div class="info">Oil</div>
      </label>
    </div>
    <div class="cont-checkbox">
      <input type="checkbox" id="myCheckbox-2" name="common[]" value="sugar"/>
      <label for="myCheckbox-2">
        <img 
          src="img/sugar-min.jpg"
        />
        <span class="cover-checkbox">
          <svg viewBox="0 0 12 10">
            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
          </svg>
        </span>
        <div class="info">Sugar</div>
      </label>
      
    </div>

  </div><hr/>
  <div id="Values">
    
  <input type="submit" name="submit" class="btn" value="Submit">
</form>
</div>

  
</body>
</html>



