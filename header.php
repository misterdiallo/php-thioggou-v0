<!DOCTYPE html>
<php>
<head>
    <title> ThioGGou | <?php echo $title; ?> </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
		<meta property="og:title" content="Vide" />
        <meta name="keywords" content=".....................................
        ....................................................................
        ................................................................... " />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- //js -->
            <link href="css/style.css" rel='stylesheet' type='text/css' />
	    <script src="js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('php,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:400,500,600,900|Simonetta:400,400i,900,900i" rel="stylesheet">
	<!--- start-rate -->
	<script src="js/jstarbox.js"></script>
		<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
			<script type="text/javascript">
				jQuery(function() {
				jQuery('.starbox').each(function() {
					var starbox = jQuery(this);
						starbox.starbox({
						average: starbox.attr('data-start-value'),
						changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
						ghosting: starbox.hasClass('ghosting'),
						autoUpdateAverage: starbox.hasClass('autoupdate'),
						buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
						stars: starbox.attr('data-star-count') || 5
						}).bind('starbox-value-changed', function(event, value) {
						if(starbox.hasClass('random')) {
						var val = Math.random();
						starbox.next().text(' '+val);
						return val;
						} 
					})
				});
			});
	</script>
	<!---//End-rate -->
</head>
<body>
	<div class="header">
		<div class="container">
            <div class="logo"> 
				<h1 style=""> 
				    <a href="index.php">  ThioGGou  <span>  Votre Meilleur choix en terme d'achat  </span>  </a> 
				</h1> 
			</div> 
			<div class="nav-top"> 
				<nav class="navbar navbar-default"> 
				    <div class="navbar-header nav_2"> 
					    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs"> 
						    <span class="sr-only"> Toggle navigation </span> 
							<span class="icon-bar">  </span> 
							<span class="icon-bar">  </span> 
							<span class="icon-bar">  </span> 
						</button> 
					</div>  
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs"> 
					    <ul class="nav navbar-nav "> 
                            <li <?php if($title=="Accueil"){echo 'class="active"';} ?> >  <a href="index.php"  class="hyper ">  <span> Accueil </span>  </a>  </li> 	
                            <li <?php if($title=="Aux Alentours"){echo 'class="active"';} ?> >  <a href="alentour.php" class="hyper"  >  <span> Aux Alentours <b>  </b>  </span>  </a>  </li> 
                            <?php 
                                if(isset($_SESSION ['login']) & isset($_SESSION ['search']) & isset($_SESSION ['token']) )
                                {
                            ?> 
                                <li <?php if($title=="Boutique"){echo 'class="active"';} ?> >  <a href="boutique" class="hyper"  >  <span>  Ma Boutique  </span>  </a>  </li> 
                            <?php
                                }
                            ?>
                            <li <?php if($title=="ThioGGou"){echo 'class="active"';} ?> >  <a href="thioggou.php" class="hyper">   <span> Thioggou </span>  </a>  </li> 
                            <li <?php if($title=="Contact"){echo 'class="active"';} ?> >  <a href="contact.php" class="hyper">  <span> Contact </span>  </a>  </li> 
						</ul> 
					</div>  
				</nav> 
				<div class="head-t" > 
				    <ul class="card" style="margin-top:10px"> 							
					    <li>  <a href="recherche.php" >  <i class="fa fa-search"  aria-hidden="true">  </i> Rechercher </a>  </li> 
						<?php 
							if(isset($_SESSION ['login']) & isset($_SESSION ['search']) & isset($_SESSION ['token']))
							{
						?> 
                                <li>   <a href="profile.php">  <i class="fa fa-user"  aria-hidden="true">  </i> Mon profile </a> </li>
						            <li> <a href='logout.php?<?php echo sha1($_SESSION['token'])."=".$_SESSION['token']; ?>'><i class="fa fa-arrow-right" aria-hidden="true"></i> Se deconnecter</a></li>
        				<?php
							}
						 	else{
						?>
								<li><a href="login.php" ><i class="fa fa-user"  aria-hidden="true" data-toggle="modal" data-target="#login-modal"></i>Se Connecter</a></li>
						        <li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>S'inscrire</a></li>
		 				<?php
				 			}
						?>
					</ul> 	
				</div> 
				<div class="clearfix">  </div> 
			</div> 
		</div>			
	</div>