<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chat Reviews Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Chat Reviews</strong> Register</h1>
                            <div class="description">
                            	<!-- <p>
	                            	This is a free responsive login form made with Bootstrap. 
	                            	Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                            	</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                            		           <h3>Register to our site</h3>
                                		 <p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                                </div>
                                <div class="form-bottom">
            	                    <form role="form" action="../backend/login.php" method="post" class="login-form">
                        	                    	<div class="form-group">
                                                        <label class="sr-only" for="form-username">Full Name</label>
                                                        <input type="text" name="form-username" placeholder="Full Name..." class="form-username form-control"  id="form-username">
                                                    </div>  
                                                      <div class="form-group">
                        	                    		<label class="sr-only" for="form-username">Username</label>
                        	                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control"  id="form-username">
                        	                        </div>
                        	                        <div class="form-group">
                        	                        	<label class="sr-only" for="form-password">Password</label>
                        	                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                        	                        </div>
                                                       <div class="form-group">
                                                        <label class="sr-only" for="form-password">Confirm Password</label>
                                                        <input type="password" name="form-password" placeholder="Confirm Password..." class="form-password form-control" id="form-password">
                                                      </div>
                                                     <div class="form-group">
                                                        <label class="sr-only" for="form-username">Address</label>
                                                        <input type="text" name="form-username" placeholder="Address..." class="form-username form-control"  id="form-username">
                                                     </div> 
                                                     <div class="form-group">
                                                        <label class="sr-only" for="form-username">Hub Varify Token</label>
                                                        <input type="text" name="form-username" placeholder="Hub Varify Token..." class="form-username form-control"  id="form-username">
                                                     </div> 
                                                     <div class="form-group">
                                                        <label class="sr-only" for="form-username">Access Token</label>
                                                        <input type="text" name="form-username" placeholder="Access Token..." class="form-username form-control"  id="form-username">
                                                     </div> 
                        	                        <button type="submit" class="btn">Register</button>
                                                        <a href="login.php" style="float:right;margin-top:10px">Login with your credentials</a>
                                                        <br>
                                                        <br>
            	                    </form>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h4>...or login with:</h4>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
    </body>
</html>