<meta charset="utf-8"/>
<?php
	ob_start();
	// Define $myusername and $mypassword
	$myusername=$_POST['username'];
	$mypassword=$_POST['password'];

	echo $mypassword . $myusername;
	if($mypassword == 'produce333' && $myusername == 'admin'){
	    session_start();            // Start the PHP session 
		$_SESSION["loggedIn"] = true;
		header("location:viewFlats.php");
	}
	else {
		$_SESSION["loggedIn"] = false;
		echo '<script type="text/javascript">; 
		       alert("მომხმარებლის სახელი ან პაროლი არასწორია"); 
		       window.location = "login.html"
		       </script>';  
	}

	ob_end_flush();
?>