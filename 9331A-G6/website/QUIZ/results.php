<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../css/qstyle.css">
        <link rel="icon" href="/pictures/LOGO.png">
        <meta charset="UTF-8">
        <title>QUIZ | Web Systems and Technology</title> 
    </head>
	<body>
        <div id="maincontainer">
           <header><h1>RESULTS</h1></header>
            <p>SCORE: <?php echo $_SESSION['score']; ?></p>
            <a href="question.php?n=1" class="quizstart">TAKE QUIZ AGAIN</a>

			<br><br>
            <footer>
                	&copy; webtechlec | group 6  
            </footer>
        </div>
    </body>
</html>