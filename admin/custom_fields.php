<?php

// Certifique-se de incluir o arquivo cmb2.init.php antes de usar as funções do CMB2


function custom_page_template_metabox() {
    $prefix = 'custom_page_template_';

    $cmb = new_cmb2_box(array(
        'id'           => $prefix . 'metabox',
        'title'        => __('Matérias', 'cmb2'),
        'object_types' => array('page'), // Apenas para páginas
        'show_on'      => array('key' => 'page-template', 'value' => 'page-materias.php'),
    ));

    // Campo para o loop
    $group_field_id = $cmb->add_field(array(
        'id'          => $prefix . 'loop_group',
        'type'        => 'group',
        'description' => __('Adicione títulos, imagens e link.', 'cmb2'),
        'options'     => array(
            'group_title'   => __('Item {#}', 'cmb2'),
            'add_button'    => __('Adicionar Item', 'cmb2'),
            'remove_button' => __('Remover Item', 'cmb2'),
            'sortable'      => true,
        ),
    ));

    // Campos dentro do grupo
    $cmb->add_group_field($group_field_id, array(
        'name' => 'Título',
        'id'   => $prefix . 'title',
        'type' => 'text',
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => 'Imagem',
        'id'   => $prefix . 'image',
        'type' => 'file',
        'options' => array(
            'url' => false, // Retorna o ID do anexo ao invés da URL
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png'), // Tipos de arquivo permitidos
        ),
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => 'Link',
        'id'   => $prefix . 'link',
        'type' => 'text_url',
    ));
}

add_action('cmb2_admin_init', 'custom_page_template_metabox');



function custom_page_template_musicas() {
    $prefix = 'custom_page_template_';

    $cmb = new_cmb2_box(array(
        'id'           => $prefix . 'metabox_musica',
        'title'        => __('Músicas', 'cmb2'),
        'object_types' => array('page'), // Apenas para páginas
        'show_on'      => array('key' => 'page-template', 'value' => 'page-musicas.php'),
    ));

    // Campo para o loop
    $group_field_id = $cmb->add_field(array(
        'id'          => $prefix . 'loop_group_musica',
        'type'        => 'group',
        'description' => __('Adicione títulos, imagens e link.', 'cmb2'),
        'options'     => array(
            'group_title'   => __('Item {#}', 'cmb2'),
            'add_button'    => __('Adicionar Item', 'cmb2'),
            'remove_button' => __('Remover Item', 'cmb2'),
            'sortable'      => true,
        ),
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => 'Imagem',
        'id'   => $prefix . 'image',
        'type' => 'file',
        'options' => array(
            'url' => false, // Retorna o ID do anexo ao invés da URL
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png'), // Tipos de arquivo permitidos
        ),
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => 'Link',
        'id'   => $prefix . 'link',
        'type' => 'text_url',
    ));
}

add_action('cmb2_admin_init', 'custom_page_template_musicas');



function custom_page_template_metabox_personagem() {
    $prefix = 'custom_page_template_';

    $cmb = new_cmb2_box(array(
        'id'           => $prefix . 'personagens',
        'title'        => __('Parsonagens', 'cmb2'),
        'object_types' => array('page'), // Apenas para páginas
        'show_on'      => array('key' => 'page-template', 'value' => 'page-personagens.php'),
    ));

    // Campo para o loop
    $group_field_id = $cmb->add_field(array(
        'id'          => $prefix . 'loop_group',
        'type'        => 'group',
        'description' => __('Adicione títulos, imagem e descrição.', 'cmb2'),
        'options'     => array(
            'group_title'   => __('Item {#}', 'cmb2'),
            'add_button'    => __('Adicionar Item', 'cmb2'),
            'remove_button' => __('Remover Item', 'cmb2'),
            'sortable'      => true,
        ),
    ));

    // Campos dentro do grupo
    $cmb->add_group_field($group_field_id, array(
        'name' => 'Título',
        'id'   => $prefix . 'title',
        'type' => 'text',
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => 'Imagem',
        'id'   => $prefix . 'image',
        'type' => 'file',
        'options' => array(
            'url' => false, // Retorna o ID do anexo ao invés da URL
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png'), // Tipos de arquivo permitidos
        ),
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => 'Descrição',
        'id'   => $prefix . 'descricao',
        'type'    => 'textarea'
    ));
    $cmb->add_group_field($group_field_id, array(
        'name'    => 'cor',
        'id'      => 'color',
        'type'    => 'colorpicker',
        'default' => '#ffffff',
        // 'options' => array(
        //     'alpha' => true, // Make this a rgba color picker.
        // ),
    ) );    
}

