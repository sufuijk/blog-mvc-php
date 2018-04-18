<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo BLOGNAME;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<script src="public/js/script.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	
	<nav class="navbar navbar-inverse navbar-admin" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><?php echo BLOGNAME;?></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				
				<ul class="nav navbar-nav">
					<li><a href="index.php?c=admin">Dashboard</a></li>
					<li><a href="index.php?c=admin&a=listPost">Bài viết</a></li>
					<li><a href="index.php?c=admin&a=listCategory">Danh mục</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tài khoản <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Hello,<?php echo $_SESSION['user']->username;?></a></li>
							<li class="divider"></li>
							<li><a href="index.php?c=admin&a=myProfile">Profile</a></li>
							<li><a href="#" data-toggle="modal" data-target="#changePass">Change Password</a></li>
						</ul>
					</li>	
					<li><a href="index.php?c=admin&a=logout"><span class="glyphicon glyphicon-off"></span> Thoát</a></li>
				</ul>

			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	<div class="container" id="dashboard">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-10 col-lg-10">
				<h1><span class="glyphicon glyphicon-cog"></span>Dashboard<small> Trang quản lí</small></h1>
			</div>
			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
				<div class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-plus"></span> Nội dung 
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a type="button" data-toggle="modal" data-target="#addPost" onclick="addPost()">Thêm bài viết</a></li>
							<?php if($_SESSION['user']->phanquyen == 0):?>
							<li><a type="button" data-toggle="modal" data-target="#addCategory" onclick="addCategory()">Thêm danh mục</a></li>
							<li><a type="button" data-toggle="modal" data-target="#addUser">Thêm tài khoản</a></li>
							<?php endif;?>
						</ul>
					</div>
				</div>

				<!--Modals-->
				<!-- Change password -->
				<?php require_once(VIEW."admin/change-pass.php"); ?>
				<!--Add post-->
				<?php require_once(VIEW."admin/add-post.php");?>

				<?php if($_SESSION['user']->phanquyen == 0):?>
				<!--Add category -->
				<?php require_once(VIEW."admin/add-category.php");?>
				<!--Add user-->
				<?php require_once(VIEW."admin/add-user.php"); ?>
				<?php endif;?>
				<!--/Modals-->
			</div><!--  end row -->
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<div class="panel panel-default	">
						<div class="panel-heading">Bảng điều khiển</div>
						<ul class="list-group panel-body">
							<li class="list-group-item"><a href="index.php?c=admin&a=listPost"><span class="glyphicon glyphicon-list-alt"></span> Bài viết</a></li>
							<li class="list-group-item"><a href="index.php?c=admin&a=listCategory"><span class="glyphicon glyphicon-list"></span> Danh mục</a></li>
							<?php if($_SESSION['user']->phanquyen == 0):?>
							<li class="list-group-item"><a href="index.php?c=admin&a=listUser"><span class="glyphicon glyphicon-user"></span> Tải khoản</a></li>
							<?php endif;?>
						</ul>
					</div>
				</div>

