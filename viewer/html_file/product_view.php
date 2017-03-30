<form method="post" action="~/mobile_application_bootstrap/../../modular/php/data_edit_delete.php" >

<!-- table for admin details  -->

<section id="cart_items">
	<div class="container">
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu " >
						<td colspan="10" align="center"><label>Admin Details</label></td>
					</tr>
					<tr class="cart_menu " >
						<td>&nbsp;</td>
						<td>Option</td>
						<td>ID</td>
						<td>Name</td>
						<td>Address</td>
						<td>Mobile Number</td>
						<td>Email ID</td>
						<td>Username</td>
						<td>Password</td>
						<td>Registered Date </td>
					</tr>
				</thead>
				<tbody>
					 <?php

						// include ("modular/db_connection/db_connection.php") ;
						// include ("modular/crud_all.php") ;
						// $database = new db_connection() ;
						 if (!isset($_SESSION['login_id']))
						{
							include ('modular/db_connection/db_connection.php') ;
							include ('modular/crud_all.php');
							$database = new db_connection() ;
						}
						$data = new crud_all() ;
						$data = $data ->  admin_details() ;
						while ($row = mysql_fetch_array($data))
						{
					?>
					<tr>
						<td><input type="checkbox" /></td>
						<td><a href="admin?e_id_a=<?php echo $row['id'];?>">Edit</a> / <a href="~/mobile_application_bootstrap/../../modular/php/data_edit_delete.php?d_id_a=<?php echo $row['id'] ; ?>">Delete</a></td>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td><?php echo $row['mobile_no']; ?></td>
						<td><?php echo $row['email_id']; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['password']; ?></td>
						<td><?php echo $row['Registered_date']; ?></td>
					</tr>
					<?php
						// closing of the while loop
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</section>

<!-- table for user details  -->

<section id="cart_items">
	<div class="container">
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu " >
						<td colspan="7" align="center"><label>User Details</label></td>
					</tr>
					<tr class="cart_menu " >
						<td>&nbsp;</td>
						<td>Option</td>
						<td>ID</td>
						<td>Name</td>
						<td>Email ID</td>
						<td>Password</td>
						<td>Registered Date </td>
					</tr>
				</thead>
				<tbody>
					<?php
						$data = new crud_all() ;
						$data = $data ->  user_details() ;
						while ($row = mysql_fetch_array($data))
						{
					?>
					<tr>
						<td><input type="checkbox" /></td>
						<td><a href="signup?e_id_u=<?php echo $row['id'];?>">Edit</a> / <a href="~/mobile_application_bootstrap/../../modular/php/data_edit_delete.php?d_id_u=<?php echo $row['id'] ; ?>">Delete</a></td>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['email_id']; ?></td>
						<td><?php echo $row['password']; ?></td>
						<td><?php echo $row['created_date']; ?></td>
					</tr>
					<?php
						// end of the while loop
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</section>

<!-- table for product details  -->
<section id="cart_items">
	<div class="container" >
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu " >
						<td colspan="9" align="center"><label>Product Details</label></td>
					</tr>
					<tr class="cart_menu " >
						<td>&nbsp;</td>
						<td>Option</td>
						<td>ID</td>
						<td>Product Date</td>
						<td>Product Name</td>
						<td class="price">Price</td>
						<td>Product Brand</td>
						<td class="description">Product Details</td>
						<td class="image">Product Image</td>
					</tr>
				</thead>
				<tbody>
					<?php

						// include ("modular/db_connection/db_connection.php") ;
						// include ("modular/crud_all.php") ;
						// $database = new db_connection() ;
						$data = new crud_all() ;
						$data = $data ->  product_details() ;
						while ($row = mysql_fetch_array($data))
						{
					?>
					<tr>
						<td><input type="checkbox" /></td>
						<td><a href="productEntry?e_id_p=<?php echo $row['id'] ; ?>">Edit</a> / <a href="~/mobile_application_bootstrap/../../modular/php/data_edit_delete.php?d_id_p=<?php echo $row['id'] ; ?>">Delete</a></td>
						<td><?php echo $row['id']?></td>
						<td><?php echo $row['product_data']?></td>
						<td><?php echo $row['product_name']?></td>
						<td><?php echo $row['product_price']?></td>
						<td><?php echo $row['product_brand']?></td>
						<td><?php echo $row['product_detail']?></td>
						<td><image width="150px" src="viewer/bootstrap_style/images/uploaded_files/<?php echo $row['image']?>" /></td>
					</tr>
					<?php
						// end of the while loop
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</section>

<!-- table for cart  -->
<section id="cart_items">
	<div class="container" >
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu " >
						<td colspan="9" align="center"><label>Cart Details</label></td>
					</tr>
					<tr class="cart_menu " >
						<!-- <td>&nbsp;</td>
						<td>Option</td> -->
						<td>ID</td>
						<td>User ID</td>
						<td>User Name</td>
						<td>Product ID</td>
						<td>Product Name</td>
						<td class="price">Price</td>
						<td class="description">Perchaged Date</td>
					</tr>
				</thead>
				<tbody>
					<?php

						// include ("modular/db_connection/db_connection.php") ;
						// include ("modular/crud_all.php") ;
						// $database = new db_connection() ;
						$data = new crud_all() ;
						$data = $data ->  cart() ;
						while ($row = mysql_fetch_array($data))
						{
					?>
					<tr>

						<td><?php echo $row['id']?></td>
						<td><?php echo $row['user_id']?></td>
						<td><?php echo $row['user_name']?></td>
						<td><?php echo $row['product_id']?></td>
						<td><?php echo $row['product']?></td>
						<td><?php echo $row['price']?></td>
						<td><?php echo $row['purchaged_date']?></td>

					</tr>
					<?php
						// end of the while loop
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</section>
</form>