add_action('cmb2_admin_init', 'custom_page_template_metabox_personagem');



// page home últimas noticias ==========================================
function custom_page_template_metabox_new() {
    $prefix = 'custom_page_template_';

    $cmb = new_cmb2_box(array(
        'id'           => $prefix . 'clipes',
        'title'        => __('Clipes', 'cmb2'),
        'object_types' => array('page'), // Apenas para páginas
        'show_on'      => array('key' => 'page-template', 'value' => 'page-home.php'),
    ));

    // Campo para o loop
    $group_field_id = $cmb->add_field(array(
        'id'          => $prefix . 'loop_group_clipes',
        'type'        => 'group',
        'description' => __('Adicione os clipes.', 'cmb2'),
        'options'     => array(
            'group_title'   => __('Item {#}', 'cmb2'),
            'add_button'    => __('Adicionar Item', 'cmb2'),
            'remove_button' => __('Remover Item', 'cmb2'),
            'sortable'      => true,
        ),
    ));

    // Campos dentro do grupo
    $cmb->add_group_field($group_field_id, array(
        'name' => 'Link ',
        'id'   => $prefix . 'link2',
        'type' => 'text_url',
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => 'Imagem',
        'id'   => $prefix . 'image2',
        'type' => 'file',
        'options' => array(
            'url' => false, // Retorna o ID do anexo ao invés da URL
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png'), // Tipos de arquivo permitidos
        ),
    ));

}

add_action('cmb2_admin_init', 'custom_page_template_metabox_new');





// page agenda ==========================================
function custom_page_template_metabox_agenda() {
    $prefix = 'custom_page_template_';

    $cmb = new_cmb2_box(array(
        'id'           => $prefix . 'agenda',
        'title'        => __('agenda', 'cmb2'),
        'object_types' => array('page'), // Apenas para páginas
        'show_on'      => array('key' => 'page-template', 'value' => 'page-agenda.php'),
    ));

    // Campo para o loop
    $group_field_id = $cmb->add_field(array(
        'id'          => $prefix . 'loop_group_agenda',
        'type'        => 'group',
        'description' => __('Adicione as datas dos eventos.', 'cmb2'),
        'options'     => array(
            'group_title'   => __('Local {#}', 'cmb2'),
            'add_button'    => __('Adicionar local', 'cmb2'),
            'remove_button' => __('Remover local', 'cmb2'),
            'sortable'      => true,
        ),
    ));

    // Campos dentro do grupo
    $cmb->add_group_field($group_field_id, array(
        'name' => 'Título',
        'id' => $prefix . 'titulo',
        'desc' => 'Máx 26 caracteres',
        'type' => 'text',
        'attributes' => [
            'placeholder' => 'Título',
            'maxlength' => 26
        ]
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => 'Local ',
        'id'   => $prefix . 'local',
        'desc' => 'Máx 21 caracteres',
        'type' => 'text',
        'attributes' => [
            'placeholder' => 'Pode colcar a cidade ou nome de um local conhecido',
            'maxlength' => 21
        ]
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => 'Dia',
        'id' => $prefix . 'data',
        'type'             => 'select',
        'show_option_none' => true,
        'default'          => 'custom',
        'options'          => array(
            '1' => __( '1', 'cmb2' ),
            '2' => __( '2', 'cmb2' ),
            '3' => __( '3', 'cmb2' ),
            '4' => __( '4', 'cmb2' ),
            '5' => __( '5', 'cmb2' ),
            '6' => __( '6', 'cmb2' ),
            '7' => __( '7', 'cmb2' ),
            '8' => __( '8', 'cmb2' ),
            '9' => __( '9', 'cmb2' ),
            '10' => __( '10', 'cmb2' ),
            '11' => __( '11', 'cmb2' ),
            '12' => __( '12', 'cmb2' ),
            '13' => __( '13', 'cmb2' ),
            '14' => __( '14', 'cmb2' ),
            '15' => __( '15', 'cmb2' ),
            '16' => __( '16', 'cmb2' ),
            '17' => __( '17', 'cmb2' ),
            '18' => __( '18', 'cmb2' ),
            '19' => __( '19', 'cmb2' ),
            '20' => __( '20', 'cmb2' ),
            '21' => __( '21', 'cmb2' ),
            '22' => __( '22', 'cmb2' ),
            '23' => __( '23', 'cmb2' ),
            '24' => __( '24', 'cmb2' ),
            '25' => __( '25', 'cmb2' ),
            '26' => __( '26', 'cmb2' ),
            '27' => __( '27', 'cmb2' ),
            '28' => __( '28', 'cmb2' ),
            '29' => __( '29', 'cmb2' ),
            '30' => __( '30', 'cmb2' ),
            '31' => __( '31', 'cmb2' ),
        ),
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => 'Mês',
        'id' => $prefix . 'mes',
        'type'             => 'select',
        'show_option_none' => true,
        'default'          => 'custom',
        'options'          => array(
            'Janeiro'  => __( 'Janeiro', 'cmb2' ),
            'Fevereiro'=> __( 'Fevereiro', 'cmb2' ),
            'Março'    => __( 'Março', 'cmb2' ),
            'Abril'    => __( 'Abril', 'cmb2' ),
            'Maio'     => __( 'Maio', 'cmb2' ),
            'Junho'    => __( 'Junho', 'cmb2' ),
            'Julho'    => __( 'Julho', 'cmb2' ),
            'Agosto'   => __( 'Agosto', 'cmb2' ),
            'Setembro' => __( 'Setembro', 'cmb2' ),
            'Outubro'  => __( 'Outubro', 'cmb2' ),
            'Novembro' => __( 'Novembro', 'cmb2' ),
            'Dezembro' => __( 'Dezembro', 'cmb2' ),
        ),
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => 'Informações ',
        'id'   => $prefix . 'informacoes',
        'type' => 'textarea',
        'attributes' => [
            'placeholder' => ''
        ]
    ));


}

