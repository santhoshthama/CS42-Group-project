<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backstage - The place to get hired for feature films</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        .header {
            background: white;
            padding: 20px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.08);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .nav-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .nav-top {
            display: flex;
            justify-content: center;
            gap: 40px;
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .nav-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 40px;
            align-items: center;
        }

        .nav-links .nav-button {
            background: #f0f0f0;
            padding: 8px 16px;
            border-radius: 6px;
            color: #333;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .nav-links .nav-button:hover {
            background: #e0e0e0;
        }

        .nav-links .nav-button.active {
            background: #333;
            color: white;
        }

        .nav-links .nav-link {
            text-decoration: none;
            color: #666;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .nav-links .nav-link:hover {
            color: #333;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .sign-in {
            color: #666;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .sign-in:hover {
            color: #333;
        }

        .post-job {
            background: #4285f4;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.2s ease;
        }

        .post-job:hover {
            background: #3367d6;
        }

        .hero {
            max-width: 1200px;
            margin: 80px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .hero-content h1 {
            font-size: 48px;
            font-weight: bold;
            line-height: 1.2;
            margin-bottom: 40px;
        }

        .feature-films {
            color: #4285f4;
        }

        .stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        .stat {
            display: flex;
            flex-direction: column;
        }

        .stat-number {
            font-size: 32px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 12px;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .join-now {
            background: #4285f4;
            color: white;
            padding: 15px 30px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            display: inline-block;
            transition: background 0.3s ease;
        }

        .join-now:hover {
            background: #3367d6;
        }

        .hero-image {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            height: 400px;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
        }

        .stage-scene {
            position: relative;
            width: 100%;
            height: 100%;
            background: radial-gradient(ellipse at center top, rgba(100, 200, 255, 0.3) 0%, rgba(0, 50, 100, 0.8) 70%);
            overflow: hidden;
        }

        .stage-lights {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            height: 80px;
            background: linear-gradient(90deg, 
                transparent 0%, 
                rgba(255, 255, 255, 0.6) 20%, 
                rgba(255, 255, 255, 0.9) 50%, 
                rgba(255, 255, 255, 0.6) 80%, 
                transparent 100%);
            opacity: 0.9;
            border-radius: 0 0 50% 50%;
        }

        .light-beam {
            position: absolute;
            top: 60px;
            left: 50%;
            transform: translateX(-50%);
            width: 200px;
            height: 300px;
            background: linear-gradient(180deg, 
                rgba(255, 255, 255, 0.4) 0%, 
                rgba(255, 255, 255, 0.1) 50%,
                rgba(255, 255, 255, 0.05) 100%);
            clip-path: polygon(40% 0%, 60% 0%, 90% 100%, 10% 100%);
            opacity: 0.8;
        }

        .stage-floor {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 40%;
            background: linear-gradient(180deg, rgba(50, 100, 150, 0.4) 0%, rgba(30, 60, 100, 0.7) 100%);
        }

        .silhouette {
            position: absolute;
            bottom: 0;
            background: #000;
            opacity: 0.8;
        }

        .silhouette-1 {
            left: 15%;
            width: 25px;
            height: 120px;
            border-radius: 20px 20px 0 0;
        }

        .silhouette-2 {
            left: 25%;
            width: 22px;
            height: 110px;
            border-radius: 15px 15px 0 0;
        }

        .silhouette-3 {
            left: 35%;
            width: 28px;
            height: 125px;
            border-radius: 25px 25px 0 0;
        }

        .silhouette-4 {
            right: 35%;
            width: 26px;
            height: 115px;
            border-radius: 20px 20px 0 0;
        }

        .silhouette-5 {
            right: 25%;
            width: 24px;
            height: 120px;
            border-radius: 18px 18px 0 0;
        }

        .silhouette-6 {
            right: 15%;
            width: 27px;
            height: 118px;
            border-radius: 22px 22px 0 0;
        }

        .brands {
            text-align: center;
            margin: 80px auto;
            max-width: 1200px;
            padding: 0 20px;
        }

        .brands h3 {
            font-size: 16px;
            color: #666;
            margin-bottom: 40px;
            font-weight: 500;
        }

        .brand-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 60px;
            flex-wrap: wrap;
        }

        .brand-logo {
            color: #ccc;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .opportunities {
            background: white;
            padding: 80px 20px;
        }

        .opportunities-content {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .opportunities h2 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .opportunities p {
            font-size: 18px;
            color: #666;
            margin-bottom: 60px;
        }

        .job-categories {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            margin-bottom: 60px;
        }

        .job-category {
            text-align: center;
        }

        .category-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #333;
        }

        .category-count {
            font-size: 14px;
            color: #666;
        }

        .browse-jobs {
            background: #f8f9fa;
            color: #666;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            display: inline-block;
            transition: all 0.2s ease;
            border: 1px solid #e9ecef;
        }

        .browse-jobs:hover {
            background: #e9ecef;
            color: #333;
        }

        .featured {
            background: #f8f9fa;
            padding: 80px 20px;
        }

        .featured-content {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .featured h2 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .featured-subtitle {
            color: #666;
            margin-bottom: 60px;
        }

        .job-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .job-card {
            background: white;
            border-radius: 8px;
            padding: 30px;
            text-align: left;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            position: relative;
        }

        .job-card.urgent::after {
            content: 'URGENT';
            position: absolute;
            top: 15px;
            right: 15px;
            background: #dc3545;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 10px;
            font-weight: bold;
        }

        .job-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #333;
        }

        .job-type {
            color: #4285f4;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .job-location {
            color: #666;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .job-details {
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .job-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .job-posted {
            color: #666;
            font-size: 12px;
        }

        .apply-btn {
            background: #4285f4;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            display: block;
            text-align: center;
            transition: background 0.2s ease;
        }

        .apply-btn:hover {
            background: #3367d6;
        }

        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .nav {
                flex-direction: column;
                gap: 20px;
            }

            .nav-links {
                gap: 20px;
            }

            .hero {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
                margin: 40px auto;
            }

            .hero-content h1 {
                font-size: 36px;
            }

            .job-categories {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }

            .job-cards {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .brand-logos {
                gap: 30px;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="nav-container">
                <div class="nav-top">
                    <a href="#" class="nav-button" onclick="setActive(this)">Find Jobs</a>
                    <a href="#" class="nav-button" onclick="setActive(this)">Find Talent</a>
                </div>
                <div class="nav-bottom">
                    <a href="#" class="logo">BACKSTAGE</a>
                    <ul class="nav-links">
                        <li><a href="#" class="nav-link">Resources</a></li>
                        <li><a href="#" class="nav-link">Agents</a></li>
                    </ul>
                    <div class="nav-actions">
                        <a href="#" class="sign-in">Sign in</a>
                        <a href="#" class="post-job">Post a Job</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>The place to get hired for <span class="feature-films">feature films</span></h1>
                <div class="stats">
                    <div class="stat">
                        <div class="stat-number">65+</div>
                        <div class="stat-label">Years of industry trust</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">1k+</div>
                        <div class="stat-label">Casting directors counting</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">14k+</div>
                        <div class="stat-label">New roles monthly</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">280k+</div>
                        <div class="stat-label">Searching for talent</div>
                    </div>
                </div>
                <a href="#" class="join-now">Join Now</a>
            </div>
            <div class="hero-image">
                <div class="stage-scene">
                    <div class="stage-lights"></div>
                    <div class="light-beam"></div>
                    <div class="stage-floor"></div>
                    <div class="silhouette silhouette-1"></div>
                    <div class="silhouette silhouette-2"></div>
                    <div class="silhouette silhouette-3"></div>
                    <div class="silhouette silhouette-4"></div>
                    <div class="silhouette silhouette-5"></div>
                    <div class="silhouette silhouette-6"></div>
                </div>
            </div>
        </section>

        <section class="brands">
            <h3>Trusted by top brands & studios</h3>
            <div class="brand-logos">
                <div class="brand-logo">Disney</div>
                <div class="brand-logo">YouTube</div>
                <div class="brand-logo">Hulu</div>
                <div class="brand-logo">FX</div>
                <div class="brand-logo">HBO</div>
                <div class="brand-logo">Amazon</div>
            </div>
        </section>

        <section class="opportunities">
            <div class="opportunities-content">
                <h2>Endless opportunities, unlimited submissions</h2>
                <p>Explore thousands of open jobs</p>
                <div class="job-categories">
                    <div class="job-category">
                        <div class="category-title">Feature Films</div>
                        <div class="category-count">1,700+ roles</div>
                    </div>
                    <div class="job-category">
                        <div class="category-title">TV Shows</div>
                        <div class="category-count">7,800+ roles</div>
                    </div>
                    <div class="job-category">
                        <div class="category-title">Commercials</div>
                        <div class="category-count">5,400+ roles</div>
                    </div>
                    <div class="job-category">
                        <div class="category-title">Modeling</div>
                        <div class="category-count">1,800+ roles</div>
                    </div>
                </div>
                <div class="job-categories">
                    <div class="job-category">
                        <div class="category-title">Voiceover</div>
                        <div class="category-count">800+ roles</div>
                    </div>
                    <div class="job-category">
                        <div class="category-title">UGC</div>
                        <div class="category-count">2,100+ roles</div>
                    </div>
                    <div class="job-category">
                        <div class="category-title">Crew</div>
                        <div class="category-count">4,200+ roles</div>
                    </div>
                    <div class="job-category">
                        <div class="category-title">Theater</div>
                        <div class="category-count">600+ roles</div>
                    </div>
                </div>
                <a href="#" class="browse-jobs">Browse All Jobs</a>
            </div>
        </section>

        <section class="featured">
            <div class="featured-content">
                <h2>Featured Opportunities</h2>
                <p class="featured-subtitle">Hand-picked roles from top productions currently casting. Apply today and get noticed by industry professionals.</p>
                <div class="job-cards">
                    <div class="job-card urgent">
                        <div class="job-title">Doom and Desire Part 1</div>
                        <div class="job-type">Feature Film</div>
                        <div class="job-location">Los Angeles, CA</div>
                        <div class="job-details">$800 + potential</div>
                        <div class="job-meta">
                            <div class="job-posted">Last Day - Supporting</div>
                            <div class="job-posted">Featured</div>
                        </div>
                        <a href="#" class="apply-btn">Apply Now</a>
                    </div>
                    <div class="job-card">
                        <div class="job-title">Netflix Original Series</div>
                        <div class="job-type">TV Series</div>
                        <div class="job-location">Atlanta, GA</div>
                        <div class="job-details">$1,500 + residuals</div>
                        <div class="job-meta">
                            <div class="job-posted">Recurring - Guest Star</div>
                            <div class="job-posted">Featured</div>
                        </div>
                        <a href="#" class="apply-btn">Apply Now</a>
                    </div>
                    <div class="job-card urgent">
                        <div class="job-title">National Commercial Campaign</div>
                        <div class="job-type">Commercial</div>
                        <div class="job-location">New York, NY</div>
                        <div class="job-details">$5,500 + 13th</div>
                        <div class="job-meta">
                            <div class="job-posted">Principal - Featured</div>
                            <div class="job-posted">Featured</div>
                        </div>
                        <a href="#" class="apply-btn">Apply Now</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div>© Backstage</div>
    </footer>

    <script>
        // Function to set active button
        function setActive(element) {
            // Remove active class from all nav buttons
            document.querySelectorAll('.nav-button').forEach(btn => {
                btn.classList.remove('active');
            });
            // Add active class to clicked button
            element.classList.add('active');
        }

        // Add smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add subtle animations on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.job-card, .job-category').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });

        // Add hover effects for job cards
        document.querySelectorAll('.job-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 8px 25px rgba(0,0,0,0.15)';
                this.style.transition = 'all 0.3s ease';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 2px 8px rgba(0,0,0,0.05)';
            });
        });

        // Simulate stage lighting animation
        const stageLight = document.querySelector('.stage-lights');
        if (stageLight) {
            let opacity = 0.9;
            let increasing = false;
            
            setInterval(() => {
                if (increasing) {
                    opacity += 0.05;
                    if (opacity >= 1) increasing = false;
                } else {
                    opacity -= 0.05;
                    if (opacity <= 0.7) increasing = true;
                }
                stageLight.style.opacity = opacity;
            }, 100);
        }
    </script>
</body>
</html>