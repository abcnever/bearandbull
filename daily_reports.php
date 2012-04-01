<?php 
	$current_page = "daily_reports";

	include_once('config/config.php');
	
	include_once('partials/functions.php');
	
	if ($maintenance == true) {
		include_once('partials/maintenance.php');
	} else {
		include_once('partials/header.php');
?>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Daily Reports</h2>
          <div class="clr"></div>
          <br/>
          <h3>Please click on the following links to view and download daily market updates for the month of November 2011:</h3>
          <p><a href="daily_reports/2011_10/daily11.15.2011.pdf" target="_blank">Daily Market Update: November 15</a></p>
          <h3>Please click on the following links to view and download daily market updates for the month of October 2011:</h3>
          <p><a href="daily_reports/2011_10/daily10.18.2011.pdf" target="_blank">Daily Market Update: October 18</a></p>
          <p><a href="daily_reports/2011_10/daily10.17.2011.pdf" target="_blank">Daily Market Update: October 17</a></p>
          <h3>Please click on the following links to view and download daily market updates for the month of July 2011:</h3>

          <p><a href="daily_reports/2011_07/dailyupdate_20110708" target="_blank">Daily Market Update: July 08</a></p>
          <p><a href="daily_reports/2011_07/dailyupdate_20110707" target="_blank">Daily Market Update: July 07</a></p>
          <p><a href="daily_reports/2011_07/dailyupdate_20110706" target="_blank">Daily Market Update: July 06</a></p>
          <p><a href="daily_reports/2011_07/dailyupdate_20110705" target="_blank">Daily Market Update: July 05</a></p>
          <br/>
          <h3>Please click on the following links to view and download daily market updates for the month of June 2011:</h3>
          <p><a href="daily_reports/2011_06/dailyupdate_20110630" target="_blank">Daily Market Update: June 30</a></p>
          <p><a href="daily_reports/2011_06/dailyupdate_20110629" target="_blank">Daily Market Update: June 29</a></p>
          <p><a href="daily_reports/2011_06/dailyupdate_20110628" target="_blank">Daily Market Update: June 28</a></p>
          <p><a href="daily_reports/2011_06/dailyupdate_20110627" target="_blank">Daily Market Update: June 27</a></p>
          <p><a href="daily_reports/2011_06/dailyupdate_20110624" target="_blank">Daily Market Update: June 24</a></p>
          <p><a href="daily_reports/2011_06/dailyupdate_20110623" target="_blank">Daily Market Update: June 23</a></p>
          <p><a href="daily_reports/2011_06/dailyupdate_20110622" target="_blank">Daily Market Update: June 22</a></p>
          <p><a href="daily_reports/2011_06/dailyupdate_20110621" target="_blank">Daily Market Update: June 21</a></p>
          <p><a href="daily_reports/2011_06/dailyupdate_20110620" target="_blank">Daily Market Update: June 20</a></p>
          <p><a href="daily_reports/2011_06/dailyupdate_20110617" target="_blank">Daily Market Update: June 17</a></p>
          <p><a href="daily_reports/2011_06/dailyupdate_20110616" target="_blank">Daily Market Update: June 16</a></p>
          <p><a href="daily_reports/2011_06/dailyupdate_20110615" target="_blank">Daily Market Update: June 15</a></p>
          <p><a href="daily_reports/2011_06/dailyupdate_20110614" target="_blank">Daily Market Update: June 14</a></p>
          <p><a href="daily_reports/2011_06/dailyupdate_20110613" target="_blank">Daily Market Update: June 13</a></p>
          <p><a href="daily_reports/2011_06/dailyupdate_20110610" target="_blank">Daily Market Update: June 10</a></p>

        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Articles</span></h2>
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
        <div class="gadget" id="sponsors">
        </div>
		<div class="gadget" id="partners">
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
