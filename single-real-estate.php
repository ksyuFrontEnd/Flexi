<?php get_header(); ?>

<main class="main">
    <section class="section">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                    <div class="single__card-img card-img">
                        <?php 
                        $building_image = get_field('image');
                        if (!empty($building_image)): ?>
                            <img class="img-fluid" src="<?php echo esc_url($building_image['url']); ?>" alt="<?php echo esc_attr($building_image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                <ul>
                    <li><strong>Назва будинку:</strong> <?php the_field('build_name'); ?></li>
                    <li><strong>Координати місцезнаходження:</strong> <?php the_field('coordinates'); ?></li>
                    <li><strong>Кількість поверхів:</strong> <?php the_field('number_of_floors'); ?></li>
                    <li><strong>Тип будівлі:</strong> <?php the_field('build_type'); ?></li>
                    <li><strong>Екологічність:</strong> <?php the_field('environmental_friendliness'); ?></li>
                </ul>
                <p><?php the_content(); ?></p>

                <?php if (have_rows('premises')) : ?>
                    <h2>Приміщення</h2>
                        
                    <ul>
                        <?php while (have_rows('premises')) : the_row(); ?>
                            <?php
                            // Отримуємо зображення з кожного ряду
                            $rooms_image = get_sub_field('rooms_image');
                            ?>

                            <?php if (!empty($rooms_image)): ?>
                                <img class="img-fluid" src="<?php echo esc_url($rooms_image['url']); ?>" alt="<?php echo esc_attr($rooms_image['alt']); ?>" />
                            <?php endif; ?>
                            <li><strong>Площа:</strong> <?php the_sub_field('square'); ?></li>
                            <li><strong>Кількість кімнат:</strong> <?php the_sub_field('amount_of_rooms'); ?></li>
                            <li><strong>Балкон:</strong> <?php the_sub_field('balcony'); ?></li>
                            <li><strong>Санвузол:</strong> <?php the_sub_field('bathroom'); ?></li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
