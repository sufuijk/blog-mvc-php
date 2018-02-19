

	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<h1>Sufuijk's Blog</h1>
		<hr>
			<?php foreach (array_reverse($data) as $post):?>
		<div class="post">
			<h3 id="title">
				<a href="index.php?c=post&a=view&id=<?php echo $post->id;?>&link=<?php echo $post->url?>">
					<?php echo $post->title;?>
				</a>
			</h3>
			<div id="time"><span class="glyphicon glyphicon-time"></span><?php echo $post->timedate;?></div>
			<p id="content"><?php echo $post->content;?></p>
		</div>
		<?php endforeach;?>
	</div>
</div> <!--end row -->


