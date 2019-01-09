<?php

session_start();


function co() {
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=hondaref;charset=utf8', 'root', '');
		return $bdd;
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}
}

function register(){

	$bdd = co();


    
    $stmt = $bdd->prepare("INSERT INTO utilisateurs (nom, prenom, pseudo, motDePasse, mail) VALUES (:nom, :prenom, :pseudo, :motDePasse, :mail)");
    $stmt->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
    $stmt->bindParam(':prenom',$_POST['prenom'], PDO::PARAM_STR);
    $stmt->bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
    $stmt->bindParam(':motDePasse', $_POST['passe'], PDO::PARAM_STR);
    $stmt->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);
	$stmt->execute();
	
    //header('Location: accueil.html.twig');
	}



