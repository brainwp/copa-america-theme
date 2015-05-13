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
    <h2 class="section-title">
        <?php _e('Entre em Contato','copa');?>
    </h2><!-- .section-title -->
    <section id="contato-home" class="sub-content about">
        <?php $contato = get_page_by_path('contato');?>
        <?php if(!empty($contato)): ?>
            <div class="contato-left home-form">
                <?php echo apply_filters('the_content',$contato->post_content);?>
            </div><!-- .contato-left -->
        <?php endif;?>
        <div class="contato-right">
            <h2 class="side-title">
                <?php _e('Outros Canais','copa');?>
            </h2><!-- .side-title -->
            <span class="post-title">
                <?php if(kirki_get_option('home_contato_title_1')) echo apply_filters('the_title',kirki_get_option('home_contato_title_1'));?>
            </span>
            <p>
                <?php if(kirki_get_option('home_contato_txt_1')) echo apply_filters('the_content',kirki_get_option('home_contato_txt_1'));?>
            </p>
            <?php if($link = kirki_get_option('home_contato_link_1') && $title = kirki_get_option('home_contato_link_title_1')):?>
                <a href="<?php echo kirki_get_option('home_contato_link_1');?>" class="btn-send">
                    <?php echo apply_filters('the_title',$title);?>
                </a>
            <?php endif;?>
            <div class="clear"></div><!-- .clear -->
            <span class="post-title">
                <?php if(kirki_get_option('home_contato_title_2')) echo apply_filters('the_title',kirki_get_option('home_contato_title_2'));?>
            </span>
            <p>
                <?php if(kirki_get_option('home_contato_txt_2')) echo apply_filters('the_content',kirki_get_option('home_contato_txt_2'));?>
            </p>
            <?php if($link = kirki_get_option('home_contato_link_2') && $title = kirki_get_option('home_contato_link_title_2')):?>
                <a href="<?php echo kirki_get_option('home_contato_link_2');?>" class="btn-send">
                    <?php echo apply_filters('the_title',$title);?>
                </a>
            <?php endif;?>
            <div class="clear"></div><!-- .clear -->
            <div id="redes">
                <?php if(kirki_get_option('twitter_url')): ?>
                    <a class="icon-twitter" href="<?php echo esc_url(kirki_get_option( 'twitter_url' )); ?>"></a>
                <?php endif;?>
                <?php if(kirki_get_option('facebook_url')): ?>
                    <a class="icon-facebook" href="<?php echo esc_url(kirki_get_option( 'facebook_url' )); ?>"></a>
                <?php endif;?>
                <?php if(kirki_get_option('instagram_url')): ?>
                    <a class="icon-instagram" href="<?php echo esc_url(kirki_get_option( 'instagram_url' )); ?>"></a>
                <?php endif;?>
                <?php if(kirki_get_option('email')): ?>
                    <a class="icon-mail" href="<?php echo esc_url(kirki_get_option( 'email' )); ?>"></a>
                <?php endif;?>
            </div><!-- #redes -->
        </div><!-- .contato-right -->
        <div class="clear"></div><!-- .clear -->
    </section><!-- #contato-home -->

    <div class="clear"></div><!-- .clear -->
<?php get_footer(); ?>
