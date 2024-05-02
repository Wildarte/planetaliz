<?php get_header();
//Template Name: Agenda
?>

<section class="sec-default bg-pink">
    <div class="container d-flex">

        <div class="f-50 left_page_agenda">
            <h3>Confira quando o Planeta Liz e sua turma estarão pertinhos de você</h3>

            <p>O Planeta Liz é uma criação da cantora e compositora Liah Soares que mescla elementos de teatro, dança e música para criar uma experiência imersiva e emocionante na Amazônia. A história gira em torno de Liz, Maninho e Corujita, que embarcam em uma jornada de defesa da floresta e dos animais.</p>

            <p>Ao longo do show, o público é convidado a explorar o Planeta Liz, um lugar onde os animais falam, a natureza é preservada, as palavras são gentis e as pessoas são amigas umas das outras. A música desempenha um papel central, com performances cativantes que variam do pop ao carimbó, ritmo tipicamente amazônico, complementadas por coreografias vibrantes e efeitos visuais deslumbrantes. O Planeta Liz é uma celebração da diversidade, da amizade e do cuidado com o nosso planeta.</p>

            <h3>Contrate o Planeta Liz</h3>

            <ul>
                <li>Erika Breno</li>
                <li><a href="tel:11995555579">(11) 9 9555-5579</a></li>
                <li><a href="mailto:erika@erikabreno.com.br">erika@erikabreno.com.br</a></li>
            </ul>
        </div>

        <div class="f-50 right_page_agenda">

            <ul class="list_locais">
                <?php

                    $loop_items2 = get_post_meta(get_the_ID(), 'custom_page_template_loop_group_agenda', true);

                    foreach ($loop_items2 as $item) {

                ?>
                <li>
                    <div class="item_list_agenda">
                        
                        <div class="date_item_list_agenda">
                            <?=  $item['custom_page_template_data'] ?><br>
                            <?=  $item['custom_page_template_mes'] ?>
                        </div>

                        <div class="title_item_list_agenda">
                            <p><?=  $item['custom_page_template_titulo'] ?></p>
                        </div>

                        <div class="city_item_list_agenda">
                            <?= $item['custom_page_template_local'] ?>
                        </div>

                        <div class="info_plus_item_list_agenda">
                            + <span>info</span>
                        </div>
                    </div>
                    <div class="info_list_agenda">
                        <p><?=  $item['custom_page_template_informacoes'] ?></p>
                    </div>
                </li>

                <?php } ?>

                
            </ul>

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

<!-- 
<div id="primary" class="page_agenda">

    <div class="container_agenda d-flex">
        <div class="head_page_clipes head_agenda">
            <h2 class="title-default text-shad-down">Agenda</h2>
        </div>
        <div class="f-50 left_agenda">

            <p class="subtitle_agenda">Fique de olho em nossa agenda de apresentações!</p>

            <div class="frame_agenda">
                <ul>
                <?php
                    // Recupera os valores do metabox
                    $loop_items2 = get_post_meta(get_the_ID(), 'custom_page_template_loop_group_agenda', true);

                    //var_dump($loop_items2);

                    // Loop pelos itens
                    foreach ($loop_items2 as $item) {
                        $local = $item['custom_page_template_local'];
                        $data = $item['custom_page_template_data'];
                        $cidade = $item['custom_page_template_cidade'];

                        ?>

                            <li>
                                <img src="<?= get_template_directory_uri() ?>/assets/img/pino.png" alt=""> 
                                <p><?= $local ?><br><span><?= $data ?></span> - <span><?= $cidade; ?></span></p>
                            </li>

                        <?php
                    }
                ?>
                </ul>
            </div>
        </div>

        <div class="f-50 right_agenda">
            <img src="<?= get_template_directory_uri() ?>/assets/img/band.png" alt="">
        </div>

    </div>
        
</div>
-->

<script>

    const list_locais = document.querySelectorAll('.list_locais li .item_list_agenda');
    const list_locais_info = document.querySelectorAll('.list_locais li .info_list_agenda');
    const list_item = document.querySelectorAll('.list_locais li');

    list_locais.forEach((item, index) => {

        let it = item.querySelector('.info_plus_item_list_agenda');

        it.addEventListener('click', () => {

            if(list_locais_info[index].classList.contains('open_item')){
                
                list_locais_info[index].classList.remove('open_item');
                list_item[index].classList.remove('open_border');

            }else{

                list_locais_info.forEach((item2) => {

                item2.classList.remove('open_item');

                });

                list_item.forEach((item3) => {

                item3.classList.remove('open_border');

                });

                list_locais_info[index].classList.add('open_item');
                list_item[index].classList.add('open_border');

            }

        });

    })

</script>

<?php get_footer(); ?>
