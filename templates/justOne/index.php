<?php
 include __DIR__.'/../../templates/header.php';
?>

<img src=<?= "img/".$annonce->annonce_imgName ?> class="w-25" alt="...">

<h1><?= $annonce->annonce_title ?></h1>
<p><?= $annonce->annonce_text ?></p>

<?php
 include __DIR__.'/../../templates/footer.php';
?>