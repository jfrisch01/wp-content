	<footer class="clearfix" id="colophon" role="contentinfo">

		<?php dynamic_sidebar( 'Footer Area' ); //registered in functions.php ?>


		<div class="top-bar">

		<?php wp_nav_menu( array(
				'theme_location' => 'main_nav', //registered in functions.php
				'container'	=> 'nav',			//wrap the list with a nav tag
				'menu_class'	=> 'nav',			//ul class="nav"
				'fallback_cb'	=> '',			//no fallback if no menu assigned

				) ); ?>
			</div><!-- end .top-bar -->	




		
	</footer><!-- end footer -->
</div><!-- closes #wrapper opened in header.php -->
<?php 
//must call wp_footer right before </body> for JS and plugins to run!
wp_footer();  ?>
</body>
</html>