<?php
    $showerror="false";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include '_dbconnect.php';
        $username=$_POST['username'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        
       // pehle hum ye check karege ki kya user registered hai ya nahi 
        $search="SELECT * FROM `log` WHERE `name` = '$username' ";
        $result=mysqli_query($conn,$search);
        $num= mysqli_num_rows($result);

        if($num>0){

            $error="invaliduser";
            echo '<div class="alert alert-warning" role="alert">
            <strong>Alert!</strong> User is Already exists<a href="/notes/login.php" class="alert-link">Login here</a>
            </div>';
            header("Location: /notes/index.php?signupsuccess=false&error=$error");
            exit(); 
          }
        
        else if($cpassword==$password){
            $row=mysqli_fetch_assoc($result);
            
            $hash=password_hash($password,PASSWORD_DEFAULT);


            $sql="INSERT INTO `log` (`name`, `password`) VALUES ('$username', '$hash')";
            $res=mysqli_query($conn,$sql);
            
            
            header("Location: /notes/index.php?signupsuccess=true");
            exit();
           
             
            }
            else{
              $error="diffpass";
                echo '<div class="alert alert-danger" role="alert">
              <strong>Error!</strong> password is not match
              </div> ';
              header("Location: /notes/index.php?signupsuccess=false&error=$error");
              exit();
              }






        }
        


?>