add_action('cmb2_admin_init', 'custom_page_template_metabox_agenda');




// page Clipes ==========================================
function custom_page_template_metabox_clipe() {


    $cmb_destaque = new_cmb2_box([
        'id' => 'clipe_destaque',
        'title' => 'Clipe Destaque',
        'object_types' => array('page'), // Apenas para páginas
        'show_on'      => array('key' => 'page-template', 'value' => 'page-clipes.php'),
    ]);

    $cmb_destaque->add_field([
        'name' => 'Link Vídeo',
        'id'   => 'link_destaque',
        'type' => 'text_url'
    ]);
    $cmb_destaque->add_field([
        'name' => 'Imagem Destaque',
        'id'   => 'image_destaque',
        'type' => 'file',
        'options' => array(
            'url' => false, // Retorna o ID do anexo ao invés da URL
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png'), // Tipos de arquivo permitidos
        ),
    ]);

    $prefix = 'custom_page_template_';

    $cmb = new_cmb2_box(array(
        'id'           => $prefix . 'clipe',
        'title'        => __('clipe', 'cmb2'),
        'object_types' => array('page'), // Apenas para páginas
        'show_on'      => array('key' => 'page-template', 'value' => 'page-clipes.php'),
    ));

    // Campo para o loop
    $group_field_id = $cmb->add_field(array(
        'id'          => $prefix . 'loop_group_clipe',
        'type'        => 'group',
        'description' => __('Adicione os clipes', 'cmb2'),
        'options'     => array(
            'group_title'   => __('Item {#}', 'cmb2'),
            'add_button'    => __('Adicionar Item', 'cmb2'),
            'remove_button' => __('Remover Item', 'cmb2'),
            'sortable'      => true,
        ),
    ));

    // Campos dentro do grupo
    $cmb->add_group_field($group_field_id, array(
        'name' => 'Link ',
        'id'   => $prefix . 'link',
        'type' => 'text_url'
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => 'Imagem',
        'id'   => $prefix . 'image',
        'type' => 'file',
        'options' => array(
            'url' => false, // Retorna o ID do anexo ao invés da URL
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png'), // Tipos de arquivo permitidos
        ),
    ));



    

}

add_action('cmb2_admin_init', 'custom_page_template_metabox_clipe');