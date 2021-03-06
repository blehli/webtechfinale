<?php
session_start();
    $login = $_GET['access'];
    if ($login != "success"){
        header("LOCATION: ../index.html?error-log-in-first");
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
  <div class="jumbotron" style="background-color:#8A7BDC   ">
<img id="headimg" class="img-fluid" alt="topimage" src="../pictures/php.png">
  </div>     
</div>

      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2>PHP</h2>
              <p class="lead">PHP or also known as Hypertext Preprocessor is a general-purpose programming language which is especially designed for web development. Unlike JavaScript (Js) which is a language for client-side purposes, PHP is created for server-side scripting wherein it can pull and edit informations from and in the database. It is known for its ability to work with different languages in order to make a better web application. This language can work with HTML, Cascading Style Sheet (CSS), Js and MySQL to create web pages for an application. PHP codes are enclosed within the instructions &lt;?php (start/beginning of the code) and ?> (end of the code) which are like tags in HTML ( see Figure 1).</p><br>
            <img id="otherimg" class="img-fluid" src="../pictures/phpimage1.png"><br>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h4>Servers and Databases</h4>
            <p class="lead">Being a Server-side scripting language is the main target of PHP. Different Web application files created with its extension .php and has instructions in it that are written using php must ran from a web server (i.e. WAMP server ) and accessed using a web browser for the instructions to be executed by the web server software (i.e. Apache ). To further illustrate that, refer to figure 2.</p>
              <img id="otherimg" class="img-fluid" src="../pictures/phpimage2.png"><br>
              
            <h4>PHP to Database</h4>
              <p class="lead">PHP5 can work with and on the database using MySQLi extension. PHP MySQLi meaning “MySQL improved” lets you connect and use the MySQL database. This extension provides an interface from the accessed MySQL database. Another extension that lets you access different database system is the PDO or PHP Data Objects. PDO is effective if you wish to change the database in your project. PHP MySQLi can be installed or is mostly installed if you installed the PHP MySQL package.</p>
              
              <h6>A. connect to  a server</h6>
              <img id="otherimg" class="img-fluid" src="../pictures/phpimage3.PNG"><br>
              <h6>B. closing the connection</h6>
              <img id="otherimg" class="img-fluid" src="../pictures/phpimage4.PNG"><br>

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
