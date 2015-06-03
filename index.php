<?php get_header();

		if(have_posts()){
		
			
			while(have_posts()){ ?>
				<a href="<?= the_permalink(); ?>">
				<div class="product-wrapper">
					<?php
					the_post();
						the_title();
						if(has_post_thumbnail()){
							the_post_thumbnail();
						}
						?>
				</div>
				</a>
				<?php
			}
			
		}
		
get_footer();