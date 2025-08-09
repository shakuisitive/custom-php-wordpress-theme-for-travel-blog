<?php get_header(); ?>

<main class="single-post-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <!-- Featured Image -->
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-featured-image">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>
        
        <!-- Post Header -->
        <header class="post-header">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <div class="post-meta">
                <span class="post-date"><?php the_date(); ?></span>
                <span class="post-author">By <?php the_author(); ?></span>
            </div>
        </header>
        
        <!-- Post Content -->
        <div class="post-content">
            <?php the_content(); ?>
        </div>
        
        <!-- Post Footer -->
  
    </article>
    
    <?php endwhile; endif; ?>
  
    <!-- Post Navigation -->
    <div class="post-navigation">
        <div class="nav-previous"><?php previous_post_link('%link', '← Previous Post'); ?></div>
        <div class="nav-next"><?php next_post_link('%link', 'Next Post →'); ?></div>
    </div>

    <?php 
    
    if(comments_open() || get_comments_number()){
        comments_template();
    } else {
        ?>
        <p>Comments closed</p>
        <?php
    }

    ?>
</main>

<?php get_footer(); ?>