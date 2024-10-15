<?php get_header(); ?>

<main class="main">
    <div class="container">
        <!-- <h1 class="front-page-title"><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p> -->

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

                            <!-- <?php 
                            
                            $args = array(
                                'post_type' => 'real_estate',
                                'posts_per_page' => 5,
                                'paged' => get_query_var('paged') ? get_query_var('paged') : 1
                            );

                            $real_estate_query = new WP_Query($args);

                            if( $real_estate_query->have_posts() ) :
                                while( $real_estate_query->have_posts() ) : $real_estate_query->the_post(); ?>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-img">
                                            <?php 
                                                $building_image = get_field('building_image');
                                                if( !empty( $building_image ) ): ?>
                                                    <img class="img-fluid" src="<?php echo esc_url($building_image['url']); ?>" alt="<?php echo esc_attr($building_image['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>

                                            <div class="card-body">
                                                <h5 class="card-title"><?php the_field('building_name') ?></h5>
                                                <p class="card-floors">Кількість поверхів: <?php the_field('number_of_floors') ?></p>
                                                <p class="card-type">Тип будинку: <?php the_field('building_type') ?></p>
                                                <p class="card-ecological">Екологічність: <?php the_field('ecological') ?></p>
                                                <p class="card-text"><?php the_excerpt(); ?></p>
                                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Детальніше</a>  
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; 
                                
                                $total_pages = $real_estate_query->max_num_pages;
                                if ($total_pages > 1) {
                                    echo '<div class="pagination">';
                                    for ($i = 1; $i <= $total_pages; $i++) {
                                        echo '<a class="pagination-link" data-page="' . $i . '">' . $i . '</a>';
                                    }
                                    echo '</div>';
                                }
                                
                            endif;
                            wp_reset_postdata(); 
                            ?> -->

                    </div>
                </article>
            </section>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>