<!doctype html>
<html>

    <head>

        <meta charset="utf-8"/>
        <meta name="author" content"Pablo Sosin"/>
        <meta name="description" content="A description of your page here"/>
        <meta name="keywords" content="keywords, that, summarize, the, type of, content, that, is on, this, page"/>
        
        <!-- Here comes the page's title that should be equal to the header 1 contents. -->
        <title>
            <?php bloginfo('name'); ?>
        </title>
        
        <!-- This defines the link to the css file -->

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
         
    </head>

    <body>
        <header>
            <a href="<?php bloginfo('url'); ?>" title="Home">
                <?php bloginfo('name'); ?>
            </a>
        </header>
        <nav>
            <?php wp_nav_menu(); ?>
        </nav>