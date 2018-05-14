<?php session_start(); ?>
<!-- TASKS NEED TO COMPLETE:
	1.dbase
	2.submit button papunta sa results.html
	-->
<?php include 'dbconn.php'; ?>
<?php
//set question number
$number =(int) $_GET['n'];


/*
* Get Question
*/


$query = "SELECT * FROM questions
				WHERE question_number = '$number'";


//Get result

$result = mysqli_query($conn,$query)or die(mysqli_error($conn));

$question = $result->fetch_assoc();




/*
* Get Choices
*/


$query = "SELECT * FROM choices
				WHERE question_number = '$number'";

//Get result

$choices = mysqli_query($conn,$query) or die(mysqli_error($conn));

?>
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
    <header><h1>WEBTECH QUIZ</h1></header>
    <p>
        <?php echo $question['text']; ?>
    </p>
    <form method="post" action="process.php">
        <?php while($row = mysqli_fetch_assoc( $choices)): ?>
            <input name="choice" type="radio" value="<?echo $row['id']; ?>" /><?php echo $row['text']; ?></br>
        <?php endwhile; ?>
        <input type="submit" value="Submit" />
        <input type ="hidden" name="number" value="<?php echo $number; ?>" />
    </form>
    <br><br>
    <footer>
        &copy; webtechlec | group 6
    </footer>
</div>
</body>
</html>