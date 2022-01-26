<!-- Bannière -->
<div class="bannerGalerie">
    <h1 class="bannerTitre">Galerie</h1>
</div>
<!-- Bannière -->

<div class="containerCarousel" id="jay">
    <h1 class="titreHeroC">Tatouage de Jay Dencre</h1>
    <div class="grille">
        <?php foreach($jay as $val) {?>
            <img class="grid-item" src="img/<?php echo $val->image; ?>">
        <?php } ?>
    </div>
</div>
    
<div class="containerCarouselB" id="octo">
    <h1 class="titreHeroC">Tatouage d'Octopium_Ink</h1>
    <div class="grille">
        <?php foreach($octo as $val) {?>
            <img class="grid-item" src="img/<?php echo $val->image; ?>">
        <?php } ?>
    </div>
</div>
    