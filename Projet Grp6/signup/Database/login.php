<?php

include_once('../user/modele/User.php');


if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username'])){

    $mysqlServer = '127.0.0.1';
    $mysqlPort = 3306;
    $mysqlLogin = 'root';
    $mysqlPass = '';
    $mysqlDatabase = 'projet_lbp';

    $connexion = new PDO("mysql:host=$mysqlServer:$mysqlPort;dbname=$mysqlDatabase", $mysqlLogin, $mysqlPass);

    $request = $connexion->prepare('SELECT username, email, password FROM user WHERE email="'.$_POST['email'].'"');
    $request->execute();
    $resultat = $request->fetchAll(PDO::FETCH_ASSOC);
    //print_r($resultat);
    $emailFromDatabase = $resultat[0]['email'];
    $passwordFromDatabase = $resultat[0]['password'];

    // Si on le connais, on vérifie le mot de passe
    if (hash('sha256', $_POST['password_login']) === $passwordFromDatabase) {
        // si le mot de passe est bon on connecte l'utilisateur
        $_SESSION['email_login'] = $emailFromDatabase;

            header('Location: index.php?page=endPage');
              

        } else{
            $error = 'wrong password';
            include_once('../login.php');
            
        }
    
} else{
    
    include_once('../signup/login.php');
} 