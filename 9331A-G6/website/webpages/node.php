<?php
    $login = $_GET['access'];
    if ($login != "success"){
        header("LOCATION: ../index.html?error-log-in-first");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>WSTUTOR | Node.js</title>
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
  <div class="jumbotron" style="background-color: #212F3C">
<img id="headimg" class="img-fluid" alt="topimage" src="../pictures/node.png">
  </div>     
</div>

      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2>NODE.JS</h2>
            <p class="lead">Node.js is a an open source, client side, but more of server-side platform that was created on Google Chrome’s Javascript or what they call ‘V8 Engine’. Node.js is primarily used for networking applications and server-side operations. It is also perfect for I/O bound applications, Data Streaming applications, Data Real Intensive Applications, JSON based applications, and single page applications. Its lightweight and efficient unique non-blocking I/O makes it perfect for real-time applications. Its libraries are the same concept with the Javascript. Thus making it much easier to develop web applications.  Node.js is used by notable companies such as Microsoft, PayPal, Yahoo! And many more.  </p></br>
			<p class="lead"></p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h5 class="text-secondary"> Node.js as a Web Server</h5>
              <h4>What is a module in Node.Js?</h4>
            <p class="lead">	 Like libraries in JavaScript, modules in Node.js are collection of single to multiple javascript files that performs a function which can be repeatedly used throughout the whole process of an application. The Node.js implements Common JS Modules Standard which defines the Javascript standards for web server, desktop, and application. The Node.js has three types of modules; The Core, Local, and the Third Party module. Each modules performs different kind of tasks</p>
   
          <p>The Three Types of Modules in Node.Js:</p>
          <dl>
            <dt>Core Modules</dt>
            <dd>- They are located in the lib/ folder. They are loaded when their identifier are passed to a parameter. Basically, they are compiled into binary distributions</dd>
            <dt>Loading Modules</dt>
            <dd>-In order for Core Modules to work. they are first invoked with a function called require(); Once they are loaded, the core modules can now</dd>
            <dt>Third Party Modules</dt>
            <dd>- These are the modules are not part of the built-in modules of Node.js. they are downloaded and can be used after installing the module.</dd>
          </dl> <br> 
          <h4>How to include Modules?</h4>
            <p class="lead"> In order for you to include modules that are included in the list of modules in node.js, you must first use the function require();</p>
          <div class="card-deck col-lg-8 mx-auto text-light text-monospace">
            <div class="card bg-dark">
              <div class="card-body text-center">
                <p class="card-text text-left">Syntax:</p>
                <p class="card-text text-center">Require('Insert Module here');</p>
              </div>
            </div>
            <div class="card bg-dark">
              <div class="card-body ">
                <p class="card-text text-left">Example:</p>
                <p class="card-text text-center" data-toggle="tooltip" title="This will invoke the http module and now you can use it.">Require('http');</p>
              </div>
            </div>
          </div></br>
          
        <h4>How to create your own module?</h4>
            <p class="lead"> In order for you to create your own module you must first use the keyword called 'exports' followed by the name of your method</p>
          <div class="card-deck col-lg-8 mx-auto text-light text-monospace">
            <div class="card bg-dark">
              <div class="card-body text-center">
                <p class="card-text text-left">Syntax:</p>
                <p class="card-text text-center">exports.< method > = function();</p>
              </div>
            </div>
            <div class="card bg-dark">
              <div class="card-body ">
                <p class="card-text text-left">Example:</p>
                <p class="card-text text-center" data-toggle="tooltip" title="This will invoke the http module and now you can use it.">Create a module that returns current date and time</p>
              </div>
            </div>
            <div class="card bg-dark">
              <div class="card-body ">
                <p class="card-text text-left">Code:</p>
                <p class="card-text text-center">                 
                    exports.myDateTime = function date(){
                        return Date();
                        }
                  </p>
              </div>
            </div>
          </div><br>
          <h4>How to use Node.js as a server</h4>
            <p class="lead">	We are going to learn how node.js is used as a web server by providing you a simple example of sending a request from a client to the server, then the server responding to the client.  The Node.js has an HTTP module that can create HTTP servers that gives a response to the client. The method ‘createServer()’ is used in creating HTTP server. It will be executed when someone tries to access the computer’s default port (8080).  After establishing the server, you can now add headers specifically the response header ‘200’ or the ‘Ok’.  What happens in this part is that once the client sends a request and it is received, the server will respond with a header. Once you’re done with the headers you can now send a string to the response. You can do it by typing ‘response.end();’. It will appear if the request is accepted and is successful.  After that you can make the server listen to the clients on a specific port by typing the command ‘server.listen(*enter port no. here)’.  Example below is provided.</p>
            <img id="otherimg" class="img-fluid" src="../pictures/ex.png"><br>
          
            
        <!--QUIZ-->
           
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
