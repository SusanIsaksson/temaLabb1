
<?php 
get_header();
?>
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">

							<?php 
								while(have_posts()) {  //starta loopen 
									the_post();
							?>
								<img src="<?php the_post_thumbnail_url(); // hämtar in bild?> "alt="en bild"> 
								<div class="text">
									<h1><?php //hämtar titel
										the_title();
									?></h1>
									<p><?php //hämtar sidinnehåll
										the_content();
									?></p>
								</div>
							</div>
							<?php
							} //avsluta loopen
							?>
						</div>
					</div>
				</div>
			</section>
		</main>


	
<?php 
get_footer();
?>


