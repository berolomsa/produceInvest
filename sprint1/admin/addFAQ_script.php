<meta charset="utf-8"/>
<?php
	ob_start();
$host="localhost"; // Host name
$username="producei_db"; // Mysql username
$password="Z6W27l6roy"; // Mysql password
$db_name="producei_db"; // Database name
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