<?php

include_once ('modele/User.php');

$myUser = new User(); //Création d'un nouvel utilisateur

$myUser->setFirstName('Roger'); //Insertion du prénom de l'utilisateur
$myUser->setLastName('Laporte'); //Insertion du nom de famille de l'utilisateur
$myUser->setEmail('roger.laporte@gmail.com'); //Insertion de l'e-mail de l'utilisateur

$fname = $myUser->getFirstName();
$lname = $myUser->getLastName();
$email = $myUser->getEmail();

echo "L'addresse mail de $fname $lname est $email <br>"; 
echo hash('sha256', 'mdp'). '<br>';

$myUser->setPassword('mdp'); //Insertion du mot-de-passe qui est directement haché par la fonction hash

$loginPass = 'mdp';

if ($myUser->checkPassword($loginPass)) {
    echo 'Mon mot de passe est valide';
} else {
    echo 'Ce n\'est pas le bon mot de passe';
}