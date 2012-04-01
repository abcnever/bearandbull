

<!DOCTYPE html>

<html>

<?php /*
<!--
	This is a jQuery Tools standalone demo. Feel free to copy/paste.
	                                                         
	http://flowplayer.org/tools/demos/
	
	Do *not* reference CSS files and images from flowplayer.org when in production  

	Enjoy!
-->
*/ ?>
<head>
	<title>Social Media Plug-In</title>

	<?php //<!-- include the Tools --> ?>
	<script src="js/jquery.tools.min.js"></script>
	 
	<?php /*
	<!-- standalone page styling (can be removed) -->
	<!--<link rel="stylesheet" type="text/css" href="http://static.flowplayer.org/tools/css/standalone.css"/>	-->


	<!-- accordion styling -->	 */ ?>
	<link rel="stylesheet" type="text/css" href="css/tabs-accordion-horizontal.css"/> 
</head>

<body> 	

<?php /* <!-- accordion root --> */ ?>
<div id="accordion">

	<?php /* <!-- accordion header #1 --> */ ?>
	<img src="images/f_logo.jpg" />
	
	<div style="width:500px;">
		<h3>Facebook</h3>
		<p>
			'Like' this page on Facebook.
            <?php
		// Facebook Like Button
		echo "<script src='http://connect.facebook.net/en_US/all.js#xfbml=1'></script><fb:like href='http://bearandbull.uwaterloo.ca/displayarticle.php?Article_ID=".$row["Article_ID"]."' show_faces='false' width='450' font=''></fb:like>"; ?>
		</p>
	</div>
	
	<img src="images/g_logo.jpg" />
	
	<div>
		<h3>Google Plus</h3>
		<p>
			'+1' this page on Google Plus.
            	<?php // Google Plus Button Javascript Code ?>
	<script type="text/javascript">
  	(function() {
    	var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  	})();
	</script>
<?php
	// Code for Google Plus Button
	echo "<br \>";
	echo "<g:plusone size=\"medium\" annotation=\"inline\" " ;
	echo "href='http://bearandbull.uwaterloo.ca/displayarticle.php?Article_ID=".$row['Article_ID']."'></g:plusone>"; ?> 
		</p>
	</div>

	<img src="images/t_logo.png" />
	
	<div>
		<h3>Twitter</h3>
		<p>
			'Tweet' this page on Twitter. <br \>
            <a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
		</p>
	</div>	

</div>

<?php /* <!-- activate tabs with JavaScript --> */ ?>
<script>
$(function() {

$("#accordion").tabs("#accordion div", {
	tabs: 'img', 
	effect: 'horizontal'
});
});
</script>

<br \>

<?php
	// Facebook Comments Box ?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) {return;}
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

    <fb:comments <?php  echo "href='http://bearandbull.uwaterloo.ca/displayarticle.php?Article_ID=".$row['Article_ID']."' ";?> num_posts="5" width="800"></fb:comments>

</body>

</html>
