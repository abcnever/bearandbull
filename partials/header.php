<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://www.w3.org/2005/10/profile">
<title>Bear & Bull Media Group | <?php 
  switch ($current_page) { 
    case "home": 
	  echo "Home";
	  break; 
	case "articles": 
	  echo "Articles";
	  break; 
	case "about_us": 
	  echo "About Us";
	  break;
	case "club_events": 
	  echo "Club Events";
	  break;
	case "contact_us":
	  echo "Contact Us";
	  break;
	case "articles_tag": 
	  echo $_GET["Tag"];
	  break;
	case "display_article": 
	  $connection = new mysqlConnection($db_serverName,$db_userName,$db_password,$db_databaseName);;
	  $query = "SELECT * FROM articles WHERE Article_ID = ".$_GET["Article_ID"];
	  $query = mysql_real_escape_string($query);
	  $result = mysql_query($query) or die(mysql_error());
	  $row = mysql_fetch_array($result);
	  echo $row["Article_Title"];
	  $connection->closeConnection();
	  break;
	case "weekly_reports":
	  echo "Weekly Reports";
	  break;
	case "daily_reports":
	  echo "Daily Reports";
	  break;
	case "sponsors":
	  echo "Sponsors";
	  break;
	case "executive_team":
	  echo "Executive Team";
	  break;
	case "404":
	  echo "404 Page Not Found";
	  break;
  } ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/dropdown_menu.js"></script>
<link rel="icon" type="image/png" href="http://bearandbull.uwaterloo.ca/favicon.ico" />
<?php 
	if ($current_page == 'home') {
		echo '<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />';
		echo '<script type="text/javascript" src="js/coin-slider.min.js"></script>';
		echo '<script type="text/javascript" src="js/slider_script.js"></script>';
    }
?>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="searchform">
        <!--<form id="formsearch" name="formsearch" method="post" action="#">
          <span>
          <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our site:" type="text" onblur="BlurSearch('editbox_search')" onfocus="FocusSearch('editbox_search')"/>
          </span>
          <input name="button_search" src="images/search.gif" class="button_search" type="image" />
        </form>-->
      </div>
      <div class="logo">
        <h1><a href="index.php"><img src="images/bearandbulllogo.png" alt="Bear & Bull"/> Bear & Bull Media Group</a></h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul class="nav_main">
         <li <?php if ($current_page == 'home') { echo 'class="active"'; } else { echo 'class=""'; } ?> id="home"><a href="index.php"><span>Home</span></a></li>
         <li <?php if ($current_page == 'articles' || $current_page == 'articles_tag' || $current_page == "display_article" || $current_page == 'weekly_reports' || $current_page == "daily_reports") { echo 'class="active"';} else { echo 'class=""'; } ?> id="articles">
           <a href="articles.php?page=1"><span>Articles</span></a>
           <ul class="nav_sub" id="articles_sub">
             <li <?php if ($current_page == 'articles_tag' && $_GET["Tag"] == 'Investing') {echo "class='active'";}?>><a href="articlestag.php?Tag=Investing&page=1">Investing</a></li>
             <li <?php if ($current_page == 'articles_tag' && $_GET["Tag"] == 'Commodities/Energy') {echo "class='active'";}?>><a href="articlestag.php?Tag=Commodities/Energy&page=1">Commodities/Energy</a></li>
             <li <?php if ($current_page == 'articles_tag' && $_GET["Tag"] == 'Financial_Services') {echo "class='active'";}?>><a href="articlestag.php?Tag=Financial_Services&page=1">Financial Services</a></li>
             <li <?php if ($current_page == 'articles_tag' && $_GET["Tag"] == 'Technology') {echo "class='active'";}?>><a href="articlestag.php?Tag=Technology&page=1">Technology</a></li>
             <li <?php if ($current_page == 'articles_tag' && $_GET["Tag"] == 'Economy') {echo "class='active'";}?>><a href="articlestag.php?Tag=Economy&page=1">Economy</a></li>
             <li <?php if ($current_page == 'weekly_reports') {echo "class='active'";}?>><a href="weekly_reports.php">Weekly Report</a></li>
             <li <?php if ($current_page == 'daily_reports') {echo "class='active'";}?>><a href="daily_reports.php">Daily Report</a></li>
           </ul> 
         </li>
         <li <?php if ($current_page == 'about_us') { echo 'class="active"';} else { echo 'class=""'; } ?> id="abt_us">
           <a href="about.php"><span>About Us</span></a>       
           <ul class="nav_sub" id="aboutus_sub">
             <li ><a href="about.php#club_info">Club Information</a></li>
             <li ><a href="about.php#join_us">Join Us</a></li>
             <li <?php if ($current_page == 'executive_team') {echo "class='active'";}?>><a href="exe_team.php">Executive Team</a></li>
             <li <?php if ($current_page == 'sponsors') {echo "class='active'";}?>><a href="sponsors.php">Sponsors</a></li>
           </ul>
         </li>
         <li <?php if ($current_page == 'club_events') { echo 'class="active"';} else { echo 'class=""'; } ?> id="club_e"><a href="club_events.php"><span>Club Events</span></a></li>
         <li <?php if ($current_page == 'contact_us') { echo 'class="active"';} else { echo 'class=""'; } ?> id="contact_us"><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <?php if ($current_page == 'home') { ?>
      <div class="slider" >
        <?php
		  $connection = new mysqlConnection($db_serverName,$db_userName,$db_password,$db_databaseName);

		  $result = mysql_query("SELECT * FROM articles ORDER BY Featured DESC, Post_Time DESC");

		  ob_start();
		  $buffer = "";
		  $buffer = $buffer."<div id='coin-slider' class='coin-slider'>";

		  $count = 0;

		  while(($count < 3) && ($row = mysql_fetch_array($result)))
  		  {
  		  //echo $row['Article_ID'] . " " . $row['Featured'] . " " . $row['Post_Time'] . " " . $row['Article_Content'];
  
  		  $title = $row['Article_Title'];
  		  $imgPath = $row['Featured_Pic'];
  		  $articleID = $row['Article_ID'];
  		  $trimmedString = ""; // to be used to store the trimmed string

 		  // printing a trimmed version of the file.....
 		  $fileName = $row['Article_Content'];
  		  $lineArray = file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  		  $trimmedString = trimFile($lineArray);
  		  $buffer = $buffer."<a href=\"displayarticle.php?Article_ID=".$articleID."\"><img src=".$imgPath." alt='Image not found' /><span><big>".$title."</big><br />".$trimmedString."</span></a>";
  
  		  $count++;
  		  }
	
  		  $buffer = $buffer."</div>";
  		  echo $buffer;

  		  $connection->closeConnection();
  		  ob_flush();
  		  ob_end_clean();

		  ?> 
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
      <?php } else { ?>
    </div>
  </div>
      <?php } ?>