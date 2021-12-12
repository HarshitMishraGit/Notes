<?php

//     // include '_header.php';

// if (isset($_GET['search'])&& isset($_SESSION['username'])) {
   
    
//     $username=$_SESSION['username'];

//     // $key=$_POST['search'];
   
//     echo   'Congo!!!!you are on search page';
    
//     // $srch="SELECT * FROM `notes` WHERE `user_id` = '$username' and `title`='$key' ORDER BY `date` DESC";
//     // $ressrch=mysqli_query($conn,$srch);
//     // echo var_dump($ressrch);
//     // echo '<br>';
//     // $n=mysqli_num_rows($ressrch);
//     // echo $n;
    


//     $query = $_POST['search'];
//     $sql12 = "SELECT * FROM `notes` where MATCH (`title`,`note`) AGAINST ('$query')"; 
//     $result12 = mysqli_query($conn, $sql12);
//     echo var_dump($result12);
//     echo '<br>';

//     $n=mysqli_num_rows($result12);
//     echo $n;
   

//     while($row12 = mysqli_fetch_assoc($result12)){
//         $title = $row12['title'];
//         $desc = $row12['note']; 
//         $serielno= $row12['sno.'];
//         $url = "yournotes.php?note_id=". $serielno;
//             // Display the search result
//             echo '<div class="result">
//                         <h3><a href="'. $url. '" class="text-dark">'. $title. '</a> </h3>
//                         <p>'. $desc .'</p>
//                   </div>'; 
           
    
    
    
// }

// }
// else{
//     echo "or bss aise hi dekhte rehna";
// }









?>
<?php 
//  include '_dbconnect.php';
//  include '_header.php';

// if (isset($_GET['search'])) {
//   echo "search is set";
//     if (isset($_SESSION['username'])) {
      
//     $username=$_SESSION['username'];
  
//     // $key=$_POST['search'];
   
//     echo   'Congo!!!!you are on search page';
//     // ============================
//     $query = $_GET['search'];
//     $sql12 = "SELECT * FROM `notes` where MATCH (`title`,`note`) AGAINST ('$query')"; 
//     $result12 = mysqli_query($conn, $sql12);
//     echo var_dump($result12);
//     echo '<br>';
  
//     $n=mysqli_num_rows($result12);
//     echo $n;
   
  
//     while($row12 = mysqli_fetch_assoc($result12)){
//         $title = $row12['title'];
//         $desc = $row12['note']; 
//         $serielno= $row12['sno.'];
//         $url = "yournotes.php?note_id=". $serielno;
//             // Display the search result
//             echo '<div class="result">
//                         <h3><a href="'. $url. '" class="text-dark">'. $title. '</a> </h3>
//                         <p>'. $desc .'</p>
//                   </div>'; 
           
    
    
    
//   }
//     }
  
//   else{
//     echo 'not logged in';
//   }
  
//     // ============================
//     exit();
  
//   }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Notes</title>
  </head>
  <body>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>


