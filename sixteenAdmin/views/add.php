

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    
    <form action="add" method="POST" enctype="multipart/form-data">
        <div>
            <label for="nom">Image</label><br>
            <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
        <div>
            <label for="artiste">Artiste</label><br>
            <select id="artiste" name="artiste" aria-label="Default select example">
                <option selected value="jay">Jay Dencre</option>
                <option value="octo">Octopium.Ink</option>
            </select>
        </div>
        <div>
            <label for="date">Date de création</label>
            <input type="date" id="date" class="fadeIn second" name="date"  value="" required>
        </div>
        <div>
            <label for="alt">Alt</label><br>
            <input type="text" id="alt" class="fadeIn third" name="alt" value="">
        </div>
        <input type="submit" class="fadeIn fourth" value="Ajouter"><a class="btn btn-primary" href="home">Retour sur la page Home</a>
    </form>
    <?php if ($error == "fileNotUpload") { ?>
        <div class="alert alert-warning" role="alert">
        Désolé, votre image n'a pas été uploader.
        </div>
    <?php }elseif ($error == "errorUpload") { ?>
        <div class="alert alert-warning" role="alert">
        Désolé, il y à eu une erreur lors de l'upload de votre image.
        </div>
    <?php }?>
    
  </div>
</div>
