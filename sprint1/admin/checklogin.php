<meta charset="utf-8"/>
<?php
	ob_start();
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="produce_invest"; // Database name
	$tbl_name="users"; // Table name

	// Connect to server and select databse.
	mysql_connect("$host", "$username", "$password")or die("cannot connect");
	mysql_select_db("$db_name")or die("cannot select DB");

	// Define $myusername and $mypassword
	$myusername=$_POST['username'];
	$mypassword=$_POST['password'];

	$myusername = stripslashes($myusername);
	$mypassword = sha1(stripslashes($mypassword));
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);

	$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and pass='$mypassword'";
	$result=mysql_query($sql);

	$count=mysql_num_rows($result);
	if($count==1){
	    session_start();            // Start the PHP session 
		$_SESSION["loggedIn"] = true;
		header("location:index.php");
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