<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">
    <title>
        <?php if (is_front_page() || is_home()) {
            echo get_bloginfo('name');
        } else {
            wp_title('-',true,'right'); bloginfo('name');
        } ?>
    </title>
</head>
<body>
<header class="header">
    <h1>Webartisan</h1>
    <nav class="nav">
        <ul class="nav__list">
            <h2 class="nav__link">Navigation principale</h2>
            <?php foreach (dw_getMenu('main') as $item): ?>
                <li class="nav__item">
                    <a href="<?= $item->url; ?>" class="nav__link"><?= $item->label; ?></a>
                    <?php if (count($item->children)): ?>
                        <ul class="nav__sub">
                            <?php foreach ($item->children as $child): ?>
                                <li class="nav__item">
                                    <a href="<?= $child->url; ?>" class="nav__link"><?= $child->label; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <?php get_search_form(); ?>
</header>