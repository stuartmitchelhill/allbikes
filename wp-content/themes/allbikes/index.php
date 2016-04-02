<?php
/*
   Template Name: Home
*/

get_header();

?>
	<div class="container-fluid">
		<div class="slider"></div>
		<div class="wrapper-wide">
			<h1 class="page-title">Recent Bikes</h1>
			<?php if ( have_posts() ) : 
					while ( have_posts() ) : the_post();
					if ( in_category( 'Bikes' ) ) :
			?>
			<div class="products">
				<div class="product col-md-3">
					<a href="<?php the_permalink(); ?>" class="product-link">
						<?php the_post_thumbnail('medium') ?>
						<h4 class="product-title"><?php the_title(); ?></h4>
						<p class="product-info"><?php echo get_post_meta($post->ID, 'Kilometers', true); ?> KM's | $<?php echo get_post_meta($post->ID, 'Price', true);?></p>
					</a>
				</div>
			</div>
			<?php endif;
				endwhile;
				endif;
			?>
		</div>
	</div>

<?php
		

get_footer();	

?>