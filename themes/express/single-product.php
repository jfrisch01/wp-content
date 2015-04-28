<?php 
/**
 * The template that is used on individual blog posts abd attachments
 * @since 0.1
 * @author Jonathan
 */
get_header()
?>

<main id="content">
	<?php //THE LOOP
		if( have_posts() ): ?>
		<?php while( have_posts() ): the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

			<?php the_post_thumbnail( 'medium', array( 'class' => 'product-image') ); 
			?>

		<div class="single-content">

			<h2 class="entry-title2"> 
				
					<?php the_title(); ?> 
				
			</h2>

			<div class="entry-content">

				<?php the_meta(); /* list of ALL custom fields */ ?>

				<?php the_content(); ?>
			</div>
		</div>
		</article>

		<?php endwhile; ?>

		<div class="pagination">
			<?php
			previous_post_link( '%link', '&larr; Previous');
			next_post_link( '%link', ' Next &rarr;' );
			?>

		</div>

	<?php else: ?>

	<h2>Sorry, no posts found</h2>
	<p>Try using the search bar instead</p>

	<?php endif;  //end THE LOOP ?>

</main><!-- end #content -->

<?php get_sidebar('shop'); //include sidebar.php ?>
<?php get_footer(); //include footer.php ?>