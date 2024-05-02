<?php get_header();
//Template Name: Personagens
?>

<style>
    body::-webkit-scrollbar{
        display: none;
    }
</style>

<mian id="" class="body">
    <div id="main" class="body_personagens" role="main">

        <div class="">
            <div class="head_page_clipes head_agenda">
                <h2 class="title-default text-shad-down header_personagens">Conheça os Personagens</h2>
            </div>

            <div class="carousel_pers owl-carousel">
                <?php
                    // Recupera os valores do metabox
                    $loop_items = get_post_meta(get_the_ID(), 'custom_page_template_loop_group', true);

                    // Loop pelos itens
                    foreach ($loop_items as $item) {
                        $title = $item['custom_page_template_title'];
                        $image_id = $item['custom_page_template_image'];
                        $desc = $item['custom_page_template_descricao'];
                        $color = esc_url($item['color']);

                        // Exibe a imagem se houver
                        if ($image_id) {
                            $image_url = wp_get_attachment_image_url($image_id, 'full');
                        }


                        ?>


                       
                <div class="card_pers_carousel d-flex" style="background-color: <?= $color ?>;">
                    <div class="container d-flex">
                        <div class="card_car_left">
                            <div class="d-flex card_car_left_content">
                                <img src="<?= $image_id ?>" alt="">
                                <div class="info_card_sec">
                                </div>
                            </div>
                            
                        </div>

                        <div class="card_car_right">
                            <h2><?= $title ?></h2>
                            <p><?= $desc ?></p>
                        </div>
                    </div>
                    
                </div>

                <?php
                    }
                ?>

                <!-- 
                <div class="card_pers_carousel d-flex" style="background-color: #39A400;">
                    <div class="container d-flex">
                        <div class="card_car_left">
                            <div class="d-flex card_car_left_content">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/card3.png" alt="">
                                <div class="info_card_sec">
                                    <h2 class="title-sec text-shad-down">corujita</h2>
                                </div>
                            </div>
                            
                        </div>

                        <div class="card_car_right">
                            <p>CONHEÇA CORUJITA, A ADORÁVEL E SERELEPE
                                AMIGA DOS NOSSOS HERÓIS LIZ E MANINHO! ESSA
                                PEQUENINA AVE QUE VOA PELOS CÉUS, ASSOBIANDO
                                COM SEU BIQUINHO, PERTENCE À NUMEROSA
                                FAMÍLIA DOS CABURÉS DA AMAZÔNIA. CANTANTE,
                                DIVERTIDA E LEAL, CORUJITA É A COMPANHEIRA
                                PERFEITA PARA TODAS AS HORAS.
                            </p>
                        </div>
                    </div>
                    
                </div>

                <div class="card_pers_carousel d-flex" style="background-color: #0093C5;">
                    <div class="container d-flex">
                        <div class="card_car_left">
                            <div class="d-flex card_car_left_content">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/card2.png" alt="">
                                <div class="info_card_sec">
                                    <h2 class="title-sec text-shad-down">Maninho</h2>
                                </div>
                            </div>
                            
                        </div>

                        <div class="card_car_right">
                            <p>Maninho, o garotinho esperto que chama a Amazônia de quintal, nos leva a uma jornada emocionante pela natureza. Seus amigos são os bichinhos da floresta, e ao lado de Liz e Corujita, ele ensina sobre o amor pela natureza e o cuidado com o nosso Planeta.</p>
                        </div>
                    </div>
                    
                </div>
                 -->
            </div>

        </div>
       
    </div>
</main>

<script>
      window.addEventListener('scroll', function() {
    var elementToHide = document.querySelector('.header_personagens');
    // Verifica se a posição vertical de rolagem é maior que 200px
    if (window.scrollY > 100) {
      // Se for, torna o elemento invisível
      elementToHide.style.display = 'none';
    } else {
      // Caso contrário, torna o elemento visível
      elementToHide.style.display = 'block';
    }
  });
</script>

<?php get_footer(); ?>
