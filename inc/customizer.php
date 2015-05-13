<?php
/**
 * Mundial Futebol de Rua Theme Customizer
 *
 * @package mundialfutebolderua
 */
include_once get_template_directory() . '/inc/kirki/kirki.php';
/**
 * Configuration sample for the Kirki Customizer
 */
function brasa_kirki_config() {

    /**
     * If you need to include Kirki in your theme,
     * then you may want to consider adding the translations here
     * using your textdomain.
     * 
     * If you're using Kirki as a plugin then you can remove these.
     */

    $strings = array(
        'background-color' => __( 'Cor do background', 'copa' ),
        'background-image' => __( 'Imagem de background', 'copa' ),
        'no-repeat' => __( 'Não repetir', 'copa' ),
        'repeat-all' => __( 'Repetir X e Y', 'copa' ),
        'repeat-x' => __( 'Repetir Horizontal', 'copa' ),
        'repeat-y' => __( 'Repeat Vertically', 'copa' ),
        'inherit' => __( 'Inherit', 'copa' ),
        'background-repeat' => __( 'Repetição do background', 'copa' ),
        'cover' => __( 'Cobrir', 'copa' ),
        'contain' => __( 'Conter', 'copa' ),
        'background-size' => __( 'Tamanho do background', 'copa' ),
        'fixed' => __( 'Fixo', 'copa' ),
        'scroll' => __( 'Scroll', 'copa' ),
        'background-attachment' => __( 'Background Attachment', 'copa' ),
        'left-top' => __( 'Left Top', 'copa' ),
        'left-center' => __( 'Left Center', 'copa' ),
        'left-bottom' => __( 'Left Bottom', 'copa' ),
        'right-top' => __( 'Right Top', 'copa' ),
        'right-center' => __( 'Right Center', 'copa' ),
        'right-bottom' => __( 'Right Bottom', 'copa' ),
        'center-top' => __( 'Center Top', 'copa' ),
        'center-center' => __( 'Center Center', 'copa' ),
        'center-bottom' => __( 'Center Bottom', 'copa' ),
        'background-position' => __( 'Background Position', 'copa' ),
        'background-opacity' => __( 'Background Opacity', 'copa' ),
        'ON' => __( 'ON', 'copa' ),
        'OFF' => __( 'OFF', 'copa' ),
        'all' => __( 'All', 'copa' ),
        'cyrillic' => __( 'Cyrillic', 'copa' ),
        'cyrillic-ext' => __( 'Cyrillic Extended', 'copa' ),
        'devanagari' => __( 'Devanagari', 'copa' ),
        'greek' => __( 'Greek', 'copa' ),
        'greek-ext' => __( 'Greek Extended', 'copa' ),
        'khmer' => __( 'Khmer', 'copa' ),
        'latin' => __( 'Latin', 'copa' ),
        'latin-ext' => __( 'Latin Extended', 'copa' ),
        'vietnamese' => __( 'Vietnamese', 'copa' ),
        'serif' => _x( 'Serif', 'font style', 'copa' ),
        'sans-serif' => _x( 'Sans Serif', 'font style', 'copa' ),
        'monospace' => _x( 'Monospace', 'font style', 'copa' ),
    );

    $args = array(
        'logo_image'   => get_template_directory_uri() . '/images/logo-copa-america-de-futebol-de-rua.png',
        'description'  => __( 'Tema Brasa para a Copa América de Futebol de Rua', 'copa' ),
        'color_accent' => '#FBEB34',
        'color_back'   => '#FFF',
        'textdomain'   => 'kirki',
        'i18n'         => $strings,
        'url_path'     => get_template_directory_uri() . '/inc/kirki'
    );

    return $args;

}
add_filter( 'kirki/config', 'brasa_kirki_config' );

/**
 * Create the customizer panels and sections
 */
function brasa_kirki_add_panel( $wp_customize ) {

    /**
     * Add sections
     */

    // This section will be inside the "typography" panel
    $wp_customize->add_section( 'social', array(
        'title'       => __( 'Redes Sociais', 'copa' ),
        'priority'    => 10,
    ) );

    $wp_customize->add_section( 'contatos', array(
        'title'       => __( 'Rodapé', 'copa' ),
        'priority'    => 10,
    ) );
    $wp_customize->add_panel( 'home', array(
        'priority'    => 10,
        'title'       => __( 'Home', 'textdomain' ),
    ) );
    $wp_customize->add_section( 'home_links', array(
        'title'       => __( 'Links rápidos', 'copa' ),
        'priority'    => 10,
        'panel'       => 'home',
    ) );
    $wp_customize->add_section( 'home_contato', array(
        'title'       => __( 'Seção Entre em Contato', 'copa' ),
        'priority'    => 10,
        'panel'       => 'home',
    ) );

}
add_action( 'customize_register', 'brasa_kirki_add_panel' );
/**
 * Create the setting
 */
