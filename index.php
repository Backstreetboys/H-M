<?php get_header();

		if(have_posts()){
		
			
			while(have_posts()){ ?>
				
				<div class="product-wrapper">
					<?php
					the_post(); ?>

						<p><?= the_title(); ?></p>

						<?php
						if(has_post_thumbnail()){
							the_post_thumbnail();
						}
						?>
				</div>

				<?php
			}
			
		} ?>

		<div id="single-box"></div>
		<?php
		
get_footer(); 
?>