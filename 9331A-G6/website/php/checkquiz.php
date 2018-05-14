<?php include 'dbconn.php'; ?>

<?php session_start(); 
?>

<?php 
    
    $query3 = "SELECT count(question_num) as total FROM question ;";
    $resulttotal = $conn->query($query3);
    $total = $resulttotal->fetch_assoc();

    $query = "SELECT answer from question;";     
    //get result
    $result = $conn->query($query);
    
    if ($_POST){
        $number=1;
        $score=0;    
        while ($number != $total AND $correct = mysqli_fetch_assoc($result)):
            $answer = $_POST['answer'.$number];
            if ($answer = $correct){
                $score++;
            }
            $number++;
        endwhile;
          
        $query = "INSERT INTO user_quiz (user_id, score) VALUES ($userid, $score);";
        $result = mysqli_query($conn, $query);
       
    }
?>

<html