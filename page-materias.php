<?php get_header();
//Template Name: matérias
?>

<mian id="" class="body">
    <div id="main" class="sec-news" role="main">

        <div class="container">

            <div class="over_materias_container">
                <div class="over_materias">

                <?php
                    // Recupera os valores do metabox
                    $loop_items = get_post_meta(get_the_ID(), 'custom_page_template_loop_group', true);

                    // Loop pelos itens
                    foreach ($loop_items as $item) {
                        $title = $item['custom_page_template_title'];
                        $image_id = $item['custom_page_template_image'];
                        $link = esc_url($item['custom_page_template_link']);

                        // Exibe a imagem se houver
                        if ($image_id) {
                            $image_url = wp_get_attachment_image_url($image_id, 'full');
                        }


                        ?>

                            <a href="<?= $link ?>">
                                <img src="<?= $image_id ?>" alt="">
                                <p><?= $title ?></p>
                            </a>

                        <?php
                    }
                ?>

                <!-- 

                    <a href="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/foto.png" alt="">
                        <p>Nome da Matéria</p>
                    </a>

                    <a href="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/foto.png" alt="">
                        <p>Nome da Matéria</p>
                    </a>

                    <a href="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/foto.png" alt="">
                        <p>Nome da Matéria</p>
                    </a>

                    <a href="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/foto.png" alt="">
                        <p>Nome da Matéria</p>
                    </a>

                    <a href="">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/foto.png" alt="">
                        <p>Nome da Matéria</p>
                    </a>

-->
                </div>
            </div>
         
        </div>

    </div>
</main>

<?php get_footer(); ?>
