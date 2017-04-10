<?php

include ("query.php");
$Obj = new ponzy();
//$email = $_SESSION['email'];
//$profile = $Obj->getLoginDetail($email);
//$uid = $profile['0'];
if (get_magic_quotes_gpc())
  {
  function stripslashes_deep($value)
           {
		    $value = is_array($value) ?
			array_map('stripslashes_deep' , $value) :
			stripslashes($value);
			return $value;
           }
$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);
$_FILES = array_map('stripslashes_deep' , $_FILES);
}
// Add Organization
if(isset($_POST['registerUser']))
 {
	   include 'connection.php';
       $first_name  = mysqli_real_escape_string($link, $_POST['first_name']);
	   $last_name  = mysqli_real_escape_string($link, $_POST['last_name']);
       $username  = mysqli_real_escape_string($link, $_POST['user_name']);
       $phone  = mysqli_real_escape_string($link, $_POST['phone']);
       $email  = mysqli_real_escape_string($link, $_POST['email']);
	   $password  = mysqli_real_escape_string($link, $_POST['password']);
       $referral  = mysqli_real_escape_string($link, $_POST['referral']);
	   if($first_name=='' || $last_name=='' || $username=='' || $phone=='' || $email=='' || $password=='' ){
		echo '<script>alert("Error! Some input(s) is/are missing");</script>';
        exit();
	   }
	   $oldUser = $Obj->checkUser($username);
	   if($oldUser != ''){
		echo '<script>alert("Sorry! Username: ' . $username .', already in use");</script>';
         exit();
	   }
		  $val = $Obj->registerUser($first_name,$last_name,$phone,$email,$username,$password,$referral);
		  if($val){
			  session_start();
			  $_SESSION['username'] = $_POST['user_name'];
		        echo '<script>alert("Success! Click ok to continue");</script>';
				echo '<script>window.location.href="index.php";</script>';
             }
			 else{
			   session_start();
			   unset($_SESSION['username']);
		        echo $val;
			  }
 }

 // Add Organization
if(isset($_POST['loginUser']))
 {
	   include 'connection.php';
       $username  = mysqli_real_escape_string($link, $_POST['username']);
	   $password  = mysqli_real_escape_string($link, $_POST['password']);
	   if($username=='' || $password=='' ){
		echo '<script>alert("Sorry! username and/or password missing");</script>';
        exit();
	   }
		  $val = $Obj->authenTicate($username,$password);
		  if($val){
              session_start();
			  $_SESSION['username'] = $_POST['username'];
		        echo '<script>alert("Success!\n User found, click ok continue");</script>';
				echo '<script>window.location.href="index.php";</script>';
             }
			 else{
			   session_start();
			   unset($_SESSION['username']);
		       echo '<script>alert("Error! username and/or password not match");</script>';
			   exit();
			  }
 }

 ?>
