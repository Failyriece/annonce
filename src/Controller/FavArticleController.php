<?php

function index(){
    if(isset($_COOKIE['favoris'])){
        $favoris = json_decode($_COOKIE['favoris']);
        include __DIR__.'/../../templates/favArticle/index.php';
    }


}
