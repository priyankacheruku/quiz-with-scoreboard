 <?php include "database.php"; ?>
<?php session_start(); ?>
<?php
	//Create Select Query
	$db_host = 'localhost';
$db_name = 'intern';
$db_user = 'root';
$db_pass = '';

//Create mysqli object
$con = new mysqli($db_host,$db_user,$db_pass,$db_name);
	
	
	
	$query="select * from shouts order by time desc limit 100";
	$shouts = mysqli_query($con,$query);

 ?>
<!DOCTYPE html>
<html>
  <head >
    <meta charset="utf-8" />
	
    <title>HTML QUIZ</title>
	<link rel= "stylesheet" href="css/style.css" type="text/css"/>
		<style>
  html{ 
  background:url('q2.jpg') no-repeat center center fixed;
  background-size: cover;
  }
  </style>
    
  </head>
  
    <div id="container">
      <header>
        <div >
          <h1>HTML Quiz</h1>
	</div>
      </header>


      <main>
	<div class="container">
	   
	     <p>Congrats! You have completed the test</p>
	     <p>Final score: <?php echo $_SESSION['score'];?>
		</p>
		 <?php
		 //$db = mysqli_connect('localhost', 'root','', 'intern');
		 //insert into db
		 $s=$_SESSION['score'];
		 $u=$_SESSION['username'];
		 $query = "INSERT INTO score VALUES('$u',$s)";
		 mysqli_query($con, $query);
		 
		 //retrive from db
		 $result = mysqli_query($con,"SELECT * FROM score");

echo "<table border='1'>
<tr>
<th>name</th>
<th>score</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['uname'] . "</td>";
echo "<td>" . $row['score'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
		 
		 
		 ?>
		 
		 
		 
		 
		 <?php session_destroy(); ?>
		 
	     <a href="login.php" >Take Test Again</a>
	     
		 
	</div>
      </main>


    <footer>
      <div class="container">
      	   
      </div>
    </footer>
  </body>
</html>