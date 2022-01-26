

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../../sixteen/public/img/<?php echo $tattoo[0]->image; ?>" id="icon" alt="User Icon" />
    </div>

    <form action="modif-<?php echo $tattoo[0]->id; ?>-done" method="POST">
        <input type="text" id="id" name="id" value="<?php echo $tattoo[0]->id; ?>" hidden>
        <div>
            <label for="nom">Nom Image</label>
            <input type="text" id="nom" class="fadeIn second" name="nom" value="<?php echo $tattoo[0]->image; ?>" disabled>
        </div>
        <div>
            <label for="artiste">Artiste</label><br>
            <select id="artiste" name="artiste" aria-label="Default select example">
                <option <?php echo ($tattoo[0]->artiste=="jay")?'selected':null; ?> value="jay">Jay Dencre</option>
                <option <?php echo ($tattoo[0]->artiste=="octo")?'selected':null; ?> value="octo">Octopium.Ink</option>
            </select>
        </div>
        <div>
            <label for="date">Date de création</label>
            <input type="date" id="date" class="fadeIn second" name="date"  value="<?php echo $tattoo[0]->date; ?>">
        </div>
        <div>
            <label for="alt">Alt</label><br>
            <input type="text" id="alt" class="fadeIn third" name="alt" value="<?php echo $tattoo[0]->alt; ?>">
        </div>
        <input type="submit" class="fadeIn fourth" value="Modifier"><a class="btn btn-primary" href="home">Retour sur la page Home</a>
    </form>

  </div>
</div>
