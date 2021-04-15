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
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<ul class="side-menu">
								<li>
									<a href="undersida.html">Undersida</a>
								</li>
								<li>
									<a href="undersida2.html">Undersida 2</a>
								</li>
								<li>
									<a href="undersida3.html">Undersida 3</a>
								</li>
								<li>
									<a href="undersida4.html">Undersida 4</a>
								</li>
							</ul>
						</aside>
					</div>
				</div>
			</section>
		</main>

		
<?php
get_footer();
?>
</body>
</html>

