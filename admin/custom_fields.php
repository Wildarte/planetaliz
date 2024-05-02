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





// page home últimas noticias ==========================================
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
            'group_title'   => __('Item {#}', 'cmb2'),
            'add_button'    => __('Adicionar Item', 'cmb2'),
            'remove_button' => __('Remover Item', 'cmb2'),
            'sortable'      => true,
        ),
    ));

    // Campos dentro do grupo
    $cmb->add_group_field($group_field_id, array(
        'name' => 'Local ',
        'id'   => $prefix . 'local',
        'type' => 'text',
        'attributes' => [
            'placeholder' => 'Nome do local'
        ]
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => 'Data e hora',
        'id' => $prefix . 'data',
        'type' => 'text',
        'attributes' => [
            'placeholder' => 'dd/mm/aaaa à HH:mm'
        ]
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => 'Cidade',
        'id' => $prefix . 'cidade',
        'type' => 'text',
        'attributes' => [
            'placeholder' => 'São Paulo/SP'
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