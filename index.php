<?php
include 'model/model.php';

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Array(array(
    'index' => 'Hello {{ name }}!',
));

$loader = new Twig_Loader_Filesystem('view');


$twig = new Twig_Environment($loader);

$connection = 'newView/connection.html.twig';


if(!isset($_POST['routage'])) {
    $_POST['routage'] = 'index';
}


if(isset($_POST['nom'])) {
    register();
}

// var_dump($_SESSION); NONNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN

switch ($_POST['routage']) {
    case 'index':
        echo $twig->render('newView/accueil.html.twig');
        break;
    case 'connection':
        echo $twig->render($connection);
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
                $_SESSION = null;
                $_SESSION['id'] = $id;
                $_SESSION['pseudo'] = $pseudo;
                
                echo $twig->render('newView/mon_garage.html.twig', array('session' => $_SESSION));
            }
        }
        break;
    case 'mention':
        echo $twig->render('newView/mentions_legals.html.twig');
        break;
    case 'inscription':
        echo $twig->render('newView/inscription.html.twig');
        break;
    case 'pass_perdu':
        echo $twig->render('newView/pass_perdu.html.twig');
        break;
    case 'accueil':
        echo $twig->render('newView/accueil.html.twig');
        break;
    case 'inscriptionToBdd':
        register();
        echo $twig->render('newView/accueil.html.twig');
        break;
    case 'connectionToBDD':
        register();
        echo $twig->render('newView/accueil.html.twig');
        break;

    case 'makeDeconnection':
        session_destroy();
        echo $twig->render('newView/accueil.html.twig');
        break;
}

