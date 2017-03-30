<?php 

	if (isset($_GET['e_id_u']))
	{
		include ("modular/db_connection/db_connection.php") ;
		include ("modular/crud_all.php") ;
		$database = new db_connection() ; 
		$id = $_GET['e_id_u'] ;
		$data = new crud_all() ;
		   
		$data = $data -> user_details_id($id) ; 

		while ($row = mysql_fetch_array($data))
		{
?>		

		<div class="row">
			<div class="col-sm-4">
			&nbsp;
			</div>
			<div class="col-sm-4">
				<div class="signup-form">
						<h2>New User Signup!</h2>
						<form  method="post" action="~/mobile_application_bootstrap/../../modular/php/data_edit_delete.php?e_id_u=<?php echo $id ?>" >
							<input type="text" value="<?php echo $row['name']?>" placeholder="Name" name="full_name_txt" />
							<input type="email" value="<?php echo $row['email_id']?>" placeholder="Email Address" name="email_id_txt" />
							<input type="password" value="<?php echo $row['password']?>" placeholder="Password" name="password_txt" />
							<button type="submit" name="btn_signup" class="btn btn-default">Signup</button>
						</form>
				</div>	
			</div>
			<div class="col-sm-4">
			&nbsp;
			</div>
		</div>
<?php
	// end of the while loop 
		}
	// end of the if statement  
	}

	else 
	{
?>
	<div class="row">
			<div class="col-sm-4">
			&nbsp;
			</div>
			<div class="col-sm-4">
				<div class="signup-form">
						<h2>New User Signup!</h2>
						<form  method="post" action="~/mobile_application_bootstrap/../../modular/bll.php?page='signup'">
							<input type="text" placeholder="Name" name="full_name_txt" />
							<input type="email" placeholder="Email Address" name="email_id_txt" />
							<input type="password" placeholder="Password" name="password_txt" />
							<button type="submit" name="btn_signup" class="btn btn-default">Signup</button>
						</form>
				</div>	
			</div>
			<div class="col-sm-4">
			&nbsp;
			</div>
		</div>
<?php
	//end of the else statement 
	}
?>
	