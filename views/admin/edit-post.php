<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
	<div class="rightpage">
			<script src="./public/ckeditor/ckeditor.js" type="text/javascript" charset="utf-8"></script>
			
			<form action="index.php?c=admin&a=saveEditPost&id=<?php echo $data1->id;?>" method="POST" role="form">
				<legend>Chỉnh sửa bài</legend>
			
				<div class="form-group">
					<input type="text" name="title" class="form-control" id="" placeholder="Tên bài viết" value="<?php echo $data1->title;?>">
					<textarea name="content" id="editor1"><?php echo $data1->content;?></textarea>
				</div>
				<script>CKEDITOR.replace( 'editor1' );</script>
				


				<p>Post to category:</p>
				<select name="category_id" id="select-category" class="form-control" required="required">
					<?php foreach($data as $category):?>
						<?php if($category->id == $data1->category_id):?>
							<option value="<?php echo $category->id;?>" selected="selected"><?php echo $category->title;?></option>
						<?php else:?>
						<option value="<?php echo $category->id;?> "><?php echo $category->title;?></option>
						<?php endif;?>
					<?php endforeach;?>
				</select>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
	</div>
</div>







