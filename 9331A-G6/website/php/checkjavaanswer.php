<?php include 'dbconn.php'; ?>

<?php session_start(); ?>

<?php 

    // check the score
    if (!isset($_SESSION['score'])){
        $_SESSION['score'] = 0;
    }

    if ($_POST){
        //gets the value of the question number from getJavaQuiz.php
        $quest = $_POST['number'];
        // gets the choice id of the selected answer
        $selected = $_POST['choice'];
      
        
        echo $next;
            
        $query = "SELECT * from choice where quiz_num=1 and question_num= $quest and iscorrect=1;";
       
       // get result
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        
        $correct= $row['choiceid'];
       
        if ($correct == $selected) {
            $_SESSION['score']++;
            
        }
        
        if ($quest == 3){
            header("Location: results.php");
            exit();
        } else {
            //header ("Location: getJavaQuiz.php?n=".$quest+1);
        }

    }
?>