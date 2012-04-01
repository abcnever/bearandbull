<?php 
	$current_page = "contact_us";

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
          <h2><span>Contact</span></h2>
          <div class="clr"></div>
          <p>You can email us to <strong>bearandbullwaterloo@gmail.com</strong> using your own email account, or the form below. <br /><br /> You can also follow us on Facebook and Twitter.</p>
          <a href="http://www.facebook.com/pages/Bear-Bull-Media-Group/346440196305" target="_blank"><img src="images/facebook_logo.png" alt="Our Facebook Page" width="40" height="40"/></a>
          <a href="http://twitter.com/bearandbullUW" target="_blank"><img src="images/logo_twitter.png" alt="Our Twitter Page" width="40" height="40"  /></a>
        </div>
        <div class="article">
          <h2><span>Send us</span> mail</h2>
          <div class="clr"></div>
          <form action="email.php" method="post" id="sendemail">
            <ol>
              <li>
                <label for="name">Your Name (required)</label>
                <input id="name" name="name" class="text" />
              </li>
              <li>
                <label for="email">Your Email Address (required)</label>
                <input id="email" name="email" class="text" />
              </li>
              <li>
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="8" cols="50"></textarea>
              </li>
              <li>
                <input type="image" name="imageField" id="imageField" src="images/submit.gif" class="send" />
                <div class="clr"></div>
              </li>
            </ol>
          </form>
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
