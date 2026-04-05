<?php get_header(); ?>

<?php get_sidebar(); ?>

<main class="main-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
        </article>

        <?php comments_template(); ?>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>