<?php

	class index
	{
		function __construct()
		{
			$display = "<html>" ;
			$display .= "<head><title>Mobile Shopping site </title></head>" ;
			$display .= "<body>" ;
			// $display .= "<form>" ;
			require ('viewer/header.php') ;
			require ('viewer/body.php') ;
			require ('viewer/footer.php') ;
			// $display .= "</form>" ;
			$display .= "</body>" ;
			$display .= "</html>" ;

			echo $display ;
		}

	}
?>
