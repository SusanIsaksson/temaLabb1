<?php
get_header();
?>

        <main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Blogg</h1>
							<article>

                            <?php 
								while(have_posts()) {  //starta loopen 
									the_post();
							?>
							
								<img src="<?php the_post_thumbnail_url(); ?> "alt="en bild"> 
								<h2 class="title">
								<a href="<?php the_permalink(); ?>"></a>
                                    <?php
                                    the_title(); 
                                    ?>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"><?php the_date(); ?></i> 
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author(); ?> </a>
									</li>
									<li>
										<i class="fa fa-tag"><?php the_category('<a>, ');  ?></i> 
										
									</li>
								</ul>
								<p> <?php
                                the_excerpt(); //tar in innehållet i inlägget men visar bara en del
                                ?></p>
							</article>
							<?php
                            } //avsluta loopen
                        	?>
											
							<nav class="navigation pagination">
								
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>

                        
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											
											<?php //hämtar insök-efter-ruta
											get_search_form();
											
											?>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
									<?php //hämtar info från widget "meny på undersida"
									dynamic_sidebar('menysidor');
								?>
									
										<!-- <h2>Sidor</h2>
										<ul>
											<li class="page_item current_page_item">
												<a href="">Blogg</a>
											</li>
											<li class="page_item">
												<a href="">Exempelsida</a>
											</li>
											<li class="page_item">
												<a href="">Kontakt</a>
											</li>
											<li class="page_item page_item_has_children">
												<a href="">Om mig</a>
												<ul class="children">
													<li class="page_item">
														<a href="">Intressen</a>
													</li>
													<li class="page_item page_item_has_children">
														<a href="">Portfolio</a>
														<ul class="children">
															<li class="page_item">
																<a href="">Projekt 1</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="page_item">
												<a href="">Startsida</a>
											</li>
										</ul>
									</li> -->
									<li>
										<?php //hämtar info från widget "meny på undersida"
										dynamic_sidebar('menysidor');
										?>
										<!-- <h2>Arkiv</h2>
										<ul>
											<li>
												<a href="arkiv.html">oktober 2016</a>
											</li>
										</ul> -->
									</li>
									<li class="categories">
										<h2>Kategorier</h2>
										<ul>
											<li class="cat-item">
												<a href="">Natur</a> (1)
											</li>
											<li class="cat-item">
												<a href="">Okategoriserade</a> (3)
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>









<?php
get_footer();
?>