<?php
	
	$myid = "2015000000166";
	$mypass = "2015000000166";
	
	if(isset($_POST['login'])){
		$id = $_POST['id'];
		$pass = $_POST['password'];
		if( $id == $myid && $pass == $mypass ){
			if(isset($_POST['remember'])){
				setcookie('id', $id, time()+60*60*24*7);
			}
			session_start();
				$_SESSION['id'] = $id;
				header("location: AboutMe.php");
		} else {
			echo "ID or Password is invalid! <br> click hee to <a href='Login.php'>try again</a>";
		}
		
	} 
	
?>