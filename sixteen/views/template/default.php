<!DOCTYPE html>
<html lang="en">
<head>
    <base href="sixteen">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1024px)" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="js/vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="js/vendor/slick/slick-theme.css"/>
    
    <title>Sixteen Tattoo Shop</title>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <a href="home" class="logo">
            <img src="img/logo.png" alt="Sixteen Tattoo Shop" id="logo">
        </a>
        <nav role="navigation">
            <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
                <ul class="nav_link" id="menu">
                    <li><a href="artistes">Les Artistes</a></li>
                    <li><a href="galerie">Galerie</a></li>
                    <li><a href="shop">Boutique</a></li>
                    <li><a href="panier">Panier</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Header -->
    
    <!-- Main content -->
    <?php echo $contenu; ?>
    <!-- Main content -->

    <!-- Footer -->
    <footer>
        <div class="footer">
            <a href="home" class="logoFooter">
                <img class="logoFooter" src="img/logo.png" alt="Sixteen Tattoo Shop">
            </a>
            <p class="copyright">@Sixteen Tattoo Shop</p>
        </div>
    </footer>
    <!-- Footer -->
    
    <!-- Curseur -->
    <img class="cursor" src="img/pointer.png" alt="">
    <!-- Curseur -->
    
    <!-- JS Script -->
    <script type="text/javascript">
        document.body.style.cursor = 'none';
    </script>
    <script type="text/javascript" src="js/cursor.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/vendor/slick/slick.min.js"></script>
    <script type="text/javascript">// Slick est une librairie pour faire des carousels facilement et rapidement
        $('.autoplay').slick({
            slidesToShow: 3, //img à montrer
            slidesToScroll: 1, //nb d'image par défilement
            autoplay: true, //lecture auto
            autoplaySpeed: 2000, //vitesse lecture auto
            dots: true, //point pour chaque image
            adaptiveHeight: true, //adapte le carousel à la taille de/des images à montrer
            centerMode: true, // centre par rapport à l'image au milieu
            centerPadding: '60px', //montre légerement les images a faire défiler
            responsive: [ //responsive
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
        
    </script>
</body>
</html>