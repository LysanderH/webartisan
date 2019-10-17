<?php get_header(); ?>
    <main role="main" aria-label="Contenu principal du site">

        <!--  Les derniers articles  -->
        <section class="adarticle-box article-box--articles" aria-labelledby="latest-aticles">
            <h2 class="article-box__heading" id="latest-aticles">Les derniers articles</h2>
            <?php get_template_part('./partials/contents/loop', 'articles'); ?>
        </section><!-- Les derniers articles  -->
        <p class="tagline">
            Êtes-vous un passioné du web? Et vous avez des idées que vous voulez nous transmettre? Alors contactez nous.
        </p>
        <section class="article-box article-box--tutoriels" aria-labelledby="latest-tutorials"><!--  Les derniers tutoriels  -->
            <h2 class="article-box__heading" id="latest-tutorials">Les derniers tutoriels</h2>
            <?php get_template_part('./partials/contents/loop', 'tutorials'); ?>
        </section><!--  Les derniers tutoriels  -->
        <blockquote class="citation">
            <p class="citation__content">Telnet, tel chien</p>
            <cite class="citation__origin">Michel Drucker</cite>
        </blockquote>
        <section class="article-box article-box--tutoriels" aria-labelledby="latest_talks"><!--  Forum  -->
            <h2 class="article-box__heading" id="latest_talks">Les derniers sujets du forum</h2>
            <?php get_template_part('./partials/contents/loop', 'forum'); ?>
        </section><!--  Forum  -->
    </main>
<?php get_footer(); ?>