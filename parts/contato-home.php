<?php
/* template part contato */
?>
    <h2 class="section-title contato">
        <?php _e('Entre em Contato','copa');?>
    </h2><!-- .section-title -->
    <section id="contato-home" class="sub-content about">
        <div class="contato-container">
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
        </div><!-- .contato-container -->
    </section><!-- #contato-home -->
