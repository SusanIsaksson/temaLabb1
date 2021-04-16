<?php 
get_header();
?>
    	<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">

                            <?php   
							    while(have_posts()) {  //starta loopen 
									the_post(); 
						    ?>
								<h1><?php //hämtar titel
									the_title();
								?></h1>
								<p><?php //hämtar innehållet
									the_content();
								?></p>
							
						</div>
                        <div class="col-xs-12 col-sm-4 col-md-6">
                        <img src="<?php the_post_thumbnail_url(); //hämtar bild ?> "alt="en bild"> 
                        </div>
						
                        <?php
							} //avsluta loopen
						?>
					</div>
						
				</div>
			</section>
		</main>

		
<?php
get_footer();
?>
</body>
</html>