<?php 
	if(isset($_POST["submitCookies"])){
		if($_POST["theme"] !== '0' && $_POST["philosopher"] !== '0'	){
			$theme = $_POST["theme"];
			$philosopher = $_POST["philosopher"];
			setcookie("theme", $theme, time() + 86400, "/");
			setcookie("philosopher", $philosopher, time()+86400, "/");
			echo $_COOKIE["theme"]." and ".$_COOKIE["philosopher"];	
		} else {
			echo " Please choose all fields"; 
		}
	}
?>