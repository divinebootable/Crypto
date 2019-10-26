<?php
function mres($var){
	if (get_magic_quotes_gpc()){
		$var = stripslashes($var);
	}
	return mysqli_real_escape_string(trim($var));
}
 
function confirm_query($result_set) {
	if (!$result_set) {
	 die("Database query failed: " . mysqli_error($conn));
	} else {
		return true;	
	}
}
 
function redirect($locaiont, $delay = 0){
	echo "<meta http-equiv='REFRESH' content='".$delay."; url=".$locaiont."'>";
	exit;
}
 
function display_error(){
	global $error;
	$br = '<br>';
	if (count($error) == 1) $br = '';
	if (!empty($error)){ 
		echo "<div class='error'>";
		foreach($error as $er):
		echo $er . $br;
		endforeach;
		echo "</div>";
	}
}
?>