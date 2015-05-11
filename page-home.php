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
    			<?php $content = qtranxf_use($q_config['language'], $sobre->post_content, true); ?>
    			<?php echo apply_filters( 'the_content', $content );?>
    	    </div><!-- .content -->
            <?php endif;?>
            <div class="links-right">
            	<div class="all">
            		<?php for($i = 1; $i <= 3; $i++): ?>
            	        <?php if($link = get_option('mo_link_url_'.$i)):?>
            	            <a href="<?php echo esc_url($link);?>">
            	        	    <?php $title = get_option('mo_link_title_'.$i);?>
            	        	    <?php echo qtranxf_use($q_config['language'], $title, true);?>
            	            </a>
            	        <?php endif;?>
                    <?php endfor;?>				
            	</div><!-- .all -->
            </div><!-- .links-right -->
    	</div><!-- .all -->
    </div>
<?php get_footer(); ?>
