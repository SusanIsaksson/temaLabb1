<?php 
get_header();
?>


		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-2">
                        <?php 
							while (have_posts()) { //startar loopen
								the_post();
							?>

							<div class="text">
								<h1><?php the_title(); ?></h1>
								<?php the_content(); ?>
								<?php dynamic_sidebar('widget'); ?>
							</div>
								
						</div>
						<?php
						} //avslutar loopen
						?>	
					</div>
				</div>
			</section>
		</main>

		

	
<?php 
get_footer();
?>