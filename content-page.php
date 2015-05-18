<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package mundialfutebolderua
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header-page">
		<div class="titulo-page"><h1><?php the_title(); ?></h1></div>
	</header><!-- .entry-header-page -->

	<div class="entry-content">
		<div class="the-content">
			<?php the_content(); ?>
			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'copa' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .the-content -->
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'copa' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->