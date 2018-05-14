<?php
   
    $login = $_GET['access'];
    if ($login != "success"){
        header("LOCATION: ../index.html?error-log-in-first");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>WSTUTOR | HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    
  
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    
  <style>
      #heading{
          display: block;
          width: 25%;
          margin-left: auto;
          margin-right: auto;
      }
      #otherimg{
          display: block;
          margin:auto;
      }
      .card{
          border: none;
      }
      
      .zoom {
    transition: transform .2s;
      }

    .zoom:hover {
        transform: scale(1.2); 
    }
    
      .smallimg{
          width: 20%;
      }
      .abtimg{
          width: 100%;
      }
  </style>
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
              <a data-toggle="modal" data_target="#confirm" class="nav-link" > <a href="../index.html">logout</a>
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
	</nav>
	
    <div class="container" style="margin-top:20px" id="topics">
  <div class="row">

    <div class="col-sm-8">
        <!--TOPICS-->
      <h1 >CHOOSE A TOPIC</h1>
        
           
            <div class="card-deck col-lg-20 mx-auto text-light text-monospace bg-transparent">
                <!--JAVA-->
                <div class="card bg-transparent">
                  <div class="card-body bg-transparent">
                      <a href="../webpages/java.php?access=success"><img id="otherimg" class="img-fluid zoom" alt="choices" src="../pictures/java.png"></a>
                  </div>
                </div>
                <!--PHP-->
                <div class="card bg-transparent">
                  <div class="card-body ">
                    <a href="../webpages/php.php?access=success"><img id="otherimg" class="img-fluid zoom" alt="choices" src="../pictures/php.png"></a>
                  </div>
                </div>
                <div class="card bg-transparent">
                  <div class="card-body ">
                    <a href="../webpages/node.php?access=success"><img id="otherimg" class="img-fluid zoom" alt="choices" src="../pictures/node.png"></a>
                  </div>
                </div>
          </div><br>
        
            <div class="card-deck col-lg-10 mx-auto text-light text-monospace">
            <div class="card bg-transparent">
              <div class="card-body ">
                <a href="../webpages/asp.php?access=success"><img id="otherimg" class="img-fluid zoom" alt="choices" src="../pictures/asp.png"></a>
              </div>
            </div>
            <div class="card text-success bg-transparent">
              <div class="card-body text-center">
                    <a style="text-decoration: none" href="../webpages/security.php?access=success"><h2 class="text-success zoom">Web <br>Security</h2></a>
              </div>
            </div>
          </div>

    </div>
      
      
      <?php
      
      include 'dbconn.php';
      
      $query= "SELECT uname, sum(score) as score from users inner join user_quiz using(user_id) group by user_id order by 2 desc limit 5;";
      
      $results = $conn -> query($query);
      ?>
      
      
      <!--LEADERBOARD-->
    <div class="col-sm-4">
        <h3>QUIZ LEADERBOARD</h3>
        <table class="table table-dark">
            <thead>
            <tr>
                <th>NAME</th>
                <th>SCORE</th>
            </tr>
            </thead>
            <tbody>
                <?php while($rows= mysqli_fetch_assoc($results)): ?>
                <tr>
                    <td><?php echo $rows['uname']; ?></td>
                    <td><?php echo (INT)$rows['score']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        
        <!--WHOLE QUIZ-->
        <h5>Feeling Confident?</h5>
        <button type="button" class="btn btn-outline-secondary btn-lg"  data-toggle="tooltip" data-placement="right" title="The quiz consist of questions from all of the topics"><a href="getQuiz.php">TAKE QUIZ</a></button><br><br>
        
        
        <!--ABOUT US LINK-->
        <a style="text-decoration: none ; border-radius: 3px " class="nav-link js-scroll-trigger text-left bg-dark" href="#about">
            <h4 class="text-light">The WS Tutor Team</h4>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block rounded-circle img-fluid smallimg" src="../pictures/jhay.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block rounded-circle img-fluid smallimg" src="../pictures/blessly.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block rounded-circle img-fluid smallimg" src="../pictures/delfin.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block rounded-circle img-fluid smallimg" src="../pictures/edson.jpg" alt="Fourth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block rounded-circle img-fluid smallimg" src="../pictures/noreen.jpg" alt="Fifth slide">
            </div>
          </div>
        </div>
            
        </a>

    </div>
      
      
    
    </div>
  </div>
<br><br>
    <!--FULL ABOUT-->
    <section id="about" class="bg-secondary" >
        <br><br><br>
        <h1 class="text-center " >THE <div style="color:#FFC107" class="font-weight-bold">WS TUTOR</div> TEAM</h1>
        <div class="card-deck col-lg-22 mx-auto text-dark text-center bg-transparent">
        
        <div class="card bg-transparent">
          <div class="card-body zoom">
              <img class="rounded-circle img-fluid abtimg" src="../pictures/jhay.jpg" alt="aboutimg"><p class="lead">Jhaylord Viray</p>
          </div>
        </div>
       
        <div class="card bg-transparent">
          <div class="card-body zoom">
            <img class="rounded-circle img-fluid abtimg" src="../pictures/blessly.jpg" alt="aboutimg"><p class="lead">Blessly Carbonell</p>
          </div>
        </div>
            
        <div class="card bg-transparent">
          <div class="card-body zoom">
            <img class="rounded-circle img-fluid abtimg" src="../pictures/delfin.jpg" alt="aboutimg"><p class="lead">Delfin Cachin III</p>
          </div>
        </div>
            
        <div class="card bg-transparent">
          <div class="card-body zoom">
            <img class="rounded-circle img-fluid abtimg" src="../pictures/noreen.jpg" alt="aboutimg"><p class="lead">Noreen Anne Dizon</p>
          </div>
        </div>
            
        <div class="card bg-transparent">
          <div class="card-body zoom">
            <img class="rounded-circle img-fluid abtimg" src="../pictures/edson.jpg" alt="aboutimg"><p class="lead">Edson Roy Florendo</p>
          </div>
        </div>    
          </div>
    
        </section>
    
     
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
