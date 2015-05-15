<?php
/* content for archive team */
?>
<div class="times-container">
	<a href="<?php the_permalink();?>" class="all">
		<div class="img-container">
			<?php the_post_thumbnail('medium');?>
		</div><!-- .img-container -->
		<h4 class="post-title"><?php the_title();?></h4><!-- .post-title -->
	</a>
</div><!-- .times-container -->