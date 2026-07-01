<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star X — Your Ultimate Cinema Companion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home page.css">
</head>
<body>

    <!-- ==================== NAVBAR ==================== -->
    <nav class="navbar">
        <div class="nav-logo">
            <span class="star-icon">&#9733;</span>
            <span class="logo-text">STAR X</span>
        </div>
        <ul class="nav-links">
            <li><a href="#" class="nav-link active"><span class="nav-icon">&#8962;</span> Home</a></li>
            <li><a href="#" class="nav-link"><span class="nav-icon">&#10549;</span> Trending</a></li>
            <li><a href="#" class="nav-link"><span class="nav-icon">&#9733;</span> Top Rated</a></li>
            <li><a href="#" class="nav-link"><span class="nav-icon">&#9432;</span> About Us</a></li>
        </ul>
        <div class="nav-auth">
            <a href="../home page 2/sign in.php" class="btn-login">Login</a>
            <a href="../home page 2/sign up.php" class="btn-signup">Sign Up</a>
        </div>
        <!-- Mobile hamburger -->
        <button class="hamburger" id="hamburger">&#9776;</button>
    </nav>

    <!-- Mobile nav overlay -->
    <div class="mobile-nav" id="mobileNav">
        <button class="close-mobile-nav" id="closeNav">&#10005;</button>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Trending</a></li>
            <li><a href="#">Top Rated</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="../home page 2/sign in.php">Login</a></li>
            <li><a href="../home page 2/sign up.php">Sign Up</a></li>
        </ul>
    </div>

    <!-- ==================== HERO SECTION ==================== -->
    <section class="hero">
        <div class="hero-content">
            <!-- Trending badge -->
            <div class="trending-badge">
                <span class="fire-icon">&#128293;</span> NOW TRENDING
            </div>

            <!-- Movie title -->
            <h1 class="hero-title">ANIMAL</h1>

            <!-- Description -->
            <p class="hero-desc">
                A brutal, high-voltage cinematic experience where power, loyalty, and revenge<br>
                collide in a storm of emotion and spectacle.
            </p>

            <!-- IMDB rating -->
            <div class="imdb-badge">
                <span class="star-small">&#9733;</span>
                8.1/10 IMDB
            </div>

            <!-- CTA Buttons -->
            <div class="hero-buttons">
                <a href="../home page 2/sign in.php" class="btn-trailer">
                    <span class="play-icon">&#9654;</span> Watch Trailer
                </a>
                <a href="../home page 2/sign in.php" class="btn-review">
                    Read Review &rarr;
                </a>
            </div>

            <!-- Movie thumbnail strip -->
            <div class="movie-strip">
                <div class="strip-item">
                    <img src="John Wick1.jpg" alt="John Wick 4">
                    <p>John Wick 4</p>
                </div>
                <div class="strip-item active">
                    <img src="lbYbFld2xn7WE9fLUML9oD1GuSK.jpg" alt="Animal">
                    <p>Animal</p>
                </div>
                <div class="strip-item">
                    <img src="Fast X2.jpg" alt="Fast X">
                    <p>Fast X</p>
                </div>
                <div class="strip-item">
                    <img src="pTmMxAHqX4vsIDE6HPPxOR0Q6TN.jpg" alt="Jailer">
                    <p>Jailer</p>
                </div>
                <div class="strip-item">
                    <img src="oppenheimer3.jpg" alt="Salaar">
                    <p>Salaar</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== FEATURED MOVIES ==================== -->
    <section class="featured-section">
        <div class="section-header">
            <span class="section-bar"></span>
            <h2 class="section-title">Featured Movies</h2>
        </div>

        <div class="movies-grid">

            <!-- Card 1: John Wick 4 -->
            <div class="movie-card">
                <a href="../home page 2/sign in.php">
                    <div class="card-img-wrap">
                        <img src="John Wick1.jpg" alt="John Wick 4">
                        <div class="card-overlay"></div>
                        <span class="lock-icon">&#128274;</span>
                    </div>
                    <div class="card-info">
                        <div class="card-info-left">
                            <h3>John Wick 4</h3>
                            <p>Action Thriller</p>
                        </div>
                        <div class="card-rating">
                            <span class="star-gold">&#9733;</span> 7.7
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 2: Animal -->
            <div class="movie-card">
                <a href="../home page 2/sign in.php">
                    <div class="card-img-wrap">
                        <img src="lbYbFld2xn7WE9fLUML9oD1GuSK.jpg" alt="Animal">
                        <div class="card-overlay"></div>
                        <span class="lock-icon">&#128274;</span>
                    </div>
                    <div class="card-info">
                        <div class="card-info-left">
                            <h3>Animal</h3>
                            <p>Crime Drama</p>
                        </div>
                        <div class="card-rating">
                            <span class="star-gold">&#9733;</span> 8.1
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 3: Salaar -->
            <div class="movie-card">
                <a href="../home page 2/sign in.php">
                    <div class="card-img-wrap">
                        <img src="oppenheimer3.jpg" alt="Salaar">
                        <div class="card-overlay"></div>
                        <span class="lock-icon">&#128274;</span>
                    </div>
                    <div class="card-info">
                        <div class="card-info-left">
                            <h3>Salaar</h3>
                            <p>Action Epic</p>
                        </div>
                        <div class="card-rating">
                            <span class="star-gold">&#9733;</span> 7.9
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </section>

    <script>
        // Mobile hamburger toggle
        const hamburger = document.getElementById('hamburger');
        const mobileNav = document.getElementById('mobileNav');
        const closeNav = document.getElementById('closeNav');
        hamburger.addEventListener('click', () => mobileNav.classList.add('open'));
        closeNav.addEventListener('click', () => mobileNav.classList.remove('open'));
    </script>
</body>
</html>