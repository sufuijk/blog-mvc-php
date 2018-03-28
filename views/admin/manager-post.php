<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
	<div class="rightpage">
		
			<div id="list-post">
				<table class="table table-dark">
					<thead>
						<tr>
							<th>Id</th>
							<th>Title</th>
							<th>Time Create</th>
							<th>Author</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach($data as $post):?>
							<tr>
								
								<td><?php echo $post->id;?></td>
								<td><a href="index.php?c=post&a=view&id=<?php echo $post->id;?>&link=<?php echo $post->url?>"><?php echo $post->title;?></a></td>
								<td><?php echo $post->timedate;?></td>
								<td>
									<?php foreach ($data1 as $user) {
										if($post->userid == $user->id){
											echo $user->username;
											break;
										}
									}?>
								</td>
								<td>
									<!-- If you are Admin you can edit any post
									But if you are Writer you just can edit your post -->
									<?php if($_SESSION['user']->phanquyen == 0 ): ;?>
									<a type="button" data-toggle="modal" data-target="#addPost"><span class="glyphicon glyphicon-pencil" onclick="editPost('<?php echo $post->id;?>')"></span></a>
									<a onclick="deletePost('<?php echo $post->id;?>')"><span class="glyphicon glyphicon-trash"></span></a>
									<?php elseif($_SESSION['user']->id == $post->userid): ?>
									<a type="button" data-toggle="modal" data-target="#addPost"><span class="glyphicon glyphicon-pencil" onclick="editPost('<?php echo $post->id;?>')"></span></a>
									<a onclick="deletePost('<?php echo $post->id;?>')"><span class="glyphicon glyphicon-trash"></span></a>
									<?php endif; ?>
								</td>
							</tr>
						<?php endforeach;?>
					
					</tbody>
				</table>
			</div>

		</div>
	</div>

	