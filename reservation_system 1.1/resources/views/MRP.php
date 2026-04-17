<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
        <head>
        <link rel="stylesheet"  href="Style.css">
          </head>
         <h3>
    <nav class="bar">
       <h2>
        <ul>
            <li>
                <a href="Intropage.php">Home Page</a>
            </li>
            <li>
               <a href="MRP.php">Member Registration page</a>
            </li>
            <li>
                <a href>Login to Reserve Page</a>
            </li>
        </ul>
    </h2>
    </nav>
</h3>
<nav class="title">
    <h4>Member Registration Page</h4>
</nav>    
<nav class="tabletitle">
    <h2>Member Registrarion Form</h2>
</nav>
<body>
       <div>
        <?php 
        if(isset($_POST['submit'])){ 

        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $maddress = $_POST['maddress'];
        $phone = $_POST['phone'];
        $mail = $_POST['email'];
        $password = $_POST['password'];

            echo $fname ," ",$lname," ",$maddress," ",$phone," ",$mail," ",$password;
            $sql = "INSERT INTO users (lname,fname,maddress,phone,email,password) VALUES(?,?,?,?,?,?)"; 
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$lname,$fname,$maddress,$phone,$mail,$password]);
            if($result){
                echo 'saved';
            }
            else{
                echo 'Not Saved';
            }
            }
        ?> <!--Test -->
        </div>
 </body>

    <form action="MRP.php" method="post" >
        <div class="reg">
<p>
    <div class="Row">
    <div class="cola">  Last Name</div>
  
    <div class="colb"><input type="text" name="lname"></div>
    </div>
 <div class="Row">
        <div class="cola"> First Name</div>
        <div class="colb"> <input type="text" name="fname"></div>
 </div>
   
    <div class="Row">
        <div class="cola">Mailing address</div>
        <div class="colb"> <input type="text" name="maddress"></div>
</div>
 <div class="Row">
</div>
 <div class="Row">
        <div class="cola">Phone Number</div>
        <div class="colb"> <input type="number" name="phone"></div>
        </div>
  
   
 <div class="Row">
    </div>

    
    <div class="Row">
        <div class="cola">Email Address</div>
        <div class="colb"> <input type="email" name="email"></div>
        </div>
 <div class="Row">
        <div class="cola">Password</div>
        <div class="colb"><input type="password" name="password"></div>
        </div>
 <div class="Row">
        <div class="cola"><Input type="submit" name="submit" ></div>
        <div class="colb"><Input type="reset" name="clear" ></div>
        </div>  
            
    
</p>
</div>
</form>

</html>
