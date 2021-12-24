<?php

function index(){
    include __DIR__.'/../Entity/Annonces.php';

    $affiche = $_POST['id'];
    $annonce = Annonces::retrieveById($affiche, SimpleOrm::FETCH_ONE);

    include __DIR__.'/../../templates/justOne/index.php';
}
