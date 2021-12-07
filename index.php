<?php 

include('stuf/_header.php');


// Alert if anyone request the server to post note without login
if ($_SERVER['REQUEST_METHOD']=='POST') {
    echo '<div class="alert alert-warning" role="alert">
   Login to add the notes!
  </div>';}

  

//   --------------------------------------------------------------------
// include('stuf/_dbconnect.php');
// echo $_SESSION['username'];
// session start karege taki agar user ka session chal rha hai to uska username le sake
// session_start();
// agar user ka session chal rha hai or usne apna username set kiya hai tabhi welcome kare.
if(isset($_SESSION['username'])){
   
    echo '   <div class="jumbotron container  mt-5 my-4 ">
    <h3 class="display-4 ">Welcome <strong>'. $_SESSION['username'].'</strong></h3>
    <p class="lead"> Ready to Add and personalize your notes.</p>
    <hr class="my-4">
   
   
  ';
 
}
// agar user ka username hi set nahi hai to use login karne ko bole 
// ye condition tab hogi jab koi bin bulaya baraati welcome page par bina login kiye aa jayega
else{
    
    echo '
            <div class="jumbotron container  mt-5 my-4">
          <h3 class="display-4">You are not logged in</h3>
          <p class="lead">Login to add and personalize your notes.</p>
          <hr class="my-4">
         
          <button type="button" class="btn btn-success mx-2" data-bs-toggle="modal" data-bs-target="#loginmodal">
        Login
      </button>
        </div>
        
    
    
    
    ';
}




?>


<!-- Without Adding This html The navbar didn't work in the mobile  -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>


    <div class="container-fluid w-75 p-3">


        <div class="d-flex" >
            <h2>Add a Note</h2>
            <div class="icon ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-journal-bookmark" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z" />
                    <path
                        d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                    <path
                        d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                </svg>
            </div>
        </div>

        <hr class="my-3 ">


        <form action="/notes/index.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" id="title" required>
                <div id="emailHelp" class="form-text">Every title is unique</div>
            </div>
            <div class="form-group my-3">
                <label for="exampleFormControlTextarea1">NOTE</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="note"
                    id="note" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Add</button>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>

    </script>
</body>

</html>

<?php 
  // echo  $_SESSION['username'];
  // echo  $_POST['title'];
//   echo  $title=$_POST['title'];
// session_start();
  include ('stuf/_dbconnect.php');

  
  if ($_SERVER['REQUEST_METHOD']=='POST'&& isset($_SESSION['username'])) {
    $title=$_POST['title'];
    $note=$_POST['note'];
    $username=$_SESSION['username'];
    echo var_dump($title);

// INSERT INTO `notes` (`sno.`, `user_id`, `title`, `note`, `date`) VALUES ('1', '4', 'hello', 'hello kaise hai aap log', current_timestamp());

// Search for the user
$search1="SELECT * FROM `log` WHERE `name` = '$username' ";
$result1=mysqli_query($conn,$search1);
$row1=mysqli_fetch_assoc($result1);
$num1= mysqli_num_rows($result1);

// assigning users sno to user
  

$sql=" INSERT INTO `notes` (`user_id`, `title`, `note`) VALUES ('$username', '$title', '$note')";
$result=mysqli_query($conn,$sql);

if ($result) {
    echo "Successfully added note";
}
else{
    session_start();
   
    die( "Error!!!!!!!!!!!!!!".mysqli_connect_error());
}














  }

if (isset($_SESSION['username'])) {

    $username=$_SESSION['username'];
    // echo $username;
    $search3="SELECT * FROM `notes` WHERE `user_id` = '$username' ";
    $result3=mysqli_query($conn,$search3);
    // echo var_dump($result3);
    
    $num3= mysqli_num_rows($result3);
     while ($row3=mysqli_fetch_assoc($result3)) {
        //  echo " The title is".$row3['title']."and the note is".$row3.";
        //  echo "";
        echo "The title is ".$row3['title']." and the note is ".$row3['note'];
        echo "<br>";
        echo "<br>";
        echo "<br>";
     }
}



?>

