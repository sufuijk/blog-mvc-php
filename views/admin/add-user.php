<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="index.php?c=admin&a=addUser" method="POST" role="form" id="formUser">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="labelFormUser">Thêm người dùng</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="text" name="firstname" class="form-control"  placeholder="First name" required="required">
						<input type="text" name="lastname" class="form-control"  placeholder="Last name" required="required">
						<select name="gender" class="form-control" required="required" placeholder="gender">
							<option selected disabled>Select Gender for user</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
						<input type="email" name="email" class="form-control"  placeholder="Email">
						<input type="text" name="username" class="form-control"  placeholder="Username" required="required">
						<input type="password" name="password" class="form-control"  placeholder="Password" required="required">
						<select name="phanquyen" class="form-control" required="required">
							<option selected disabled>Select Grant for user</option>
							<option value="admin">Admin</option>
							<option value="writer">Writer</option>
						</select>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>

		</div>
	</div>
</div>
