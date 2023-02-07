<?php
include('dbcon.php');

if(isset($_POST['password_reset_link']))
{
	$email=mysqli_real_escape_string($con,%_POST['email']);
	$token=md5(rand());

	$check_email="SELECT * FROM"
}