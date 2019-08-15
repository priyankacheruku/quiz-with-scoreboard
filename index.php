 <?php include "database.php"; ?>

<?php
	//Get the total questions
	$query="select * from questions";
	//Get Results
	$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	$total = $results->num_rows;

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title> Quizzer!</title>
	<link rel="stylesheet" href="index.css">
  </head>
  <body>
	<div id="container">
		<div class="container">
			<h1>Quizzer</h1>
	</div>
	


      <main>
      <div class="container">
        <h2>Test your Knowledge</h2>
	<h3>This is a multiple choice quize to test your knowledge about something</h3>
		
		<li><strong>Number of Questions: </strong><?php echo $total; ?></ul>
		<li><strong>Type: </strong>Multiple Choice</ul>
		<li><strong>Estimatd Time: </strong><?php echo $total*0.5; ?> minutes</ul>
	</ul>
	<a href="question.php?n=1" class="start">Start Quiz</a>
      </div>
    </div>
    </main>


    <footer>
      
    </footer>
	</center>
  </body>
</html>