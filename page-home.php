<?php
get_header();
/*
Template Name: Home
*/
?>


    <main>

        <section class="sections sec-videos bg-blue" id="videos">

            <div class="container sec-default">
                <div class="text-center">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/youtube.png" alt="">
                    <h2 class="title-default text-shad-down">Clipes</h2>

                    <!-- 
                    <div class="over_text">
                        Prepare-se para uma experiência que vai fazer seus olhos brilharem, seu coração sorrir e seus dedos clicarem! Aqui, no planeta liz, mergulharemos em um mundo de diversão, imaginação e aprendizado.
                    </div>
                     -->
                </div>

                <div class="owl-carousel video-carousel">
                    <?php
                        // Recupera os valores do metabox
                        $loop_items2 = get_post_meta(get_the_ID(), 'custom_page_template_loop_group_clipes', true);

                        //var_dump($loop_items2);

                        // Loop pelos itens
                        foreach ($loop_items2 as $item) {
                            $image_id2 = $item['custom_page_template_image2'];
                            $link2 = esc_url($item['custom_page_template_link2']);

                            // Exibe a imagem se houver
                            if ($image_id2) {
                                $image_url2 = wp_get_attachment_image_url($image_id2, 'full');
                            }


                            ?>

                                <a href="<?= $link2 ?>" target="_blank">
                                    <img src="<?= $image_id2 ?>" alt="">
                                </a>

                            <?php
                        }
                    ?>
                    
                </div>
            </div>

        </section>

        <section class=" bg-green sec-news" id="midia">
            <div class="container sec-default">
                <div class="frame home">
                    
                    <div class="head_frame head_normal">
                        <h2 class="title-default text-shad-down">Mídia</h2>
                    </div>

                    <div class="container">

                        <div class="over_materias_container home">
                            <div class="over_materias over_mat_carousel owl-carousel over_midia">

                            <?php
                                
                                // Recupera os valores do metabox
                                $loop_items = get_post_meta(obter_id_pagina_por_template('page-materias.php'), 'custom_page_template_loop_group', true);

                                // Loop pelos itens
                                $qtd_carousel = 5;
                                $count = 0;
                                foreach ($loop_items as $item) {
                                    $title = $item['custom_page_template_title'];
                                    $image_id = $item['custom_page_template_image'];
                                    $link = esc_url($item['custom_page_template_link']);

                                    // Exibe a imagem se houver
                                    if ($image_id) {
                                        $image_url = wp_get_attachment_image_url($image_id, 'full');
                                    }

                                    if($count < $qtd_carousel):
                                    ?>

                                        <a href="<?= $link ?>" target="_blank">
                                            <img src="<?= $image_id ?>" alt="">
                                            <p><?= $title ?></p>
                                        </a>

                                    <?php

                                    endif;
                                    $count += 1;
                                }
                                
                            ?>

                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>
        </section>

        <section class=" bg-pink sec-default" id="personagens">
            <div class="container">
                <header>
                    <h2 class="title-default text-shad-down">Personagens</h2>
                </header>
                <div class="container-carousel d-flex container-characters">
                    <div class="card_sec">
                        <a href="<?= home_url() ?>/personagens-liz">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/liz.png" alt="">
                            <div class="info_card_sec">
                                <h2 class="title-sec text-shad-down">Liz</h2>
                            </div>
                        </a>
                    </div>
    
                    <div class="card_sec">
                        <a href="<?= home_url() ?>/personagens-maninho">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/card5.png" alt="">
                            <div class="info_card_sec">
                                <h2 class="title-sec text-shad-down">Maninho</h2>
                            </div>
                        </a>
                    </div>
    
                    <div class="card_sec">
                        <a href="<?= home_url() ?>/personagens-corujita">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/card3.png" alt="">
                            <div class="info_card_sec">
                                <h2 class="title-sec text-shad-down">Corujita</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class=" bg-yellow sec-default" id="redes">
            <div class="container">
                <header class="header_social">
                    <h2 class="title-default text-shad-down">Redes Sociais</h2>
                    <p>Conheça o TikTok do Planeta Liz</p>
                </header>
                <div class="container-carousel d-flex content_social">
                    <div class="card_sec">
                        <a href="https://www.tiktok.com/@planeta.liz/video/7322983882037464326" target="_blank">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/tiktok.png" alt="">
                        </a>
                    </div>
    
                    <div class="card_sec">
                        <a href="https://www.tiktok.com/@planeta.liz/video/7322585836589993222" target="_blank">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/tiktok2.png" alt="">
                        </a>
                    </div>
    
                    <div class="card_sec">
                        <a href="https://www.tiktok.com/@planeta.liz/video/7322126454840495365" class="_blank">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/tiktok3.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="text_social">
                    <p>e nossas outras redes!</p>

                    <div class="list_social">
                        <a href="https://www.facebook.com/planetaliz"><img src="<?= get_template_directory_uri() ?>/assets/img/facebook-ico.png" alt=""></a>
                        <a href="https://www.youtube.com/@PlanetaLiz"><img src="<?= get_template_directory_uri() ?>/assets/img/youtube-ico.png" alt=""></a>
                        <a href="https://www.instagram.com/planeta.liz"><img src="<?= get_template_directory_uri() ?>/assets/img/instagram-ico.png" alt=""></a>
                        <a href="https://www.tiktok.com/@planeta.liz"><img src="<?= get_template_directory_uri() ?>/assets/img/tiktok-ico.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="" class=" sec-default bg-white" role="main" id="blog">

            <div class="container">
                <header>
                    <h2 class="title-default text-shad-down">Blog</h2>
                </header>

                <div class="over_materias_container" style="padding: 40px 10px;">
                    <div class="over_materias over_blog">
                        
                        <?php

                            $args = [
                                'post_type' => 'post',
                                'posts_per_page' => 4
                            ];

                            $res = new WP_Query($args);

                            if($res->have_posts()){
                                while($res->have_posts()){
                                    $res->the_post();

                                    ?>

                                        <a href="<?= get_the_permalink() ?>">
                                            <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">
                                            <p><?= get_the_title(); ?></p>
                                        </a>

                                    <?php
                                }
                            }
                            wp_reset_query();

                        ?>
                        
                    </div>
                </div>
            
            </div>

        </section>       

        <!-- 
        <section class="hero">
            <div class="container">
                
            </div>
        </section>
         -->
        
        <section class=" bg-orange sec-default" id="atividades">
            <div class="container content_sec_ativ">
                <div class="">
                    <h2 class="title-default text-shad-down">Atividades</h2>
                </div>
                <div class="content_link">
                    <a href="https://planetaliz.com.br/wp-content/uploads/2024/01/LIVRO-DESENHO-PLANETALIZ.pdf" target="_blank"><img src="<?= get_template_directory_uri() ?>/assets/img/link-ativi1.png" alt=""></a>
                    <a href="https://planetaliz.com.br/wp-content/uploads/wallpapers.zip" target="_blank"><img src="<?= get_template_directory_uri() ?>/assets/img/link-ativi2.png" alt=""></a>
                </div>
            </div>
        </section>

        <section class="sec-contact bg-blue2 sec-default" id="contato">
            <div class="container container-contact">
                <div class="text-center">
                    <h2 class="title-default text-shad-down">Contato</h2>
                </div>

                <div class="d-flex frame_contact">
                    <div class="contact_left">
                        <p>Olá!</p>

                        <p>Nós adoramos ouvir as histórias, dúvidas e ideias incríveis que você tem para compartilhar.  Entre em contato com a gente!
                        </p>
                        
                    </div>

                    <div class="contact_right over_form">
                        <!-- 
                        <form action="">
                            <input type="text" name="" id="" placeholder="Seu nome">
                            <input type="email" name="" id="" placeholder="Seu e-mail">
                            <textarea name="" id="" cols="30" rows="5" placeholder="Sua Mensagem"></textarea>
                            <button class="" type="submit">Enviar</button>
                        </form>
                         -->

                        <?= do_shortcode('[contact-form-7 id="db95afe" title="Formulário de contato"]') ?>
                    </div>
                </div>
            </div>

            
        </section>

    </main>

    <footer class="footer bg-yellow">
        <div class="container content_footer">
        <p class=""><a href="https://planetaliz.com.br/politica-privacidade/">Políticas de Privacidade</a></p>
        </div>
    </footer>


<?php
get_footer();
?>