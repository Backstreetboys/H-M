<div id="main-wrapper">
	
		<?php
		if(have_posts()){
		
			
			while(have_posts()){ ?>
				<div id="product-wrapper">
					<?php
					the_post();
						the_title();
						if(has_post_thumbnail()){
							the_post_thumbnail();
						}
						?>
				</div>
				<?php
			}
			
		}
	?>
	
</div>