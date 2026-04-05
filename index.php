<?php get_header(); ?>

<?php get_sidebar(); ?>

<main class="main-content">
    <h2>Последние записи (5 штук)</h2>

    <?php if (have_posts()) : $count = 0; ?>
        <?php while (have_posts() && $count < 5) : the_post(); $count++; ?>
            <article class="post-item">
                <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <p><?php the_time('d.m.Y'); ?></p>
                <div><?php the_excerpt(); ?></div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Записей пока нет.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>