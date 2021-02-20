<?php

	$conn = mysqli_connect('fdb29.awardspace.net','3749378_tsf','vds@3210','3749378_tsf');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>