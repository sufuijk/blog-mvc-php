<span style="font-size:30px;cursor:pointer" id="show-menu" class="right-menu glyphicon glyphicon-home"></span>
<span style="font-size:30px;cursor:pointer" id="toc-list" class="right-menu glyphicon glyphicon-list"></span>

<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
	<div id="wrapper">
		<div class="post" id="contents">
			<h3 id="title"><b><?php echo $data->title;?></b></h3>
			<div id="time"><span class="glyphicon glyphicon-time"></span><?php echo $data->timedate;?></div>
			<p id="content"><?php echo $data->content;?></p>
		</div>
		<div class="last-post">
			<h3>#Bài viết gần đây</h3>
			<ol id="list-post-lastest">
				<?php 
					foreach ($data1 as $lastestPost):
						if($lastestPost->id != $_GET['id']):
				?>
				<li><a href="?c=post&a=view&id=<?php echo $lastestPost->id;?>&link=<?php echo $lastestPost->url;?>"><?php echo $lastestPost->title;?></a></li>
				<?php 
						endif;
					endforeach;
				?>
			</ol>
		</div>
	</div>
	

</div>
<div class="col-xs-0 col-sm-0 col-md-2 col-lg-2">
	<div id="post-toc">
		<h4 class="center">Tables of content</h4>
		
			<script>makeListContent();</script>

	</div>
</div>



</div> <!--end row -->