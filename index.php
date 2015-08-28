<?php get_header(); ?>
<!-- Hiho -->
		<!--Checks if the user is on the home page. If the user is on the home page the Isitope buttons will be looped outs.
			And if the user is not on the hopme page it will not apper.-->
		<?php if(is_home()){ ?>

			<!-- Loops out att categories used and excludes the "uncategorized" from the list -->
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
<!-- Display all images with classes (classes added from functions.php) -->
<div id="isotope">
	<?php
	$i = 0;
	 
	if(have_posts()){
		
		while(have_posts()){
				$price = get_post_meta( get_the_ID(), 'product_price', true);
			
				the_post(); 
				print_r($price); 
				?>
				
				

				 <a class="post-link" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
				 	
				 		<div id="product-wrapper" <?php post_class("index-item$i"); ?>>
							<p id="index-title"><?= the_title(); ?></p>
				 			<p id="index-price"><?php echo $price ?> kr</p>
							<?php the_post_thumbnail(); ?>
						</div>				
				</a>
		<?php
		$i++;

		}	
	}
	?>
	<!-- KOMMENTERA HÄR ERIK!!!!!!!!! -->
</div>
	<div id="items"></div>
	<div id="single-box"></div>
	<div id="overlay"></div>
		
<?php get_footer();  ?>