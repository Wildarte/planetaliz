<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
    <?php wp_head() ?>

</head>
<body>
    <?php
        if(is_front_page()):
    ?>
    <div class="top_header">
        <img src="<?= get_template_directory_uri() ?>/assets/img/top.jpg" alt="">
    </div>
    <?php endif; ?>
    <header class="header" style="<?= is_front_page() == true ? "" : "position: absolute"; ?>">
        

        <div class="content_header">
            <div class="search">
                <i class="bi bi-search"></i>
            </div>

            <nav class="menu">

                <div class="close_menu">
                    <span class="btn_close_menu">
                        <i class="bi bi-x-lg"></i>
                    </span>
                </div>

                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary', // Substitua 'menu-principal' pelo nome do menu que você criou
                        'container_class' => 'menu-principal-classe', // Adicione classes conforme necessário
                    ));
                ?>


            </nav>

            <div class="btn_menu">
                <i class="bi bi-list"></i>
            </div>

            <div class="social_header">
                <ul>
                    <li><a href="https://www.instagram.com/planeta.liz/"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="https://www.tiktok.com/@planeta.liz"><i class="bi bi-tiktok"></i></a></li>
                    <li><a href="https://www.youtube.com/@PlanetaLiz"><i class="bi bi-youtube"></i></a></li>
                    <li><a href="http://open.spotify.com/intl-pt/artist/5ApO9X6UBGwhQTGMRj2V4f"><i class="bi bi-spotify"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="over_body">
            <form action="">
                <input type="search" name="s" id="">
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </header>