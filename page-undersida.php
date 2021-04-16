<?php 
get_header();
?>
    	<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">

                            <?php   
							    while(have_posts()) {  //starta loopen 
									the_post();
						    ?>
								<div class="text">
									<h1><?php
										the_title();
									?></h1>
									<p><?php
										the_content();
									?></p>
								</div>
						</div>
							<?php
							} //avsluta loopen
							?>
						
						<aside id="secondary" class="col-xs-12 col-md-3">
							<ul class="side-menu">
								<?php //hämtar info från widget "meny på undersida"
									dynamic_sidebar('menyundersida');
								?>
							</ul>
							
					</div>
				</div>
			</section>
		</main>

		
<?php
get_footer();
?>
</body>
</html>

