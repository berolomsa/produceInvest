<meta charset="utf-8"/>
<?php
$block = 'A';
$selected_radio = $_POST['block'];
if ($selected_radio == 'B-ბლოკი') {
    $block = 'B';
}
ob_start();
$host="localhost"; // Host name
$username="producei_db"; // Mysql username
$password="Z6W27l6roy"; // Mysql password
$db_name="producei_db"; // Database name
$tbl_name="flat"; // Table name

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$floor = $_POST['floor'];
$flatNum = $_POST['flatNum'];
$status = 'FREE';
$selected_radio = $_POST['status'];
if ($selected_radio == 'დაჯავშნილი') {
    $status = 'BOOKED';
} else if ($selected_radio == 'გაყიდული') {
    $status = 'SOLD';
}
$sql="UPDATE $tbl_name SET flatstatus='$status' WHERE blocktype='$block' AND floor='$floor' AND flatnum='$flatNum' ";
mysql_query($sql);

echo '<script type="text/javascript">; 
       alert("ბინას წარმატებით შეეცვალა სტატუსი"); 
       window.location = "viewFlats.php"
       </script>';  
ob_end_flush(); 
?> 