<?php get_header();
//Template Name: Blog
?>

<mian id="" class="body">
    <div id="main" class="sec-news" role="main">

        <div class="container">

            <div class="over_materias_container">
                <div class="over_materias">
                    
                    <?php

                        if(have_posts()){
                            while(have_posts()){
                                the_post();

                                ?>

                                    <a href="<?= get_the_permalink() ?>">
                                        <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">
                                        <p><?= get_the_title(); ?></p>
                                    </a>

                                <?php
                            }
                        }

                    ?>
                    
                </div>
            </div>
         
        </div>

    </div>
</main>

<?php get_footer(); ?>
