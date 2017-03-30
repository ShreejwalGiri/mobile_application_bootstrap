<?php

	class db_connection
	{
		function __construct ()
		{
			// database connection part

			$database = "mobile_shopping_site_db" ;
			$con = mysql_connect("localhost","root","",$database) or die ("database cannot be connected !! ") ;
			mysql_select_db($database,$con) or die ("connection cannot be found ") ;

			// try
			// {
			// 	$database = "mobile_shopping_site_db" ;
			// 	$con = mysql_connect("localhost","root","",$database) ;
			// 	mysql_select_db($database,$con)  ;
			// }
			// catch (Exception $e)
			// {
			// 		echo "Error in DataBase Connection" ;
			// }

		}

	}
?>
