<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
	<div class="rightpage">
			<script src="./public/ckeditor/ckeditor.js" type="text/javascript" charset="utf-8"></script>
			
			<form action="index.php?c=admin&a=savepost" method="POST" role="form">
				<legend>Viết bài mới</legend>
			
				<div class="form-group">
					<input type="text" name="title" class="form-control" id="" placeholder="Tên bài viết">
					<textarea name="content" id="editor1"></textarea>
				</div>
				<script>CKEDITOR.replace( 'editor1' );</script>
				


				<p>Post to category:</p>
				<select name="category_id" id="select-category" class="form-control" required="required">
					<?php foreach($data as $category):?>
						<option value="<?php echo $category->id; ?>"><?php echo $category->title;?></option>
					<?php endforeach;?>
				</select>
				<button type="submit" class="btn btn-primary">Đăng</button>
			</form>
	</div>
</div>







