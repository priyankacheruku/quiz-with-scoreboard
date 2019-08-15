<?php
session_start();
// initializing variables
$username = "";
$email    = "";
$errors = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'root','', 'intern');
// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
 
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error onto $errors array
 
  if (empty($username)) { array_push($errors, "username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM login WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }
  if ($email) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = $password_1;//encrypt the password before saving in the database
    $query = "INSERT INTO login (email,username ,password) 
          VALUES('$email','$username','$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: login.php');
  }
}
?>