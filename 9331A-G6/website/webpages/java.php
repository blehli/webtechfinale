<?php
    $login = $_GET['access'];
    if ($login != "success"){
        header("LOCATION: ../index.html?error-log-in-first");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>WSTUTOR | Java</title>
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
	
	  <a class="navbar-brand font-weight-bold" style="color:#FFC107" href="../php/Homepage.php?access=success">WS TUTOR</a>
	 
		
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
	  <ul class="navbar-nav">
		<li class="nav-item">
		  <a class="nav-link" href="node.php?access=success">node.js</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="java.php?access=success">java</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="php.php?access=success">php</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="asp.php?access=success">asp.net</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="security.php?access=success">web security</a>
		</li>
	  </ul>
          <ul class="navbar-nav ml-auto justify-content-end">
            <li class="nav-item active">
              <a class="nav-link" href="../php/logout.php">logout
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
	</nav>
	
<!--CONTENT-->
<!--top image-->
<div class="container" >
  <div class="jumbotron" style="">
<img id="headimg" class="img-fluid" alt="topimage" src="../pictures/java.png">
  </div>     
</div>

      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2>JAVA</h2>
            <p class="lead">Java is a object-oriented, general purpose language that is intended for GUI development, mobile applications, and also web development.
			Being used in the web development, Java is mostly used in the server side with the use of its Java  servlets, struts, and JavaServer pages (JSP)
			. The technologies used in java enables the programmer to provide server-side operations in the web application. This language can be used with 
			HTML, HTTP, Apache Servers, and MySQL Database System.</p><br>
			<p class="lead">	Web Applications created in java contains different application resources such as servlets , java server pages or JSP, and other resources which 
			can be used to include more functionality in the application. Java Servlet technology and JavaServer Pages are server-side technologies in java 
			that follows the Write Once, Run Anywhere paradigm which means that once you have written or created a web application, it can be run on any 
			platforms as long as the platform has Java Virtual Machine(JVM).</p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h3>Java Servlets</h3>
            <p class="lead">	Servlets are Java classes that use request-response programming model in order to include capabilities of a server which hosts applications.
			It can respond to any type of request  but are commonly used to access applications hosted by the server. 
			It can generate html pages using print
			statements.</p>
          </div>
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
	

</body>
</html>

			
