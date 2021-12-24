<?php

function index(){
    
    include __DIR__.'/../Entity/Annonces.php';
    $annonces = Annonces::all();
    
    include __DIR__.'/../../templates/listAnnonce/index.php';
}
