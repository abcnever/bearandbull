<?php 
	$current_page = "club_events";

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
          <h2>About Bear and Bull's Events</h2>
          <br/>
          <div class="clr"></div>
          <p>Every term, Bear and Bull hosts guest speaker events and career information sessions in the finance industry for our students. Everyone is welcome and encouraged to attend these events. No registration is required.</p>
          </div>
          <div class="article">
          <h2>Upcoming Events</h2>
          <h3>Fundamental and Technical Analysis Event.</h3>
          <p>Bear and Bull Media Group and UW Finance Association is having a fundamental and technical analysis event featuring David Cox, a portfolio manager at CIBC Wood Gundy and former UW alumni. He is one out of roughly 200 that holds both CFA and CMT designations. He will present how he manages money using a combination of fundamental and technical analysis. In addition, he will answer questions on either CFA or CMT designations. If you are interested in finance or asset management, this is an event you don't want to miss! </p>
          <br/>
          <p>Date: March 29<br/>
          Time: 5:30pm<br/>
          Location: MC 2066<br/></p>
          <p>We understand students may not be as familiar with technical analysis. We have provided the following presentations to explain the concept in plain language. Please e-mail if you have any questions on the materials. </p>
          <a href="event/Bear-Bull-Technical-Analysis-Intro.pdf" target="_blank">Bear &amp; Bull Technical Analysis Intro</a>
          <div class="clr"></div>
          <br/>
          <h3>For More Future Events</h3>
          <p>Details regarding more upcoming events will be updated once confirmed. Please check this page often for updates.</p>
          <p>If you wish to receive invitations to our future events, please follow us on Facebook and LIKE our page. You may find the link to our facebook group under "Contact Us".</p>
          </div>
          <div class="article">
          <h2>Past Events</h2>
          <br/>
          <div class="clr"></div>
          <br/>
		  <h3>Investors Group Information Session</h3>
          <p>Interested in becoming a full-time consultant upon graduation? Interested in summer internship opportunities at Investors Group? Attend the Investors Group Information Session!</p>
          <p>Date: Monday, March 28th, 2011<br/>
          Time: 5:00 - 6:00 PM<br/>
          Location: MC: 2065</p>
          <p>Together, with Financial Analysis and Risk Management Student Associating (FARMSA) and Waterloo Investment Research Exchange (WIREX, now UW Finance Association), Bear and Bull Media Group invited representatives from Investors Group to introduce students to exciting work opportunities.</p><br/>
          <h3>Accounting Fraud: An Inside Look at the Enron and WorldCom Cases</h3>
          <p>By <strong><i>Professor Peter Blake</i></strong></p>
          <p>Using the Enron and Worldcom cases, Professor Peter Blake illustrated some tricks companies use to manipulate financial statements. Our students enjoyed an exciting presentation and learnt about how to sense the red flags when analyzing potential investments.</p>
          <p>Professor Blake graduated from the University of Waterloo and holds a Chartered Accountant designation. He worked in the industry and was the vice-president of a large financial institution before he went into teaching.<a href="http://www.uae.uwaterloo.ca/faculty/professors.html#blake"><p>Click here to check out Professor Blake's profile.</p></a>
          <a href="/slides/Fraud/Accounting_Scandals.pdf">
          <p>Click here to view Professor Blake's presentation slides.</p></a>
          </p>
          <br/>
          <h3>Chartered Financial Analyst (CFA) Information Night</h3>
          <p>By <strong><i> Professor Brent Matheson</i></strong></p>
          <p>During this information session, Professor and CFA expert Brent Matheson gave students facts, highlights, background, and personal experience regarding the CFA designation and answered students' questions.
          <a href="/slides/CFAnight/CFAOct2010Slides.pdf"><p>Click here to view general information about the CFA designation and exams.</p></a>
          <a href="/slides/CFAnight/ProfessorsKitSlides.pdf">
          <p>Click here to view details about the CFA program .</p></a>
          </div>
        </div>
      <div class="sidebar">
		<iframe src="https://www.google.com/calendar/embed?
title=Upcoming%20Event&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;s
howTz=0&amp;height=600&amp;wkst=1&amp;hl=en&amp;bgcolor=%23e7e3d8&amp;src=bear
andbullwaterloo%40gmail.com&amp;color=%23691426&amp;ctz=America%2FToronto" style="
border-width:0 " width="315" height="600" frameborder="0" scrolling="no"></iframe>
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
