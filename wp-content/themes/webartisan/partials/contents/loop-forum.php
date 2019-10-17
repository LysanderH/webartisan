<?php
$loopArticles = new WP_Query(array(
        'post_type' => 'forum',
        'posts_per_page' => 3
    )
);
?>
<?php if ($loopArticles->have_posts()) : while ($loopArticles->have_posts()) : $loopArticles->the_post(); ?>
<article class="main-article" aria-label="<?php the_title(); ?>">
    <img src="" alt="Photo de profil de iosman123" class="main-article__profile">
    <h3 class="main-article__heading">Horizontal alignment and centered image and text?.</h3>
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
    <span class="main-article__status">
        <?php

        ?>
    </span>
    <div class="main-article__main">
        <div class="main-article__meta">
            <img src="<?php print get_avatar_url($user->ID, ['size' => '51']); ?>"
                 alt="avatar de <?php the_author(); ?>" class="main-article__profile">
            <span class="main-article__author"><?php the_author(); ?></span>
            <time datetime="<?= the_date(); ?>"><?= the_date(); ?></time>
        </div>
    </div>
    <a href="" class="main-article__link">Discuter<span class="sro"> sur le sujet "Horizontal alignment and centered image and text?"</span></a>
</article>
<?php endwhile; else : ?>
    <p><?php esc_html_e('Il n’y a pas encore de contenu ici'); ?></p>
<?php endif; ?>