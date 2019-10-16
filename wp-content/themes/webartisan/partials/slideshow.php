<?php
/*
 * Template Name: slideshow
 */
?>
<?php $slides = get_posts('carousel'); ?>
<section class="slideshow" aria-labelledby="slideshow-heading">
    <h2 class="slidshow__heading sro" id="slideshow-heading" role="heading" aria-level="2">Slideshow</h2>
    <button class="slideshow__back replaced replaced--back">Précédent</button>
    <ul class="slideshow__list">
        <?php if ($slides): ?>
            <?php foreach ($slides as $slide): ?>

                <li class="slideshow__element">
                    <article class="slide">
                        <h3 class="slide__heading" role="heading" aria-level="3"><?= $slide->post_title; ?></h3>
                        <div class="slide__main">
                            <?php if (has_post_thumbnail($slide->ID)): ?>
                                <img src="<?= get_the_post_thumbnail_url($slide); ?>">
                            <?php endif; ?>
                            <p class="slide__content">
                                <?= $slide->post_content; ?>
                            </p>
                        </div>
                        <a href="<?= $slide->the_permalink; ?>" class="slide__button button">Lire la suite<span
                                    class="sro"> de l'article <?= $slide->post_title; ?></span></a>
                    </article>
                </li>

            <?php endforeach; ?>
        <?php else: ?>
            <p>Les slides ne peuvent pas être chargé.</p>
        <?php endif; ?>
        <button class="slideshow__back replaced replaced--forward">Suivant</button>
        <ul class="slideshow__nav">
            <?php if ($slides): ?>
                <?php foreach ($slides as $slide): ?>
                    <li class="slideNav__item">
                        <button class="slideNav__button"><?= $slide->post_title; ?></button>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </ul>


</section> <!-- slideshow -->