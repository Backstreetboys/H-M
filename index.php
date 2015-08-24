<?php get_header(); ?>
		<!--Checks if the user is on the home page. If the user is on the home page the Isitope buttons will be looped outs-->
		<?php if(is_home()){ ?>

			<div id="categories">
			<?php
			$cat = get_query_var('cat');

			foreach(get_categories('exclude=1') as $category)	{
				echo '<li id="item-' . $category->name.'"><a href="#">' . $category->name.'</a></li>';
			}
			?>
		</div>

		<?php
		}else{

		}
		?>
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