<?php include 'dbconn.php'; ?>

<?php
/*
 * Get Total Questions
 *
 */
$query="SELECT * FROM questions";

$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
$total = $result->num_rows;
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
    <header><h1>QUIZ TIME</h1></header>

    <h2>test your knowledge</h2>
    <ul>
        <li ># of items: <?php echo $total; ?></li>
        <li>TYPE: multiple choices</li>
        <li>TYPE: Estimated Time: <?php echo $total*.5; ?> minute/s</li>
    </ul>

    <a href="question.php?n=1" class="quizstart">TAKE THE QUIZ</a>
    <br><br>
    <footer>
        &copy; webtechlec | group 6
    </footer>
</div>
</body>
</html>