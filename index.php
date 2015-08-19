<?php get_header(); ?>
	<h1>Isotope - filtering &amp; sorting</h1>
	<h2>Filter</h2>
	<div id="filters" class="button-group">  
		<button class="button is-checked" data-filter="*">show all</button>
		<button class="button" data-filter=".byxor">Byxor</button>
		<button class="button" data-filter=".accessoar">Accessoarer</button>
		<button class="button" data-filter=".tröja">Tröjor</button>
		<button class="button" data-filter=".Dekoration">Dekoration</button>
		<button class="button" data-filter=".Klänning">Klänningar</button>
		<button class="button" data-filter=".kjol">Kjolar</button>
	</div>

	<?php
	if(have_posts()){
		while(have_posts()){
				the_post(); ?>
				 <a class="post-link" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
				 	<div id="product-wrapper" <?php post_class( 'category-name' ); ?>>
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