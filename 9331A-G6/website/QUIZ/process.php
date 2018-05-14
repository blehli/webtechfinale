<?php session_start(); ?>
<?php include 'dbconn.php'; ?>
<?php
if(!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;

}



if($_POST){
        $number = $_POST['number'];
        $selected_choice = $_POST['choice'];
        $next = $number+1;

        /*
         * Get total questions
         */
         $query = "SELECT * FROM questions";
         //GET RESULT
        $results = mysqli_query($conn,$query) or die(mysqli_error($conn));
        $total = mysqli_num_rows($results);



        /*
         * Get correct choice
         */

        $query = "SELECT * FROM choices 

                    WHERE question_number =$number AND Is_correct = 1";


        //get result
        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));


        //get row
        $row = mysqli_fetch_assoc($result);

        //set correct choice

        $correct_choice= $row['id'];


        //Compare

        if($correct_choice == $selected_choice){
            //answer is correct
            $_SESSION['score']++;
        }

        //check if last question
        if($number == $total){
            header("Location: results.php");
        }else{
            header("Location:question.php?n=".$next);
        }



}










