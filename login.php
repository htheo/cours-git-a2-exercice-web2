<?php session_start();

/******************************** 
	 DATABASE & FUNCTIONS 
********************************/
require('config/config.php');
require('model/functions.fn.php');


/********************************
			PROCESS
********************************/

if (isset($_POST['email']) && !empty($_POST['password'])) {
	
	/*userConnection
		return :
			true for connection OK
			false for fail
		$db -> 				database object
		$email -> 			field value : email
		$password -> 		field value : password
	*/
	$email =  $_POST['email'];
	$password = $_POST['password'];



	if (userConnection($db, $email, $password) == true){
		header('Location: dashboard.php');

	}elseif (userConnection($db, $email, $password) == false) {
		$error = "mauvais login";
	}
	
}

/******************************** 
			VIEW 
********************************/
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';


	