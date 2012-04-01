<?php 
	$current_page = "weekly_reports";

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
          <h2>Weekly Reports</h2>
          <div class="clr"></div>
          <br/>
          <h3>Please click on the following links to view and download weekly reports for the year of 2012</h3>       
          <p><a href="Weekly_Reports/2012/3/2012.3.24.pdf" target="_blank">Weekly Wrapup: March 24</a></p>
          <p><a href="Weekly_Reports/2012/3/2012.3.18.pdf" target="_blank">Weekly Wrapup: March 18</a></p>
          <p><a href="Weekly_Reports/2012/3/2012.3.11.pdf" target="_blank">Weekly Wrapup: March 11</a></p>
          <p><a href="Weekly_Reports/2012/3/2012.3.3.pdf" target="_blank">Weekly Wrapup: March 3</a></p>
          <p><a href="Weekly_Reports/2012/2/2012.2.24.pdf" target="_blank">Weekly Wrapup: Febuary 24</a></p>
          <p><a href="Weekly_Reports/2012/2/2012.2.19.pdf" target="_blank">Weekly Wrapup: Febuary 19</a></p> 
          <p><a href="Weekly_Reports/2012/2/2012.2.11.pdf" target="_blank">Weekly Wrapup: Febuary 11</a></p>
          <p><a href="Weekly_Reports/2012/2/2012.2.4.pdf" target="_blank">Weekly Wrapup: Febuary 4</a></p>
          <p><a href="Weekly_Reports/2012/1/2012.1.28.pdf" target="_blank">Weekly Wrapup: January 28</a></p>
          <p><a href="Weekly_Reports/2012/1/2012.1.10.pdf" target="_blank">Weekly Wrapup: January 10</a></p>
          <br />
          <br />   
          <h3>Please click on the following links to view and download weekly reports for the year of 2011</h3>
          <p><a href="Weekly_Reports/11/weeklyreport11.26.2011.pdf" target="_blank">Weekly Wrapup: November 26</a></p>
          <p><a href="Weekly_Reports/11/weeklyreport11.19.2011.pdf" target="_blank">Weekly Wrapup: November 19</a></p>
          <p><a href="Weekly_Reports/11/weeklyreport11.12.2011.pdf" target="_blank">Weekly Wrapup: November 12</a></p>
          <p><a href="Weekly_Reports/11/weeklyreport11.5.2011.pdf" target="_blank">Weekly Wrapup: November 5</a></p>
          <p><a href="Weekly_Reports/11/weeklyreport10.29.2011.pdf" target="_blank">Weekly Wrapup: October 29</a></p>
          <p><a href="Weekly_Reports/11/weeklyreport10.22.2011.pdf" target="_blank">Weekly Wrapup: October 22</a></p>
          <p><a href="Weekly_Reports/11/weeklyreport10.15.2011.pdf" target="_blank">Weekly Wrapup: October 15</a></p>
          <p><a href="Weekly_Reports/11/weeklyreport10.8.2011.pdf" target="_blank">Weekly Wrapup: October 8</a></p>
          <p><a href="Weekly_Reports/11/weeklywrapupjuly15.pdf" target="_blank">Weekly Wrapup: July 15</a></p>
          <p><a href="Weekly_Reports/11/weeklywrapupjuly8.pdf" target="_blank">Weekly Wrapup: July 8</a></p>
          <p><a href="Weekly_Reports/11/weeklywrapupjuly1.pdf" target="_blank">Weekly Wrapup: July 1</a></p>
          <p><a href="Weekly_Reports/11/weeklywrapupjune24.pdf" target="_blank">Weekly Wrapup: June 24</a></p>
          <p><a href="Weekly_Reports/11/weeklywrapupjune17.pdf" target="_blank">Weekly Wrapup: June 17</a></p>
          <p><a href="Weekly_Reports/11/weeklywrapupjune10.pdf" target="_blank">Weekly Wrapup: June 10</a></p>
          <strong><p><a href="Weekly_Reports/11/2011Q3outlook.pdf" target="_blank">2011 3rd Quarter Outlook</a></p></strong>
          <p><a href="Weekly_Reports/11/weeklywrapupjune3.pdf" target="_blank">Weekly Wrapup: June 3</a></p>
          <p><a href="Weekly_Reports/11/weeklywrapupmay28.pdf" target="_blank">Weekly Wrapup: May 28</a></p>
          <p><a href="Weekly_Reports/11/weeklywrapupmay21.pdf" target="_blank">Weekly Wrapup: May 21</a></p>
          <p><a href="Weekly_Reports/11/weeklywrapupmar18.pdf" target="_blank">Weekly Wrapup: March 18</a></p>
          <p><a href="Weekly_Reports/11/weeklywrapupmar11.pdf" target="_blank">Weekly Wrapup: March 11</a></p>
          <p><a href="Weekly_Reports/11/weeklywrapupmar4.pdf" target="_blank">Weekly Wrapup: March 4</a></p>
          <p><a href="Weekly_Reports/11/weeklywrapupfeb25.pdf" target="_blank">Weekly Wrapup: February 25</a></p>
          <p><a href="Weekly_Reports/11/weeklywrapupfeb18.pdf" target="_blank">Weekly Wrapup: February 18</a></p>
          <p><a href="Weekly_Reports/11/weeklywrapupfeb11.pdf" target="_blank">Weekly Wrapup: February 11</a></p>
          <p><a href="Weekly_Reports/11/weeklywrapupfeb04.pdf" target="_blank">Weekly Wrapup: February 4</a></p>
          <p><a href="Weekly_Reports/11/weeklywrapupjan28.pdf" target="_blank">Weekly Wrapup: January 28</a></p>
          <strong><a href="Weekly Reports/11/2011outlook.pdf" target="_blank">Annual Outlook: Year of 2011</a></strong>
          <br/>
          <br/>
          <h3>Please click on the following links to view and download weekly reports for the year of 2010</h3>
          <p><a href="Weekly_Reports/10/weeklywrapupnov20.pdf" target="_blank">Weekly Wrapup: November 20</a></p>
          <p><a href="Weekly_Reports/10/weeklywrapupnov12.pdf" target="_blank">Weekly Wrapup: November 12</a></p>
          <p><a href="Weekly_Reports/10/weeklywrapupnov5.pdf" target="_blank">Weekly Wrapup: November 5</a></p>
          <p><a href="Weekly_Reports/10/weeklywrapupoct30.pdf" target="_blank">Weekly Wrapup: October 30</a></p>
          <p><a href="Weekly_Reports/10/weeklywrapupoct23.pdf" target="_blank">Weekly Wrapup: October 23</a></p>
          <p><a href="Weekly_Reports/10/weeklywrapupoct16.pdf" target="_blank">Weekly Wrapup: October 16</a></p>
          <p><a href="Weekly_Reports/10/weeklywrapupoct1.pdf" target="_blank">Weekly Wrapup: October 1</a>
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
              <li><a href="weekly_reports.html">Weekly Report</a></li>
              <li><a href="daily_reports.html">Daily Report</a></li>               
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