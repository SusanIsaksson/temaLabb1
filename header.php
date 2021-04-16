<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
	
<?php 
wp_head();
?>
</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
                
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="index.php">
						<?php //hämtar in texten Labb 1
						dynamic_sidebar('logo');
						?>
						</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
					<?php //Sök rutan i headern
						get_search_form();
					?>
					</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
							<?php //hämtar in texten Labb 1
							dynamic_sidebar('logo');
							?>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<?php //Sök rutan i headern
						get_search_form();
					?>
					
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="menu">
							<li class="current-menu-item">

                            <?php //meny-listen i header
                            wp_nav_menu(
                                [ 
                                    'container' => 'nav'
                                ]
                            );
                            ?>
                      
						</ul>
					</div>
				</div>
			</div>
		</nav>

		