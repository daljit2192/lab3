<?php 
if(isset($_COOKIE['philosopher'])){
	unset($_COOKIE['philosopher']);
	setcookie('philosopher', null, -1, '/');  
}
if(isset($_COOKIE['theme'])){
	unset($_COOKIE['theme']);
	setcookie('theme', null, -1, '/'); 
}
header("Location: chapter16-project1.php");
?>