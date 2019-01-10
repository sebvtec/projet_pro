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
}


function connection($pseudo, $mdp){
	$bdd = co();
	$stmt = $bdd->prepare("
		SELECT *
		FROM utilisateurs
		WHERE pseudo = :pseudo
		AND motDePasse = :mdp
	");
    $stmt->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $stmt->bindParam(':mdp', $mdp, PDO::PARAM_STR);
	$stmt->execute();
	return $stmt;
}

