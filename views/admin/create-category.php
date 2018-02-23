<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
	<div class="rightpage">
			<!--Create new category -->
			<form action="index.php?c=admin&a=saveCategory" method="POST" role="form" id="form-add-category">
				<legend>Tạo danh mục</legend>
			
				<div class="form-group">
					<input type="text" name="titleOfCategory" class="form-control" id="" placeholder="Tên danh mục">
					<input type="text" name="description" class="form-control" id="" placeholder="Mô tả">
				</div>
			
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>

			<!--List of category -->
			<h4>Danh sách các danh mục</h4>
			<table class="table table-dark">
		    <thead>
		      <tr>
		        <th>Id</th>
		        <th>Title</th>
		        <th>Description</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php foreach($data as $category):?>
		    		<tr>
		        	<td><?php echo $category->id?></td>
		        	<td><?php echo $category->title?></td>
		        	<td><?php echo $category->description?></td>

		      		</tr>
		    	<?php endforeach;?>
		      
		     
		    </tbody>
		  </table>
	</div>
</div>







