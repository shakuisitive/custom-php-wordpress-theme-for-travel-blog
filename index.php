<?php get_header();
get_search_form();
?>

    <!-- Main Content -->
    <div class="container">
        <div class="main-layout">
            <main class="main-content">
                <!-- Blog Posts -->
                <section class="blog-posts" id="blog">
                    <h2 class="section-title">Latest Adventures</h2>
                    <div class="posts-grid">

            <?php
            $args = array(
                'post_type' => 'post',
                'paged' =>  max(1, get_query_var('paged'))
            );
            $query = new WP_Query($args);

                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        ?>
   <div class="article-card">
    <h2 class="article-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>

    <div class="article-meta">
        <span class="meta-item">
            <i class="fas fa-user"></i>
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                <?php the_author(); ?>
            </a>
        </span>
        <span class="meta-item">
            <i class="fas fa-calendar-alt"></i>
            <?php echo get_the_date(); ?>
        </span>
        <span class="meta-item">
            <i class="fas fa-folder-open"></i>
            <?php the_category(', '); ?>
        </span>
        <?php if (get_the_tags()) : ?>
        <span class="meta-item">
            <i class="fas fa-tags"></i>
            <?php the_tags('', ', '); ?>
        </span>
        <?php endif; ?>
    </div>

    <p class="article-excerpt"><?php the_excerpt(); ?></p>
    <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
</div>

<?php
                    }
                }
            ?>
                    
<?php
wp_reset_postdata();
?>
                    </div>

                </section>
                <div class="wrapper_for_pagination">
<?php  


echo paginate_links(
    array(
        'prev_text'          => "Previous",
        'next_text'          => "Next",
        )
        );
?>
        
        
    </div> 
    <!-- Newsletter -->
                <section class="newsletter">
                    <div class="container">
                        <h3>Never Miss an Adventure</h3>
                        <p>Subscribe to our newsletter and get the latest travel stories, tips, and exclusive destination guides delivered to your inbox.</p>
                        <form class="newsletter-form">
                            <input type="email" class="newsletter-input" placeholder="Enter your email address" required>
                            <button type="submit" class="newsletter-button">Subscribe</button>
                        </form>
                    </div>
                </section>
            </main>

            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="widget">
                    <h3 class="widget-title">About Wanderlust</h3>
                    <div class="widget-content">
                        <p>Welcome to Wanderlust Chronicles, where every journey tells a story. We're passionate travelers sharing authentic experiences, practical tips, and hidden gems from around the world. Join our community of adventurers and discover your next great escape.</p>
                    </div>
                </div>

                <div class="widget">
                    <h3 class="widget-title">Popular Destinations</h3>
                    <ul class="popular-posts">
                        <li class="popular-post">
                            <img src="https://images.unsplash.com/photo-1570077188670-e3a8d69ac5ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=60&h=60&q=80" alt="Santorini" class="popular-post-image" loading="lazy">
                            <div class="popular-post-content">
                                <h4>Santorini, Greece</h4>
                                <p>Stunning sunsets and white-washed villages</p>
                            </div>
                        </li>
                        <li class="popular-post">
                            <img src="https://images.unsplash.com/photo-1537953773345-d172ccf13cf1?ixlib=rb-4.0.3&auto=format&fit=crop&w=60&h=60&q=80" alt="Bali" class="popular-post-image" loading="lazy">
                            <div class="popular-post-content">
                                <h4>Bali, Indonesia</h4>
                                <p>Tropical paradise with rich culture</p>
                            </div>
                        </li>
                        <li class="popular-post">
                            <img src="https://images.unsplash.com/photo-1531366936337-7c912a4589a7?ixlib=rb-4.0.3&auto=format&fit=crop&w=60&h=60&q=80" alt="Patagonia" class="popular-post-image" loading="lazy">
                            <div class="popular-post-content">
                                <h4>Patagonia, Chile</h4>
                                <p>Dramatic landscapes and pristine wilderness</p>
                            </div>
                        </li>
                        <li class="popular-post">
                            <img src="https://plus.unsplash.com/premium_photo-1673415819362-c2ca640bfafe?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Morocco" class="popular-post-image" loading="lazy">
                            <div class="popular-post-content">
                                <h4>Marrakech, Morocco</h4>
                                <p>Vibrant souks and ancient architecture</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="widget">
                    <h3 class="widget-title">Travel Categories</h3>
                    <div class="tag-cloud">
                        <a href="#" class="tag">Adventure</a>
                        <a href="#" class="tag">Beach</a>
                        <a href="#" class="tag">Culture</a>
                        <a href="#" class="tag">Food</a>
                        <a href="#" class="tag">Photography</a>
                        <a href="#" class="tag">Wildlife</a>
                        <a href="#" class="tag">Mountains</a>
                        <a href="#" class="tag">Cities</a>
                        <a href="#" class="tag">Luxury</a>
                        <a href="#" class="tag">Budget</a>
                    </div>
                </div>

                <div class="widget">
                    <h3 class="widget-title">Travel Tips</h3>
                    <div class="widget-content">
                        <ul style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 12px; padding-left: 32px; position: relative;">
                                <i class="fas fa-plane" style="position: absolute; left: 0; top: 4px; color: var(--primary-color);"></i>
                                Book flights on Tuesday for better deals
                            </li>
                            <li style="margin-bottom: 12px; padding-left: 32px; position: relative;">
                                <i class="fas fa-passport" style="position: absolute; left: 0; top: 4px; color: var(--primary-color);"></i>
                                Check visa requirements 3 months ahead
                            </li>
                            <li style="margin-bottom: 12px; padding-left: 32px; position: relative;">
                                <i class="fas fa-shield-alt" style="position: absolute; left: 0; top: 4px; color: var(--primary-color);"></i>
                                Always get travel insurance
                            </li>
                            <li style="margin-bottom: 12px; padding-left: 32px; position: relative;">
                                <i class="fas fa-map-marked-alt" style="position: absolute; left: 0; top: 4px; color: var(--primary-color);"></i>
                                Download offline maps before traveling
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="widget">
                    <h3 class="widget-title">Follow Our Journey</h3>
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>

<?php get_footer(); ?>