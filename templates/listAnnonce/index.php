<?php
include __DIR__ . '/../../templates/header.php';
?>


<h1>Annonce</h1>

<?php foreach ($annonces as $annonce) : ?>

    <div class="card" style="width: 18rem;">
        <div class="card-body">  
            <img src=<?= "img/".$annonce->annonce_imgName ?> class="card-img-top" alt="...">
            <h5 class="card-title"><?= $annonce->annonce_title ?></h5>
            <p class="card-text"><?= $annonce->annonce_text ?></p>
            <form method="POST" action="/fav">
                <input name="id" type="hidden" value=<?= $annonce->id ?>>
                <button class="btn btn-dark" type="submit">Ajouter aux favoris</button>
            </form>
            <form method="POST" action="/justOne">
                <input name="id" type="hidden" value=<?= $annonce->id ?>>
                <button class="btn btn-dark" type="submit">Voir l'annonce</button>
            </form>
        </div>
    </div>

<?php endforeach ?>


<?php
include __DIR__ . '/../../templates/footer.php';
?>