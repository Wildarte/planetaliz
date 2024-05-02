<?php get_header();
//Template Name: Clipes
?>

<div id="primary" class="content_clipes">
    <main id="main" class="site-main" role="main">

        <div class="container container_page page_clipes">
            <div class="head_page_clipes">
                <img src="<?= get_template_directory_uri() ?>/assets/img/logo-page.png" alt="">
                <h2 class="title-default text-shad-down">Nossos Clipes</h2>
            </div>

            <div class="destaque_clipe">
                <?php
                    $link_destaque = get_post_meta(get_the_ID(), 'link_destaque', true);
                    $img_destaque = esc_url(get_post_meta(get_the_ID(), 'image_destaque', true));

                    if($link_destaque && $img_destaque):
                ?>
                <a href="<?= $link_destaque; ?>" target="_blank">
                    <img src="<?= $img_destaque; ?>" alt="">
                    <div class="info_link_card">
                        <span><img src="<?= get_template_directory_uri() ?>/assets/img/youtube.png" alt=""></span>
                    </div>
                </a>

                <?php endif; ?>
            </div>
            <div class=" content_page_clipes">
                
            <?php

                // Recupera os valores do metabox
                $loop_items = get_post_meta(get_the_ID(), 'custom_page_template_loop_group_clipe', true);

                // Loop pelos itens
                foreach ($loop_items as $item) {
                    $image_id = $item['custom_page_template_image'];
                    $link = esc_url($item['custom_page_template_link']);

                ?>

                <a href="<?= $link ?>" target="_blank">
                    <img src="<?= $image_id ?>" alt="">
                    <div class="info_link_card">
                        <span><img src="<?= get_template_directory_uri() ?>/assets/img/youtube.png" alt=""></span>
                    </div>
                </a>

            <?php } ?>

            </div>
        </div>
        

    </main>
</div>

<?php get_footer(); ?>
