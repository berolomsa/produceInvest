<meta charset="utf-8"/>
<?php
	ob_start();
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="produce_invest"; // Database name
	$tbl_name="faq"; // Table name

	mysql_connect("$host", "$username", "$password")or die("cannot connect");
	mysql_select_db("$db_name")or die("cannot select DB");

	$question=$_POST['question'];
	$answer=$_POST['answer'];

	$sql="INSERT INTO $tbl_name (question, answer) VALUES ('$question', '$answer')";
	mysql_query($sql);

	echo '<script type="text/javascript">; 
	       alert("კითხვა-პასუხი დამატებულია"); 
	       window.location = "addFAQ.php"
	       </script>';  
	ob_end_flush();
?>