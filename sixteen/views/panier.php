<div class="panier">
    <h1 class="panierTitle">Panier</h1>
    <div class="panierContainer">
        <div class="panierProduit">
                <?php $nbArticles=count($_SESSION['panier']['nomProduit']);
                if ($nbArticles <= 0){
                    ?><p class="noPanier">Votre panier est vide<p><?php
                }else{ ?>
            <table class="tablePanier">
                <thead>
                    <tr>
                        <th class="thPanier">Image</th>
                        <th class="thPanier">Nom</th>
                        <th class="thPanier">Quantité</th>
                        <th class="thPanier">Prix</th>
                        <th class="thPanier">Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i=0 ;$i < $nbArticles ; $i++){ ?>
                    <tr>
                        <td class="tdPanier"><img class="imgPanier" src="img/<?php echo $_SESSION['panier']['imgProduit'][$i]; ?>" alt=""></td>
                        <td class="tdPanier"><?php echo $_SESSION['panier']['nomProduit'][$i]; ?></td>
                        <td class="tdPanier"><?php echo $_SESSION['panier']['qteProduit'][$i]; ?></td>
                        <td class="tdPanier"><?php echo $_SESSION['panier']['prixProduit'][$i]; ?> €</td>
                        <td class="tdPanier"><a class="aPanier" href="panier-delet-<?php echo $_SESSION['panier']['idProduit'][$i] ?>">X</a></td>
                    </tr>
                <?php } } ?>
                </tbody>
            </table>
        </div>
        <?php if ($nbArticles > 0){?>
        <hr style="margin: 0px 30px 10px 30px;">
        <div class="panierPayment">
            <div class="prixTotal">
                <h2>Prix Total :</h2> <h2>30.00€</h2>
            </div>
            <div class="moyenPay">
                <h2>Moyen de paiement :</h2>
                <form action="checkout" method="POST">
                    <div id="radiobutton">
                        <input type="radio" id="pay1"
                        name="pay" value="virement bancaire">
                        <label class="pay" for="pay1">Virement bancaire</label>
                        <br>
                        <input type="radio" id="pay2"
                        name="pay" value="paypal">
                        <label class="pay" for="pay2">Paypal</label>
                        <br>
                        <input type="radio" id="pay3"
                        name="pay" value="dogecoins">
                        <label class="pay" for="pay3">DogeCoins</label>
                    </div>
                    <div>
                        <button type="submit" onclick="return verifPay();">Checkout</button>
                    </div>
                </form>
            </div>
        </div>            
        <?php }?>
    </div>
</div>

<script type="text/javascript">
    function verifPay() {
        if (document.querySelector('#pay1').checked == false & document.querySelector('#pay2').checked == false & document.querySelector('#pay3').checked == false) {
            alert('veuillez selectionnez un moyen de paiement.');
            return false;
        }
        else{
            return true;
        }
    }


</script>