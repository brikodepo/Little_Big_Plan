<?php

/*

Objectif :
    Nous on fout rien jusqu'à ce que le voyage soit choisi.
    ensuite après le choix du voyage on met le truc créer un truc sign up/login

*/

session_start();

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'dashboard') {
        include_once ('../controller/dashboard.php');
        
    } else {
        if ($_GET['page'] == 'logout') {
            include_once ('../controller/logout.php');
        } elseif ($_GET['page'] == 'register') {
            include_once('../signup/Database/register.php');
        } elseif($_GET['page'] == 'login'){
            include_once('../signup/Database/login.php');
        } else{
            if (isset($_SESSION['email_login']) && !empty($_SESSION['email_login'])) {
                if ($_GET['page'] == 'endPage') {
                    include_once('../controller/endPage.php');
                } else {
                    echo 'Je n\'ai pas trouvé la page demandée ' . $_GET['page'];
                }
            }  else {
                echo 'Cette page ne vous est pas accessible';
            }
        }
    }
} else {
    echo 'Merci de demander une page';
}