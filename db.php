<?php 

	// Localhost, DB Username, Password, Database Name
	$connect = mysqli_connect("localhost", "root", "" ,"ticketbooking");

	if ( $connect )
	{
		// echo '<div class="alert alert-success">Database Connection Established</div>';
	}	
	else
	{
		echo 'Database is Not Connected';
	}

 ?>