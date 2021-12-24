<?php

function index(){
    setcookie("favoris", NULL, -1, '/');
    var_dump($_COOKIE);
}
