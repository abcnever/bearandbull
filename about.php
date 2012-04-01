<?php 
	$current_page = "about_us";

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
          <h2><span id="club_info">Club Information</span></h2>
          <div class="clr"></div>
          <br/>
          <p><strong>About Bear and Bull</strong></p>
          <p>Bear and Bull Media Group (Bear and Bull) is a student-run club that promotes business awareness at the University of Waterloo.</p>
          <p>We provide a wide range of services to make sure everyone at the University is well aware of
the business, economic and financial news. To further promote financial awareness, Bear and
Bull will provide research reports on various topics and host speaker events. To assist students
who are investing through a simulation or real-time, we will provide a daily market summary
by 7:30pm every weekday, and a weekly summary/outlook on Saturday night. Additionally, we
provide the weekly report to more than 200 WIREX (investment club) members across campus.</p>
<p>Bear and Bull has five different departments with different responsibilities. The departments
are: </p>
		<li>Economics</li>
		<li>Financial Services</li>
		<li>Energy and Commodities</li>
        <li>Information Technology</li>
		<li>Market Analysis</li>
        <br/>
<p>Each department will specialize in sector and will provide information via
articles and research reports.</p>
<br/>
          <p><strong>Our Mission</strong></p>
          <p>Our mission is to be the leading organization that provides relevant and reliable updates on business, economic, and financial news.</p>
          <p>Bear and Bull Media Group will be the primary source for Waterloo students to check breaking business news and to find the latest business trends through our different research reports offered by our various departments.</p>
<br/>     
		  <p id="credit"><strong>Credits For Our New Website (On May 2, 2011)</strong></p>
          <p><i>Edward Zhang | Computer Engineering 1st Year Student</i></p>
          <p>Edward is the website project manager, also developed &amp; designed a major portion of the website. He developed the back-end of the website (Database), and contributed to the front-end of the website with his skills in Javascript, CSS and HTML. He also debugged the functionality of the website, to guarantee excellent user experience for the visitors. At the mean time, He's still an active developer for this website, improving its organization and maintainability gradually over time.</p>
          <p><i>Vishvadeep Vig | Computer Engineering 1st Year Student</i></p>
          <p>A great PHP code contributor to the website. Those articles wouldn't be displayed from back-end of the website without him! Behind those codes is his precious time that he could've used to rest from the heavy workload that Engineering had put onto him. Good job Vishu! He's also a good joker. The development couldn't be easier without his joke box opened from time to time.
</p>
		  <p><i>Haylin Wang | Accounting and Financial Management 1st Year Student</i></p>
          <p>Haylin extensively applied her sense of art during the development process. All the perfect alignment of pictures and text were all from her suggestion! She's also done a great job maintaining the communication between the development team and the management team, to make sure that both teams could understand each other well. Bravo, Haylin!</p>
          <p><i>Andrew Dhawan | Applied Mathematics/Biology Option 2nd Year Student</i></p>
          <p>Andrew is the developer of the previous Bear & Bull website that is based on Flash. He provided the project team with important tips on how to utilize the server provided by <a href="http://csclub.uwaterloo.ca/">UW Computer Science Club</a>, and assisted in the development/maintainance process. He deserves the special thanks from us.</p>
          <p><strong>About FEDs</strong></p>
          <p>Bear and Bull Media Group is officially listed under the University of Waterloo's Federation of Students clubs listing. Since 1967, the Federation of Students has existed as the official voice of the undergraduate students of the University of Waterloo. In that capacity, we undertake activities both on and off campus to serve and represent students.</p>
        </div>
        <div class="article">
          <h2><span id="join_us">Join Us</span></h2>
          <div class="clr"></div>
          <br/>
          <p>Every term, Bear and Bull is looking for talented students to be on the following positions:</p>
          <p><strong>Analysts:</strong> responsible for writing reports or articles on an intereted topic for any one of the five departments.</p>
          <p><strong>Marketing Team Members:</strong></p>
          <ol> 
          	<li>&nbsp;&nbsp;&nbsp;&nbsp;1. Event Co-ordinator who assists executives with events set-up, registration, gift preparation, etc.</li>
          	<li>&nbsp;&nbsp;&nbsp;&nbsp;2. Managing and sending E-Newsletters to prescribers</li>
          	<li>&nbsp;&nbsp;&nbsp;&nbsp;3. Updating events information</li>
          	<li>&nbsp;&nbsp;&nbsp;&nbsp;4. Designing and putting up event posters</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;5. Make class announcements and promote the club</li>
          </ol>
        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>About Us</span></h2>
          <div class="clr"></div>
          <ul class="sb_menu">
              <li><a href="exe_team_spring.php">Executive Team</a></li>
              <li><a href="about.php#club_info">Club Information</a></li>
              <li><a href="about.php#join_us">Join Us</a></li>
              <li><a href="sponsors.php">Sponsors</a></li>
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
