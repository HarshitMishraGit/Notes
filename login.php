<?php 
// include the server connect file 

include('stuf/_dbconnect.php');
include('stuf/_header.php');
if(isset($_POST['username'])){
$username=$_POST['username'];
$password=$_POST['password'];

echo $username;
echo $password;

// pehle hum ye check karege ki kya user registered hai ya nahi 
// agar user registered hai to hi enter hone dege warna signup karne ko bolege
$search1="SELECT * FROM `log` WHERE `name` = '$username' ";
$result1=mysqli_query($conn,$search1);
$num1= mysqli_num_rows($result1);

if($num1==0){
  echo '<div class="alert alert-danger" role="alert">
  <strong>Alert!</strong> User is Not Registered<a href="/loginsystem/signup.php" class="alert-link"> SignUp here</a>
</div>';
}

// agar user exists karta hai tabhi use login karne ki permission dege
else {

// `password`='$password'




// ab hum user ko uske password ke saath verify karege
$search="SELECT * FROM `log` WHERE `name` = '$username'";
$result=mysqli_query($conn,$search);
$row=mysqli_fetch_assoc($result);
$num= mysqli_num_rows($result);


if($num>0 && password_verify($password,$row['password'])){
  // agar user sahi password k saath exist karta hai to uska session shuru kar do 
  // session mai hm uska naam or password save kar sakte hai(like sensitive data ).
    session_start();
    $_SESSION['username']=$username;
   
    // Session start hote hi use welcome page par redirect kar de 
      header("Location: /notes/Index.php");
      
}

//agar password sahi na ho to alert show karege
else { 

   echo '<div class="alert alert-danger" role="alert">
   <strong>Error!</strong> password is not match
   </div> ';
  
}




}





}














?>

<!-- login Modal with trigger id #loginmodal -->

<!-- <div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Login</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
              
              <form class="container" action="/notes/login.php" method="post">
                
            <div class="mb-3">
                <label for="username" class="username">UserName</label>
                <input type="text" class="form-control" id="username" name="username">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" id="password" name="password">
            </div>
          
              
              <button type="submit" class="btn btn-primary">Login</button>
              
            </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div> -->
