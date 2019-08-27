<?php 
//first we have to create a session and start that session 
session_start();

//Cod to connect to the DB 
$con = mysqli_connect('localhost', 'root', '');// we can also give our db to connect it from here

//code to check connectivity
if ($con) {
	echo "Connection Success";
}else{
	echo "Unable to connect to DB";
}

//code to select database
mysqli_select_db($con, 'blog');//it passes connection variable and parameters

//code to access data from Login form
$username = $_POST['luser'];
$password = $_POST['lpassword'];

// mysql query to access data from DB
$q = "select * from admin where username = '$username' && password= '$password'";

// code to fire the query
$result = mysqli_query($con, $q);
//mysqli_query is use to implement the query. the parameter of this function is 
//connection variable and query variable

//code to check weather result is 0 or 1
$count = mysqli_num_rows($result);
//the mysqli_num_rows will check weather the username is already exist or not.
//if it is present in Db it will return 1 otherwise 0

if ($count == 1) {
	$_SESSION["user"] = $username;
	header("location:home.php");
}else{

	header("location:login.php");
}

 ?>