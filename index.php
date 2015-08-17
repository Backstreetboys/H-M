<?php get_header();
$_SESSION['cart_items'] = array(
	array(
		'item_id'   => 43,
		'item_name' => 'My Product Name'
	),
	array(
		'item_id'   => 22,
		'item_name' => 'My Second Product Name'
	)	
);
	if(have_posts()){
		while(have_posts()){ ?>
			
			
				<?php
				the_post(); ?>
				 <a class="post-link" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
				 	<div class="product-wrapper">

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