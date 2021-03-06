<?php get_header(); //include header.php ?>

<main id="content">
	<?php //THE LOOP
		if( have_posts() ): ?>
		<?php while( have_posts() ): the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
		
			
				
			

			<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'thumb clearfix')); //show the featured image ?>

			<div class="entry-content">
				<?php 
				if ( is_singular() ):
					the_content();
				else:
					the_excerpt();
				endif;
				?>
			</div>
			
		</article><!-- end post -->

		<?php endwhile; ?>
		
		<div class="pagination">
		<?php
		//check to see if pagenavi plugin is running
		if(function_exists('wp_pagenavi') && !wp_is_mobile()):
			wp_pagenavi();
		else:
		previous_posts_link('&larr; Newer Posts ¯\_(ツ)_/¯');
		next_posts_link('Older Posts &rarr;');
		endif;
		?>
		</div>

	<?php else: ?>

	<h2>No posts here</h2>
	<p>This won't be here tomorrow</p>

	<?php endif;  //end THE LOOP ?>

</main><!-- end #content -->

<?php get_sidebar(); //include sidebar.php ?>
<?php get_footer(); //include footer.php ?>