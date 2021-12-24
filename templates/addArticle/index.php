<?php
 include __DIR__.'/../../templates/header.php';

 
?>

<form method="POST" action="/save" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="annonceImg" class=<?php if (!empty($_GET['img']) && $_GET['img'] == 'vide') {echo "text-danger";} ?>>Image</label>
    <input class="form-control" type="file" name="annonceImg" id="annonceImg" accept="image/png, image/jpeg">
  </div>
  <div class="form-group">
    <label for="titleAnnonce" class=<?php if (!empty($_GET['title']) && $_GET['title'] == 'vide') {echo "text-danger";} ?>>Title</label>
    <input name="titleAnnonce" type="text" class="form-control" id="titleAnnonce" aria-describedby="title" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="annonceContent" class=<?php if (!empty($_GET['annonce']) && $_GET['annonce'] == 'vide') {echo "text-danger";} ?> >Content</label>
    <textarea name="annonceContent" class="form-control" id="annonceContent" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
 include __DIR__.'/../../templates/footer.php';
?>