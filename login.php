<?php include('server1.php') ?>

<!DOCTYPE html>
<html>
<head>
<title>Login Here!!!</title>

<link rel="stylesheet" type="text/css" href="login.css">

<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">



</head>
<body>

<div class="bgimage">


<div class="box">
<h1>Login</h1>
<form action="login.php" method="POST">

<?php include('errors.php') ?>

<div class="inputbox">
<input type="text" name="username" required="">
<label>Enter Username</label>
</div>

<div class="inputbox">
<input type="password" name="password" required="">
<label>Enter Password</label>
</div>

<input type="submit" name="submit" value="submit">
<br>

<h2>New User?</h2>
<br>

<a href="register.php"><h3>Register here</h3></a>

</form>
</div>
</div>

</body>
</html>