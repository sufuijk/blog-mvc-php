<style>
	
	body{
		background: url('./public/img/wallpaper.jpg');
		background-repeat: no-repeat;
		background-size: cover;
	}
	.error{
		color: #fff;
	}	

</style>


<div class="col-xs-12 col-sm-12 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
	<div class="login">
	
		<form action="index.php?c=admin&a=login" method="POST" role="form">
			<legend>Login</legend>
		
			<div class="form-group">
				<input type="text" class="form-control" id="" name="username" placeholder="Username">
				<input type="password" class="form-control" id="" name="password" placeholder="Password">	
			</div>
		
			<div class="error">
				<?php if($data) echo $data;?>
			</div>
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>

