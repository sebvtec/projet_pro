<?php

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Array(array(
    'index' => 'Hello {{ name }}!',
));

$loader = new Twig_Loader_Filesystem('view');

$twig = new Twig_Environment($loader);

//$connection = 'newView/connection.html.twig';
$connection = 'newView/connection.html.twig';


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
        echo $twig->render($connection, array('name' => 'Fabien'));
        break;
    case 'makeConnection':
        if(isset($_POST['pseudoCo']) && isset($_POST['mdpCo'])) {
            $pseudo = htmlspecialchars($_POST['pseudoCo']);
            $mdp = htmlspecialchars($_POST['mdpCo']);
            $res = connection($pseudo, $mdp);

            $id = -99999;

            while($row = $res->fetch()) {
                $id = $row['id'];
            }
            if($id <> -99999) {
                $_SESSION['id'] = $id;
                $_SESSION['pseudo'] = $pseudo;
                
                echo $twig->render('newView/mon_garage.html.twig', array('name' => 'Fabien'));
            }
        }
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

    case 'makeDeconnection':
        echo $twig->render('newView/accueil.html.twig', array('name' => 'Fabien'));
        break;
}

