<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the id=main div and all content after
 * @package mundialfutebolderua
 */
?>
    
	</div><!-- #main -->
	</div><!-- #page -->
    <footer id="footer">
        <div class="footer">
            <div class="infos-rodape">
                <div class="content-footer">
                    <?php if(kirki_get_option('endereco')) echo kirki_get_option('endereco');?>
                </div><!-- .content-footer -->
                <div class="content-footer">
                    <?php if(kirki_get_option('telefone')) echo kirki_get_option('telefone');?>
                </div><!-- .content-footer -->
            </div><!-- .infos-rodape  -->
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

                <a href="http://www.brasa.art.br" class="dev">
                    <span>Desenvolvido por</span>
                    <span class="brasa"></span>
                </a>

            </div><!-- #redes -->
        </div><!-- .footer -->
    </footer><!-- #footer -->
    <?php wp_footer(); ?>
</body>
</html>
