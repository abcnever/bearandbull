<?php
if ($current_page == "articles" || $current_page == "articles_tag" || $current_page == "display_article" || $current_page == "home") {
	
	function trimFile($lineArray)
	{	
	  $lineLimit = 400;
	  $trimmer = true;
	  $loopDone = false;
	  $smallString = "";
	  
	  for ($i = 0; ($trimmer == true && $i < count($lineArray)); $i++)
	  {
		  $currentLine = $lineArray[$i];
		  $tokenizedString = strtok($currentLine, " ");
		  while($loopDone == false)
		  {
			  $tempString = $tokenizedString;
			  $tempLength = strlen($tempString);		 
			  if (($tempLength + 1) < $lineLimit)
			  {
				  $smallString = $smallString.$tempString." ";
				  //echo ($tempString . " ");
				  $loopDone = false;
				  $lineLimit = $lineLimit - ($tempLength + 1);
			  }
			  else 
			  {
				  $smallString = $smallString."...";
				  //echo ("...");
				  $loopDone = true;
				  $trimmer = false;
			  }
			  $tokenizedString = strtok(" ");
		  }
	  }
	  
	  return $smallString;
	  
	}
	
	function parseDate($tempDate)
	{
	  $month = "";
	  $tokenizedDate = 0;
	  $tokenizedDate = strtok($tempDate, "-");
	  $year = $tokenizedDate;
	  $tokenizedDate = strtok("-");
	  $numMonth = $tokenizedDate;
	  switch ($numMonth)
	  {
		case 1:	  $month = "January";	  break;
		case 2:	  $month = "February";	  break;
		case 3:	  $month = "March";	  break;
		case 4:	  $month = "April";	  break;
		case 5:	  $month = "May";	  break;
		case 6:	  $month = "June";	  break;
		case 7:	  $month = "July";	  break;
		case 8:	  $month = "August";	  break;
		case 9:	  $month = "September";	  break;
		case 10:  $month = "October";	  break;
		case 11:  $month = "November";	  break;
		case 12:  $month = "December";	  break;
		default:  echo "Invalid Month";
		}
	  $tokenizedDate = strtok("-");
	  $date = $tokenizedDate;
	  return ($month . " " . $date . " " . $year);
	}
	
	function trimFileArticle($lineArray)
	{	
	  $lineLimit = 500;
	  $trimmer = true;
	  $smallerString = "";
	  
	  for ($i = 0; ($trimmer == true) && ($i < count($lineArray)); $i++)
	  {
		  $lineLength = strlen	(trim($lineArray[$i]));
		  if ($lineLimit >= $lineLength)
		  {
			$smallerString = $smallerString.$lineArray[$i];
			//echo ($lineArray[$i]);
			$lineLimit -= $lineLength;
			$smallerString = $smallerString."<br \> <br \>";
			//echo "<br \> <br \>";
			//echo "<br \>";
		  }
		  elseif ($lineLength > $lineLimit)
		  {
			$tokenizedString = strtok($lineArray[$i], ".");
			$loopDone = false;
			while($loopDone == false)
			{
			  $tempString = $tokenizedString;
			  $tempLength = strlen($tempString);		 
			  $smallerString = $smallerString.$tempString.".";
			  //echo($tempString) . ".";
			  $lineLimit -= $tempLength;
			  $tokenizedString = strtok(".");
			  if($lineLimit < 0)
			  {
				$loopDone = true;
			  }
			}
			$smallerString = $smallerString."<br \>";
			//echo "<br \>";
			$trimmer = false;
		 }
	  }	
	  return $smallerString;
	}
}

if ($current_page == "articles" || $current_page == "articles_tag" || $current_page == "display_article") {
	function displayPageNumber($start, $end, $page, $page_type, $tag){
		$pageNumberString = "<p class='pages'>";
		if ($page_type == 3 || $page_type == 4) 
		{
			$pageNumberString .= '&nbsp;<a href=articles.php?page='.($start - 1).'>&laquo;</a>';
		}
		
		for ($i = $start; $i <= $end; $i++)
		{
			if ($i == $page)
			{
				$pageNumberString = $pageNumberString."&nbsp;<span>{$i}</span>";			
			}
			else
			{   
				if ($tag !== false) {
					$pageNumberString = $pageNumberString."&nbsp;<a href='articlestag.php?Tag={$tag}&page={$i}'>{$i}</a>";
				} else {
					$pageNumberString = $pageNumberString."&nbsp;<a href='articles.php?page={$i}'>{$i}</a>";
				}
			}
		}
		
		if ($page_type == 2 || $page_type == 4)
		{
			$pageNumberString .= '&nbsp;<a href=articles.php?page='.($end + 1).'>&raquo;</a>';
		}
		$pageNumberString .= '</p>';
		return $pageNumberString;
	}

	function displayArticles($start,$end,$resource)
	{
		
/*		for ($i = 1; $i < $start;$i++)
		{
			$row = mysql_fetch_array($resource);
		}*/
		mysql_data_seek($resource,$start - 1);
		
		for ($i = $start; $i <= $end;$i++)
		{
			$row = mysql_fetch_array($resource);
			echo ("<br \>");
			$id = ($row['Article_ID']);
			echo ("<h3>".$row['Article_Title']."</h3>");
			echo ("<p><strong>Posted on ".parseDate($row['Post_Time'])." | By ".$row['Article_Author']."</strong></p>");

			$fileName = $row['Article_Content'];
			$lineArray = (file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));
			$trimmedString = trimFile($lineArray);

			echo ("<p>".$trimmedString."</p>");

			echo "<a href=displayarticle.php?Article_ID=".$id." class='rm'>Read more</a>";
			if ($i != $end) {
				echo "<div class='clr_visible'></div>";
			} 
		}

	}
}

if ($current_page == "display_article") {
	function start($parser, $elementName, $elementAttrs)
	{
		switch ($elementName)
		{
			case "IMG": {echo "<img src=\"";} break;
			case "TXT": {echo "<p>"; } break;
			case "BLD": {echo "<b>"; } break;
			case "LNK": {echo "<a href='"; } break;
		}
	}
	
	function stop($parser, $elementName)
	{
		if ($elementName == "TXT")
		{
			echo "<br \></p>";
		}
		if ($elementName == "IMG")
		{
			echo "\" />";
			echo "<br \>";
		}
		if ($elementName == "BLD")
		{
			echo "</b>";
		}
		if ($elementName == "LNK")
		{
			echo "'target='_blank'>Click to view the link</a>";
		}
	}
	
	function char($parser, $data)
	{
	
		echo $data;
	}
}
?>