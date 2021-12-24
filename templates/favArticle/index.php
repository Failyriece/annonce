<?php
 include __DIR__.'/../../templates/header.php';
?>


<h1>Fac</h1>

<?php
foreach($favoris->list as $value):
?>
  <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $value->annonce_title ?></h5>
            <p class="card-text"><?= $value->annonce_text ?></p>
        </div>
    </div>

<?php
    endforeach;
?>
<?php
 include __DIR__.'/../../templates/footer.php';
?>