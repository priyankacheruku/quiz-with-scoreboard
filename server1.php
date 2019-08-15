<?php

session_start();

// initializing variables
$username = "";
$errors = array();

// Connect to the database

$db = mysqli_connect('localhost', 'root', '', 'intern');

// LOGIN USER
if (isset($_POST['submit'])) {
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);


if (empty($username)) {
array_push($errors, "Username is required");
}

if (empty($password)) {
array_push($errors, "Password is required");
}


if (count($errors) == 0) {

$query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
$results = mysqli_query($db, $query);
if (mysqli_num_rows($results) == 1) {
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

$_SESSION['success'] = "You are now logged in";
header('location: index.php');
}else {
array_push($errors, "Wrong username combination");
}
}
}



?>