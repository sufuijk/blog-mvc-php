<div class="modal fade" id="addPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="index.php?c=admin&a=savePost" method="POST" role="form" id="formPost">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Tạo bài viết mới</h4>
				</div>
				<div class="modal-body">
					<script src="./public/ckeditor/ckeditor.js" type="text/javascript" charset="utf-8"></script>


					<div class="form-group">
						<input type="text" name="title" id="title-post" class="form-control"  placeholder="Tên bài viết">
						<textarea name="content" id="editor1"></textarea>
					</div>
					<script>CKEDITOR.replace('editor1');</script>
					<script>//Add class for Img CKEDITOR
						CKEDITOR.on( 'instanceReady', function( evt ) {
							evt.editor.dataProcessor.htmlFilter.addRules( {
								elements: {
									img: function(el) {
										el.addClass('img-responsive center');
									},
									table: function(el){
										el.addClass('table table-hover')
									}
								}
							});
						});
					</script>
					<p>Post to category:</p>
					<select name="category_id" id="select-category" class="form-control" required="required">
						<?php foreach($data as $category):?>
							<option value="<?php echo $category->id; ?>"><?php echo $category->title;?></option>
						<?php endforeach;?>
					</select>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
