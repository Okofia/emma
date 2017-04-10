<?php
 class ponzy{

function registerUser($first_name,$last_name,$phone,$email,$username,$password,$referral){
include 'connection.php';
$sql = "INSERT INTO profile(first_name,last_name,phone,email,username,password,upline,app_date)
       VALUES('$first_name','$last_name','$phone','$email','$username','$password','$referral',now())";
	   $result = mysqli_query($link, $sql);
	if(!$result)
       {
	   echo '<script>alert("Error adding: ' . mysqli_error($link) .'");</script>';
       return false;
	   }else{
		$sql = "INSERT INTO referral(downline,upline)
       VALUES('$username','$referral')";
	   mysqli_query($link, $sql);
		return true;
	   }
	   mysqli_close($link);
}
function checkUser($username){
include 'connection.php';
$sql = "SELECT username FROM profile WHERE username='$username'";
	   $result = mysqli_query($link, $sql);
	if(!$result){
		     die('Error searching username: ' . mysqli_error($link));
			 }
			$row = mysqli_fetch_array($result);
	      	$user = $row['username'];
			return $user;
			mysqli_close($link);
}

function authenTicate($username,$password){
include 'connection.php';
$sql = "SELECT username, password FROM profile WHERE username='$username' && Password='$password'";
	   $result = mysqli_query($link, $sql);
	if(!$result){
		     die('Error searching username: ' . mysqli_error($link));
		}
		$num_row = mysqli_num_rows($result);
     if($num_row==1){
		return true;
	 }else{return false;}

	mysqli_close($link);
}


}

?>
