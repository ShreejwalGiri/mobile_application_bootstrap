<?php 

	include ("../db_connection/db_connection.php") ; 
	include ("../crud_all.php") ;

	$database = new db_connection() ; 

	if(isset($_GET['u-id']))
	{

		$user_id = $_GET['u-id'];
		$product_id = $_GET['p-id'];

		$user_data = new crud_all() ; 
		$user_data = $user_data -> user_details_id($user_id);
		while ($row_user = mysql_fetch_array($user_data))
		{
			$user_name = $row_user['name'];
			// $email_id = $row_user['email_id'];
		}

		$product_data = new crud_all() ; 
		$product_data = $product_data -> product_detail_id($product_id);
		while ($row_product = mysql_fetch_array($product_data))
		{
			$product_name = $row_product['product_name'];
			$price = $row_product['product_price'];
		}

		$cart_insert = new crud_all () ; 
		$cart_insert -> cart_entry($user_id,$user_name,$product_id,$product_name,$price);  

		header("Location:../../menu?p-id=$product_id");
		
	}

	else 
	{
		echo "user id in not given" ; 
	}
?>