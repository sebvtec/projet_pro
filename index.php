<?php

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Array(array(
    'index' => 'Hello {{ name }}!',
));

$loader = new Twig_Loader_Filesystem('view');

$twig = new Twig_Environment($loader);

//var_dump($_POST);

if(!isset($_POST['routage'])) {
    $_POST['routage'] = 'index';
}

include 'model/model.php';
if(isset($_POST['nom'])) {

    register();
}
switch ($_POST['routage']) {
    case 'index':
        echo $twig->render('newView/accueil.html.twig', array('name' => 'Fabien'));
        break;
    case 'connection':
        echo $twig->render('newView/connection.html.twig', array('name' => 'Fabien'));
        break;
    case 'mention':
        echo $twig->render('newView/mentions_legals.html.twig', array('name' => 'Fabien'));
        break;
    case 'inscription':
        echo $twig->render('newView/inscription.html.twig', array('name' => 'Fabien'));
        break;
    case 'pass_perdu':
        echo $twig->render('newView/pass_perdu.html.twig', array('name' => 'Fabien'));
        break;
    case 'accueil':
        echo $twig->render('newView/accueil.html.twig', array('name' => 'Fabien'));
        break;
    case 'inscriptionToBdd':
        register();
        echo $twig->render('newView/accueil.html.twig', array('name' => 'Fabien'));
        break;
    case 'connectionToBDD':
    register();
    echo $twig->render('newView/accueil.html.twig', array('name' => 'Fabien'));
break;
}
!!!!!!
