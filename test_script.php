<?php
session_start();
//connexion à la base de données//
require "connexion_bdd.php";

// Récupération des login et mdp dans 2 variables//
$login = $_POST["login"];
$password = $_POST["password"];
//$password= password_hash($_POST["password"], PASSWORD_DEFAULT);//
// Création d'une variable pour les messages d'erreur//
$erreur = NULL;
// Vérification que les champs ne sont pas vide//
//var_dump($_POST["login"]);
//var_dump($password);//

    if (empty($login) || empty($password)){
        $erreur = "Veuillez compléter tous les champs";
        include("test.php");
    }
    
//Vérification que login et mdp sont corrects et donc présents dans la bdd//
    elseif (!empty($login) && !empty($password)){
        $requete = $bdd->prepare("SELECT * FROM users WHERE user_login = $login AND user_password = $password");
        $user_OK = $requete->rowcount();
        // Il y a bien une rangée dans la table users qui contient le login et le mdp saisis//
        if ($user_OK == 1){
            // Récupération des infos concernant l'utilisateur dans une variable//
            $user_infos = $requete->fetch();
            // On stocke des infos dans des variables de session //
            $_SESSION["id"] = $user_infos["user_id"];
            $_SESSION["login"] = $user_infos["user_login"];
            header("Location: espace_client.php=" .$_SESSION['id']);
            exit();
        }
        // Le login et/ou le mdp ne sont pas présents dans la mdp, donc message d'erreur//
        else{
            $erreur = "Login ou mot de passe invalide";
            include("test.php");
        }   
    }
   /* else{
       // header("Location: test_script.php");//
       header("Location:test_script.php");
    }*/
    

    ?>