<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
	<?php if($_SESSION['user']->image == NULL):?>
		<img src="./public/img/img_avatar.png" class="img-responsive">
		<form action="index.php?c=admin&a=uploadImage" method="POST" role="form" enctype="multipart/form-data">
			<input type="file" class="form-control" name="image" style="display: none">
			<button type="submit" name="upload" class="btn btn-primary" >Upload image</button>
		</form>
	<?php else:?>	
		<img src="./public/img/<?php echo $_SESSION['user']->image?>" class="img-responsive img-thumbnail" alt="Image">
		<form action="index.php?c=admin&a=uploadImage" method="POST" role="form" enctype="multipart/form-data">
			<div class="form-group">
				<input type="file" class="form-control" name="image">
			</div>
			<button type="submit" name="upload" class="btn btn-primary">Upload image</button>
			
			
		</form>
	<?php endif;?>
</div>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
	<form action="index.php?c=admin&a=saveEditUser" method="POST" role="form">
		<legend style="color:#fff">Thông tin tài khoản</legend>

		<div class="form-group">
			<label for="">Username</label>
			<input type="text" class="form-control" name="username" value="<?php echo $_SESSION['user']->username;?>" disabled>
			<label for="">First name</label>
			<input type="text" class="form-control" name="firstname" value="<?php echo $_SESSION['user']->firstname;?>" >
			<label for="">Last name</label>
			<input type="text" class="form-control" name="lastname" value="<?php echo $_SESSION['user']->lastname;?>" >
			<label for="">Gender</label>
			<input type="text" class="form-control" name="gender" value="<?php echo $_SESSION['user']->gender;?>" >
			<label for="">Email</label>
			<input type="email" class="form-control" name="email" value="<?php echo $_SESSION['user']->email;?>" >
			<label for="">Grant</label>
			<input type="text" class="form-control" name="phanquyen" value="<?php echo ($_SESSION['user']->phanquyen == 0)? "Admin":"Writer";?>" disabled>

		</div>
		<button type="submit" name="changeInfoSubmit" class="btn btn-primary">Save changes</button>
	</form>	
</div>
