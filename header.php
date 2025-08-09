<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanderlust Chronicles - Travel Blog</title>
    <?php wp_head(); ?>

</head>
<body>
    <!-- Search Overlay -->
    <div class="search-overlay" id="searchOverlay"></div>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <a href=<?php bloginfo ("url") ?> class="logo">
                    <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&auto=format&fit=crop&w=70&h=70&q=80" alt="Wanderlust Chronicles Logo" class="logo-image" loading="lazy">
                    <span style="font-size:1.3rem; font-weight:700; letter-spacing:0.5px; text-shadow:0 1px 4px rgba(0,0,0,0.08); white-space:nowrap;">Wanderlust Chronicles</span>
                </a>
                <nav class="nav">
                    <a href="#home">Home</a>
                    <a href="#destinations">Destinations</a>
                    <a href="#guides">Travel Guides</a>
                    <a href="#photography">Photography</a>
                    <a href="#about">About</a>
                    <a href="#contact">Contact</a>
                </nav>
                <div class="search-container">
                    <div class="search-toggle" id="searchToggle">
                        <i class="fas fa-search"></i>
                        <span>Search</span>
                    </div>
                    <div class="search-box" id="searchBox">
                        <form class="search-form">
                            <input type="text" class="search-input" placeholder="Search destinations, guides, tips...">
                            <button type="submit" class="search-button">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                        <div class="search-suggestions">
                            <span class="search-suggestion">Bali</span>
                            <span class="search-suggestion">Switzerland</span>
                            <span class="search-suggestion">Japan</span>
                            <span class="search-suggestion">Photography</span>
                            <span class="search-suggestion">Budget Travel</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <!-- <section class="hero" id="home">
        <div class="hero-content">
            <h1>Discover the World</h1>
            <p>Join us on extraordinary journeys to breathtaking destinations around the globe. From hidden gems to iconic landmarks, we share stories that inspire wanderlust.</p>
            <a href="#blog" class="cta-button">Start Exploring</a>
        </div>
    </section> -->