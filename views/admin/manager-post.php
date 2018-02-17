<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
	<div class="rightpage">
			<div id="list-post">
				<table class="table table-dark">

					<thead>
						<tr>
							<th>Id</th>
							<th>Title</th>
							<th>Type</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach($data as $post):?>
						<tr>
							<td><?php echo $post->id;?></td>
							<td><a href="index.php?c=post&a=view&id=<?php echo $post->id;?>&link=<?php echo $post->url?>"><?php echo $post->title;?></a></td>
							<td><?php echo $post->type;?></td>
							<td>
								<button class="button button-info"><a href="" >Edit</a></button>
								<button class="button button-danger"><a href="">Delete</a></button>
							</td>
						</tr>
						<?php endforeach;?>
		
					</tbody>
				</table>
			</div>
	</div>
</div>