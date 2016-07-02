<meta charset="utf-8"/>
<?php
$target_dir = "images/gallery";

$selected_radio = $_POST['category'];

if ($selected_radio == 'დაუსრულებელი') {
    $target_dir = $target_dir . "/unfinished/";
}
else  {
    $target_dir = $target_dir . "/finished/";
}

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;  
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "ფაილი სურათია - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "ფაილი სურათი არ არის.";
        $uploadOk = 0;
    }
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "ფაილის ზომა ლიმიტს სცდება";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "დაშვებულია მხოლოდ სურათის ატვირთვა ფორმატით : JPG, JPEG, PNG";
    $uploadOk = 0;
    die();
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    die();
    echo "ფაილი ვერ აიტვირთა";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        ob_start();
	  $host="localhost"; // Host name
	  $username="producei_db"; // Mysql username
	  $password="Z6W27l6roy"; // Mysql password
	  $db_name="producei_db"; // Database name
	  $tbl_name="galleryimages"; // Table name

	  mysql_connect("$host", "$username", "$password")or die("cannot connect");
        mysql_select_db("$db_name")or die("cannot select DB");

        $info=$_POST['description'];

        $path= $target_dir . basename( $_FILES["fileToUpload"]["name"]);

        $category = "";

        $selected_radio = $_POST['category'];

        if ($selected_radio == 'დაუსრულებელი') {
            $category = "unfinished";
        }
        else {
            $category = "finished";
        }

        $sql="INSERT INTO $tbl_name (info, path, category) VALUES ('$info', '$path' , '$category')";
        mysql_query($sql);

        echo '<script type="text/javascript">; 
               alert("ფაილი სახელად: ' .  basename( $_FILES["fileToUpload"]["name"]). ' წარმატებით აიტვირთა"); 
               window.location = "addImage.php"
               </script>';  
    } else {
        echo '<script type="text/javascript">; 
               alert("ფაილი სახელად: ' .  basename( $_FILES["fileToUpload"]["name"]). ' ვერ აიტვირთა"); 
               window.location = "addImage.php"
               </script>';  
    }

    ob_end_flush(); 
}
?> 