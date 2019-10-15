
<?php //wp_footer(); ?>
<footer class="footer"><!-- footer -->
    <nav class="nav nav--footer" aria-label="de pied de page">
        <ul class="nav__list">
            <h2 class="nav__link" role="heading" aria-level="2">Navigation de pied de page</h2>
            <?php foreach (dw_getMenu('footer') as $item): ?>
                <li class="nav__item">
                    <a href="<?= $item->url; ?>" class="nav__link"><?= $item->label; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</footer><!-- footer -->
</body>
</html>