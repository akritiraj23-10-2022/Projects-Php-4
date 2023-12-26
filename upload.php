<?php
error_reporting(E_ALL & ~E_NOTICE);

$target_path = "uploadFile/";

$target_path = $target_path.$_FILES['file4Upload']['name']; 

if(move_uploaded_file($_FILES['file4Upload']['tmp_name'], $target_path))
{
 echo "<h4>The file ". basename($_FILES['file4Upload']['name']). " has been uploaded Successfully.</h4>";
}
else
{
	echo "Sorry there was an error uploading the file, please try again!";
} 


?>