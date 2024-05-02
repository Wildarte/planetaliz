<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="container container_page">
            <div class="">
                <h2 class="title-default-no-border"><?= get_the_title(); ?></h2>
            </div>

            <div class="content_page content_post">
                <?php the_content(); ?>
            </div>
        </div>
        

    </main>
</div>

<?php get_footer(); ?>