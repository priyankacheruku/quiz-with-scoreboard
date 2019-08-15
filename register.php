<?php include('ser2.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Here!!!</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>

	<div class="bgimage">
       

    	<div class="box">
    		<h1>Register</h1>
    		
    		<form action="register.php" method="post">

                <?php include('errors.php'); ?>

                <div class="inputbox">
                <input type="text" name="email" required="">
                <label>Enter Email</label>
                </div>

                <div class="inputbox">
    			<input type="text" name="username" required="">
                <label>Enter Username</label>
                </div>

                

                <div class="inputbox">
    			<input type="password" name="password_1" required="">
                <label>Enter Password</label>
                </div>

                

    			<input type="submit" name="submit" value="submit">
                <br>
                
                <h2>Already have an account?</h2>
                <br>

    			<a href="login.php"><h3>Login here</h3></a>
    		</form>
    	</div>
    </div>
</body>
</html>