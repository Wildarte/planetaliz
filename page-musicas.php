<?php get_header();
//Template Name: Música
?>

<mian id="" class="body">
    <div id="main" class="body_music" role="main">

        <div class="head_page_clipes">
            <h2 class="title-default text-shad-down">Nossas Músicas</h2>
        </div>

        <div class="sub_music">
            <p>Disponível nas plataformas</p>

            <div class="d-flex list_stream">
                <a href="https://www.youtube.com/@PlanetaLiz" target="_blank"><img src="<?= get_template_directory_uri() ?>/assets/img/youtube2.png" alt=""></a>
                <a href="https://open.spotify.com/intl-pt/artist/5ApO9X6UBGwhQTGMRj2V4f" target="_blank"><img src="<?= get_template_directory_uri() ?>/assets/img/spotify2.png" alt=""></a>
                <a href="https://music.apple.com/br/artist/planeta-liz/1692652217" target="_blank"><img src="<?= get_template_directory_uri() ?>/assets/img/apple.png" alt=""></a>
                <a href="https://music.amazon.com.br/artists/B0C83N4CTP/planeta-liz" target="_blank"><img src="<?= get_template_directory_uri() ?>/assets/img/amazon.png" alt=""></a>
                <a href="https://tidal.com/browse/artist/40077731" target="_blank"><img src="<?= get_template_directory_uri() ?>/assets/img/de.png" alt=""></a>
                <a href="https://www.deezer.com/pt/artist/217804095" target="_blank"><img src="<?= get_template_directory_uri() ?>/assets/img/deezer.png" alt=""></a>
            </div>
        </div>

        <div class="container content_thumbs_music">

            <?php

                // Recupera os valores do metabox
                $loop_items = get_post_meta(get_the_ID(), 'custom_page_template_loop_group_musica', true);

                // Loop pelos itens
                foreach ($loop_items as $item) {
                    $title = $item['custom_page_template_title'];
                    $image_id = $item['custom_page_template_image'];
                    $link = esc_url($item['custom_page_template_link']);

            ?>

            <a href="<?= $link ?>"><img src="<?= $image_id ?>" alt=""></a>

            <?php } ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
