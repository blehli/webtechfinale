<!-- TASKS NEED TO COMPLETE: 
	1.dbase
	2.submit button papunta sa results.html
	-->
<?php include 'dbconn.php'; ?>
<?php
     if(isset($_POST['submit'])){
         //get post variables
         $question_number = $_POST['question_number'];
         $question_text = $_POST['question_text'];
         $correct_choice = $_POST['correct_choice'];
         //Choices array
         $choices = array();
         $choices[1] = $_POST['choice1'];
         $choices[2] = $_POST['choice2'];
         $choices[3] = $_POST['choice3'];

         //query
         $query ="INSERT INTO questions(question_number,text)
                    VALUES('$question_number','$question_text')";

         //Run query
         $insert_row = mysqli_query($conn,$query) or die(mysqli_error($conn));

         //Validate insert
         if($insert_row){
             foreach($choices as $choice => $value ){
                if($value != ''){
                    if($correct_choice == $choice){
                        $is_correct = 1;
                    }else {
                        $is_correct = 0;
                    }
                    //choice query
                    $query = "INSERT INTO choices(question_number,Is_correct,text)
                              VALUES ('$question_number','$is_correct','$value')";


                    //Run query
                    $insert_row = mysqli_query($conn,$query) or die(mysqli_error($conn));

                    //validate insert

                    if($insert_row){
                        continue;
                    }else{
                        die('Error'.mysqli_error($conn));
                    }

                }

             }
            $msg = 'Question had been added';

         }


     }
        /*
        * Get total questions
        */
        $query = "SELECT * FROM questions";
        //GET RESULT
        $results = mysqli_query($conn,$query) or die(mysqli_error($conn));
        $total = mysqli_num_rows($results);
        $next =$total+1;

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
    <header><h1>ADD QUESTIONS HERE:</h1></header>
    <?php
    if(isset($msg)){
            echo'<p>'.$msg.'</p>';
    }
            ?>
    <form method="post" action="add.php">

        <!--questions-->
        <p>
            <label>Question No. </label>
            <input type = "number" value="<?php echo $next; ?>" name="question_number"/>
        </p>
        <p>
            <label>Question Text </label>
            <input type = "text" name="question_text"/>
        </p>

        <!--choices-->
        <p>
            <label>Choice #1: </label>
            <input type = "text" name="choice1"/>
        </p>

        <p>
            <label>Choice #2:  </label>
            <input type = "text" name="choice2"/>
        </p>

        <p>
            <label>Choice #3: </label>
            <input type = "text" name="choice3"/>
        </p>


        <p>
            <label>Correct Choice No: </label>
            <input type = "number" name="correct_choice"/>
        </p>

        <p>
            <input type = "submit" name="submit" value="Submit"/>
        </p>

    </form>
    <br><br>
    <footer>
        &copy; webtechlec | group 6
    </footer>
</div>
</body>
</html>