<?php

function my_wp_scripts(){
    wp_enqueue_style('materialize',
        sprintf('%s/assets/css/materialize.min.css',get_template_directory_uri()));
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('materialize',
        sprintf('%s/assets/js/materialize.min.js',get_template_directory_uri()),
        ['jquery'],null, true);
}

add_action('wp_enqueue_scripts', 'my_wp_scripts');

add_theme_support('post-thumbnails');
add_image_size( 'custom-size', 480, 280, true );
set_post_thumbnail_size(120,120);

add_action( 'rest_api_init', 'slug_register_starship');
function slug_register_starship() {
    register_rest_field( 'post',
        'bigode',
        array(
            'get_callback'    => 'slug_get_starship',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

add_action( 'rest_api_init', 'slug_register_starship_cartola');
function slug_register_starship_cartola() {
    register_rest_field( 'post',
        'cartola',
        array(
            'get_callback'    => 'slug_get_starship',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

add_action( 'rest_api_init', 'slug_register_starship_autor');
function slug_register_starship_autor() {
    register_rest_field( 'post',
        'autor',
        array(
            'get_callback'    => 'slug_get_starship',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

add_action( 'rest_api_init', 'slug_register_starship_foto');
function slug_register_starship_foto() {
    register_rest_field( 'post',
        'foto',
        array(
            'get_callback'    => 'slug_get_starship',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

function wordpress_pagination() {
    global $wp_query;
    $big = 999999999;
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages
    ) );
}

function slug_get_starship( $object, $field_name, $request ) {
    return get_post_meta( $object[ 'id' ], $field_name, true );
}

/**
 * --------------------------------------------------------------
 *  Criação de Custom Post Types - Alan Rodrigues
 * --------------------------------------------------------------
 */
function post_type_relations(){
    $labels = array(
        'name' => "Lançamentos",
        'singular_name' => "Lançamentos",
        'add_new'=> "Adicionar Novo Lançamento",
        'add_new_label' => "Adicionar Novo Lançamento",
        'all_item' => "Todos os Lançamentos",
        'add_new_item'=> "Adicionar Novo Lançamento",
        'edit_item' => "Editar Lançamento",
        'new_item' =>  "Novo Lançamento",
        'view_item' => "Visualizar Lançamento",
        'search_item' => "Procurar Lançamento",
        'not_found' => "Nenhum Lançamento Encontrado",
        'not_found_in_trash' => "Nenhum Lançamento Na Lixeira"
    );
    $args = array(

        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'show_in_rest' => true,
        'rest_base' => 'lancamentos',
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'supports' => array(
            'title','editor','thumbnail','excerpt'
        ),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    register_post_type('lancamentos',$args);
}
add_action('init','post_type_relations');