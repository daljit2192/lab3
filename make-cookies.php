<?php 

	if(isset($_POST["submitCookies"])){
		if($_POST["theme"] !== '0' && $_POST["philosopher"] !== '0'	){
			$theme = $_POST["theme"];
			$philosopher = $_POST["philosopher"];
			setcookie("theme", $theme, time() + 86400, "/");
			setcookie("philosopher", $philosopher,0,"/");
			header("Location: chapter16-project1.php");
		} else {
			header("Location: chapter16-project1.php");
		}
	}
?>