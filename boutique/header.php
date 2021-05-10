<?php
	if(isset($_SESSION ['loginbou']) & isset($_SESSION ['idbou']) )
	{

	}else{
		header("Location: login.php") ;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Boutique | ThioGGou</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
				page. However, you can choose any other skin. Make sure you
				apply the skin class to the body tag so the changes take effect. -->
	<link rel="stylesheet" href="dist/css/skins/skin-red.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet"
				href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head> 
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

	<!-- Main Header -->
	<header class="main-header">

		<!-- Logo -->
		<a href="index.php" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>T</b>gg</span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>Thio</b>GGou</span>
		</a>

		<!-- Header Navbar -->
		<nav class="navbar navbar-static-top" role="navigation">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>
			<!-- Navbar Right Menu -->
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- Tasks Menu -->
					<li class="dropdown tasks-menu">
						<!-- Menu Toggle Button -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-flag-o"></i>
							<span class="label label-danger"> <!-- le Nbre ici --></span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">  <!-- le titre ici --></li>
							
							<li>
								<ul class="menu"><!-- ici le contenu de la vue
									<li>
										<a href="#">
											
											<h3>
												Design some buttons
												<small class="pull-right">20%</small>
											</h3>
											<!-- The progress bar 
											<div class="progress xs">
												<!-- Change the css width attribute to simulate progress 
												<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
														 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
													<span class="sr-only">20% Complete</span>
												</div>
											</div>
										</a>
									</li>
									<!-- end task item -->
								</ul>	
							</li>
							<li class="footer">
								<a href="#">Tout est Ok</a>
							</li>
						</ul>
					</li>
					<!-- Notifications Menu -->
					<li class="dropdown notifications-menu">
						<!-- Menu toggle button -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i>
							<span class="label label-warning"> <!-- le Nbre ici --></span>
						</a>
						<ul class="dropdown-menu">
							<li class="header"> <!-- le titre ici --></li>
							<li>
								
								<ul class="menu"><!-- Inner Menu: contains the notifications 
									<li><!-- start notification 
										<a href="#">
											<i class="fa fa-users text-aqua"></i> bref detail notification
										</a>
									</li>
									<!-- end notification -->
								</ul>
							</li>
							<li class="footer"><a href="#">Aucune notifiaction</a></li>
						</ul>
					</li>
					<!-- User Account Menu -->
					<li class="dropdown user user-menu">
						<!-- Menu Toggle Button -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<!-- The user image in the navbar-->
							<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
							<!-- hidden-xs hides the username on small devices so only the image appears. -->
							<span class="hidden-xs">Nom Boutique</span>
						</a>
						<ul class="dropdown-menu">
							<!-- The user image in the menu -->
							<li class="user-header">
								<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

								<p>
									Nom de la boutique
									<small>Adresse de la boutique</small>
								</p>
							</li>
							<!-- Menu Body -->
							<li class="user-body">
								<div class="row">
									<div class="col-xs-4 text-center">
										<a href="#">85 Produits</a>
									</div>
									<div class="col-xs-4 text-center">
										<a href="#">12 en promotion</a>
									</div>
									<div class="col-xs-4 text-center">
										<a href="#">200 Clients</a>
									</div>
								</div>
								<!-- /.row -->
							</li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-left">
									<a href="#" class="btn btn-default btn-flat">Modifier</a>
								</div>
								<div class="pull-right">
									<a href="#" class="btn btn-default btn-flat">ThioGGou</a>
								</div>
							</li>
						</ul>
					</li>
					<!-- Control Sidebar Toggle Button -->
					<li>
						<a href="#">Retourner sur ThioGGou <i class="fa fa-sign-out"></i></a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">

		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">

			<!-- Sidebar user panel (optional) -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p>Nom de la boutique</p>
					<!-- Status -->
					<a href="#"><i class="fa fa-circle text-success"></i> Active</a>
				</div>
			</div>

			<!-- Sidebar Menu -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">Menu</li>
				<!-- Optionally, you can add icons to the links -->
				<li class="active"><a href="index.php"><i class="fa fa-home"></i> <span>Ma Boutique</span></a></li>
				<li><a href="produit.php"><i class="fa fa-cubes"></i> <span>Mes Produits</span></a></li>
				<li><a href="client.php"><i class="fa fa-users"></i> <span>Mes Clients</span></a></li>
				<li><a href="stat.php"><i class="fa fa-bar-chart"></i> <span>Statistiques</span></a></li>
				<li><a href="configuration.php"><i class="fa fa-cog"></i> <span>Parametres</span></a></li>
				<li><a href="#"><i class="fa fa-sign-out"></i> <span>Retourner sur ThioGGou</span></a></li>
			</ul>
			<!-- /.sidebar-menu -->
		</section>
		<!-- /.sidebar -->
	</aside>

