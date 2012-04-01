<?php 
	$current_page = "display_article";

	include_once('config/config.php');
	
	include_once('partials/functions.php');
	include_once('partials/classes.php');
	
	if ($maintenance == true) {
		include_once('partials/maintenance.php');
	} else {
		include_once('partials/header.php');
?>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar_article">
        <?php
		  $connection = new mysqlConnection($db_serverName,$db_userName,$db_password,$db_databaseName);
		
		
		  $query = "SELECT * FROM articles WHERE Article_ID = ".$_GET["Article_ID"];
		  $query = mysql_real_escape_string($query);
		  $result = mysql_query($query) or die(mysql_error());
		  $row = mysql_fetch_array($result);
		  $fileName = $row["Article_XML"];
		  echo "<div class='article'>";
		  echo "<h3>".$row["Article_Title"]."</h3>";
		  echo "<p><strong>By ".$row["Article_Author"]."  |  on ".parseDate($row["Post_Time"])."</strong></p>";
		
		  $parser = xml_parser_create(); // initialize the XML parser
		  xml_set_element_handler($parser, "start", "stop"); // specify element handler
		  xml_set_character_data_handler($parser, "char"); // specify data handler
		  $fp = fopen($fileName,"r") or die(mysql_error()); // open XML file
		
		  //Read data
		  while ($data=fread($fp, 4096))
		  {
			  xml_parse($parser,$data,feof($fp)) or 
			    die (sprintf("XML Error: %s at line %d", 
			    xml_error_string(xml_get_error_code($parser)),
			    xml_get_current_line_number($parser)));
		  }
		
		  /*
	      $lineArray = file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		
		  for ($i = 0; $i < count($lineArray);$i++)
		  {
			echo "<p>".$lineArray[$i]."</p><br />";
		  }*/
		
	echo "</div>";	  
	include_once('partials/socialmedia.php');
	//include_once('partials/socialmedia.php');
	$connection->closeConnection();
?>
		
	  </div>

      <div class="clr"></div>
    </div>
  </div>
<?php } ?>
<?php

if ($maintenance == false) {
	include_once('partials/footer.php');
}

?>
