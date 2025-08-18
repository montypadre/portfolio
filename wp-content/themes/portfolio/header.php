<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php portfolio_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header wrapper header__wrapper">
        <a class="header__home" href="/">
            <?php echo esc_html(get_field('homepage_initials')); ?>
        </a>
    </header>

    <main id="content" role="main">