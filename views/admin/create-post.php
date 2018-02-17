<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
	<div class="rightpage">
			<script src="./public/ckeditor/ckeditor.js" type="text/javascript" charset="utf-8"></script>
			
			<form action="#" method="POST" role="form">
				<legend>Viết bài mới</legend>
			
				<div class="form-group">
					<input type="text" class="form-control" id="" placeholder="Tên bài viết">
					<textarea name="" name="editor1" id="editor1"></textarea>
				</div>
				<script>CKEDITOR.replace( 'editor1' );</script>

				<select name="" id="input" class="form-control" required="required">
					<option value="">Uncategory</option>
				</select>
			
				<button type="submit" class="btn btn-primary">Đăng</button>
			</form>
	</div>
</div>







