<?php
    $login = $_GET['access'];
    if ($login != "success"){
        header("LOCATION: ../index.html?error-log-in-first");
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>WSTUTOR | asp.net</title>
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
  <div class="jumbotron" style="background-color: #99A3A4  ">
<img id="headimg" class="img-fluid" alt="topimage" src="../pictures/asp.png">
  </div>     
</div>

      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2>ASP.NET</h2>
            <p class="lead">ASP.NET or ASP (Active Server Pages) are server side technologies developed by Microsoft. 
			It is used to build dynamic web site, application and services. The framework mainly uses the language C#.
			ASP supports many different development models namely the Classic ASP, Web Forms, MVC, Web Pages, API and Core. </p></br>
			<p class="lead">ASP.NET Web Pages is an SPA application model (Single Page Application). 
			The SPA model is quite similar to PHP and Classic ASP. ASP.NET Web Pages is being merged into the new ASP.NET Core. 
			In addition, Web Pages applications are easily extendable with programmable helpers for databases, videos, graphics, social networking and more.
			</p>
			
			<h4>Web Pages Razor Markup</h4>
			<p class ="lead">Razor is a simple markup syntax for embedding server code (C# or VB) into ASP.NET web pages.</p>
			<div class="jumbotron" style="background-color: #99A3A4  ">
			<h5> Sample Code: </h5>
				<p> < !DOCTYPE html> <br/>
					< html><br/>
					< head>
					< title>@Page.Title</ title>
					< / head><br/>
                    < body><br/>
					@RenderBody()<br/>
					</ body><br/>
					</ html>
				</p>
						</div>	
			  <h2>Web Pages - Objects</h2>
			  <p class ="lead">below are the list of page object methods </p>
		     <dl>
            <dt>IsPost</dt>
            <dd>Returns true if the HTTP data transfer method used by the client is a POST request</dd>
            <dt>Layout	</dt>
            <dd>Gets or sets the path of a layout page</dd>
            <dt>Page</dt>
            <dd>Provides property-like access to data shared between pages and layout pages</dd>
		    <dt>Request</dt>
            <dd>Gets the HttpRequest object for the current HTTP request</dd>
			<dt>Server</dt>
            <dd>Gets the HttpServer Utility object that provides web-page processing methodst</dd>
          </dl>

			
						<div class="jumbotron" style="background-color: #99A3A4  ">
			<h5> Sample Code: </h5>
				<p> < !DOCTYPE html> <br/>
					< html><br/>
					< head>
					< title>@Page.Title</ title>
					< / head><br/>
                    < body><br/>
					@RenderBody()<br/>
					</ body><br/>
					</ html>
				</p>
						</div>	






			   <!--QUIZ-->
				  
			 <h2>Other types of ASP.net</h2>  
			<p class="lead"></p>
				  
				  
            <a href="#" type="button" class="btn btn-success btn-lg" role="button">TAKE QUIZ</a><br>
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
                        
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
    </script>
</body>
</html>			
