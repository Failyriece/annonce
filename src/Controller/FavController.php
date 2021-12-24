<?php

function index(){
include __DIR__.'/../Entity/Annonces.php';
    
//recuperer l'ID
$fav = $_POST['id'];
//Recuperer l'annonce correspondante
$annonce = Annonces::retrieveById($fav, SimpleOrm::FETCH_ONE);


include __DIR__.'/../Entity/ListAnnonce.php';
//POINT SPECIAL : Creez Tableau d'annonce qui va contenir toute les annonces favorites
if(!isset($_COOKIE['favoris'])){
    $favoris = new ListAnnonce();
    $favoris->list=[];
}else{
    $favoris = json_decode($_COOKIE['favoris']);
    // FAVORIS LISTE [   ANNINCE [  ID   ]    ]
    foreach($favoris->list as $value){
        if($value->id == $_POST['id']){
            die();
        }
    }
}

array_push($favoris->list, $annonce);
$favoris = json_encode($favoris);
setcookie("favoris", $favoris, -1, '/');
//Creez le cookie

// Ameliorer notre code : Si le cookie existe deja MODIFIER LE POINT SPECIAL

// MODIFIER LE COOKIE

// AFFICHER 

    // Stocke les fav dans un fichier stocké chez les client 

   // $texte=json_encode($annonce));
    // setcookie('fav', $texte,-1,'/');
    
    //include __DIR__.'/../../templates/addArticle/index.php';
}
