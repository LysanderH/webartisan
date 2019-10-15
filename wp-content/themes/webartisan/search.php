<?php
/*
Template Name: Search Page
*/

?>
<?php get_header(); ?>

<section>
    <?php if (have_posts()) : ?>
        <h2>Résultats de votre recherche pour "<?php echo $s ?>"</h2>
        <?php while (have_posts()) : the_post(); ?>
            <section>
                <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="entry">
                    <?php the_content(); ?>
                </div>
            </section>
        <?php endwhile; ?>
        <p align="center"><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') ?>
            | <?php previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p>
    <?php else : ?>
        <p>Leider nichts gefunden</p>
    <?php endif; ?>
</section>

<div id="sidebar">
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
