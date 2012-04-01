<?php

$uploaddir = '../uploaded/';  
$file = $uploaddir.basename($_FILES['upload_pic']['name']);   
	
if (move_uploaded_file($_FILES['upload_pic']['tmp_name'], $file)) {  
  echo "success";  
} else {  
  echo "error";
}  
?>  