<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
	<h4>Danh sách các danh mục</h4>
	<table class="table table-dark">
		<thead>
			<tr>
				<th>Id</th>
				<th>Title</th>
				<th>Description</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($data as $category):?>
				<tr>
					<td><?php echo $category->id?></td>
					<td><?php echo $category->title?></td>
					<td><?php echo $category->description?></td>
					<td>
						<?php if($_SESSION['user']->phanquyen == 0 ): ;?>
						<a type="button" data-toggle="modal" data-target="#addCategory"><span class="glyphicon glyphicon-pencil" onclick="editCategory('<?php echo $category->id;?>')"></span></a>
						<a onclick="deleteCategory('<?php echo $category->id;?>')"><span class="glyphicon glyphicon-trash"></span></a>
						<?php else: echo "Not Permitted"; endif;?>
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>