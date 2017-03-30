<?php


	if (isset($_SESSION['login_id']))
	{
		$one = $_GET['url'] ;

		if ($one =="cart" || $one =="menu" || $one =="signup" || $one =="productDetails")
		{

			require ("viewer/html_file/".$one.".php");
		}
		else
		{
			require ("viewer/html_file/menu.php");
		}
	}
	else if (isset($_SESSION['admin_id']))
	{
		$one = $_GET['url'] ;
		if ($one == "product_view" || $one == "productEntry" || $one == "admin" )
		{

			require ("viewer/html_file/".$one.".php");
		}
		else
		{
			require ("viewer/html_file/menu.php");
		}
	}
	else
	{
		if (isset($_GET['url']))
		{
				$one = $_GET['url'] ;
		}
		else
		{
			$one = "index" ;
		}
		if ($one == "login" || $one == "signup" || $one =="productDetails")
		{
			require ("viewer/html_file/".$one.".php");
		}
		else
		{
			require ("viewer/html_file/menu.php");
		}
	}


?>
