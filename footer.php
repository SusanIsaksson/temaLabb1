<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<?php //hämtar info från widget "omoss"
						dynamic_sidebar('omoss');
						?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1"> 
						<?php //hämtar info från widget "kontaktInfo"
						dynamic_sidebar('kontaktinfo');
						?> 
						
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<?php //hämtar info från widget "socialmedia"
						dynamic_sidebar('socialmedia');
						?>
						
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Grupp X, 2016</p>
					</div>
				</div>
			</div>
		</footer>
	<?php 
	wp_footer();
	?>
</body>
</html>