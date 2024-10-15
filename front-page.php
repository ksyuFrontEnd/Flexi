<?php get_header(); ?>

<main class="main">

    <div class="container">
        <h1 class="front-page-title"><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>

        <!-- Додаємо шорткод для фільтрації -->
        <!-- <div class="real-estate-filter">
            <?php echo do_shortcode('[real_estate_filter]'); ?>
        </div> -->

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="post">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Немає постів для відображення.</p>
        <?php endif; ?>
    </div>

</main>

<?php get_footer(); ?>