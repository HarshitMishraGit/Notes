<?php

session_start();

// Making a navbar that can be use as a template by include function
echo '
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="/notes">H.M</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/notes/index.php">Home</a>
      </li>
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      
      
      <li class="nav-item">
        <a class="nav-link" href="/notes/logout.php">logout</a>
      </li>
      
      
    </ul>
    <form class="d-flex mb-1">
      <input class="form-control me-2 m-auto" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success  m-auto" type="submit">Search</button>';
     if (isset($_SESSION['username'])) {

      // session_start();// agar yha par hoga to header ki height badh jayegi
     
      echo' 
        <div class="container dropdown">
       <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
       '.$_SESSION['username'].'
       </a>
       <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li> <button type="button" class="btn btn-success mx-2 " data-bs-toggle="modal" data-bs-target="#logoutmodal" >
           Logout
          </button></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
          </div>
      ';
      
      
      
     
     }
      else{
      echo' 
      <!-- Button trigger  sign up modal -->
      <button type="button" class="btn btn-success mx-2" data-bs-toggle="modal" data-bs-target="#signupmodal">
        SignUp
      </button>
      <!-- Button trigger login modal -->
      <button type="button" class="btn btn-success mr-2" data-bs-toggle="modal" data-bs-target="#loginmodal">
        Login
        </button>
      ';
         }
 echo ' 
    </form>';
     echo'</div>
</div>
</nav

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
include('_loginmodal.php');
include('_signupmodal.php');
include('_logoutmodal.php');

?>








