<?php 
// include the server connect file 

// include('stuf/_dbconnect.php');
// include('stuf/_header.php');
if(isset($_POST['username'])){
$username=$_POST['username'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];


// pehle hum ye check karege ki kya user registered hai ya nahi 
$search="SELECT * FROM `log` WHERE `name` = '$username' ";
$result=mysqli_query($conn,$search);
$num= mysqli_num_rows($result);

                           
// agar hai to ek warning show kara dege or kahege login karo
if($num>0){

  
  echo '<div class="alert alert-warning" role="alert">
  <strong>Alert!</strong> User is Already exists<a href="/notes/login.php" class="alert-link">Login here</a>
  </div>';
  header("Location: notes/index.php");
      
}

// ab user exist nahi karta or usne password shi confirm kiya hai to data inset kar lege
// username ko unique rkhege database mai taki ham users ko pehchan paye.
else if($cpassword==$password){
//   store password in hash form
     $hash=password_hash($password,PASSWORD_DEFAULT);


  $sql="INSERT INTO `log` (`name`, `password`) VALUES ('$username', '$hash')";
  $res=mysqli_query($conn,$sql);
  
  echo '<div class="alert alert-success" role="alert">
  <strong>Success!</strong> You Successfully register your account
   </div> ';


   header("Location: /notes/index.php");
   
   
  }

  // agar user registered nahi hai or wo password  or confirm passwaord match nahi hota to warning show karege
  else{
    echo '<div class="alert alert-danger" role="alert">
  <strong>Error!</strong> password is not match
  </div> ';
  }










}














?>

<!-- Sign Up Modal with trigger id #signupmodal -->

<!-- <div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Sign Up</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> -->

      <!-- Form For signUp -->
      <!-- <form class="container" action="/notes/signup.php" method="post">
       
    <div class="mb-3">
        <label for="username" class="username">UserName</label>
        <input type="text" class="form-control" id="username" name="username">
        
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" id="password" name="password">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"> Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" id="cpassword" name="cpassword">
        <div id="emailHelp" class="form-text">Make sure to enter same password</div>
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
      
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div> -->