<a class="btn btn-primary" href="add">Nouveau Tattoo</a>
<a class="btn btn-danger" href="home-deco">Déconnexion</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Artiste</th>
      <th scope="col">Date</th>
      <th scope="col">Alt</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($tattoo as $val) { ?>
    <tr>
      <th scope="row"><?php echo $val->id; ?></th>
      <td><img class="images" src="../../sixteen/public/img/<?php echo $val->image; ?>" alt=""></td>
      <td><?php echo $val->artiste; ?></td>
      <td><?php echo $val->date; ?></td>
      <td><?php echo $val->alt; ?></td>
      <td><a class="mx-auto btn btn-warning" href="modif-<?php echo $val->id; ?>">X</a></td>
      <td><a class="btn btn-danger" href="delet-<?php echo $val->id; ?>">X</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>