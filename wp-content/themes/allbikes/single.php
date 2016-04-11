<?php
/* 
	Template Name: Page
*/
	get_header();
?>

<div class="container-fluid">
	<div class="wrapper-wide">
		<div class="row">
			<div class="col-md-12 item">
				<div class="gallery col-md-8">
					<?php if( have_rows('product_slider') ): ?>
 
	    				<ul class="bxslider">
	 
					    <?php while( have_rows('product_slider') ): the_row(); ?>
					 
					        <li><img src="<?php the_sub_field('image'); ?>"></li>
					        
					    <?php endwhile; ?>
					 
					    </ul>
					 
					<?php endif; ?>
				</div>
				<div class="item-info col-md-4">
					<h1 class="item-title"><?php the_title(); ?></h1>
					<?php if ( get_post_meta( $post->ID, 'Kilometers', true ) ) : ?><p class="product-info"><?php echo get_post_meta($post->ID, 'Kilometers', true); ?> kms |</p><?php endif; ?> <?php if ( get_post_meta( $post->ID, 'Price', true ) ) : ?><p class="product-info">$<?php echo get_post_meta($post->ID, 'Price', true);?></p><?php endif; ?>
					<hr>
					<ul class="item-info-list">
						<?php if ( get_post_meta( $post->ID, 'Condition', true ) ) : ?><span>Condition:</span><li><?php echo get_post_meta($post->ID, 'Condition', true); ?></li><?php endif; ?>
						<?php if ( get_post_meta( $post->ID, 'Year', true ) ) : ?><span>Year:</span><li><?php echo get_post_meta($post->ID, 'Year', true); ?></li><?php endif; ?>
						<?php if ( get_post_meta( $post->ID, 'Make', true ) ) : ?><span>Make:</span><li><?php echo get_post_meta($post->ID, 'Make', true); ?></li><?php endif; ?>
						<?php if ( get_post_meta( $post->ID, 'Model', true ) ) : ?><span>Model:</span><li> <?php echo get_post_meta($post->ID, 'Model', true); ?></li><?php endif; ?>
						<?php if ( get_post_meta( $post->ID, 'Displacement', true ) ) : ?><span>Displacement:</span><li><?php echo get_post_meta($post->ID, 'Displacement', true); ?></li><?php endif; ?>
						<?php if ( get_post_meta( $post->ID, 'Gear Box', true ) ) : ?><span>Gear Box:</span><li><?php echo get_post_meta($post->ID, 'Gear Box', true); ?></li><?php endif; ?>
						<?php if ( get_post_meta( $post->ID, 'Body Type', true ) ) : ?><span>Body Type:</span><li><?php echo get_post_meta($post->ID, 'Body Type', true); ?></li><?php endif; ?>
						<?php if ( get_post_meta( $post->ID, 'Kilometers', true ) ) : ?><span>Kilometers:</span><li><?php echo get_post_meta($post->ID, 'Kilometers', true); ?></li><?php endif; ?>
					</ul>
					<hr>
					<div class="item-buttons">
						<a href="javascript:history.back()" class="btn btn-secondary btn-large">Back</a>
						<a href="#" class="btn btn-custom btn-large">Enquire Now</a>
					</div>
				</div>
			</div>
	</div>
</div>

<?php
	get_footer();
?>