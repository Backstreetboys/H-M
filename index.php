<?php
if(have_posts()){
	while(have_posts()){
		the_post();

		the_title();
		if(has_post_thumbnail()){
			the_post_thumbnail();
		}

	}
}
?>