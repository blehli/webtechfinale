<?php include 'dbconn.php'; ?>

<?php session_start(); 
?>

<?php 
    
    $query3 = "SELECT count(question_num) as total FROM question ;";
    $resulttotal = $conn->query($query3);
    $total = $resulttotal->fetch_assoc();

    $query = "SELECT * from question;";     
    //get result
    $result = $conn->query($query);
    
    if ($_POST){
        $number=1;
        $score=0;    
        while ($correct= $result->fetch_assoc()):
            $answer = $_POST['answer'.$number];
            
            if ($answer != $correct['answer']){
               
            }else {
                 $score++;
            }
                
            
            $number++;
        endwhile;
          
        //$query = "INSERT INTO user_quiz (user_id, score) VALUES ($userid, $score);";
        //$result = mysqli_query($conn, $query);
       
    }
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
	
	  <a class="navbar-brand font-weight-bold " style="color:#FFC107" href="Homepage.php?access=success">WS TUTOR</a>
	 
		
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
	
    
    <div class="container">
        <div class="card card-register mx-auto mt-4">
        <!--card header-->
            <div class="card-header" style="background-color:#E0F2F1"><h5 class="font-weight-bold" style="color:#FFC107"><center>RESULTS</center><small class="text-secondary"><center></center></small></h5></div>
            <br>
              <center>You have correctly answered <?php echo $score; ?> out of <?php echo $total['total']; ?> questions.<br>
                Thank you.</center>
            <br>
        </div>
    </div>
    
     
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
          <button type="button" class="btn btn-danger" ><a href="../index.html">OK</a></button>
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
