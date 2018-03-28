<span style="font-size:30px;cursor:pointer" id="show-menu" class="right-menu glyphicon glyphicon-home"></span>

	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
		<hr>
		<h2 id="brandCategory"><?php  echo $data1->title;?>:</h2>
		<?php foreach ($data as $post):?>
		<div class="post">
			<h3 id="title">
				<a href="index.php?c=post&a=view&id=<?php echo $post->id;?>&link=<?php echo $post->url?>">
					<?php echo $post->title;?>
				</a>
			</h3>
			<div id="time"><span class="glyphicon glyphicon-time"></span><?php echo date('jS F, Y', strtotime($post->timedate));?></div>
			<p id="content"><?php echo $post->content;?></p>
		</div>
		<?php endforeach;?>
	</div>
</div> <!--end row -->