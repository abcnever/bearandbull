<?php 
	$current_page = "sponsors";

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
          <h2><span id="club_info">Why Sponsor Us?</span></h2>
          <div class="clr"></div>
          <br/>
          <br/>
          <h3>Exposure to Students on Campus and Across the Country</h3>
          <p>Have your brand promoted through our publications such as weekly reports and newsletters which are distributed to students across the University of Waterloo and around the country. Additionally, receive exposure through your logo, name or a sponsor profile on our website.</p>
          <h3>Future Growth and Opportunities</h3>
          <p>With ideas in the works such as a magazine and events on campus, sponsors will get a chance to be featured further, through benefits such as a whole page of advertisement space in the magazine, booths or speaker sessions at events and more! </p>
          <h3>Create Meaningful Connections and Attract Talents</h3>
	<p>With a wide reach across campus, we can also help your organization advertise job openings (co-op or full-time for 4th years) to the student body.</p>
		<h3>Improve Financial Literacy and Plant a Seed</h3>
          <p>By supporting the Bear & Bull Media Group, you would be providing students with the opportunity to learn more about finance through our publications. Who knows, you may just plant a seed that blooms into a potential career or passion.</p>
       </div>
        <div class="article">
          <h2>Next Step</h2>
          <div class="clr"></div>
          <br/>
          <p>If you are interested in sponsoring the Bear & Bull Media Group, please contact</p> <p>bearandbullwaterloo@gmail.com</p> <p>we look forward to meeting with you and developing a partnership that will be beneficial to all stakeholders involved.</p>
        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>About Us</span></h2>
          <div class="clr"></div>
          <ul class="sb_menu">
              <li><a href="exe_team.php">Executive Team</a></li>
              <li><a href="#club_info">Club Information</a></li>
              <li><a href="#join_us">Join Us</a></li>
              <li><a href="sponsors.php">Sponsorship</a><li>
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
