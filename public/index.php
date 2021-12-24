<?php
//Routeur

// la partie de l'URL après l'adresse du site


if (!isset($_SERVER['PATH_INFO'])) {
    $path="";
}

if (isset($_SERVER['PATH_INFO'])) {
    $path=$_SERVER['PATH_INFO'];
}


if ($path==''){
    include __DIR__.'/../src/Controller/HomeController.php';
    index(); //Renvoyer la vue du formulaire de connexion
} else if ($path=='/add'){
    include __DIR__.'/../src/Controller/AddController.php';
    index(); //Renvoyer la vue du formulaire de connexion
} else if ($path=='/save'){
    include __DIR__.'/../src/Controller/SaveController.php';
    verif();
    index(); //Renvoyer la vue du formulaire de connexion
} else if ($path=='/annonce'){
    include __DIR__.'/../src/Controller/AnnonceController.php';
    index(); //Renvoyer la vue du formulaire de connexion
} else if ($path=='/fav'){
    include __DIR__.'/../src/Controller/FavController.php';
    index(); //Renvoyer la vue du formulaire de connexion
} else if ($path=='/favArticle'){
    include __DIR__.'/../src/Controller/FavArticleController.php';
    index(); //Renvoyer la vue du formulaire de connexion
} else if ($path=='/deleteCookie'){
    include __DIR__.'/../src/Controller/DeleteCookie.php';
    index(); //Renvoyer la vue du formulaire de connexion
} else if ($path=='/justOne'){
    include __DIR__.'/../src/Controller/JustOneController.php';
    index(); //Renvoyer la vue du formulaire de connexion
}



?>