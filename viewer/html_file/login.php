
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form method="post" action="~/mobile_application_bootstrap/../../modular/bll.php?page='login'">
							<input type="text" placeholder="User Name" name="user_name_txt" required="Value " />
							<input type="password" placeholder="Password" name="password_txt" required="Value " />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default" name="btn_login">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
							<a  class="btn btn-primary" style="width:40%;" href="signup"><label>Signup</label></a>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	