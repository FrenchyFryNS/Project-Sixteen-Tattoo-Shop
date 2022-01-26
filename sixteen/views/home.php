    <!-- Bannière -->
    <div class="banner">
        <img class="logo" src="img/logo.png" alt="Sixteen Tattoo Shop">
        <button><a href="contact">Nous-contactez</a></button>
    </div>
    <!-- Bannière -->
    
    <div class="heroA">
        <div class="heroAHalf1">
            <h1 id="titreHeroA">Sixteen Tattoo Shop, qui-sommes nous ?</h1>
            <p>Sixteen Tattoo Shop à été crée à Gournay<sup>s</sup>/Marne par Gérald Langet en 2018, tatoué depuis ses 21 ans et fréquentant beaucoup ce milieu, il change de vie à 40 ans pour réalisé son rêve. Gérald compte aujourd'hui une apprentie dans ses rangs, Alexiane, diplômée d'une école de métiers d'arts. Un tatouage réussi est une tatouage qui va bien vieillir, avec des traits qui ne fusent pas, un dessin contrasté et qui le reste malgré "l'oeuvre" naturelle (UV) du temps.
            <br>Il faut savoir être à l'écoute de ses clients. Les conseiller mais aussi leur dire non quand il est estimé que l'oeuvre vieillira mal. Un projet se réalise AVEC le client, comprendre ce qu'il imagine.
            <br>vous pouvez être sur qu'à Sixteen Tattoo Shop vous repartirez avec un souvenir impérissable encrée ad vitam aeternam sur votre peau.</p>
        </div>
        <div class="heroAHalf2">
            <video class="heroPhotoA" src="img/video.mp4" muted loop autoplay></video>
        </div>
    </div>
    <div class="containerB">
        <h1 id="titreHeroB">Les Artistes</h1>
        <div class="heroB">
            <div class="heroBHalf">
                <img class="heroPhotoB" src="img/IMG_6358.jpg" alt="tatoueur">
                <h2 class="nomArtiste">Jay Dencre</h2>
                <p class="shortDescriptionArtiste">Tattoué depuis mes 21 ans et fréquentant beaucoup le milieu, je décide à changer de vie à 40 ans. 
                    <br> Je deviens tatoueur en 2013. J'ai appris essentiellement auprès de mon ami Jems Tatts. 
                    <br> J'ai travaillé dans 3 magasins avant d'ouvrir ma propre boutique "Sixteen Tattoo Shop" en 2018 à Gournay <sup>s</sup>/Marne (93)
                </p>
                <div class="artistesButtons">
                    <button><a href="artistes#jay">En savoir plus</a></button>
                    <a href="https://www.facebook.com/JayDencre/" target="_blank"><img class="icons" src="img/icons/facebook.svg" alt="facebook"></a>
                    <a href="https://www.instagram.com/jay77410/" target="_blank"><img class="icons" src="img/icons/instagram.svg" alt="instagram"></a>
                </div>
            </div>
            <div class="heroBHalf">
                <img class="heroPhotoB" src="img/0E6E9637-.jpg" alt="tatoueur">
                <h2 class="nomArtiste">Octopium_Ink</h2>
                <p class="shortDescriptionArtiste">Diplôméé d'une école de métiers d'arts et meilleure apprentie de France en 2012, j'ai toujours été intéressée par les domaines artistique comme le dessin, la peinture, le moulage et la sculture en majeur partie.
                <br>Après avoire travaillé dans divers domaines, plus variés les uns que les autres me voilà lancée dans la grandre aventure du tatouage.</p>
                <div class="artistesButtons">
                    <button><a href="artistes#octo">En savoir plus</a></button>
                    <a href="https://www.facebook.com/JayDencre/" target="_blank"><img class="icons" src="img/icons/facebook.svg" alt="facebook"></a>
                    <a href="https://www.instagram.com/jay77410/" target="_blank"><img class="icons" src="img/icons/instagram.svg" alt="instagram"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="containerCarousel">
        <h1 id="titreHeroC">Tatouage récent</h1>
        <div id="carousel" class="autoplay">
        <?php foreach($tattoo as $val){ ?>
            <img class="carouselImg" src="img/<?php echo $val->image; ?>" alt="<?php echo $val->alt; ?>">
        <?php }?>
        </div>
        <button><a href="galerie">Voir plus</a></button>
    </div>
    <div class="containerCarousel">
        <h1 id="titreHeroC">Boutique</h1>
        <div class="containerShopHome">
            <?php foreach($categorie as $val){ ?>
                <div class="heroDHalf">
                    <a href="shop-categorie-<?php echo $val->id; ?>"><img class="heroPhotoD" src="img/<?php echo $val->image; ?>"></a>
                    <h1><?php echo $val->categorie; ?></h1>
                </div>
            <?php }?>
        </div>
        <button><a href="shop">Voir toutes les Produits</a></button>
    </div>