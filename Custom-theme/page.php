<?php get_header(); // Include the navigation bar and header ?>

<div class="theme-container">
    <div class="content-area">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            endwhile;
        else :
            ?>
            <p>No content found</p>
        <?php
        endif;
        ?>
    </div>
</div>

<?php get_footer(); // Include the footer ?>
