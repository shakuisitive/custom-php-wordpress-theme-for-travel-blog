<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanderlust Chronicles - Travel Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #0ea5e9;
            --accent-color: #f59e0b;
            --success-color: #10b981;
            --text-primary: #1f2937;
            --text-secondary: #6b7280;
            --text-light: #9ca3af;
            --bg-primary: #ffffff;
            --bg-secondary: #f8fafc;
            --bg-accent: #f1f5f9;
            --border-color: #e5e7eb;
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-primary);
            background-color: var(--bg-primary);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        .header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 0.5rem 0; /* Reduced padding */
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow-md);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
            min-height: 60px; /* Reduce min height */
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 700;
            text-decoration: none;
            color: white;
            padding: 0 12px 0 0;
            max-width: 260px;
            min-width: 180px;
        }

        .logo-image {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            object-fit: cover;
            border: 2px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 2px 8px rgba(0,0,0,0.10);
            background: #fff;
        }

        .nav {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav a:hover {
            color: var(--accent-color);
        }

        .nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--accent-color);
            transition: width 0.3s ease;
        }

        .nav a:hover::after {
            width: 100%;
        }

        /* Improved Search Box */
        .search-container {
            position: relative;
        }

        .search-toggle {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            padding: 10px 15px;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .search-toggle:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-1px);
        }

        /* Search Box as Modal Overlay */
        .search-box {
            position: fixed;
            top: 10vh;
            left: 50%;
            transform: translateX(-50%);
            min-width: 90vw;
            max-width: 400px;
            background: white;
            border-radius: 16px;
            box-shadow: var(--shadow-xl);
            padding: 40px 32px 32px 32px; /* More padding for comfort */
            opacity: 0;
            visibility: hidden;
            z-index: 1001;
            transition: all 0.3s ease;
            max-height: calc(80vh - 40px);
            overflow-y: auto;
        }
        .search-box.active {
            opacity: 1;
            visibility: visible;
        }
        .search-box::before {
            display: none;
        }
        .search-toggle {
            z-index: 1002;
        }

        .search-form {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        .search-input {
            flex: 1;
            padding: 12px 16px;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            outline: none;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .search-input:focus {
            border-color: var(--primary-color);
        }

        .search-button {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.3s ease;
        }

        .search-button:hover {
            background: var(--secondary-color);
        }

        .search-suggestions {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .search-suggestion {
            background: var(--bg-accent);
            color: var(--text-secondary);
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-suggestion:hover {
            background: var(--primary-color);
            color: white;
        }

        /* Hero Section with Header Image */
        .hero {
            background: linear-gradient(rgba(37, 99, 235, 0.7), rgba(14, 165, 233, 0.7)), url('https://images.unsplash.com/photo-1488646953014-85cb44e25828?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80') center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
        }

        .hero-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            max-width: 600px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .cta-button {
            display: inline-block;
            background: var(--accent-color);
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-lg);
        }

        .cta-button:hover {
            background: #d97706;
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }

        /* Main Layout */
        .main-layout {
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 3rem;
            margin: 4rem 0;
        }

        .main-content {
            min-width: 0;
        }

        /* Featured Section */
        .featured-section {
            margin-bottom: 4rem;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: var(--text-primary);
            position: relative;
            padding-bottom: 1rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            border-radius: 2px;
        }

        .featured-post {
            background: var(--bg-primary);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .featured-post:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .featured-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            display: block;
            background: #e5e7eb;
        }

        .featured-content {
            padding: 2rem;
        }

        .post-meta {
            display: flex;
            align-items: center;
            gap: 1.1em;
            font-size: 0.97rem;
            color: var(--text-secondary);
            margin-bottom: 1rem;
        }
        .author-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
            flex-shrink: 0;
        }
        .author-name {
            font-weight: 600;
            margin-right: 0.2em;
        }
        .post-date {
            display: flex;
            align-items: center;
            gap: 0.3em;
            font-weight: 500;
        }
        .post-date i {
            color: var(--primary-color);
            font-size: 1em;
            margin-right: 0.2em;
        }
        .separator {
            color: var(--text-light);
            font-size: 1.1em;
        }
        .reading-time {
            display: flex;
            align-items: center;
            color: var(--text-light);
            font-size: 0.97em;
            font-weight: 400;
            gap: 0.2em;
        }
        .reading-time i {
            color: var(--text-light);
            font-size: 1em;
            margin-right: 0.2em;
        }
        @media (max-width: 600px) {
            .post-meta {
                flex-wrap: wrap;
                gap: 0.6em;
            }
        }

        .featured-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-primary);
            line-height: 1.3;
        }

        .featured-excerpt {
            font-size: 1.1rem;
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
            line-height: 1.7;
        }

        .post-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 1.5rem;
        }

        .tag {
            background: var(--bg-accent);
            color: var(--primary-color);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .tag:hover {
            background: var(--primary-color);
            color: white;
        }

        .read-more {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .read-more:hover {
            color: var(--secondary-color);
        }

        /* Blog Posts Grid */
        .blog-posts {
            margin-bottom: 4rem;
        }

        .posts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .post-card {
            background: var(--bg-primary);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            transition: all 0.3s ease;
        }

        .post-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .post-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
            background: #e5e7eb;
        }

        .post-content {
            padding: 1.5rem;
        }

        .post-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 0.8rem;
            color: var(--text-primary);
            line-height: 1.3;
        }

        .post-excerpt {
            color: var(--text-secondary);
            margin-bottom: 1rem;
            line-height: 1.6;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .post-categories {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 1rem;
        }

        .category {
            background: linear-gradient(135deg, var(--success-color), #059669);
            color: white;
            padding: 3px 10px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
            text-decoration: none;
        }

        /* Sidebar */
        .sidebar {
            background: var(--bg-secondary);
            border-radius: 12px;
            padding: 2rem;
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        .widget {
            margin-bottom: 2.5rem;
        }

        .widget:last-child {
            margin-bottom: 0;
        }

        .widget-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-primary);
            position: relative;
            padding-bottom: 0.5rem;
        }

        .widget-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 30px;
            height: 2px;
            background: var(--accent-color);
            border-radius: 1px;
        }

        .widget-content {
            color: var(--text-secondary);
            line-height: 1.6;
        }

        .popular-posts {
            list-style: none;
        }

        .popular-post {
            display: flex;
            gap: 12px;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border-color);
        }

        .popular-post:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .popular-post-image {
            width: 70px; /* Increased from 60px */
            height: 70px; /* Increased from 60px */
            border-radius: 10px;
            object-fit: cover;
            display: block;
            background: #e5e7eb;
        }

        .popular-post-content h4 {
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 4px;
            line-height: 1.3;
        }

        .popular-post-content p {
            font-size: 0.8rem;
            color: var(--text-light);
        }

        .tag-cloud {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tag-cloud .tag {
            font-size: 0.8rem;
        }

        .social-links {
            display: flex;
            gap: 12px;
        }

        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }

        /* Newsletter */
        .newsletter {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 3rem 0;
            margin: 4rem 0;
            border-radius: 16px;
            text-align: center;
        }

        .newsletter h3 {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .newsletter p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .newsletter-form {
            display: flex;
            max-width: 400px;
            margin: 0 auto;
            gap: 12px;
        }

        .newsletter-input {
            flex: 1;
            padding: 12px 16px;
            border: none;
            border-radius: 25px;
            outline: none;
            font-size: 1rem;
        }

        .newsletter-button {
            background: var(--accent-color);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .newsletter-button:hover {
            background: #d97706;
        }

        /* Footer */
        .footer {
            background: var(--text-primary);
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h4 {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: var(--accent-color);
        }

        .footer-section p,
        .footer-section li {
            color: #d1d5db;
            line-height: 1.6;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 8px;
        }

        .footer-section ul li a {
            color: #d1d5db;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: var(--accent-color);
        }

        .footer-bottom {
            border-top: 1px solid #374151;
            padding-top: 1rem;
            text-align: center;
            color: #9ca3af;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }

            .nav {
                gap: 1rem;
                flex-wrap: wrap;
                justify-content: center;
            }

            .search-box {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                min-width: 90vw;
                max-width: 400px;
            }

            .search-box.active {
                transform: translate(-50%, -50%);
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1.1rem;
            }

            .main-layout {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .posts-grid {
                grid-template-columns: 1fr;
            }

            .newsletter-form {
                flex-direction: column;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }
        }

        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-secondary);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--secondary-color);
        }

        /* Search Overlay */
        .search-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .search-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Animate elements on scroll - default state is visible */
        .post-card, .widget, .featured-post {
            opacity: 1;
            transform: none;
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        /* Only hide for animation if JS runs */
        body.js-animate .post-card,
        body.js-animate .widget,
        body.js-animate .featured-post {
            opacity: 0;
            transform: translateY(20px);
        }
    </style>
</head>
<body>
    <!-- Search Overlay -->
    <div class="search-overlay" id="searchOverlay"></div>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <a href="#" class="logo">
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
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Discover the World</h1>
            <p>Join us on extraordinary journeys to breathtaking destinations around the globe. From hidden gems to iconic landmarks, we share stories that inspire wanderlust.</p>
            <a href="#blog" class="cta-button">Start Exploring</a>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <div class="main-layout">
            <main class="main-content">
                <!-- Featured Post -->
                <section class="featured-section">
                    <h2 class="section-title">Featured Adventure</h2>
                    <article class="featured-post">
                        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&h=400&q=80" alt="Swiss Alps" class="featured-image">
                        <div class="featured-content">
                            <div class="post-meta">
                                <div class="author-info">
                                    <img src="https://images.unsplash.com/photo-1600188768149-f27db3bc6ef9?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Sarah Johnson" class="author-avatar">
                                    <span>Sarah Johnson</span>
                                </div>
                                <div class="meta-details">
                                    <span class="post-date"><i class="far fa-calendar"></i> March 15, 2024</span>
                                    <span class="reading-time"><i class="far fa-clock"></i> 1 min read</span>
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
                </section>

                <!-- Blog Posts -->
                <section class="blog-posts" id="blog">
                    <h2 class="section-title">Latest Adventures</h2>
                    <div class="posts-grid">
                        <article class="post-card">
                            <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=350&h=220&q=80" alt="Tropical Paradise" class="post-image" loading="lazy">
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="author-info">
                                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=32&h=32&q=80" alt="Mike Chen" class="author-avatar">
                                        <span>Mike Chen</span>
                                    </div>
                                    <div class="meta-details">
                                        <span class="post-date"><i class="far fa-calendar"></i> March 12, 2024</span>
                                        <span class="reading-time"><i class="far fa-clock"></i> 1 min read</span>
                                    </div>
                                </div>
                                <h3 class="post-title">Hidden Beaches of the Maldives</h3>
                                <p class="post-excerpt">Discover secluded paradise islands where crystal-clear waters meet pristine white sand beaches. These hidden gems offer the perfect escape from crowded tourist spots.</p>
                                <div class="post-categories">
                                    <a href="#" class="category">Beach</a>
                                    <a href="#" class="category">Maldives</a>
                                </div>
                                <div class="post-tags">
                                    <a href="#" class="tag">Tropical</a>
                                    <a href="#" class="tag">Paradise</a>
                                    <a href="#" class="tag">Luxury</a>
                                </div>
                            </div>
                        </article>

                        <article class="post-card">
                            <img src="https://images.unsplash.com/photo-1528181304800-259b08848526?ixlib=rb-4.0.3&auto=format&fit=crop&w=350&h=220&q=80" alt="Temple Adventure" class="post-image" loading="lazy">
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="author-info">
                                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=32&h=32&q=80" alt="Emma Rodriguez" class="author-avatar">
                                        <span>Emma Rodriguez</span>
                                    </div>
                                    <div class="meta-details">
                                        <span class="post-date"><i class="far fa-calendar"></i> March 10, 2024</span>
                                        <span class="reading-time"><i class="far fa-clock"></i> 1 min read</span>
                                    </div>
                                </div>
                                <h3 class="post-title">Exploring Ancient Temples of Cambodia</h3>
                                <p class="post-excerpt">Journey through time as we explore the magnificent temples of Angkor Wat and discover the rich history and culture of ancient Khmer civilization.</p>
                                <div class="post-categories">
                                    <a href="#" class="category">Culture</a>
                                    <a href="#" class="category">History</a>
                                </div>
                                <div class="post-tags">
                                    <a href="#" class="tag">Cambodia</a>
                                    <a href="#" class="tag">Temples</a>
                                    <a href="#" class="tag">Heritage</a>
                                </div>
                            </div>
                        </article>

                        <article class="post-card">
                            <img src="https://images.unsplash.com/photo-1531366936337-7c912a4589a7?ixlib=rb-4.0.3&auto=format&fit=crop&w=350&h=220&q=80" alt="Northern Lights" class="post-image" loading="lazy">
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="author-info">
                                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=32&h=32&q=80" alt="David Thompson" class="author-avatar">
                                        <span>David Thompson</span>
                                    </div>
                                    <div class="meta-details">
                                        <span class="post-date"><i class="far fa-calendar"></i> March 8, 2024</span>
                                        <span class="reading-time"><i class="far fa-clock"></i> 1 min read</span>
                                    </div>
                                </div>
                                <h3 class="post-title">Chasing the Northern Lights in Iceland</h3>
                                <p class="post-excerpt">Experience the magic of Aurora Borealis dancing across the Icelandic sky. Learn the best locations, timing, and photography tips for this natural wonder.</p>
                                <div class="post-categories">
                                    <a href="#" class="category">Photography</a>
                                    <a href="#" class="category">Nature</a>
                                </div>
                                <div class="post-tags">
                                    <a href="#" class="tag">Iceland</a>
                                    <a href="#" class="tag">Aurora</a>
                                    <a href="#" class="tag">Winter</a>
                                </div>
                            </div>
                        </article>

                        <article class="post-card">
                            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&auto=format&fit=crop&w=350&h=220&q=80" alt="Street Food" class="post-image" loading="lazy">
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="author-info">
                                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&auto=format&fit=crop&w=32&h=32&q=80" alt="Lisa Park" class="author-avatar">
                                        <span>Lisa Park</span>
                                    </div>
                                    <div class="meta-details">
                                        <span class="post-date"><i class="far fa-calendar"></i> March 5, 2024</span>
                                        <span class="reading-time"><i class="far fa-clock"></i> 1 min read</span>
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
                                        <span>James Wilson</span>
                                    </div>
                                    <div class="meta-details">
                                        <span class="post-date"><i class="far fa-calendar"></i> March 3, 2024</span>
                                        <span class="reading-time"><i class="far fa-clock"></i> 1 min read</span>
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
                                        <span>Yuki Tanaka</span>
                                    </div>
                                    <div class="meta-details">
                                        <span class="post-date"><i class="far fa-calendar"></i> March 1, 2024</span>
                                        <span class="reading-time"><i class="far fa-clock"></i> 1 min read</span>
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
                        </article>
                    </div>
                </section>

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
                            <img src="
                            https://plus.unsplash.com/premium_photo-1673415819362-c2ca640bfafe?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D
                            " alt="Morocco" class="popular-post-image" loading="lazy">
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

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Wanderlust Chronicles</h4>
                    <p>Inspiring travelers to explore the world's most beautiful destinations. From budget backpacking to luxury escapes, we share authentic travel experiences and practical advice to help you plan your next adventure.</p>
                    <div class="social-links" style="margin-top: 1rem;">
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
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Destinations</a></li>
                        <li><a href="#">Travel Guides</a></li>
                        <li><a href="#">Photography</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Popular Destinations</h4>
                    <ul>
                        <li><a href="#">Europe Travel Guide</a></li>
                        <li><a href="#">Southeast Asia Adventures</a></li>
                        <li><a href="#">South America Expeditions</a></li>
                        <li><a href="#">African Safari Tours</a></li>
                        <li><a href="#">Middle East Discoveries</a></li>
                        <li><a href="#">North America Road Trips</a></li>
                        <li><a href="#">Oceania Island Hopping</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Travel Resources</h4>
                    <ul>
                        <li><a href="#">Packing Checklists</a></li>
                        <li><a href="#">Budget Planning Tools</a></li>
                        <li><a href="#">Visa Information</a></li>
                        <li><a href="#">Travel Insurance Guide</a></li>
                        <li><a href="#">Currency Exchange Tips</a></li>
                        <li><a href="#">Language Phrases</a></li>
                        <li><a href="#">Safety Guidelines</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Wanderlust Chronicles. All rights reserved. | Designed with ❤️ for travelers worldwide.</p>
            </div>
        </div>
    </footer>

    <script>
        // Search functionality
        const searchToggle = document.getElementById('searchToggle');
        const searchBox = document.getElementById('searchBox');
        const searchOverlay = document.getElementById('searchOverlay');

        searchToggle.addEventListener('click', function() {
            searchBox.classList.toggle('active');
            searchOverlay.classList.toggle('active');
        });

        searchOverlay.addEventListener('click', function() {
            searchBox.classList.remove('active');
            searchOverlay.classList.remove('active');
        });

        // Close search on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                searchBox.classList.remove('active');
                searchOverlay.classList.remove('active');
            }
        });

        // Search suggestions
        document.querySelectorAll('.search-suggestion').forEach(suggestion => {
            suggestion.addEventListener('click', function() {
                const searchInput = document.querySelector('.search-input');
                searchInput.value = this.textContent;
                searchInput.focus();
            });
        });

        // Search form submission
        document.querySelector('.search-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const searchTerm = this.querySelector('.search-input').value.trim();
            if (searchTerm) {
                console.log('Searching for:', searchTerm);
                alert(`Searching for "${searchTerm}"... (This is a demo)`);
                searchBox.classList.remove('active');
                searchOverlay.classList.remove('active');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Newsletter form submission
        document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('.newsletter-input').value;
            const button = this.querySelector('.newsletter-button');
            const originalText = button.textContent;
            
            // Show loading state
            button.innerHTML = '<span class="loading"></span> Subscribing...';
            button.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                button.innerHTML = '✓ Subscribed!';
                button.style.background = 'var(--success-color)';
                this.querySelector('.newsletter-input').value = '';
                
                setTimeout(() => {
                    button.textContent = originalText;
                    button.disabled = false;
                    button.style.background = 'var(--accent-color)';
                }, 2000);
            }, 1500);
        });

        // Add scroll effect to header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.style.background = 'linear-gradient(135deg, rgba(37, 99, 235, 0.95) 0%, rgba(14, 165, 233, 0.95) 100%)';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.background = 'linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%)';
                header.style.backdropFilter = 'none';
            }
        });

        // Animate elements on scroll (only if JS runs)
        document.body.classList.add('js-animate');
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        document.querySelectorAll('.post-card, .widget, .featured-post').forEach(el => {
            observer.observe(el);
        });

        // Add click handlers for tags and categories
        document.querySelectorAll('.tag, .category').forEach(element => {
            element.addEventListener('click', function(e) {
                e.preventDefault();
                const term = this.textContent;
                console.log(`Filtering by: ${term}`);
                // In a real app, this would filter the posts
            });
        });

        // Add reading time estimation
        document.querySelectorAll('.post-excerpt').forEach(excerpt => {
            const wordCount = excerpt.textContent.split(' ').length;
            const readingTime = Math.ceil(wordCount / 200); // Average reading speed
            const postMeta = excerpt.closest('.post-content').querySelector('.post-meta');
            // Remove any old reading-time and separator
            const oldRT = postMeta.querySelector('.reading-time');
            if (oldRT) oldRT.remove();
            const oldSep = postMeta.querySelector('.separator');
            if (oldSep) oldSep.remove();
            // Add separator
            const sep = document.createElement('span');
            sep.className = 'separator';
            sep.innerHTML = '&middot;';
            postMeta.appendChild(sep);
            // Add reading time
            const readingTimeElement = document.createElement('span');
            readingTimeElement.className = 'reading-time';
            readingTimeElement.innerHTML = `<i class='far fa-clock'></i> ${readingTime} min read`;
            postMeta.appendChild(readingTimeElement);
        });

        console.log('Wanderlust Chronicles loaded successfully! 🌍✈️');
    </script>
</body>
</html>