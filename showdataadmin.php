
<?php 
include "connect.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="dashstyle2.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <title>ADMIN DASHBOARD</title>
</head>

<body>
    <div class="wraper">
        <div class="side">
            <div class="admin-c">
              <!-- //php
                        if($_GET){
                            $id = $_GET['id'];
                            $isSuper = $_GET['isSuper'];
                
                            ?>
                <img src="php echo $_GET['image'];?>" class="admin-img" alt="">
                
              

               <p class="admin-n"><php echo $_GET['name'];?></p>
               <p class="admin-e"><php echo $_GET['email'];?></p>
              
               <php  }
                ?> -->

            </div>
            <ul>
               
                <hr/>
                <li class="commenet-li">

                    <a href="#">
                        <span class="icon"></span>
                        <span class="title">Add admin</span>
                    </a>
                </li>
                <li>
                <a href="#">
                        <span class="icon"></span>
                        <span class="title">Comments</span>
                    </a>
                </li>
                <li>
                    <<a href="#">
                        <span class="icon"></span>
                        <span class="title">Search</span>
                    </a>
                </li>
                <li>
                <a href="#">
                        <span class="icon"></span>
                        <span class="title">User Name</span>
                    </a>
                </li>
                <li>
                <a href="#">
                        <span class="icon"></span>
                        <span class="title">Password</span>
                    </a>
                </li>
                <li>
                <a href="#">
                        <span class="icon"></span>
                        <span class="title">Profile</span>
                    </a>
                </li>
                <li>
                <a href="#">
                        <span class="icon"></span>
                        <span class="title">Help</span>
                    </a>
                </li>
                
                <li class = "li-login">
                <a href="#">
                        <span class="icon"></span>
                        <span class="title">Sign out</span>
                    </a>
                </li>
               
            </ul>
        </div>
        <div class="container-box1">
            <div class="cardholder">
           <div class="cardbox">
                    <div class="card">
                        <div class="number">
                            <h3>yuocode</h3>
                            <div class="cardname">Members</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="number">
                             <h3>hello</h3>
                            <div class="cardname">Comments</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="number">
                            <h3>#$</h3>
                            <div class="cardname">Admins</div>
                        </div>
                    </div>
                </div>
                <hr/>
            </div>
            <div class="details">
                <div class="recentOrder">
                <table>
                <thead>
                    <tr  class="table-header">
                      
                        <td>Name</td>
                        <td>Email</td>
                        <td>Phone number</td>
                        <td>Donation</td>
                        <td>Details</td>
                        <td>Print</td>
                      
                        
                    </tr>
                </thead>
                <tbody>
                
                <?php
    
    //   $conn = new mysqli("localhost","root","","debo");
    $sql = "SELECT * FROM clients";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()):;?>
        <?php 
        $id = $row['id'];
        ?>
        
        <tr> 
            <td><?php echo $row['firstname']." ".  $row['lastname'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td><?php echo $row['monthly_payment'];?></td>
            <td><a href="profile.php?profileid=<?php echo $row['id'];?>"><button class = "btn">Detail</button></a></td>
            <td><a href="slip.php?printid=<?php echo $row['id'];?>"><button class = "btn">Form</button></a></td>
            <td><a href="bank.php?printid=<?php echo $row['id'];?>"><button class = "btn">Bank</button></a></td>
        </tr>


        <?php endwhile;
        }   
        else
        {
            echo 'No results containing all your search terms were found.';
        }
        ?>
    
                     </table>        
                 </div>
            </div>
        </div>
    </div>
</body>

</html>