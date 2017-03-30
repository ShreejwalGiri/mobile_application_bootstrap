
<?php 

	class crud_all 
	{
		// crud view part 

		function product_details ()
		{
			$query = "select * from products" ;
			$data = mysql_query($query) ; 
			return $data ;  
		}

		function product_detail_id ($id)
		{
			$query = "select * from products where id = $id " ;
			$data = mysql_query($query) ; 
			return $data ; 
		}

		function user_details ()
		{
			// echo $query = "select name,email_id from user_details where name = $full_name and email_id = $email_id" ; 
		    $query = "select * from user_details" ; 
			$data = mysql_query($query) ;
			return $data ; 
		}

		function user_details_id ($id)
		{
			// echo $query = "select name,email_id from user_details where name = $full_name and email_id = $email_id" ; 
		    $query = "select * from user_details where id = $id " ; 
			$data = mysql_query($query) ;
			return $data ; 
		}

		function user_login ()
		{
			$query = "select id,name,password from user_details" ;
			$data = mysql_query($query) ; 
			return $data ;  
		}

		function admin_details ()
		{
			$query = "select * from admin" ;
			$result = mysql_query($query) ; 
			return $result ;  
		}
		function admin_details_id ($id)
		{
			$query = "select * from admin where id = $id " ;
			$result = mysql_query($query) ; 
			return $result ;  
		}
		function admin_login ()
		{
			$query = "select id,name, password from admin" ;
			$data = mysql_query($query) ; 
			return $data ; 
		}
		function cart ()
		{
			$query = "select * from cart" ;
			$result = mysql_query($query) ; 
			return $result ;
		}
		function cart_id ($id)
		{
			$query = "select * from cart where user_id=$id" ;
			$result = mysql_query($query) ; 
			return $result ;
		}
		function cart_sum ($id)
		{
			$query = "select sum(price) from cart where user_id=$id" ;
			$result = mysql_query($query) ; 
			return $result ;
		}

		// crud insert part 

		function user_detail ($name,$email_id,$password)
		{
			$query = "insert into user_details (name,email_id,password) values('$name','$email_id','$password') " ;
			$result = mysql_query($query) ; 
			return $result ; 
		}

		function product_entry ($product_name,$product_price,$product_brand,$product_details,$image)
		{
			 $query = "insert into products (product_name,product_price,product_brand,product_detail,image) values('$product_name','$product_price','$product_brand','$product_details','$image')" ;
			$result = mysql_query($query) ; 
			return $result ;  
		}

		function admin_entry ($name,$address,$mobile_no,$email_id,$username,$password)
		{
			$query = "insert into admin (name,address,mobile_no,email_id,username,password) values('$name','$address','$mobile_no','$email_id','$username','$password') " ; 
			$result = mysql_query($query) ; 
			return $result ; 
		}

		function cart_entry($user_id,$user_name,$product_id,$product,$price)
		{
			echo $query = "insert into  cart (user_id,user_name,product_id,product,price) values ('$user_id','$user_name','$product_id','$product','$price')" ; 
			$result = mysql_query($query) ; 
			return $result ; 
		}

		// crud edit part 

		function product_edit ($id,$product_name,$product_price,$product_brand,$product_details,$image)
		{
			$query = "update products set product_name='$product_name',product_price='$product_price',product_brand='$product_brand',product_detail='$product_details',image = '$image' where id = '$id' " ; 
			$result = mysql_query($query) ; 
			return $result ; 
		}

		function user_edit ($id,$name,$email_id,$password)
		{
			$query = "update user_details set name='$name',email_id='$email_id',password='$password' where id = '$id'" ; 
			$result = mysql_query($query) ;  
			return $result ; 
		}

		function admin_edit ($id,$name,$address,$mobile_no,$email_id,$username,$password)
		{
			$query = "update admin set name='$name',address='$address',mobile_no='$mobile_no',email_id='$email_id',username='$username',password='$password' where id = '$id'" ; 
			$result = mysql_query($query) ;  
			return $result ;
		}

		// crud delete part 

		function admin_delete ($d_id)
		{
			$query = "delete from admin where id='$d_id'" ; 
			$result = mysql_query($query) ; 
			return $result ; 
		}
		function user_delete ($d_id)
		{
			$query = "delete from user_details where id='$d_id'" ; 
			$result = mysql_query($query) ; 
			return $result ; 
		}

		function product_delete ($d_id)
		{
			$query = "delete from products where id='$d_id'" ; 
			$result = mysql_query($query) ; 
			return $result ; 
		}

		function cart_delete ($d_id)
		{
			echo $query = "delete from cart where id='$d_id'" ; 
			$result = mysql_query($query) ; 
			return $result ; 
		}

	}
?>