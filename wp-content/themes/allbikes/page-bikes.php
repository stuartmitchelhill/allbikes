<?php 
/*
   Template Name: Bikes
 */
	get_header();
?>	

<div class="container-fluid">
	<div class="wrapper-wide">
		<div class="row">
			<div class="col-md-10 col-md-offset-2">
				<h1 class="page-title">Bikes</h1>
			</div>
		</div>
		<div class="sidebar-wrapper">
			<div class="filter">
				<h5 class="sidebar-heading">Categories</h5>
				<div class="underline"></div>
				<ul class="sidebar">
					<li><a class="active" id="show-all">All</a></li> 
					<hr class="list-break">
					<li><a class="filter-link" target="New">New</a></li>
					<li><a class="filter-link" target="Used">Used</a></li>
					<hr class="list-break">
					<li><a  class="filter-link" target="LAMS">Learner Approved</a></li>
					<li><a  class="filter-link" target="750">up to 750cc</a></li>
					<li><a  class="filter-link" target="over-750">Over 750cc</a></li>
					<hr class="list-break">
					<li><a class="filter-link" target="Honda">Honda</a></li>
					<li><a class="filter-link" target="Yamaha">Yamaha</a></li>
					<li><a class="filter-link" target="Kawasaki">Kawasaki</a></li>
					<li><a class="filter-link" target="Suzuki">Suzuki</a></li>
					<li><a class="filter-link" target="Ducati">Ducati</a></li>
					<li><a class="filter-link" target="Non-japanese">Non-Japanese</a></li>
					<li><a class="filter-link" target="Bmw">BMW</a></li>
					<li><a class="filter-link" target="Hunter">Hunter Cruisers</a></li>
					<li><a class="filter-link" target="Scooter">Scooters</a></li>
					<li><a class="filter-link" target="Trail">Trail Bikes</a></li>
				</ul> 
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-2 bike-col">
				<div class="products">	
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args= array(
						'category_name' => 'bikes',
						'posts_per_page' => 9,
						'paged' => $paged
					);
					query_posts($args);
					while (have_posts()) : the_post();
					$terms_as_text = strip_tags( get_the_term_list( $wp_query->post->ID, 'post_tag', '', ' ', '' ) );
				?>
					<div class="product col-md-4 <?php echo $terms_as_text; ?>">
						<a href="<?php the_permalink(); ?>" class="product-link">
							<div class="overlay"><span>View Bike</span></div>
							<?php the_post_thumbnail('medium') ?>
							<h4 class="product-title"><?php the_title(); ?></h4>
							<p class="product-info"><?php echo get_post_meta($post->ID, 'Kilometers', true); ?> kms | $<?php echo get_post_meta($post->ID, 'Price', true);?></p>
						</a>
					</div>
				<?php
					endwhile;
				?>
				<?php allbikes_paging_nav(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- sidebar -->
<!--
	<li><i class="ab-check-empty"></i> Learner Approved</li>
				<li><i class="ab-check-empty"></i> up to 750cc</li>
				<li><i class="ab-check-empty"></i> Over 750cc</li>
				<hr class="list-break">
				<li><i class="ab-check-empty"></i> Honda</li>
				<li><i class="ab-check-empty"></i> Yamaha</li>
				<li><i class="ab-check-empty"></i> Kawasaki</li>
				<li><i class="ab-check-empty"></i> Suzuki</li>
				<li><i class="ab-check-empty"></i> Ducatti</li>
				<li><i class="ab-check-empty"></i> Non-Japanese</li>
				<li><i class="ab-check-empty"></i> BMW</li>
-->
	

<?php 
	get_footer();
?>
