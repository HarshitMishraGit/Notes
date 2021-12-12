


<?php 

include('stuf/_header.php');
include ('stuf/_dbconnect.php');



// Checking for prblm in edit and delete modal in your notes page
// require('./stuf/_editmodal.php');
// require('./stuf/_deletemodal.php');

echo '<h1 class=" p-3 text-center bg-warning text-danger">Your notes</h1>';


if (isset($_SESSION['username'])) {

    $username=$_SESSION['username'];
    // echo $username;
    // [ORDER BY `sno.` DESC ] is for searching the data in reverse order so that user get his/her added note on the top row
    $search3="SELECT * FROM `notes` WHERE `user_id` = '$username' ORDER BY `date` DESC ";
    $result3=mysqli_query($conn,$search3);
    // echo var_dump($result3);
    
    $num3= mysqli_num_rows($result3);
    

   
  $i=1;
 while ($row3=mysqli_fetch_assoc($result3)) {

    echo '<div class="jumbotron my-3 py-3  container" id="jumbo">
    
    <h1 class="display-4">'.$row3['title'].'</h1>
    <input type="hidden" name="note_id" value="'.$row3['sno.'].'">
    <p class="lead"> - by : <strong><em>'.$username.'</em>  </strong> on '.$row3['date'].' </p>
    <hr class="my-4">
    <p>'.$row3['note'].'</p>
    <p class="lead">
    
   
    <!--  
    using form we can get the id of the corresponding value of the note
    
    <form action="/notes/yournotes.php?id='.$row3['sno.'].'" method="post">
      
      
   
    <button type="submit" class="btn btn-success mx-2" data-bs-toggle="modal" data-bs-target="#editmodal"  >
     Edit
    </button>
    </form>  -->


    <!-- Button trigger  Edit modal -->
    <button type="submit" class="btn btn-success mx-2 edit" data-bs-toggle="modal" data-bs-target="#editmodal" >
     Edit
    </button>


    <!-- Button trigger  Edit modal -->
    <button type="button" class="btn btn-success mx-2 delete" data-bs-toggle="modal" data-bs-target="#deletemodal">
      Delete
    </button>
   
    </p>
  </div>';


 }


include('./stuf/_editmodal.php');
include('./stuf/_deletemodal.php');

// echo ' <script>
// // I gave class name to my modal trigged button the listen an event on that
// edits=document.getElementsByClassName("edit");
// // ek loop run karege jo hmare html k while loop ko follow karega
// Array.from(edits).forEach((element)=>{
//  element.addEventListener("click",(e)=>{
//   //  console.log("hello",e.target.parentNode.parentNode);// this give whole object of a note
//   //  jumbo=e.target.parentNode.parentNode;
//   //  title=jumbo.getElementsByTagName("h1")[0].innertext;
//   //  note=jumbo.getElementsByTagName("p")[1].innertext;
//   //  console.log(jumbo,title,note);
//   console.log("edit",);
//   let jumbo=e.target.parentNode.parentNode;
//    console.log(jumbo);
//   //  It should br innerText not innertext 
//  let title=jumbo.getElementsByTagName("h1")[0].innerText;
//  let note=jumbo.getElementsByTagName("p")[1].innerText;
//    console.log(title);// for checking the working
//   //  console.log(typeof(title));// for checking thedata type of
//   // console.log(note);
//   // document.getElementById("edittitle").innerHTML = title;
//   // document.getElementById("edittitle").value="title";
//   edittitle=document.getElementById("edittitle")
//   edittitle.value= "title";
//   // editnote=document.getElementById("editnote");
//   //  editnote.innerHTML=title;
//   //  editnote.innerHTML=note;
//   //  console.log(edittitle);
//   //  console.log(editnote);
    
//  })


// })



// </script>';
}
else{

  echo'   <div class="jumbotron container  mt-5 my-4">
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




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
   <!-- script for edit action -->
    <script>
      // I gave class name to my modal trigged button the listen an event on that
      edits=document.getElementsByClassName('edit');
      // ek loop run karege jo hmare html k while loop ko follow karega
      Array.from(edits).forEach((element)=>{
       element.addEventListener("click",(e)=>{
        //  console.log("hello",e.target.parentNode.parentNode);// this give whole object of a note
        //  jumbo=e.target.parentNode.parentNode;
        //  title=jumbo.getElementsByTagName("h1")[0].innertext;
        //  note=jumbo.getElementsByTagName("p")[1].innertext;
        //  console.log(jumbo,title,note);
        console.log("edit",);
        let jumbo=e.target.parentNode.parentNode;
         console.log(jumbo);
        //  It should br innerText not innertext 
       let title=jumbo.getElementsByTagName('h1')[0].innerText;
       let note=jumbo.getElementsByTagName('p')[1].innerText;
         console.log(title);// for checking the working
         console.log(note);// for checking the working
        //  agar edit karoge to pehle uska sno. pta hona chahiye jaha edit karna hai 
         note_id=jumbo.getElementsByTagName('input')[0].value
        //  for checking the value of hidden input tag
         console.log(note_id);
        //  console.log(typeof(title));// for checking thedata type of
        // console.log(note);
        // document.getElementById("edittitle").innerHTML = title;
        // document.getElementById('edittitle').value="title";


        // edittitle=document.getElementById('edittitle').innerHTML;
        // edittitle.value= "title";
        // editnote=document.getElementById('editnote')
        // editnote.value= "title";
        
        // <<<<<<<<<<<<<<-------------------------------working on _editmodal.php file handling in js--------->>>>>>>>>>>>>>>
        // pehle form tag ko id dekar use variable mai save kiya
        editform=document.getElementById('editform')
        console.log(editform); // for checking that we are getting the form content or not 
        // then we get form->div->input tag that is our title
        editform.getElementsByTagName('div')[0].getElementsByTagName('input')[0].value=title;
        // then we get form->div->input tag that is our note
        editmodaldiv=document.getElementById('editmodaldiv')
        console.log(editmodaldiv);
        // editform.getElementsByTagName('div')[1].getElementsByTagName('taxtarea')[0].value="note";
        editmodaldiv.getElementsByTagName('textarea')[0].value=note;
        editform.getElementsByTagName('input')[1].value=note_id
        // <<<<<<<<<<<<<<------------------------------------------------------------------------------------->>>>>>>>>>>>>>>>
        
        // <<<<<<<<<<<<<<-------------------------------working on _deletemodal.php file handling in js--------->>>>>>>>>>>>>>>
        // pehle form tag ko id dekar use variable mai save kiya
        deletemodal=document.getElementById('deletemodal')
        console.log(deletemodal); // for checking that we are getting the form content or not 
        // // then we get form->div->input tag that is our title
        // editform.getElementsByTagName('div')[0].getElementsByTagName('input')[0].value=title;
        // // then we get form->div->input tag that is our note
        // editmodaldiv=document.getElementById('editmodaldiv')
        // console.log(editmodaldiv);
        // // editform.getElementsByTagName('div')[1].getElementsByTagName('taxtarea')[0].value="note";
        // editmodaldiv.getElementsByTagName('textarea')[0].value=note;
        // editform.getElementsByTagName('input')[1].value=note_id
        // // <<<<<<<<<<<<<<------------------------------------------------------------------------------------->>>>>>>>>>>>>>>>
        



 
          
       })


      })

      // <<<<<<===============delete===================>>>>>>>>>>>>>>>
      deletes=document.getElementsByClassName('delete');
      // ek loop run karege jo hmare html k while loop ko follow karega
      Array.from(deletes).forEach((element)=>{
       element.addEventListener("click",(e)=>{
        //  console.log("hello",e.target.parentNode.parentNode);// this give whole object of a note
        //  jumbo=e.target.parentNode.parentNode;
        //  title=jumbo.getElementsByTagName("h1")[0].innertext;
        //  note=jumbo.getElementsByTagName("p")[1].innertext;
        //  console.log(jumbo,title,note);
        console.log("delete",);
        let jumbo=e.target.parentNode.parentNode;
         console.log(jumbo);
    
        //  agar edit karoge to pehle uska sno. pta hona chahiye jaha edit karna hai 
         note_id=jumbo.getElementsByTagName('input')[0].value
        //  for checking the value of hidden input tag
         console.log(note_id);
        
        // <<<<<<<<<<<<<<------------------------------------------------------------------------------------->>>>>>>>>>>>>>>>
        
        // <<<<<<<<<<<<<<-------------------------------working on _deletemodal.php file handling in js--------->>>>>>>>>>>>>>>
        // pehle form tag ko id dekar use variable mai save kiya
        deletenote=document.getElementById('deletenote')
        console.log(deletenote); // for checking that we are getting the form content or not 
       
        deletenote_id=document.getElementById('deletenote_id')
        deletenote_id.value=note_id // for checking that we are getting the form content or not 
       



 
          
       })


      })
      
      // ====================editmodal end===============================

      ok=()=>{
        // this is for checking that we can execute php into javascript-->
        alert(" <?php echo "kya haal hai  ";?>")
      }
    </script>
    <!-- <button onclick="ok()">Press me</button> -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>