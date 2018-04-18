<div class="sidenav close-nav" id="mySidenav">
	<div class="profile">
		<img src="public/img/logo.png" alt="" class="img-thumbnail" width="200" height="200">
	</div>
	<div class="sidebar-nav">
      <div class="navbar navbar-inverse navbar-vertical" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav ">
            <li class="active"><a href="index.php?c=home">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a>
              <ul class="dropdown-menu" role="menu" id="special">
                <?php foreach ($data as $category):?>
                <li><a href="index.php?c=category&a=list&category_url=<?php echo $category->url;?>"><?php echo $category->title;?> <span class="badge">1,118</span></a></li>

                <?php endforeach;?>
                
              </ul>
            </li>     
          </ul>
        </div>
      </div>
    </div>
    
</div>



