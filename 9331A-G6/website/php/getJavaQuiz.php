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
<!DOCTYPE html>
<html lang="en">
<head>
  <title>WSTUTOR | QUIZ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    
  
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


</head>
    
<body style="background-color: #E5E8E8  ">
	  <!--sick nav bar-->
	<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
	
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
	
	  <a class="navbar-brand font-weight-bold " style="color:#FFC107" href="Homepage.php">WS TUTOR</a>
	 
		
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto justify-content-end">
            <li class="nav-item active">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#confirm">logout
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
	</nav>
	

      

    <div class="container">  <div class="jumbotron">
        
        <p clas="lead"><?php echo $question['question']; ?></p>
            <br>
            <form action="checkjavaanswer.php" method="POST">
            
            <?php while($row = mysqli_fetch_assoc($choice)): ?>
                <li><input name="choice" type="radio" value="<?php echo $row['choiceid']; ?>"/> <?php echo $row['choice_value']; ?></li>
            <?php endwhile; ?>
            <br>
            <input type="hidden" name="number" value="<?php echo $questnum; ?>"/>
            <input class="btn btn-info" name="submit" type="submit" value="Next"/>
            
        </form>
    
    </div></div>
 

    <!-- LOGOUT MODAL -->
  <div class="modal fade" id="confirm">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Are you sure you want to logout ?</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" href="../index.html">OK</button>
          <button type="button" class="btn btn-warning text-light" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
    <!--end modal-->
    

<!--FOOTER-->
    <footer class="py-4 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">&copy; WS Tutor 2018</p>
      </div>
      <!-- /.container -->
    </footer>
	
	
	    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
    </script>
</body>
</html>			
