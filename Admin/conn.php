<?php
	$link=mysqli_connect("localhost","root","Soumya@3154","art_gallery");
	if(mysqli_connect_error())
	{
		echo "Connection error".mysqli_connect_error();
		exit;
	}
	
?>