<?php
/*
   Template Name: Home
*/

get_header();

?>
	<div class="container-fluid">
		<div class="slider">
			<ul class="bxslider">
  				<li><img src="https://placehold.it/1610x350" /></li>
  				<li><img src="https://placehold.it/1610x350" /></li>
  				<li><img src="https://placehold.it/1610x350" /></li>
  				<li><img src="https://placehold.it/1610x350" /></li>
			</ul>
		</div>
		<div class="mobile-banner">
			<img src="<?php bloginfo('template_directory'); ?>/img/placeholder.png">
		</div>
		<div class="wrapper-wide">
			<h1 class="page-title">Latest Bikes</h1>
			<div class="products">
				<?php 
					query_posts( array ( 'category_name' => 'bikes', 'posts_per_page' => 8 ));
			 		if ( have_posts() ) : 
					while ( have_posts() ) : the_post();
					$terms_as_text = strip_tags( get_the_term_list( $wp_query->post->ID, 'post_tag', '', ' ', '' ) );
					if ( in_category( 'Bikes' ) ) :
				?>
				<div class='product col-md-3 <?php echo $terms_as_text; ?>'>
					<a href="<?php the_permalink(); ?>" class="product-link">
						<div class="overlay"><span>View Bike</span></div>
						<?php the_post_thumbnail('medium') ?>
						<h4 class="product-title"><?php the_title(); ?></h4>
						<p class="product-info"><?php echo get_post_meta($post->ID, 'Kilometers', true); ?> kms | $<?php echo get_post_meta($post->ID, 'Price', true);?></p>
					</a>
				</div>
				<?php 
					endif;
					endwhile;
					endif;
				?>
			</div>
		</div>
	</div>

<?php
		

get_footer();	

?>