<?php
/**
 * Reveal Modal template file
 */ 
?>
<?php if ( have_posts() ) : ?>

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	    <div class="modal-img-container">
	    	<?php the_post_thumbnail('medium');?>
	    </div><!-- .img-container -->
		<div class="modal-content">
			<h1><?php the_title(); ?></h1>
			<?php the_content();?>
		</div><!-- .content -->
<?php endwhile; ?>
<?php endif; ?>