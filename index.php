<?php get_header(); ?>
	<?php
	if(have_posts()){
		while(have_posts()){
				the_post(); ?>
				 <a class="post-link" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
				 	<div id="product-wrapper" <?php post_class( 'category-name' );?>>
					<p><?= the_title(); ?></p>
					<?php the_post_thumbnail(); ?>
					</div>				
				</a>
		<?php
		}	
	} 
	?>
	<div id="items"></div>
	<div id="single-box"></div>
	<div id="overlay"></div>
		
<?php get_footer();  ?>