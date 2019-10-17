<?php
$loopArticles = new WP_Query(array(
        'post_type' => 'tutoriel',
        'posts_per_page' => 3
    )
);
?>
<?php if ($loopArticles->have_posts()) : while ($loopArticles->have_posts()) : $loopArticles->the_post(); ?>
    <article class="main-article" aria-label="<?= the_title(); ?>">
        <h3 class="main-article__heading"><?= the_title(); ?></h3>
        <?php if (has_post_thumbnail()): ?>
            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">
        <?php endif; ?>
        <span class="main-article__tag"><?php
            $categories = get_the_category();
            $separator = ' ';
            $output = '';
            if (!empty($categories)) {
                foreach ($categories as $category) {
                    $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '" alt="' . esc_attr(sprintf('Voir tout les articles de la catégorie', $category->name)) . '">' . esc_html($category->name) . '</a>' . $separator;
                }
                echo trim($output, $separator);
            }
            ?></span>
        <div class="main-article__main">
            <p class="main-article__excerpt"><?= the_excerpt(); ?></p>
            <div class="main-article__meta">
                <img src="<?php print get_avatar_url($user->ID, ['size' => '51']); ?>"
                     alt="avatar de <?php the_author(); ?>" class="main-article__profile">
                <span class="main-article__author"><?php the_author(); ?></span>
                <time datetime="<?= the_date(); ?>"><?= the_date(); ?></time>
            </div>
        </div>
        <a href="<?= the_permalink(); ?>" class="main-article__link">Lire plus<span class="sro"> sur l'article "<?= the_title(); ?>"</span></a>
    </article>
<?php endwhile; else : ?>
    <p><?php esc_html_e('Il n’y a pas encore de contenu ici'); ?></p>
<?php endif; ?>