<?php
include __DIR__ . "/../Entity/Annonces.php";

function verif()
{
  
$error = "";
  if ($_FILES['annonceImg']['error'] != 0) {
    $error="&img=vide";
  }

  if(empty($_POST['titleAnnonce']))  {
    $error=$error."&title=vide";
    
  }

  if(empty($_POST['annonceContent']))  {
    $error=$error."&annonce=vide";
     
  }


  if(empty($_POST['titleAnnonce']) || empty($_POST['annonceContent']) || $_FILES['annonceImg']['error'] != 0){

    header("LOCATION: /add?error=1".$error);
    die();
  }

}

function index()
{

  $annonces = new Annonces();
  $annonces->annonce_title =  $_POST['titleAnnonce'];
  $annonces->annonce_text = $_POST['annonceContent'];
  $annonces->annonce_imgName = $_FILES['annonceImg']['name'];
  move_uploaded_file($_FILES['annonceImg']['tmp_name'],"img/".$_FILES['annonceImg']['name']);
  $annonces->save();
}
