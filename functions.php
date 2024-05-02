<?php
// Adiciona suporte a miniaturas
add_theme_support('post-thumbnails');

//Adicona a tag title
add_theme_support('title-tag');

// Adiciona suporte a menus
register_nav_menus(array(
    'primary' => __('Menu Principal', 'menu-principal'),
    // Adicione mais menus, se necessário
));

// Função para incluir scripts e estilos
function enqueue_custom_scripts() {
    // Inclua seus scripts e estilos aqui
    wp_enqueue_script('my-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', [], '1.0', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', [], '1.0', true);
    wp_enqueue_script('meu-script', get_template_directory_uri() . '/assets/js/script.js', [], '1.0', true);

    wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', [], '1.0', false);
    wp_enqueue_style('owl-theme', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', [], '1.0', false);
    wp_enqueue_style('reset', get_template_directory_uri().'/assets/css/reset.css', [], '1.0', false);
    wp_enqueue_style('m-style', get_template_directory_uri(). '/assets/css/style.css', [], '1.0', false);
    
    wp_enqueue_style('meu-estilo', get_stylesheet_uri(), array(), '1.0');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


// Adiciona widgets ao tema
function register_custom_widgets() {
    register_sidebar(array(
        'name'          => __('Barra Lateral', 'seu-tema'),
        'id'            => 'sidebar-1',
        'description'   => __('Área da barra lateral', 'seu-tema'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    // Adicione mais widgets, se necessário
}
add_action('widgets_init', 'register_custom_widgets');

// Adicione suas próprias funções personalizadas abaixo

require('admin/custom_fields.php');

// Função para obter o ID da página pelo nome do template
function obter_id_pagina_por_template($nomeDoTemplate) {
    $args = array(
        'post_type' => 'page', // Pode ser 'post' se você estiver procurando em postagens
        'meta_key' => '_wp_page_template',
        'meta_value' => $nomeDoTemplate
    );

    $paginas = get_posts($args);

    // Verifica se a página foi encontrada
    if (!empty($paginas)) {
        // Retorna o ID da primeira página encontrada com o template especificado
        return $paginas[0]->ID;
    } else {
        // Retorna falso se a página não for encontrada
        return false;
    }
}

?>
