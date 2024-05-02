<?php get_header();

?>

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

<?php get_footer(); ?>
