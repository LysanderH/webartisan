<footer class="footer">
    <nav class="nav nav--footer">
        <ul class="nav__list">
            <h2 class="nav__link">Navigation de pied de page</h2>
            <?php foreach (dw_getMenu('main') as $item): ?>
                <li class="nav__item">
                    <a href="<?= $item->url; ?>" class="nav__link"><?= $item->label; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</footer>
</body>
</html>