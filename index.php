<?php
	phpinfo();
	echo date("D M d Y"). ', sunrise time: ' .date_sunrise(
		time(), SUNFUNCS_RET_STRING, 38, -9, 90, 1);
	date_default_timezone_set('YOUR TIMEZONE');
	echo $timestamp = date('H:i:s');
?>



