<?php
    $login = $_GET['access'];
    if ($login != "success"){
        header("LOCATION: ../index.html?error-log-in-first");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>WSTUTOR | Web Security</title>
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
  <div class="jumbotron bg-success text-light text-center" >
    <h1>WEB SECURITY</h1>
  </div>     
</div>

      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2 class="text-center">TOP 10 Most Critical Web Application Security Risks</h2><h3 class="text-center">OWASP 2017</h3>
              <br><br>
            <p class="lead">There are different factors that can affect the functionality of a web application. Some of which includes different web application security risks that can bring too much harm on the client as well as the provider of the web app.</p><br>
              <h2>A1 - Injection</h2>
              <br/>
              <h4>What is an A1 - Injection?</h4>
         
		 <p class="lead">
        Injection occurs when there is an untrusted data which is sent as a part of a command or a query.
		Attackers use this to let the interpreter execute a certain command without proper authorization and is not really part of the
		original functionality of the application. Injections can be found on SQL, LDAP, XPath, or NoSQL queries, OS commands, XML parsers  and others. 
		It can result to data loss, financial loss, denial of access and others.        
        </p>      
              
		<br/>	  
		 <h4>Mitigation Process for A1 - Injection</h4>
		  <p class = "lead">You can prevent injection by doing these:</p>
			  <dl>
            <dt>1. Use a parameterized API</dt><br/>
            <dt>2. Use a velted library of frameworks</dt><br/>
            <dt>3. Run the application with minimum privileges</dt><br/>
            <dt>4. Validate the input by doing the blacklist validation testing or whitelisting method</dt><br/>
          <div class="card-deck col-lg-8 mx-auto text-light text-monospace">
            <div class="card bg-dark">
              <div class="card-body text-center">
                <p class="card-text text-left">Blacklisting</p>
                <p class="card-text text-center">An application compiles a list of malicious inputs then verifies the external input from a given list of malicious inputs </p>
              </div>
            </div></br>	
            <div class="card bg-dark">
              <div class="card-body text-center">
                <p class="card-text text-left">Whitelisting</p>
                <p class="card-text text-center">An external input is tested from a set of approved inputs. Rejects an external Input if it failed to match from a set of approved inputs. </p>
              </div>
            </div>
			</div><br/>
			 <dt>5. Apply the principle of least privilege wherein for example  read access accounts should only be granted with read access permissions from the table/s they only need to access.</dt><br/>
          </dl> 
		  
		  <h4>Example:</h4>
		  <p class = "lead">A diagram of how injection works.</p>
		  <div class="container" >
			<div class="jumbotron" style="background-color:white">
			<center><image src = "../pictures/injection.png"></center>
			</div>     
			</div>
			<br/>
			
			
			
			
			<!--A2 - BROKEN AUTHENTICATION-->
			              <h2>A2 - Broken Authentication</h2><br/>
			             <h4>What is A2 - Broken Authentication?</h4>
         
		 <p class="lead">
        Authentication and session management goes hand in hand because they handle both the verifying of user accounts and the management of the active sessions.
		The authentication part is critical yet it has flaws on the part of credential management like change password.
On the web, user authentication usually require userID or username and password.
 There are stronger authentication and verification protocols/procedures like biometrics or when you need your thumbprint or fingerprint before you can access your account.
 There are also cases wherein you are required to prove that you are not a robot and this is also a verification protocol. 
        </p>      
              
		<br/>	  
		 <h4>Mitigation Process for A2 - Broken Authentication?</h4>
		  <p class = "lead">You can prevent injection by doing these:</p>
			  <dl>
            <dt>1. Compare the passwords you use with a list of the top 10, 000 worst passwords.</dt><br/>
            <dt>2. Test your password strength</dt><br/>
            <dt>3. Restriction to a specific number when it comes to log in attempts and the passwords entered during those attempts should not be recorded to protect the account owner.</dt><br/>
            <dt>4. Passwords should be kept or encrypted or hashed so that it will not be easily exposed. Hashing is more preferable since it is not reversible. </dt><br/>
			 <dt>5.Passwords should NOT be hard coded in any source code.</dt><br/>
			 <dt>6.Web applications should have a reauthentication </dt><br/>
			 <dt>7.All user information or credentials and their session identifiers should be protected with SSL or Secure Sockets Layer to protect from attackers or hijackers
			 , exposure from other glitches like cross site scripting
			 and this must be at all times. the session of a user must be protected with SSL as well. </dt><br/>
          </dl> 
		  
			
			
			
			
				<!--A2 - BROKEN AUTHENTICATION-->		
			              <h2>A3 - SENSITIVE DATA EXPOSURE</h2><br/>
			             <h4>What is A3 - Sensitive Data Exposure?</h4>
         
		 <p class="lead">
 Bank account informations, health information, birthdays, username, and password are only some of many informations that are stored within the database of a web application. 
 These are considered to be sensitive data and needs to be secured properly so that no one can use these informations in a harmful way. But what if these data were not secured properly, 
 this is where sensitive data exposure comes in. Sensitive data exposure is a kind of vulnerability where a hacker can simply have the access to monitor the network traffic and use the users session cookies in order to access 
 their sensitive data. In this way, hackers can now use the information which can lead to financial loss and other issues.
        </p>      
              
		<br/>	  
		 <h4>Mitigation Process for A3 - Sensitive Data Exposure</h4>
		  <p class = "lead">You can prevent injection by doing these:</p>
			  <dl>
            <dt>1. Classify the data that are being processed. Determine what datas are considered sensitive in terms of laws and policies. Encrypt the sensitive data when storing them.dt><br/>
            <dt>2. When transferring datas over the internet or client to server communication, datas should not be transmitted on a clear text. It is a must for the sensitive datas to be encrypted before transmitting them.</dt><br/>
            <dt>3. When encrypting the sensitive datas, the algorithm for the encryption should be strong enough to withstand different kinds of attacks such as bruteforce. </dt><br/>
            <dt>4. The generation keys  must be always up-to-date and is properly managed.</dt><br/>
			 <dt>5.Passwords should be applied with strong hashing techniques</dt><br/>
			 <dt>6.Disable the caching in browser headers whenever there is a sensitive data that is being presented to the end-user</dt><br/>
			 <dt>7.Secure the gateway authentication by applying techniques such as the 2 factor authentication technique. </dt><br/>
			 <dt>8.Simulate the attacks on your application to check if there are  vulnerabilities in the security of your application and also check for the integrity of your application.</dt><br/>
          </dl> 			
					  <h4>Example:</h4>
		  <p class = "lead">A diagram of how sensitive data exposure works via phising</p>
		  <div class="container" >
			<div class="jumbotron" style="background-color:white">
			<center><image src = "../pictures/phishing.png"></center>
			</div>     
			</div>
			<br/>
			
	

				<!--A4 - XML External Entities(XXE)-->		
			              <h2>A4 - XML External Entities(XXE)</h2><br/>
			             <h4>What is A4 - XML External Entities(XXE)</</h4>
         
		 <p class="lead">
				It is an attack where the attacker can manipulate some of the features 
				of the XML parsers which can cause Denial of Service (DOS). An attacker can also manipulate the 
				XML to hack the protected files from a network. The vulnerability for XML occurs on Data Type Definition (DTDs)
				which came from SGML.In Server-side Request Forgery (SSRF) happens when an XML parser is configured by the hacker to
be able to make a request and get the contents of the system. 				
        </p>      
              
		<br/>	  
		 <h4>Mitigation Process for A4 - XML External Entities(XXE)</h4>
		  <p class = "lead">You can prevent injection by doing these:</p>
			  <dl>
            <dt>1. Use other formats such as JSON</dt><br/>
            <dt>2. Always update or patch all of the XML processors</dt><br/>
            <dt>3. Implement whitelisting to avoid hostile data</dt><br/>
            <dt>4. Verify every XML or XSL incoming</dt><br/>
			 <dt>5.Add Web Application Firewalls for monitoring activities</dt><br/>
			 <dt>6.Disable XML external entity in all of XML parsers</dt><br/>
          </dl> 			
					  <h4>Example:</h4>
		  <p class = "lead">Example of SSRF attack</p>
		  <div class="container" >
			<div class="jumbotron" style="background-color:white">
			<center><image src = "../pictures/SSRF.png"></center>
			</div>     
			</div>
			<br/>


				<!--A5 - Broken Access Control(XXE)-->		
			              <h2>A5 - Broken Access Control</h2><br/>
			             <h4>What is A5 - Broken Access Control</</h4>
         
		 <p class="lead">
				Broken Access Control are one of the most attacks in the modern web applicaitons. 
				The attack happens when the attacker changes the parameter value of a system without any permission.
				If the attacker gains control of the admin functionality of any web applications, they can manipulate
				the sensitive datas. allowing the attacker to do which is not permitted,
				These attacks occurences on any web application or API's in which all of the users request privileges are
				not verified.	
        </p>      
              
		<br/>	  
		 <h4>Mitigation Process for A5 - Broken Access Control</h4>
		  <p class = "lead">You can prevent injection by doing these:</p>
			  <dl>
            <dt>1. Create a log access to record activities</dt><br/>
            <dt>2. Implement access control mechanisms</dt><br/>
            <dt>3. verify every request incoming to check whether the requester has the permission.</dt><br/>
            <dt>4. Implement central application for access control management</dt><br/>
			 <dt>5.Manage the server/application every now and then.</dt><br/>
			 <dt>6.Implement programmatic techniques</dt><br/>
          </dl> 			
			
			

				<!--A6-Security Misconfiguration-->		
			              <h2>A6-Security Misconfiguration</h2><br/>
			             <h4>What is A6-Security Misconfiguration</</h4>
         
		 <p class="lead">
					Security Misconfiguration happens when the server or web application are poorly
					configured which may lead to some flaws such as Debugging Enabled, Incorrect folder permissions
					Using default accounts or passwords , and others. This may cause the data to be stolen or
					modified overtime. Network Administrators and programmers must be able to monitor
					and apply security measures inthe web application
					or server in order to prevent hackers from accessing the senstive datas.
        </p>      
              
		<br/>	  
		 <h4>Mitigation Process for A6-Security Misconfiguration</h4>
		  <p class = "lead">You can prevent injection by doing these:</p>
			  <dl>
            <dt>1. Disable use of default accounts/passwords.</dt><br/>
            <dt>2. Disable administration interfaces.</dt><br/>
            <dt>3. Disable debugging.</dt><br/>
            <dt>4. Automate the process of verifying the configuration in all environments</dt><br/>
			 <dt>5.Remove unused or irrelevant features and frameworks</dt><br/>
			 <dt>6.Adding sercurity measures</dt><br/>
          </dl> 			



				<!--A7-Cross-Site Scripting (XSS)-->		
			              <h2>A7-Cross-Site Scripting (XSS)</h2><br/>
			             <h4>What is A7-Cross-Site Scripting (XSS)</</h4>
         
		 <p class="lead">
				Cross-site Scripting (XXS) happens when an attackker use a code injection to execute
				scripts into web applications. It usually happens a victim clicks on a link which will
				be redirected into another link with a malicious script in it. The script is usually
				coded in Javascript since Javascript is widely used in websites. After that, the attacker
				can gain access to the cookies which may impersonate the victim. When the attacker gained 
				access to the cookie, the attacker can now manipulate datas that will lead to various criminal
				acts.
        </p>      
              
		<br/>	  
		 <h4>Mitigation Process for A7-Cross-Site Scripting (XSS)</h4>
		  <p class = "lead">You can prevent injection by doing these:</p>
			  <dl>
            <dt>1. Apply context-sentive encoding to the browser documents</dt><br/>
            <dt>2. Enable Content Security Policy</dt><br/>
            <dt>3. Apply strong security keys to your website</dt><br/>
            <dt>4. Encrypt sensitive datas</dt><br/>
			 <dt>5.Apply XSS Prevention Rules</dt><br/>
          </dl> 
					  <h4>Example:</h4>
		  <p class = "lead">Example of simple XSS injection attack</p>
		  <div class="container" >
			<div class="jumbotron" style="background-color:white">
			<center><image src = "../pictures/xss.png"></center>
			</div>     
			</div>
			<br/>


				<!---A8-Insecure Deserialization)-->		
			              <h2>A8-Insecure Deserialization</h2><br/>
			             <h4>What is A8-Insecure Deserialization</</h4>
         
		 <p class="lead">
				Insecure Deserialization occurs when an untrusted data is used to manipulate
				an application that may lead to DoS , authentication bypasses, and others. 
				
				<div class="card-deck col-lg-8 mx-auto text-light text-monospace">
            <div class="card bg-dark">
              <div class="card-body text-center">
                <p class="card-text text-center">Deserialization - converting serialized data coming from a file or stream, others into an object. </p>
              </div>
            </div>
			</div>
        </p>      
              
		<br/>	  
		 <h4>Mitigation Process for A8-Insecure Deserialization</h4>
		  <p class = "lead">You can prevent injection by doing these:</p>
			  <dl>
            <dt>1. Always monitor the deserialization process</dt><br/>
            <dt>2. Create a log that will record all of the deserialization process</dt><br/>
            <dt>3. implement integrity check on serialized objects</dt><br/>
            <dt>4. Monitor incoming and outgoing network connectivity</dt><br/>
          </dl> 


				<!--A9-Using Components with Known Vulnerabilities)-->		
			              <h2>A9-Using Components with Known Vulnerabilities</h2><br/>
			             <h4>What is A9-Using Components with Known Vulnerabilities</</h4>
         
		 <p class="lead">
					Some components such as framework libraries are vulnerable to attacks and explotation
					since some development teams doesn't understand what is the purpose of that framework. 
					Even if they don't understand the purpose, they still include it in their application;
					giving it less attention and not updated making it vulnerable to the attackers. 
					The impact of this attack may result into a 
					minor breaches up to the largest breaches that can happen.
        </p>      
              
		<br/>	  
		 <h4>Mitigation Process for A9-Using Components with Known Vulnerabilities</h4>
		  <p class = "lead">You can prevent injection by doing these:</p>
			  <dl>
            <dt>1. Remove unused components in the application</dt><br/>
            <dt>2. Understand every components that are being placed in the web application.</dt><br/>
            <dt>3. Monitor each components by keeping them up to date.</dt><br/>
            <dt>4. Get components from known sources</dt><br/>
			 <dt>5.Get tools that protects application from attacks</dt><br/>
          </dl> 

				<!--A10-Insufficient Logging&Monitoring)-->		
			              <h2>A10-Insufficient Logging& Monitoring <h2><br/>
			             <h4>What is A10-Insufficient Logging& Monitoring </h4>
         
		 <p class="lead">
					Having insufficient logging and monitoring of applications and systems may 
					be vulnerable to different kind of attacks such as breaches which can be
					difficult to fix once the damage has been done. The attack can lead to datas
					 being stolen. Having a sufficient logging 
					and monitoring is one of the best practices in maintaining a system or applications.
					It is a must so that the attacks can be prevented. It is also recommended to apply
					security measures to ensure the safety of senstive datas.
        </p>      
              
		<br/>	  
		 <h4>Mitigation Process for A10-Insufficient Logging & Monitoring</h4>
		  <p class = "lead">You can prevent injection by doing these:</p>
			  <dl>
            <dt>1. log all logins, input validation, and access control</dt><br/>
            <dt>2. monitor suspicious activites </dt><br/>
            <dt>3. always have an alternative plan to each attacks</dt><br/>
		 
          </dl> 
	
		  
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
		  
		  
                      <!--QUIZ-->
         
          </div>
        </div>
      </div>





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
