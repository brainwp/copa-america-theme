<?php
if ( ! function_exists('brasa_custom_type_times') ) {

// Register Custom Post Type
function brasa_custom_type_times() {

	$labels = array(
		'name'                => _x( 'Times', 'Post Type General Name', 'copa' ),
		'singular_name'       => _x( 'Time', 'Post Type Singular Name', 'copa' ),
		'menu_name'           => __( 'Times', 'copa' ),
		'name_admin_bar'      => __( 'Times', 'copa' ),
		'parent_item_colon'   => __( 'Time Parente', 'copa' ),
		'all_items'           => __( 'Todos times', 'copa' ),
		'add_new_item'        => __( 'Adicionar novo time', 'copa' ),
		'add_new'             => __( 'Adicionar novo', 'copa' ),
		'new_item'            => __( 'Novo time', 'copa' ),
		'edit_item'           => __( 'Editar time', 'copa' ),
		'update_item'         => __( 'Atualizar Time', 'copa' ),
		'view_item'           => __( 'Ver time', 'copa' ),
		'search_items'        => __( 'Buscar Time', 'copa' ),
		'not_found'           => __( 'Não encontrado', 'copa' ),
		'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'copa' ),
	);
	$args = array(
		'label'               => __( 'times', 'copa' ),
		'description'         => __( 'Times', 'copa' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-groups',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'times', $args );

}

// Hook into the 'init' action
add_action( 'init', 'brasa_custom_type_times', 0 );
