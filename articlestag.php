<?php 
	$current_page = "articles_tag";

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
        <div class="article">
          <h2><?php if (!empty($_GET["Tag"])){$tag = $_GET["Tag"];}else{$tag = "Investing";} if ($_GET["Tag"] == "Financial_Services") echo "Financial Services Articles"; else echo $_GET["Tag"]." Articles"; ?></h2>
          <div class="clr"></div>
          
<?php
$connection = new mysqlConnection($db_serverName,$db_userName,$db_password,$db_databaseName);

if (!empty($_GET["Tag"]))
{
	$tag = $_GET["Tag"];
}
else {
	$tag = "Investing";
}

$tag = mysql_real_escape_string($tag);

$query = "SELECT * FROM articles WHERE Tag='$tag' ORDER BY Post_Time DESC";
$result = mysql_query($query);

// integer
$totalArticles = mysql_num_rows($result);
// float
$totalPages = $totalArticles / 5; 
// consists of 4 pages, float
$totalClusters = $totalPages / 4;

$pageNumberString = '';

if (!empty($_GET["page"]))
{
	$page = $_GET["page"];}
else{
	$page = 1;
}

if (((($page-1)*5)+1) > $totalArticles)
{
	$processResults = false;
	$pageType = 0;
}
if ( ceil($totalPages) <= 4) 
{
	// # of articles doesn't exceed 20
	$pageType = 1;
}
else
// if exceed 20
{
	// if current page is 1st 4 pages
	if ($page <= 4) 
	{
		$pageType = 2;
	}
	// if current page is last n pages (n = totalPage % 5)
	else if (ceil($page / 4) == ceil($totalClusters)) 
	{
		$pageType = 3;
	}
	// if current page is between the last n pages and first 4 apges
	else 
	{
		$pageType = 4;
	}
}

// Note: the indices are inclusive, and start at 1.
switch ($pageType)
{
	case 0: 
		echo "Invalid Page Number!";
		break;
	case 1:
		// Last page 
		if (ceil($totalPages) == $page)
		{ 
			$startIndex = ($page - 1) * 5 + 1;
			$endIndex = $totalArticles;
		}
		// First n pages 
		else
		{
			$startIndex = ($page - 1) * 5 + 1;
			$endIndex = $startIndex + 4;
		}
		displayArticles($startIndex,$endIndex,$result);
		$startingPage = ((((int)(($page-1)/4))*4)+1);
		$endingPage = ceil($totalPages);
		$pageNumberString .= displayPageNumber($startingPage, $endingPage, $page, $pageType, $tag);
		break;
	case 2: 
		$startIndex = ($page - 1) * 5 + 1;
		$endIndex = $startIndex + 4;
		displayArticles($startIndex,$endIndex,$result);
		$startingPage = 1;
		$endingPage = 4;
		$pageNumberString .= displayPageNumber($startingPage, $endingPage, $page, $pageType, $tag);
		break;
	case 3:
		if ($page == ceil($totalPages))
		{
			$startIndex = ($page - 1) * 5 + 1;
			$endIndex = $totalArticles;
			displayArticles($startIndex, $endIndex, $result);
		}
		else 
		{
			$startIndex = ($page - 1) * 5 + 1;
			$endIndex = $startIndex + 4;
			displayArticles($startIndex, $endIndex, $result);
		}
			if ( is_int( $totalClusters ) )
				$startingPage = ( $totalClusters - 1 ) * 4 + 1;
			else
				$startingPage = floor($totalClusters) * 4 + 1;
				
			$endingPage = ceil($totalPages);
			$pageNumberString .= displayPageNumber($startingPage, $endingPage, $page, $pageType, $tag);
		break;
	case 4:
		$startIndex = ($page - 1) * 5 + 1;
		$endIndex = $startIndex + 4;
		displayArticles($startIndex, $endIndex, $result);
		$startingPage = floor($page / 4) * 4 + 1;
		$endingPage = $startingPage + 3;
		$pageNumberString .= displayPageNumber($startingPage, $endingPage, $page, $pageType, $tag);
		break;
}
echo '<div class="clr"></div>';
echo $pageNumberString;

$connection->closeConnection();

?>

        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star">Articles</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
              <li><a href="articlestag.php?Tag=Investing&amp;page=1">Investing</a></li>
              <li><a href="articlestag.php?Tag=Commodities/Energy&amp;page=1">Commodities/Energy</a></li>
              <li><a href="articlestag.php?Tag=Financial_Services&amp;page=1">Financial Services</a></li>
              <li><a href="articlestag.php?Tag=Technology&amp;page=1">Technology</a></li>
              <li><a href="articlestag.php?Tag=Economy&amp;page=1">Economy</a></li>
              <li><a href="weekly_reports.php">Weekly Report</a></li>
              <li><a href="daily_reports.php">Daily Report</a></li>               
          </ul>
        </div>
        <div class="gadget" id='sponsors'>  
          <?php include_once('partials/sponsor_panel.php'); ?>
        </div>
		<div class="gadget" id='partners'>
          <?php include_once('partials/partner_panel.php'); ?>
        </div>
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
