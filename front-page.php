<?php get_header(); ?>

<main class="main">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>

            <section class="section">
                <div class="real-estate-filter">
                    <?php echo do_shortcode('[real_estate_filter]'); ?>
                </div>
            </section>
            <section class="section">
                <article class="real-estate__cards">
                    <div id="real-estate-results" class="row">

                    </div>
                </article>
            </section>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>