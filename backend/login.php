<?php
            include 'db-config.php';

           $username=' ';
           $password=' ';

           if (empty($_POST['form-username']) || empty($_POST['form-password'])) {
	      $error = "Username or Password is invalid";
	}
	else
	{
	      $username=$_POST['form-username'];
                 $password=$_POST['form-password'];
                 echo $username." ".$password;
	}

	$results = $conn->query("SELECT * from user where email= '".$username." ' ");
           $dataSet= [];
		
	foreach ($results as $key => $value) {
	
		if($password==$value['password']){
                          
                          session_start();

                          $_SESSION['session_id']= $value['user_id'];
                          $_SESSION['profile_name']= $value['name'];
                          $_SESSION['hubVerifyToken']= $value['hubVerifyToken'];
                          $_SESSION['accessToken']= $value['accessToken'];
                         //  echo $_SESSION['accessToken']."  ".$_SESSION['hubVerifyToken'];
                         header("location: ../index.php");
		}else{
                          header("location: ../login/login.php");
		} 
	}

?>