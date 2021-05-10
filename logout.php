<?php 
session_start();
	if ( isset($_SESSION ['login']) && isset($_SESSION ['search']) && isset($_SESSION ['token']) && isset($_GET[sha1($_SESSION['token'])]) ) {
		if ($_GET[sha1($_SESSION['token'])] == $_SESSION['token']) {
			session_destroy();
			header("Location: index.php") ;
			echo "<meta http-equiv='refresh' content='0; url = index.php' />";
		}else {
			header("Location: index.php") ;
			echo "<meta http-equiv='refresh' content='0; url = index.php' />";
		}
	}
	else {
		header("Location: index.php") ;
		echo "<meta http-equiv='refresh' content='0; url = index.php' />";
	}
?>