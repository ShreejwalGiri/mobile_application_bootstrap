
<!-- table for user cart details   -->

<section id="cart_items">
	<div class="container">
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu " >
						<td colspan="10" align="center"><label>Cart Items</label></td>
					</tr>
					<tr class="cart_menu " >
						<td>Option</td>
						<td>ID</td>
						<td>Product ID</td>
						<td>Product</td>
						<td>Price</td>
						<td>Purchaged Date</td>
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
						$id = $_SESSION['login_id'];
						$data = new crud_all() ; 
						$data = $data ->  cart_id($id) ; 
						while ($row = mysql_fetch_array($data))
						{ 
							$cart_id = $row['id'];
					?> 
					<tr>
						<td><a href="~/mobile_application_bootstrap/../../modular/php/data_edit_delete.php?d_id_c=<?php echo $cart_id ; ?>">Delete</a></td>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['product_id']; ?></td>
						<td><?php echo $row['product']; ?></td>
						<td><?php echo $row['price']; ?></td>
						<td><?php echo $row['purchaged_date']; ?></td>
					</tr>
					<?php
						// to make the sum of the product purchaged 
						$sum = new crud_all() ; 
						$sum = $sum -> cart_sum($id);
						$result = mysql_fetch_array($sum); 
						
						// closing of the while loop  
						}

						 
					?> 
				</tbody>
			</table>
			
		</div>
	</div>
</section>
<label style="margin-left:72%" class = "heading-label" >
 Total :
  <?php

  
  	try 
  	{
  		echo $result[0] ;
  	}
  	catch (Exception $e)
  	{
  		echo $e ; 
  		// die ("No Data To Display ") ;  
  	}
   
  ?> RS
 </label>

