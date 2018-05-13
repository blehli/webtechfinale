<?php
    include 'dbconn.php';

    $questnum = (INT) $_GET['n'];
    $quiznum = 1;
    
    $query3 = "SELECT count(question_num) as total FROM question where quiznum=$quiznum;";
    $resulttotal = $conn->query($query3);
    $total = $resulttotal->fetch_assoc();
    

// get the question
    $query = "SELECT * from question where quiznum=$quiznum and question_num=$questnum;";
        
//get result
    $result = $conn->query($query);
    $question = mysqli_fetch_assoc($result);

//get choices
    $query2 ="SELECT * from choice where quiz_num=$quiznum and question_num=$questnum;";

    $choice = $conn->query($query2);
    

    $querytotal = "SELECT * from question where quiznum =$quiznum;";
    $totalresult = $conn->query($querytotal);
    $totalquiz = $totalresult->num_rows;
?>
<html>
    <head>
    
    </head>
    <body>
        <?php echo $question['question']; ?>
        
        
        <form action="checkjavaanswer.php" method="POST">
            <?php while($row = mysqli_fetch_assoc($choice)): ?>
                <li><input name="choice" type="radio" value="<?php echo $row['choiceid']; ?>"/> <?php echo $row['choice_value']; ?></li>
            <?php endwhile; ?>
            <br>
            <input name="submit" type="submit" value="Next"/>
            <input type="hidden" name="number" value="<?php echo $questnum; ?>"/>
            
            
        </form>
        
        
    </body>
</html>

