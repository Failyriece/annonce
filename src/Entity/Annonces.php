<?php

/*MAPPING de l'ensemble de la table USER */
include_once __DIR__."/../../vendor/SimpleOrm.class.php";

class Annonces extends SimpleOrm {
    public $id;
    public $annonce_title;
    public $annonce_text;
    public $annonce_imgName;
}