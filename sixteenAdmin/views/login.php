<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/Sanstitr.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="home" method="POST">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login" required>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
      <input type="submit" class="fadeIn fourth" value="Log In"><a class="btn btn-primary" href="../../sixteen/public">Retour sur Sixteen Tattoo Shop</a>
    </form>
    <?php if ($param == "identifiant") { ?>
        <div class="alert alert-warning" role="alert">
        Mauvais identifiant !
        </div>
    <?php }elseif ($param == "mdp") { ?>
        <div class="alert alert-warning" role="alert">
        Mauvais mot de passe !
        </div>
    <?php }elseif ($param == "inexistant") { ?>
        <div class="alert alert-warning" role="alert">
        identifiant ou mot de passe inexistant !
        </div>
    <?php }elseif ($param == "deco") { ?>
        <div class="alert alert-primary" role="alert">
        Vous êtes déconnecté !
        </div>
    <?php }?>
    
  </div>
</div>
