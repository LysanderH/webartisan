<?php get_header(); ?>
    <main role="main" aria-label="Contenu principal du site">

        <!--  Les derniers articles  -->
        <?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!--    --><?php //endwhile; else : ?>
        <!--    <p>--><?php //esc_html_e('Sorry, no posts matched your criteria.'); ?><!--</p>-->

        <!--    --><?php //endif; ?>
        <!--  Citation  -->
        <!---->
        <!--        --><?php //if (have_rows('content')) : while (have_rows('content')) : the_row(); ?>
        <!--            --><?php //include 'inc/' . get_row_layout() . '.php'; ?>
        <!--        --><?php //endwhile; endif; ?>

        <!--  Les derniers tutoriels  -->
        <section class="">
            <h3 class="__heading">Les dernier tutoriels</h3>
            <article class="main-article ">
                <h4 class="main-article__heading"></h4>
                <span class="main-article__tag"></span>
                <div class="main-article__main">
                    <p class="main-article__content"></p>
                    <div class="main-article__meta">
                        <img src="" alt="" class="main-article__profile">
                        <span class="main-article__author"></span>
                        <span class="main-article__date"></span>
                    </div>
                </div>
                <a href="" class="main-article__link">Lire plus<span class="sro">sur <!-- todo: nom de l'article --></span></a>
            </article>
            <article class="main-article">
                <h4 class="main-article__heading"></h4>
                <span class="main-article__tag"></span>
                <div class="main-article__main">
                    <p class="main-article__content"></p>
                    <div class="main-article__meta">
                        <img src="" alt="" class="main-article__profile">
                        <span class="main-article__author"></span>
                        <span class="main-article__date"></span>
                    </div>
                </div>
                <a href="" class="main-article__link">Lire plus<span class="sro">sur <!-- todo: nom de l'article --></span></a>
            </article>
            <article class="main-article">
                <h4 class="main-article__heading"></h4>
                <span class="main-article__tag"></span>
                <div class="main-article__main">
                    <p class="main-article__content"></p>
                    <div class="main-article__meta">
                        <img src="" alt="" class="main-article__profile">
                        <span class="main-article__author"></span>
                        <span class="main-article__date"></span>
                    </div>
                </div>
                <a href="" class="main-article__link">Lire plus<span class="sro">sur <!-- todo: nom de l'article --></span></a>
            </article>
        </section>
        <!--  Êtes-vous un passioné du web? Et vous avez des idées que vous voulez nous transmettre? Alors contactez nous.  -->
        <!--  Forum  -->
        <!--  Les derniers articles  -->
        <!--  Citation  -->
        <!--  Les derniers tutoriels  -->
        <!--  Êtes-vous un passioné du web? Et vous avez des idées que vous voulez nous transmettre? Alors contactez nous.  -->
        <!--  Forum  -->
    </main>
<?php get_footer(); ?>