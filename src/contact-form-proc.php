<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

if(empty($_POST['submit']))
{
	echo "Form is not submitted!";
	exit;
}

if(empty($_POST["fullname"]) || 
	empty($_POST["email"]))
	{
		echo "please fill the form";
		exit;
	}

$name = $_POST["fullname"];
$email = $_POST["email"];

mail('dad29@njit.edu', 'New form submission', 'New form submission: Name:
$name, Email: $email');

header('Location: thank-you.html');




?>
