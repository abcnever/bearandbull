<?php

include_once("config/config.php");



/*if ($_FILES["article"]["error"] > 0) 
{
    echo "Error: " . $_FILES["article"]["error"] . "<br />";
} 
else 
{
    echo "Upload: " . $_FILES["article"]["name"] . "<br />";
    echo "Type: " . $_FILES["article"]["type"] . "<br />";
    echo "Size: " . ($_FILES["article"]["size"] / 1024) . " Kb<br />";
    echo "Stored in: " . $_FILES["article"]["tmp_name"];
  
	if (file_exits('/articles/'.$_FILES['article']['name']))
	{
		echo "The file has been uploaded once already.";
	} 
	else 
	{
		move_uploaded_file($_FILES["article"]["tmp_name"],"uploaded/".$_FILES["file"]["name"]);
		echo "Stored in: " . "upload/" . $_POST[""];
	}
	
	
}*/
/*	$filename = "ISO";
	$content = file("articles/".$filename.".txt",FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	$content = str_replace("&","&amp;",$content);
	$fh = fopen("articles/".$filename.".xml","w");
	fwrite($fh,"<doc>\n");

	for ($i = 0;$i < count($content);$i++)
	{
		fwrite($fh,"<txt>".$content[$i]."</txt>\n");
	}
	fwrite($fh,"</doc>");
	fclose($fh);
	*/
?>
