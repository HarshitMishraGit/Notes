<?php 


// include('stuf/_header.php');




// session_start();
// // agar user ka session chal rha hai or usne apna username set kiya (matlab login hai tabhi use logout karoge).
// if(isset($_SESSION['username'])){
//     echo '<div class="container d-flex justify-content-center my-5">';
//     echo "<h2>";
//     echo "Hey!<strong>". $_SESSION['username']."</strong>" ; 
//     echo " You Logged Out Seccessfully" ;
//     echo "</h2>";
//     echo "</div>";


// session_unset();
// session_destroy();
// // header("Location: /notes/index.php");

// }
// // agar user login hi nahi hai to use login page par redirect kar do
// else{
//     header("Location: /notes/index.php");
// }


session_start();
echo "logging you out............";

session_destroy();
header("Location: /notes");

?>

<!-- Without Adding This html The navbar didn't work in the mobile  -->
<!-- <!doctype html>
<html lang="en">
  <head> -->
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   -->
    
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  <!-- </body>
</html> -->