function brasa_kirki_fields( $fields ) {

    $fields[] = array(
        'type'     => 'url',
        'setting'  => 'twitter_url',
        'label'    => __( 'Twitter URL', 'copa' ),
        'section'  => 'social',
        'default'  => '',
        'priority' => 1,
    );
    $fields[] = array(
        'type'     => 'url',
        'setting'  => 'facebook_url',
        'label'    => __( 'Facebook URL', 'copa' ),
        'section'  => 'social',
        'default'  => '',
        'priority' => 1,
    );
    $fields[] = array(
        'type'     => 'url',
        'setting'  => 'instagram_url',
        'label'    => __( 'Instagram URL', 'copa' ),
        'section'  => 'social',
        'default'  => '',
        'priority' => 1,
    );
    $fields[] = array(
        'type'     => 'text',
        'setting'  => 'email',
        'label'    => __( 'Email', 'copa' ),
        'section'  => 'social',
        'default'  => '',
        'priority' => 1,
    );

    $fields[] = array(
        'type'     => 'textarea',
        'setting'  => 'endereco',
        'label'    => __( 'Endereço', 'copa' ),
        'section'  => 'contatos',
        'default'  => '',
        'priority' => 1,
    );
    $fields[] = array(
        'type'     => 'textarea',
        'setting'  => 'telefone',
        'label'    => __( 'Telefone', 'copa' ),
        'section'  => 'contatos',
        'default'  => '',
        'priority' => 1,
    );

    $fields[] = array(
        'type'     => 'url',
        'setting'  => 'home_link_1',
        'label'    => __( 'URL do primeiro link rápido da home', 'copa' ),
        'section'  => 'home_links',
        'priority' => 1,
    );
    $fields[] = array(
        'type'     => 'textarea',
        'setting'  => 'home_link_title_1',
        'label'    => __( 'Título do primeiro link rápido da home', 'copa' ),
        'section'  => 'home_links',
        'priority' => 1,
    );
    $fields[] = array(
        'type'     => 'url',
        'setting'  => 'home_link_2',
        'label'    => __( 'URL do segundo link rápido da home', 'copa' ),
        'section'  => 'home_links',
        'priority' => 1,
    );
    $fields[] = array(
        'type'     => 'textarea',
        'setting'  => 'home_link_title_2',
        'label'    => __( 'Título do segundo link rápido da home', 'copa' ),
        'section'  => 'home_links',
        'priority' => 1,
    );
    $fields[] = array(
        'type'     => 'url',
        'setting'  => 'home_link_3',
        'label'    => __( 'URL do terceiro link rápido da home', 'copa' ),
        'section'  => 'home_links',
        'priority' => 1,
    );
    $fields[] = array(
        'type'     => 'textarea',
        'setting'  => 'home_link_title_3',
        'label'    => __( 'Título do terceiro link rápido da home', 'copa' ),
        'section'  => 'home_links',
        'priority' => 1,
    );

    $fields[] = array(
        'type'     => 'textarea',
        'setting'  => 'home_contato_title_1',
        'label'    => __( 'Título do primeiro link', 'copa' ),
        'section'  => 'home_contato',
        'priority' => 1,
    );
    $fields[] = array(
        'type'     => 'textarea',
        'setting'  => 'home_contato_txt_1',
        'label'    => __( 'Texto do primeiro link', 'copa' ),
        'section'  => 'home_contato',
        'priority' => 2,
    );
    $fields[] = array(
        'type'     => 'textarea',
        'setting'  => 'home_contato_link_title_1',
        'label'    => __( 'Título no botão do primeiro link', 'copa' ),
        'section'  => 'home_contato',
        'priority' => 3,
    );
    $fields[] = array(
        'type'     => 'textarea',
        'setting'  => 'home_contato_link_1',
        'label'    => __( 'URL do primeiro link', 'copa' ),
        'section'  => 'home_contato',
        'priority' => 4,
    );

    $fields[] = array(
        'type'     => 'textarea',
        'setting'  => 'home_contato_title_2',
        'label'    => __( 'Título do segundo link', 'copa' ),
        'section'  => 'home_contato',
        'priority' => 5,
    );
    $fields[] = array(
        'type'     => 'textarea',
        'setting'  => 'home_contato_txt_2',
        'label'    => __( 'Texto do segundo link', 'copa' ),
        'section'  => 'home_contato',
        'priority' => 6,
    );
    $fields[] = array(
        'type'     => 'textarea',
        'setting'  => 'home_contato_link_title_2',
        'label'    => __( 'Título no botão do segundo link', 'copa' ),
        'section'  => 'home_contato',
        'priority' => 7,
    );
    $fields[] = array(
        'type'     => 'textarea',
        'setting'  => 'home_contato_link_2',
        'label'    => __( 'URL do segundo link', 'copa' ),
        'section'  => 'home_contato',
        'priority' => 8,
    );

    return $fields;
}
add_filter( 'kirki/fields', 'brasa_kirki_fields' );