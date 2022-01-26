<!-- Bannière -->
<div class="bannerBoutique">
    <h1 class="bannerTitre">Boutique</h1>
</div>
<!-- Bannière -->
<h1 id="titreShop">Produits</h1>
<div class="shopcontainer">
    <aside class="categorie">
        <div class="catTitle">
            <h3 id="catTitle">Catégorie</h3>
            <a id="retourShop" href="shop"><- Tout les produits</a>
        </div>
        <ul class="ulCat">
        <?php foreach($categories as $val){ ?>
            <a class="liA" href="shop-categorie-<?php echo $val->id; ?>"><li class="liCat">- <?php echo $val->categorie; ?></li></a><hr>
        <?php }?>
        </ul>
    </aside>

    <?php if ($produit==NULL) {?> <!-- Si il n'y a pas de produit pour la catégorie correspondante alors ont affiche un message pour en notifier l'utilisateur, sinon ont a des produit pour la catégorie et ont affiche les produits -->
    <h1 id="noProduit">Aucun produit n'est disponible dans cette catégorie</h1> 
    <?php }else { ?>
    <div class="flexShop">
        <div class="containerproduits">
            <?php foreach($produit as $val){ ?>
            <div class="produit">
                <div class="thumbmail">
                    <a href="shop-<?php echo $val->id; ?>"><img id="produithumbmail" src="img/<?php echo $val->image; ?>" alt=""></a>
                </div>
                <div>
                    <p class="nomPrixProduit"><?php echo $val->nom; ?></p>
                    <p class="nomPrixProduit"><?php echo $val->prix; ?> €</p>
                </div>
            </div>
            <?php } ?>  
        </div>
        <nav class="paginationContainer">
            <ul class="pagination">
                <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
                <li class="liPagination">
                    <a href="shop<?php echo $url = ($action_url!==NULL) ? "-".$action_url."-".$id_cat : "";?>?p=<?= $currentPage - 1 ?>"  <?= ($currentPage == 1) ? "hidden" : "" ?>>Précédente</a>
                </li>
                <?php for($page = 1; $page <= $pages; $page++): ?>
                    <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                    <li class="liPagination">
                        <a href="shop<?php echo $url = ($action_url!==NULL) ? "-".$action_url."-".$id_cat : "";?>?p=<?= $page ?>" <?= ($currentPage == $page) ? "active" : "" ?>><?= $page ?></a>
                    </li>
                <?php endfor ?>
                    <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
                    <li class="liPagination">
                    <a href="shop<?php echo $url = ($action_url!==NULL) ? "-".$action_url."-".$id_cat : "";?>?p=<?= $currentPage + 1 ?>"  <?= ($currentPage == $pages) ? "hidden" : "" ?>>Suivante</a>
                </li>
            </ul>
        </nav>
    </div>
    <?php } ?>
</div>