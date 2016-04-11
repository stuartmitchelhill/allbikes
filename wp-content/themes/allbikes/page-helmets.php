<?php 
/*
   Template Name: Helmets
 */
	get_header();
?>	

<div class="container-fluid">
	<div class="wrapper-wide">
		<h1 class="page-title">Helmets</h1>
		<div class="filter">
			<h5 class="sidebar-heading">Categories</h5>
			<div class="underline"></div>
			<ul class="sidebar">
				<li><a href="#">Full Face</a></li>
				<li><a href="#">Half Face</a></li>
				<li><a href="#">Open Face</a></li>
				<hr class="list-break">
				<li><a href="#">Bell</a></li>
				<li><a href="#">Shark</a></li>
				<li><a href="#">Shoei</a></li>
				<li><a href="#">AVG</a></li>
				<li><a href="#">Schubert</a></li>
				<li><a href="#">Icon</a></li>
				<li><a href="#">Kabuto</a></li>
			</ul> 
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-2">
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args= array(
						'category_name' => 'helmets',
						'posts_per_page' => 9,
						'paged' => $paged
					);
					query_posts($args);
					while (have_posts()) : the_post();
					$terms_as_text = strip_tags( get_the_term_list( $wp_query->post->ID, 'post_tag', '', ' ', '' ) );
				?>
				<div class="products">
					<div class="product col-md-4 <?php echo $terms_as_text; ?>">
						<a href="<?php the_permalink(); ?>" class="product-link">
							<div class="overlay"><span>View Helmet</span></div>
							<?php the_post_thumbnail('medium') ?>
							<h4 class="product-title"><?php the_title(); ?></h4>
							<p class="product-info">$<?php echo get_post_meta($post->ID, 'Price', true);?></p>
						</a>
					</div>
				</div>
				<?php
					endwhile;
				?>
				<?php allbikes_paging_nav(); ?>
			</div>
		</div>
	</div>
</div>

	

<?php 
	get_footer();
?>
