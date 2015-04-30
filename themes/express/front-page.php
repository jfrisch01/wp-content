<?php get_header(); //include header.php ?>

<div class="wrapper">
<main id="content">
	<?php //THE LOOP
		if( have_posts() ): ?>
		<?php while( have_posts() ): the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
			
		<?php 
		//run our rad slider plugin if it exists
		if(function_exists('rad_slider')):
			rad_slider();
		else:
			//show the featured image
			the_post_thumbnail( 'big-banner' );  
		endif;
		?>
			<h2 class="home-quote"> 
				
			</h2>

			<div class="entry-content-home">
				<?php the_content();	?>
				<p>With many styles and designs to choose from, Express Wicker is a leading brand in high quality outdoor wicker patio sets without the high price tag. Contact us to learn how we can supply your store and showroom with any of our popular patio sets.</p>
			</div>
			
		</article><!-- end post -->

		<?php endwhile; ?>
	<?php else: ?>

	<h2>Sorry, no posts found</h2>
	<p>Try using the search bar instead</p>

	<?php endif;  //end THE LOOP ?>






</main><!-- end #content -->
<div class="push"></div>
</div>

<?php get_sidebar('home'); //include sidebar-home.php ?>
<?php get_footer(); //include footer.php ?>