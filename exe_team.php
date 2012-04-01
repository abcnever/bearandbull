<?php 
	$current_page = "executive_team";

	include_once('config/config.php');
	
	include_once('partials/functions.php');
	
	if ($maintenance == true) {
		include_once('partials/maintenance.php');
	} else {
		include_once('partials/header.php');
 
		switch ($exe_team_state) {
		  case "transition":
			include_once('partials/exe_team_switch.php'); 
			break;
		  case "winter":
			include_once('partials/exe_team_winter.php'); 
			break;
		  case "spring":
			include_once('partials/exe_team_spring.php');
			break;
		  default:
			include_once('partials/exe_team_fall');
			break;
		}
    } 
?>
<?php

if ($maintenance == false) {
	include_once('partials/footer.php');
}

?>
