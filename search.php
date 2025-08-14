<?php get_header();

?>

    <!-- Main Content -->
    <div class="container">
        <div class="main-layout">
            <main class="main-content">
                <!-- Featured Post -->
                <!-- <section class="featured-section">
                    <h2 class="section-title">Featured Adventure</h2>
                    <article class="featured-post">
                        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&h=400&q=80" alt="Swiss Alps" class="featured-image">
                        <div class="featured-content">
                            <div class="post-meta">
                                <div class="author-info">
                                    <img src="https://images.unsplash.com/photo-1600188768149-f27db3bc6ef9?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Sarah Johnson" class="author-avatar">
                                    <span class="author-name">Sarah Johnson</span>
                                </div>
                                <div class="meta-details">
                                    <span class="post-date">
                                        <i class="far fa-calendar"></i>
                                        March 15, 2024
                                    </span>
                           
                                </div>
                            </div>
                            <h3 class="featured-title">The Ultimate Guide to Hiking the Swiss Alps</h3>
                            <p class="featured-excerpt">Embark on a breathtaking journey through the majestic Swiss Alps, where snow-capped peaks meet pristine alpine lakes. This comprehensive guide covers everything from the best hiking trails to essential gear, local customs, and hidden mountain huts that offer authentic Swiss hospitality.</p>
                            <div class="post-tags">
                                <a href="#" class="tag">Switzerland</a>
                                <a href="#" class="tag">Hiking</a>
                                <a href="#" class="tag">Alps</a>
                                <a href="#" class="tag">Adventure</a>
                            </div>
                            <a href="#" class="read-more">
                                Read Full Story
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </section> -->

                <!-- Blog Posts -->
                <section class="blog-posts" id="blog">
                    <h2 class="section-title">Search results for the query "<?php echo get_search_query(); ?>"</h2>
                    <div class="posts-grid">

            <?php

                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        ?>
<?php

if(get_post_type() === "post"){
    ?>
        <div>
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>">Read More</a>
                    </div>
    <?php
}

?>
<?php
                    }
                }
            ?>
                    
<?php
wp_reset_postdata();
?>



       
<!-- 
                        <article class="post-card">
                            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&auto=format&fit=crop&w=350&h=220&q=80" alt="Street Food" class="post-image" loading="lazy">
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="author-info">
                                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&auto=format&fit=crop&w=32&h=32&q=80" alt="Lisa Park" class="author-avatar">
                                        <span class="author-name">Lisa Park</span>
                                    </div>
                                    <div class="meta-details">
                                        <span class="post-date">
                                            <i class="far fa-calendar"></i>
                                            March 5, 2024
                                        </span>
                             
                                    </div>
                                </div>
                                <h3 class="post-title">Street Food Adventures in Bangkok</h3>
                                <p class="post-excerpt">Dive into the vibrant street food scene of Bangkok, where every corner offers a new culinary adventure. From pad thai to mango sticky rice, taste the authentic flavors.</p>
                                <div class="post-categories">
                                    <a href="#" class="category">Food</a>
                                    <a href="#" class="category">Culture</a>
                                </div>
                                <div class="post-tags">
                                    <a href="#" class="tag">Thailand</a>
                                    <a href="#" class="tag">Street Food</a>
                                    <a href="#" class="tag">Culinary</a>
                                </div>
                            </div>
                        </article>

                        <article class="post-card">
                            <img src="https://images.unsplash.com/photo-1516426122078-c23e76319801?ixlib=rb-4.0.3&auto=format&fit=crop&w=350&h=220&q=80" alt="Safari Adventure" class="post-image" loading="lazy">
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="author-info">
                                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=32&h=32&q=80" alt="James Wilson" class="author-avatar">
                                        <span class="author-name">James Wilson</span>
                                    </div>
                                    <div class="meta-details">
                                        <span class="post-date">
                                            <i class="far fa-calendar"></i>
                                            March 3, 2024
                                        </span>
                            
                                    </div>
                                </div>
                                <h3 class="post-title">Safari Adventures in Kenya</h3>
                                <p class="post-excerpt">Witness the incredible wildlife of the Maasai Mara, from the Great Migration to the Big Five. An unforgettable journey into the heart of Africa's wilderness.</p>
                                <div class="post-categories">
                                    <a href="#" class="category">Wildlife</a>
                                    <a href="#" class="category">Safari</a>
                                </div>
                                <div class="post-tags">
                                    <a href="#" class="tag">Kenya</a>
                                    <a href="#" class="tag">Wildlife</a>
                                    <a href="#" class="tag">Photography</a>
                                </div>
                            </div>
                        </article>

                        <article class="post-card">
                            <img src="https://images.unsplash.com/photo-1522383225653-ed111181a951?ixlib=rb-4.0.3&auto=format&fit=crop&w=350&h=220&q=80" alt="Cherry Blossoms" class="post-image" loading="lazy">
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="author-info">
                                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&auto=format&fit=crop&w=32&h=32&q=80" alt="Yuki Tanaka" class="author-avatar">
                                        <span class="author-name">Yuki Tanaka</span>
                                    </div>
                                    <div class="meta-details">
                                        <span class="post-date">
                                            <i class="far fa-calendar"></i>
                                            March 1, 2024
                                        </span>
                                 
                                    </div>
                                </div>
                                <h3 class="post-title">Cherry Blossom Season in Japan</h3>
                                <p class="post-excerpt">Experience the ethereal beauty of sakura season in Japan. From Tokyo's bustling parks to Kyoto's serene temples, discover the best spots for hanami.</p>
                                <div class="post-categories">
                                    <a href="#" class="category">Culture</a>
                                    <a href="#" class="category">Nature</a>
                                </div>
                                <div class="post-tags">
                                    <a href="#" class="tag">Japan</a>
                                    <a href="#" class="tag">Sakura</a>
                                    <a href="#" class="tag">Spring</a>
                                </div>
                            </div>
                        </article> -->
                    </div>

                </section>
                <div class="wrapper_for_pagination">
<?php  
echo paginate_links(
    array(
        'prev_text'          => __( 'Prev' ),
        'next_text'          => __( 'Next' ),

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