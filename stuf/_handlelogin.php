<?php
    $showerror="false";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include '_dbconnect.php';
        $username=$_POST['username'];
        $password=$_POST['password'];
        // echo $username;
        // echo $password;
        $search1="SELECT * FROM `log` WHERE `name` = '$username' ";
        $result1=mysqli_query($conn,$search1);
        $num1= mysqli_num_rows($result1);

        
        if($num1==1){
            $row=mysqli_fetch_assoc($result1);
            
            if(password_verify($password,$row['password'])){

                session_start();
                $_SESSION['username']=$username;
                $_SESSION['loggedin']=true;
               
                header("Location:/notes/index.php");
                // If You want to check the functionality 
                echo "Hello".$username;
                echo '   <br>';
                echo 'You are  logged in';
                echo '   <br>';
                echo 'This is for checking the session starting';
                echo '   <br>';
                echo "Hello   ".$_SESSION['username'];
                

            }
            else{
                echo 'You are not logged in';
            }
            // header("Location:/notes/index.php");








        }
        }


?>