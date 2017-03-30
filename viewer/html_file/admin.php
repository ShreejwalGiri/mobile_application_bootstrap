
<?php 
	if (isset($_GET['e_id_a']))
	{
		include ("modular/db_connection/db_connection.php") ;
		include ("modular/crud_all.php") ;
		$database = new db_connection() ; 
		$id = $_GET['e_id_a'] ;
		$data = new crud_all() ;
		   
		$data = $data -> admin_details_id($id) ; 

		while ($row = mysql_fetch_array($data))
		{
?>
<form method="post" action="~/mobile_application_bootstrap/../../modular/php/data_edit_delete.php?e_id_a=<?php echo $id ?>">
	<div class="row">
		<div class="container" >
			<div class="col-md-3">
				&nbsp; 
			</div>
			<div class="col-md-6">
				<div>
					<label class="heading-label " >Admin Panel </label>
				</div>
				<div class="panel panel-default" style="margin-top: 5%;">
					<div class="panel-body">
						<input type="text" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Full Name" name="full_name_txt" required="" />
						<input type="text" value="<?php echo $row['address'] ?>" class="form-control" placeholder="Address" name="address_txt" required=""  />
						<input type="text" value="<?php echo $row['mobile_no'] ?>" class="form-control" placeholder="Mobile-No" name="mobile_no_txt" required="" />
						<input type="email" value="<?php echo $row['email_id'] ?>" class="form-control" placeholder="Email-ID" name="email_id_txt" required="" />
						<hr >
						<input type="text" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Username" name="username_txt" required="" />
						<input type="password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Password" name="password_txt" required="" />
						<input style="margin-top:20px ;" type="submit" class="btn btn-primary" value="Submit" name="btn_admin" />		
					</div>
				</div>
			</div>
			<div class="col-md-3">
				&nbsp; 
			</div>
		</div>
	</div>
</form>
<?php
	// end of the while loop 
		}
	//end of the if statement  
	}

	else 
	{
?>
<form method="post" action="~/mobile_application_bootstrap/../../modular/bll.php?page='admin'">
	<div class="row">
		<div class="container" >
			<div class="col-md-3">
				&nbsp; 
			</div>
			<div class="col-md-6">
				<div>
					<label class="heading-label " >Admin Panel </label>
				</div>
				<div class="panel panel-default" style="margin-top: 5%;">
					<div class="panel-body">
						<input type="text" class="form-control" placeholder="Full Name" name="full_name_txt" required="" />
						<input type="text" class="form-control" placeholder="Address" name="address_txt" required=""  />
						<input type="text" class="form-control" placeholder="Mobile-No" name="mobile_no_txt" required="" />
						<input type="email" class="form-control" placeholder="Email-ID" name="email_id_txt" required="" />
						<hr >
						<input type="text" class="form-control" placeholder="Username" name="username_txt" required="" />
						<input type="password" class="form-control" placeholder="Password" name="password_txt" required="" />
						<input style="margin-top:20px ;" type="submit" class="btn btn-primary" value="Submit" name="btn_admin" />		
					</div>
				</div>
			</div>
			<div class="col-md-3">
				&nbsp; 
			</div>
		</div>
	</div>
</form>

<?php
	// end of the else statement  
	}
?>