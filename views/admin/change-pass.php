<div class="modal fade" id="changePass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="index.php?c=admin&a=changePass" method="POST" role="form">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="labelFormUser">Đổi mật khẩu</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						
						<input type="password" name="password" class="form-control"  placeholder="Password" required="required">
						<input type="password" name="re-password" class="form-control"  placeholder="Re-Password" required="required">

						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" name="submitChange">Save changes</button>
				</div>
			</form>

		</div>
	</div>
</div>
