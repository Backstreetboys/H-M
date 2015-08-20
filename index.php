<?php get_header(); ?>
<div id="isotope">
	<?php
	if(have_posts()){
		while(have_posts()){ ?>
			
			
				<?php
				the_post(); ?>
				 <a class="post-link" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
				 	
				 		<div id="product-wrapper" <?php post_class();?>>
							<p><?= the_title(); ?></p>
							<?php the_post_thumbnail(); ?>
						</div>				
				</a>
		<?php
		}	
	}
	?>
</div>
	<div id="items"></div>
	<div id="single-box"></div>
	<div id="overlay"></div>
		
<?php get_footer();  ?>