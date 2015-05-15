<?php
/* Archive Team
* Template name: Archive Team
 */
get_header();
$args = array(
	'post_type' => 'sp_team',
	'posts_per_page' => -1
);
$query = new WP_Query($args);
?>
<div class="altura-header is-mini-header"></div>
	<div id="content-pages">
		<div id="content" class="page-content" role="main">
			<article>
				<header class="entry-header-page">
					<div class="titulo-page"><h1><?php the_title(); ?></h1></div>
				</header><!-- .entry-header-page -->
				<?php if($query->have_posts()):?>
				<?php while ( $query->have_posts() ): $query->the_post(); ?>

				    <?php get_template_part( 'content', 'team' ); ?>

			    <?php endwhile; // end of the loop. ?>
			    <?php wp_reset_postdata(); ?>
			    <?php endif;?>
			</article><!-- #post-## -->
		</div><!-- #content -->
	</div><!-- #content-pages -->
	<?php get_template_part('parts/contato-home');?>
<?php
get_footer();
