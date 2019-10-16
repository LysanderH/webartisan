<?php get_header(); ?>
    <main role="main" aria-label="Contenu principal du site">

        <!--  Les derniers articles  -->
        <?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!--    --><?php //endwhile; else : ?>
        <!--    <p>--><?php //esc_html_e('Sorry, no posts matched your criteria.'); ?><!--</p>-->

        <!--    --><?php //endif; ?>
        <!--  Citation  -->
        <!-- -->
        <!--        --><?php //if (have_rows('content')) : while (have_rows('content')) : the_row(); ?>
        <!--            --><?php //include 'inc/' . get_row_layout() . '.php'; ?>
        <!--        --><?php //endwhile; endif; ?>


        <section class="article-box article-box--articles" aria-labelledby="latest-aticles"><!--  Les derniers articles  -->
            <h2 class="article-box__heading" id="latest-aticles">Les derniers articles</h2>
            <article class="main-article" aria-label="Les 8 bonnes raisons d'abandonner Photoshop">
                <h3 class="main-article__heading">Les 8 bonnes raisons d'abandonner Photoshop</h3>
                <span class="main-article__tag">Design</span>
                <div class="main-article__main">
                    <p class="main-article__excerpt">En avril dernier, nous avions lancé un sondage concernant votre outil de design préféré en 2019. À notre grande surprise, un quart d'entre vous utilisait…</p>
                    <div class="main-article__meta">
                        <img src="" alt="" class="main-article__profile">
                        <span class="main-article__author">Ipsum</span>
                        <time datetime="2019-05-15">15 Mai 2019</time>
                    </div>
                </div>
                <a href="" class="main-article__link">Lire plus<span class="sro"> sur l'article "Les 8 bonnes raisons d'abandonner Photoshop"</span></a>
            </article>
            <article class="main-article" aria-label="Flexbox ou Grid Layout ?">
                <h3 class="main-article__heading">Flexbox ou Grid Layout ?</h3>
                <span class="main-article__tag">CSS</span>
                <div class="main-article__main">
                    <p class="main-article__excerpt">Ces dernières années, les deux avancées majeures de CSS dans le domaine du positionnement se nomment respectivement "Flexbox" et "Grid Layout". Incomparablement…</p>
                    <div class="main-article__meta">
                        <img src="" alt="" class="main-article__profile">
                        <span class="main-article__author">Raphaël</span>
                        <time datetime="2019-05-15">15 Mai 2019</time>
                    </div>
                </div>
                <a href="" class="main-article__link">Lire plus<span class="sro"> sur "Flexbox ou Grid Layout ?"</span></a>
            </article>
            <article class="main-article" aria-label="Données sémantiques, structurées et associées, le choix JSON-LD">
                <h3 class="main-article__heading">Données sémantiques, structurées et associées, le choix JSON-LD</h3>
                <span class="main-article__tag"></span>
                <div class="main-article__main">
                    <p class="main-article__excerpt">Nous savons bien que dans la multitude d'informations que présentent nos pages Web, certaines sont de première importance et doivent être lisibles et…</p>
                    <div class="main-article__meta">
                        <img src="" alt="" class="main-article__profile">
                        <span class="main-article__author">jojaba</span>
                        <time datetime="2019-05-15">15 Mai 2019</time>
                    </div>
                </div>
                <a href="" class="main-article__link">Lire plus<span class="sro"> sur "Données sémantiques, structurées et associées, le choix JSON-LD"</span></a>
            </article>
        </section><!-- Les derniers articles  -->
        <p class="tagline">
            Êtes-vous un passioné du web? Et vous avez des idées que vous voulez nous transmettre? Alors contactez nous.
        </p>
        <section class="article-box article-box--tutoriels" aria-labelledby="latest-tutorials"><!--  Les derniers tutoriels  -->
            <h2 class="article-box__heading" id="latest-tutorials">Les derniers tutoriels</h2>
            <article class="main-article" aria-label="Inspecter un DOM qui bouge">
                <h3 class="main-article__heading">Inspecter un DOM qui bouge</h3>
                <span class="main-article__tag">HTML</span>
                <div class="main-article__main">
                    <p class="main-article__excerpt">Avez-vous déjà tenté d'inspecter un document HTML, pour dénicher des bugs ou examiner sa conception, alors même que sa structure change... à cause de JavaScript ?</p>
                    <div class="main-article__meta">
                        <img src="" alt="" class="main-article__profile">
                        <span class="main-article__author">Rodolphe</span>
                        <time datetime="2019-05-15">15 Mai 2019</time>
                    </div>
                </div>
                <a href="" class="main-article__link">Lire plus<span class="sro"> sur "Inspecter un DOM qui bouge"</span></a>
            </article>
            <article class="main-article" aria-label="Flexbox ou Grid Layout ?">
                <h3 class="main-article__heading">Flexbox ou Grid Layout ?</h3>
                <span class="main-article__tag">CSS</span>
                <div class="main-article__main">
                    <p class="main-article__excerpt">Les deux modèles de positionnement comptent parmi les spécifications officielles du W3C destinées à être pérennes et complémentaires.</p>
                    <div class="main-article__meta">
                        <img src="" alt="" class="main-article__profile">
                        <span class="main-article__author">Raphael</span>
                        <time datetime="2019-05-15">15 Mai 2019</time>
                    </div>
                </div>
                <a href="" class="main-article__link">Lire plus<span class="sro"> sur "Flexbox ou Grid Layout ?"</span></a>
            </article>
            <article class="main-article" aria-label="Flexbox ou Grid Layout ?">
                <h3 class="main-article__heading">Flexbox ou Grid Layout ?</h3>
                <span class="main-article__tag">CSS</span>
                <div class="main-article__main">
                    <p class="main-article__excerpt">Les deux modèles de positionnement comptent parmi les spécifications officielles du W3C destinées à être pérennes et complémentaires.</p>
                    <div class="main-article__meta">
                        <img src="" alt="" class="main-article__profile">
                        <span class="main-article__author">Raphael</span>
                        <time datetime="2019-05-15">15 Mai 2019</time>
                    </div>
                </div>
                <a href="" class="main-article__link">Lire plus<span class="sro"> sur "Flexbox ou Grid Layout ?"</span></a>
            </article>
        </section><!--  Les derniers tutoriels  -->
        <blockquote class="citation">
            <p class="citation__content">Telnet, tel chien</p>
            <cite class="citation__origin">Michel Drucker</cite>
        </blockquote>
        <section class="article-box article-box--tutoriels" aria-labelledby="latest_talks"><!--  Forum  -->
            <h2 class="article-box__heading" id="latest_talks">Les derniers sujets du forum</h2>
            <article class="main-article" aria-label="Horizontal alignment and centered image and text?">
                <img src="" alt="Photo de profil de iosman123" class="main-article__profile">
                <h3 class="main-article__heading">Horizontal alignment and centered image and text?.</h3>
                <span class="main-article__tag">Débutants</span>
                <span class="main-article__status">[Résolu]</span>
                <div class="main-article__main">
                    <div class="main-article__meta">
                        <span class="main-article__author">iosman123</span>
                        <time datetime="2019-05-15">15 Mai 2019</time>
                    </div>
                </div>
                <a href="" class="main-article__link">Discuter<span class="sro"> sur le sujet "Horizontal alignment and centered image and text?"</span></a>
            </article>
            <article class="main-article" aria-label="Horizontal alignment and centered image and text?">
                <img src="" alt="Photo de profil de iosman123" class="main-article__profile">
                <h3 class="main-article__heading">Horizontal alignment and centered image and text?.</h3>
                <span class="main-article__tag">Débutants</span>
                <span class="main-article__status">[Résolu]</span>
                <div class="main-article__main">
                    <div class="main-article__meta">
                        <span class="main-article__author">iosman123</span>
                        <time datetime="2019-05-15">15 Mai 2019</time>
                    </div>
                </div>
                <a href="" class="main-article__link">Discuter<span class="sro"> sur le sujet "Horizontal alignment and centered image and text?"</span></a>
            </article>
            <article class="main-article" aria-label="Horizontal alignment and centered image and text?">
                <img src="" alt="Photo de profil de iosman123" class="main-article__profile">
                <h3 class="main-article__heading">Horizontal alignment and centered image and text?.</h3>
                <span class="main-article__tag">Débutants</span>
                <span class="main-article__status">[Résolu]</span>
                <div class="main-article__main">
                    <div class="main-article__meta">
                        <span class="main-article__author">iosman123</span>
                        <time datetime="2019-05-15">15 Mai 2019</time>
                    </div>
                </div>
                <a href="" class="main-article__link">Discuter<span class="sro"> sur le sujet "Horizontal alignment and centered image and text?"</span></a>
            </article>
        </section><!--  Forum  -->
    </main>
<?php get_footer(); ?>