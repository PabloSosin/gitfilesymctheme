<?php get_header(); ?>

    <div id="main">
        <div id="article_list">
            <h2>This is a Category Archive page</h2>
        <?php
            // Load in dynamic post content

            // create a 'while' loop to give instructions to 
            // WordPress about what to do if it finds posts in the 
            // database.

            while(have_posts()):
                the_post();
            ?>

            <article>

                <!-- display each post title  -->
                <h1>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?></h1>
                    </a>

                <!-- display article content -->
                <?php the_excerpt(); ?> 
                <p>
                    <a href="<?php the_permalink(); ?>">Read more...</a>
                </p>
            </article>

            <?php
            endwhile;
            ?>
            <!-- This is the function to generate links to next or previous pages -->
            <?php posts_nav_link(); ?>

        </div> <!-- # article_list  -->
        
        <?php get_sidebar(); ?>

    </div> <!-- #main -->

<?php get_footer(); ?>
