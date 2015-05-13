<?php
/**
 * Reveal Modal template file
 */ 
?>
<?php if ( have_posts() ) : ?>

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	    <?php the_post_thumbnail('medium', array('class'=>'modal-thumbnail'));?>
		<h1><?php the_title(); ?></h1>
		<div class="line"></div><!-- .line -->
		<div class="content">
			<?php the_content();?>
		</div><!-- .content -->
<?php endwhile; ?>
<?php endif; ?>