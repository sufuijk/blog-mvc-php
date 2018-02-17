<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	<div class="leftpage">
		<h2>Administrator</h2>
		<div id="menu">
			 <ul>
				<li class="haveSubmenu">Bài viết</li>
				<ul class="Submenu hide">
					<a href="index.php?c=admin&a=newpost"><li> -Tạo bài viết</li></a>
					<a href="index.php?c=admin&a=postlist"><li> -Quản lí bài viết</li></a>
				</ul>
				<li class="haveSubmenu">Tài khoản</li>
				<ul class="Submenu hide">
					<li> -Tạo bài viết</li>
					<a href="index.php?c=admin&a=logout"><li> -Thoát</li></a>
				</ul>
			 </ul>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$(".haveSubmenu").click(function(){
			$(this).next().slideToggle('2000');			
		});
	});
</script>