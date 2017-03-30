<?php 

	class login_bll 
	{
		
		function __construct ()
		{
			// database connection class
			include ("db_connection/db_connection.php") ; 
			$database = new db_connection () ;  

		}

		// user-detils insert function 
		function user_data_in ()
		{
			
			include ("crud_all.php") ;

			$full_name = $_POST['full_name_txt'];
			$email_id = $_POST['email_id_txt']; 
			$password = $_POST['password_txt'];

			$data = new crud_all() ; 
			$data -> user_detail($full_name,$email_id,$password) ; 

			header("Location:../../mobile_application_bootstrap/login") ; 
		}

		//admin-details insert function 
		function admin_data_in()
		{
			include("crud_all.php") ; 
			$full_name = $_POST['full_name_txt'];
			$address = $_POST['address_txt'];
			$mobile_no = $_POST['mobile_no_txt'];
			$email_id = $_POST['email_id_txt'];
			$username = $_POST['username_txt'];
			$password = $_POST['password_txt'];

			$data = new crud_all() ; 
			$data -> admin_entry($full_name,$address,$mobile_no,$email_id,$username,$password) ; 
			header("Location:../../mobile_application_bootstrap/login") ; 
		}

		// user-login authentication 
		function login_authentication ()
		{
			include ("crud_all.php") ;

			$user_name = $_POST['user_name_txt'] ; 
			$password = $_POST['password_txt'] ; 

			if (!isset($_GET['u-id']))
			{
				// for admin login 

				$data_admin = new crud_all(); 
				$data_admin =$data_admin -> admin_login(); 
				while ($row = mysql_fetch_array($data_admin))
				{
					if ($row != null)
					{
						for ($i=0;$i<=count($row);$i++)
						{
							echo $row [$i] ; 
							echo "</br>" ; 	
							$id ; 
							if ($user_name === $row[$i] && $password === $row[$i+1])
							{		
								$id = $row['id'];
								header("Location:../../mobile_application_bootstrap/product_view?a-id=$id") ; 
								
								session_start() ; 
								$_SESSION['admin_id'] = $row['id']; 		
							}
							else 
							{
								// header("Location:../../mobile_application_bootstrap/login") ;	
							}
						}
					}
					else 
					{
						echo "there in no value to be displayed " ; 
					}
		
				}

			} 
			
			if (!isset($_GET['a-id']))
			{
				
				// for user login 
				$data_user = new crud_all() ; 
				$data_user = $data_user -> user_login() ; 

				while ($row = mysql_fetch_array($data_user))
				{
					if ($row != null)
					{
						for ($i=0;$i<=count($row);$i++)
						{
							echo $row [$i] ; 
							echo "</br>" ; 	
							$id ; 
							if ($user_name === $row[$i] && $password === $row[$i+1])
							{		
								$id = $row['id'];
								header("Location:../../mobile_application_bootstrap/cart?u-id=$id") ; 
								
								session_start() ; 
								$_SESSION['login_id'] = $row['id']; 		
							}
							else 
							{
								// header("Location:../../mobile_application_bootstrap/login") ;	
							}
						}
					}
					else 
					{
						echo "there in no value to be displayed " ; 
					}
		
				}
			} 
		}
	}



		
?>