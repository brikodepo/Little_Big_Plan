<?php

include_once('../user/modele/User.php');

//include_once('../view/voyageForm.html');

if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){

    if(($_POST['password2']) == ($_POST['password'])){

        header('Location: index.php?page=dashboard');
        die;

        $mysqlServer = '127.0.0.1';
        $mysqlPort = 3306;
        $mysqlLogin = 'rookie.alpha9@odst.unsc';
        $mysqlPass = 'IH8R0M30';
        $mysqlDatabase = 'projet_lbp';
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordHash = hash('sha256', $password);


        //$connexion = new PDO("mysql:host=$mysqlServer:$mysqlPort;dbname=$mysqlDatabase", $mysqlLogin, $mysqlPass);

        //$request = $connexion->prepare('SELECT start, destination, date, budget FROM user WHERE email="'.$_POST['email'].'"');
        //$request->execute();

        // Create connection
        $conn = new mysqli($mysqlServer, $mysqlLogin, $mysqlPass, $dbname);
        // Check connection 
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "INSERT INTO user (username, email, password)
        VALUES ($username, $email , $passwordHash)";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
        die;
        
        //print_r($resultat);
        //die;
        
        
        //$emailFromDatabase = $resultat[0]['email'];
        //$passwordFromDatabase = $resultat[0]['password'];

        // Si on le connait, on vérifie le mot de passe
        //if (hash('sha256', $_POST['password']) === $passwordFromDatabase) {
            // si le mot de passe est bon on connecte l'utilisateur
            $_SESSION['email_login'] = $email;

            header('Location: index.php?page=voyage');
                

        // } else{
            //  $error = 'wrong password';
            // include_once('../view/voyageForm.php');
                
        // }
    } else{
        $error = 'Merci d\'entrer le même mot de passe gros tas';
        include_once('../signup/register2.html');
    }
} else{
    include_once('../signup/register.php');
} 