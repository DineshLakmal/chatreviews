<?php 

           include 'db-config.php';

     
           session_start();

           if(isset($_SESSION['session_id'])) {

                         $session_id=  $_SESSION['session_id'];
                         $profile_name= $_SESSION['profile_name'];
                         $session_hubVerifyToken = $_SESSION['hubVerifyToken'];
                         $session_accessToken = $_SESSION['accessToken'];
                       
           }else{
                   header("location: login/login.php");
       	}
?>