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

	$id=$_POST['faqId'];

	$sql="DELETE FROM $tbl_name WHERE id = $id";
	mysql_query($sql);

	echo '<script type="text/javascript">; 
	       alert("კითხვა-პასუხი წაიშალა"); 
	       window.location = "viewFAQ.php"
	       </script>';  
	ob_end_flush();
?>