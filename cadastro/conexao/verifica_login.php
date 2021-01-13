<?php
session_start();
if(!$_SESSION['login']) {
	header('Location: ../login-site.php');
	exit();
}
