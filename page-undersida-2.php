<?php 
get_header();
?>
    	<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9 col-md-push-3">

                            <?php   
							    while(have_posts()) {  //starta loopen 
									the_post();
						    ?>
								<div class="text">
									<h1><?php //hämtar in titel
										the_title();
									?></h1>
									<p><?php //hämtar in innehållet
										the_content();
									?></p>
								</div>
							</div>
							<aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
								<ul class="side-menu">
								<?php dynamic_sidebar('menyundersida2'); //anger placering av meny ?> 
							</aside>
							<?php
							} //avsluta loopen
							?>
						
				</div>
			</section>
		</main>

		
<?php
get_footer();
?>
</body>
</html>