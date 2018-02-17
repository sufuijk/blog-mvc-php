<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	<div class="profile">
		<img src="public/img/img_avatar.png" alt="" class="img-thumbnail" width="200" height="200">
	</div>
				
	<div class="page">
		<ul>
			<a href="index.php?c=home"><li>Home</li></a>
			<a href=""><li>About</li></a>
			<a href=""><li>Contact</li></a>
		</ul>
	</div>

		<div class="category">
			<h3 id="title">Category</h3>
			
				<ul>
					<?php foreach ($data as $category):?>
					<a href="index.php?c=category&a=list&category_url=<?php echo $category->url;?>"><li><?php echo $category->title; ?></li></a>
					<?php endforeach;?>
				</ul>

		</div>	
</div>
