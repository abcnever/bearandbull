<?php 
	$current_page = "home";

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
      <div class="mainbar">

<?php
$connection = new mysqlConnection($db_serverName,$db_userName,$db_password,$db_databaseName);

$result = mysql_query("SELECT * FROM articles ORDER BY Post_Time DESC");

$count = 0;
echo "<h2 style='margin-bottom: 8px'>Most Recent Articles: </h2><div class='clr' style='margin-bottom: 20px'></div>";
while(($count < 5) &&($row = mysql_fetch_array($result)))
  {
  if ($row["Featured"] == 0){
  $title = $row['Article_Title'];
  $author = $row['Article_Author'];
  $tags = $row['Tag'];
	  $tempDate = $row['Post_Time'];
  $date = parseDate($tempDate);
  $articleImage = $row['Basic_Pic'];
  $articleID = $row['Article_ID'];
  $trimmedString = ""; // trimmed version of the string

  // printing a trimmed version of the file.....
  $fileName = $row['Article_Content'];
  $lineArray = (file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));
  $trimmedString = trimFileArticle($lineArray);

/*
			Required from database:
				- article title							--> $title
				- posted date							--> $date
				- categories AND LINK TO CATEGORIES		--> $tags
				- article image........Basic_Pic		--> $articleImage
				- trimmed version of article			--> $trimmedString
				- link to article						--> $articleID
				- author								--> $author
		*/

//ob_start();
echo ("<div class=\"article\">");
echo ("<a href=\"displayarticle.php?Article_ID=".$articleID."\" ><h2 style='padding-bottom: 4px'>".$title."</h2></a>");
echo ("<p class=\"infopost\">Posted on ".$date." by ".$author."&nbsp;&nbsp;|&nbsp;&nbsp; Filed under <a href=\"articletag.php?Tag=".$tags."\">".			$tags."</a></p>");
echo ("<div class=\"clr\"></div>");
echo ("<div class=\"img\"><a href=\"displayarticle.php?Article_ID=".$articleID."\" ><img src=\"".$articleImage."\" alt=\"\" class=\"fl\" /></a></div>");
echo ("<div class=\"post_comment\">");
echo ("<p>".$trimmedString."</p>");
echo ("<p class=\"spec\"><a href=\"displayarticle.php?Article_ID=".$articleID."\" class=\"rm\"> Read more &raquo;</a></p>");
echo ("</div>");
echo ("<div class=\"clr\"></div>");
echo ("</div>");
$connection->closeConnection();
  $count++;
  }

}

		/*
			Required from database:
				- article title
				- posted date
				- categories AND LINK TO CATEGORIES
				- article image........Basic_Pic
				- trimmed version of article
				- link to article
		*/
echo "<script src='http://connect.facebook.net/en_US/all.js#xfbml=1'></script><fb:like href='bearandbull.uwaterloo.ca' send='false' width='450' show_faces='false' font='arial'></fb:like>";

?>

        
        
<!--        <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>  -->
      </div>
      <div class="sidebar">
        <div class="gadget">
          <ul class="sb_menu">
            <h3>Market Updates:</h3>
            <li><big><strong><a href="daily_reports/2011_11/daily11.15.2011.pdf" target="_blank">Daily, Tuesday, November 15</a></strong></big></li>
            <li><big><strong><a href="Weekly_Reports/2012/3/2012.3.24.pdf" target="_blank">Weekly, March 24</a></strong></big></li>
            <li><big><strong><a href="Weekly_Reports/2012/1/2012.1.10.pdf" target="_blank">2012 Investment Outlook</a></strong></big></li>
            <div class="clr"></div>
          </ul>
        </div>
        <iframe src="https://www.google.com/calendar/embed?
title=Upcoming%20Event&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;s
howTz=0&amp;height=600&amp;wkst=1&amp;hl=en&amp;bgcolor=%23F8F7F3&amp;src=bear
andbullwaterloo%40gmail.com&amp;color=%23F8F7F3&amp;ctz=America%2FToronto" style="
border-width:0 " width="315" height="600" frameborder="0" scrolling="no"></iframe>
		<div class="clr"></div>
        <p><br /></p>
        <div class="gadget">
          <script src="http://www.gmodules.com/ig/ifr?url=http://www.macroaxis.com/widgets/macroaxis_intraday_markets_snap.xml&amp;synd=open&amp;w=275&amp;h=1060&amp;title=Intraday World Market Summary&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js">
          </script>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
<?php } ?>
<?php

if ($maintenance == false) {
	include_once('partials/footer.php');
}

?>
