<?php
	session_start();
	session_destroy();
	echo "You successfully logout! Click here to <a href = 'Login.php'>login again!</a>";
?>