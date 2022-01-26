<div class="produitDetailsContainer">
    <?php foreach ($info as $val) {?>
    <img class="produitDetailsThumbmail" src="img/<?php echo $val->image; ?>">
    <div class="produitDetailsContainer2">
        <div class="produitDetailsDescription">
            <h2 class="produitDetailsTitre"><?php echo $val->nom; ?></h2>
            <h1><?php echo $val->prix; ?> €</h3>
            <hr class="hrProduitDetail">
            <p><?php echo $val->descriptif; ?></p>
        </div>
        <button class="boutonAjoutPanier"><a class="buttonShopDetails" href="panier-add-<?php echo $val->id; }?>">Ajouter au panier</a></button>
    </div>
</div>
<div>
    <hr>
    <div class="produitDetailsContainer3">
        <div>
            <h1 id="crossProduct">Ces produits peuvent vous intéresser.</h1>
            <hr>
            <div class="randomProduitGrid">
                <?php foreach ($random as $val) {?>
                <div class="box">
                    <a href="shop-<?php echo  $val->id; ?>"><img class="thumbmailRandomProduit" src="img/<?php echo $val->image; ?>" alt=""></a>
                    <h3 id="randomProduitTitre"><?php echo $val->nom; ?></h3>
                    <p><?php echo $val->prix; ?> €</p>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="caracteristiqueProduit">
            <h1 id="crossProduct">Caractéristique</h1>
            <hr>
            <div class="caracteristique">
            
            <?php foreach ($info as $val) {
                if ($val->id_categorie==1) {?>
                    <p class="carac">Couleur : <?php echo $val->couleur; ?></p>
                    <p class="carac">Matière : <?php echo $val->matiere; ?></p>
                    <p class="carac">Taille : Voici les tailles choisi concernant nos vétements vendus-><a href="https://www.simonjersey.com/fr/guide-des-tailles-unisexe-i772" target="_blank">Cliquez içi!</a></p>
            <?php }elseif($val->id_categorie==2){?>
                    <p class="carac">Dimension : <?php echo $val->dimension; ?></p>
                    <p class="carac">Poids : <?php echo $val->poids;?></p>
                    <p class="carac">Couleur : <?php echo $val->couleur; ?></p>
                    <p class="carac">Matière : <?php echo $val->matiere; ?></p>
            <?php }elseif($val->id_categorie==3){?>
                    <p class="carac">Diamètre : <?php echo $val->diametre; ?> mm</p>
                    <p class="carac">Matière : <?php echo $val->matiere; ?></p>
                    <p class="carac">Couleur : <?php echo $val->couleur; ?></p>
            <?php }elseif($val->id_categorie==4){?>
                    <p class="carac">Dimension : <?php echo $val->dimension; ?></p>
                    <p class="carac">Poids : <?php echo $val->poids; ?></p>
                    <p class="carac">Couleur : <?php echo $val->couleur; ?></p>
                    <p class="carac">Matière : <?php echo $val->matiere; ?></p>
            <?php }elseif($val->id_categorie==5){?>
                    <p class="carac"></p>
                    <p class="carac"></p>
                    <p class="carac"></p>
            <?php }else{
                    echo "";
                }
                }?>
            </div>
        </div>
    </div>
</div>