<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="container container_page">
            <div class="head_page_clipes">
                <h2 class="title-default text-shad-down"><?= get_the_title() ?></h2>
            </div>

            <div class="content_page" style="background-color: transparent;">
                <?php the_content(); ?>
            </div>
        </div>
        

    </main>
</div>

<?php get_footer(); ?>
