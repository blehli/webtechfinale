<?php

    $login = $_GET['login'];
    if ($login != "success"){
        header("LOCATION: ../index.html?error");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>WSTUTOR | PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    
  <style>
      #headimg{
          display: block;
          width: 25%;
          margin-left: auto;
          margin-right: auto;
      }
      #otherimg{
          display: block;
          margin-left: auto;
          margin-right: auto;
      }
  </style>
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
              <a class="nav-link" href="logout.php">logout
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
	</nav>
	


    
    
    <div class="container" style="margin-top:20px">
  <div class="row">

    <div class="col-sm-8">
      <h2>TOPICS</h2>
        
        
            <div class="card-deck col-lg-20 mx-auto text-light text-monospace">
            <div class="card bg-dark">
              <div class="card-body text-center">
 <img id="otherimg" class="img-fluid" alt="choices" src="../pictures/java.png">
              </div>
            </div>
            <div class="card bg-dark">
              <div class="card-body ">
        <img id="otherimg" class="img-fluid" alt="choices" src="../pictures/php.png">
              </div>
            </div>
            <div class="card bg-dark">
              <div class="card-body ">
       <img id="otherimg" class="img-fluid" alt="choices" src="../pictures/node.png">
              </div>
            </div>
          </div><br>
        
            <div class="card-deck col-lg-10 mx-auto text-light text-monospace">
            <div class="card bg-dark">
              <div class="card-body text-center">
       <img id="otherimg" class="img-fluid" alt="choices" src="../pictures/asp.png">
              </div>
            </div>
            <div class="card bg-dark">
              <div class="card-body ">
        web security
              </div>
            </div>
          </div>
        
        

    </div>
      
      <?php
      
      include 'dbconn.php';
      
      $query= "SELECT uname, sum(score) as score from users inner join user_quiz using(user_id) group by user_id order by 2 desc limit 5;";
      
      $results = $conn -> query($query);
      ?>
      
      
      
      
    <div class="col-sm-3">
      <h2>QUIZ LEADERBOARD</h2>
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
</div>
    </div>
  </div>
<br><br>

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
</body>
</html>			
