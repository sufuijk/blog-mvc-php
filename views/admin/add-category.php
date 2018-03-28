<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="index.php?c=admin&a=saveCategory" method="POST" role="form" id="formCategory">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="labelFormCategory">Tạo danh mục</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="text" name="titleOfCategory" id="titleOfCategory" class="form-control"  placeholder="Tên danh mục">
						<input type="text" name="description" id="description" class="form-control"  placeholder="Mô tả">
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