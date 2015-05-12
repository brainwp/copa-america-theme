<?php
/* Content Noticias */
?>
<div class="noticias-container">
	<a class="all" href="<?php the_permalink();?>">
		<div class="permalink">
			<span>+</span>
		</div>
		<div class="img-container">
			<?php if(has_post_thumbnail()):?>
			    <?php the_post_thumbnail('medium');?>
		    <?php else:?>
		        <img src="<?php bloginfo('template_url');?>/images/thumbnail-default.jpg">
		    <?php endif;?>
		</div><!-- .img-container -->
		<div class="data">
			<h1 class="day">
				<?php echo get_the_time( 'd', get_the_ID() );?>
			</h1><!-- .day -->
			<h2 class="mes">
				<?php echo date_i18n( 'M', get_the_time( 'U', get_the_ID() ), false );?>
			</h2><!-- .mes -->
		</div><!-- .data -->
		<div class="noticias-content">
			<h1 class="post-title"><?php the_title();?></h1><!-- .post-title -->
			<div class="desc"><?php the_excerpt();?></div><!-- .desc -->
		</div><!-- .noticias-content -->
	</a><!-- .all -->
</div>