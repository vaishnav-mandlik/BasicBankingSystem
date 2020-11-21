<?php

	$conn = mysqli_connect('localhost','root','','intern');

	if(!$conn){
		die("error is occurred".mysqli_connect_error());
	}

?>