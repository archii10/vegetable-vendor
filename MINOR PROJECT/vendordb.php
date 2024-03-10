<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'vendor');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $phoneno = mysqli_real_escape_string($db, $_POST['phoneno']);
  $vegetables = mysqli_real_escape_string($db, $_POST['vegetables']);
  $fruits = mysqli_real_escape_string($db, $_POST['fruits']);


  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//$phoneno = md5($phoneno1);//encrypt the password before saving in the database

  	$query = "INSERT INTO vendor (fname, lname, phoneno, vegetables, fruits) 
  			  VALUES('$fname', '$lname', '$phoneno','$vegetables','$fruits')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Your details are submitted";
  	header('location: Home.php');
  }
}

?>