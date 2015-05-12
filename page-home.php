<?php
/** 
* Template Name: Inicial (Home)
*/

get_header(); ?>
 
<div id="slider">
	<?php echo do_shortcode('[brasa_slider name="Home"]'); ?>
</div><!-- #slider -->

	<!-- Sobre -->
	<?php
    	$sobre = "";
    	$sobre = get_page_by_path('sobre');
 	?>
	<div class="header-sub-content">
		<div class="titulo-header"><h2 class='destaque'><?php _e( 'Copa América de Futebol de Rua', 'copa' ); ?></h2></div>
	</div>
	
    <div class="sub-content about">
    	<div class="all">
    		<?php if(!empty($sobre)):?>
    		<div class="content">
    			<?php echo apply_filters( 'the_content', $sobre->post_content );?>
    	    </div><!-- .content -->
            <?php endif;?>
            <div class="links-right">
            	<div class="all">
            		<?php for($i = 1; $i <= 3; $i++): ?>
            	        <?php if($link = kirki_get_option('home_link_'.$i)):?>
            	            <a href="<?php echo esc_url($link);?>">
            	        	    <?php $title = kirki_get_option('home_link_title_'.$i);?>
            	        	    <?php echo apply_filters('the_title',$title);?>
            	            </a>
            	        <?php endif;?>
                    <?php endfor;?>				
            	</div><!-- .all -->
            </div><!-- .links-right -->
    	</div><!-- .all -->
    </div>

    <section id="noticias-home">
    	<h2 class="section-title">
    		<?php _e('Notícias','copa');?>
    	</h2><!-- .section-title -->
    	<div class="clear"></div><!-- .clear -->
			<?php
			// WP_Query arguments
			$args = array (
			'post_type' => array('post'),
			'page'      => 1,
			'posts_per_page' => get_option('posts_per_page')
			);
  			// The Query
			$query = new WP_Query( $args );
			?>
			<?php if ( $query->have_posts() ) : ?>
				<?php while ( $query->have_posts() ): $query->the_post(); ?>
				    <?php get_template_part('content','noticias');?>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
    </section><!-- #noticias-home -->
    <div class="clear"></div><!-- .clear -->
<?php get_footer(); ?>
