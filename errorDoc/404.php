<?php 
	$current_page = "404";
	include_once("../config/config.php");
	
	include_once('../partials/functions.php');
	include_once('../partials/classes.php');
	
	if ($maintenance == true) {
		include_once('../partials/maintenance.php');
	} else {
		include_once('../partials/header.php');
?>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div>
        test
        </div>
      </div>
    </div>
  </div>
<?php 
		include_once('../partials/footer.php');
	}
?>