<?php get_header(); ?>

<div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        
        <!-- Виведення ACF полів -->
        <ul>
            <li><strong>Назва будинку:</strong> <?php the_field('building_name'); ?></li>
            <li><strong>Координати місцезнаходження:</strong> <?php the_field('building_coordinates'); ?></li>
            <li><strong>Кількість поверхів:</strong> <?php the_field('number_of_floors'); ?></li>
            <li><strong>Тип будівлі:</strong> <?php the_field('building_type'); ?></li>
            <li><strong>Екологічність:</strong> <?php the_field('ecological'); ?></li>
        </ul>

        <!-- Виведення мульти-блоків для приміщень -->
        <?php if (have_rows('premises')) : ?>
            <h2>Приміщення</h2>
            <ul>
                <?php while (have_rows('premises')) : the_row(); ?>
                    <li><strong>Площа:</strong> <?php the_sub_field('square'); ?></li>
                    <li><strong>Кількість кімнат:</strong> <?php the_sub_field('amount_of_rooms'); ?></li>
                    <li><strong>Балкон:</strong> <?php the_sub_field('balcony'); ?></li>
                    <li><strong>Санвузол:</strong> <?php the_sub_field('bathroom'); ?></li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
