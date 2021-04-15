<?php 
get_header();
?>
    	<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12">

                            <?php   
							    while(have_posts()) {  //starta loopen 
									the_post();
						    ?>
								<h1><?php
									the_title();
								?></h1>
								<p><?php
									the_content();
								?></p>
							
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
</body>
</html>