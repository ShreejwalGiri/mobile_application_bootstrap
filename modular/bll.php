<?php 

	include ("php/login_bll.php") ;

	$data = new login_bll () ; 

	
	 // $value = $_GET['page'];

	if (isset($_POST['btn_signup']))
	{
		// used to insert the value of users details 
		$data -> user_data_in () ;  
	}
		
	if (isset($_POST['btn_login']))
	{
		// used for the user authentication purpose 
		$data -> login_authentication() ; 
	}

	if (isset($_POST['btn_admin']))
	{
		// used to insert the data of admin details
		$data -> admin_data_in() ; 
	}

	



?>