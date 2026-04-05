<?php get_header(); ?>

<?php get_sidebar(); ?>

<main class="main-content">
    <h2><?php the_archive_title(); ?></h2>
    <div><?php the_archive_description(); ?></div>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post-item">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div><?php the_excerpt(); ?></div>
        </article>
    <?php endwhile; else : ?>
        <p>В архиве пока нет записей.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>