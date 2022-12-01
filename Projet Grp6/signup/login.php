<!DOCTYPE html>
<?php 
    if(isset($error)){
        echo 'Mauvais mot de passe';
    }
?>



<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Login</title>
</head>
<body>
<main>
    <form action="index.php?page=login" method="post">
        <h1>Se connecter</h1>
        <div>
            <label for="email_login">Email :</label>
            <input type="email" name="email_login" id="email_login" required>
            
        </div>
        <div>
            <label for="password_login">Mot de Passe :</label>
            <input type="password" name="password_login" id="password_login" required>
        </div>
        <button type="submit" required>Se connecter</button>
        <footer>Pas inscrit ? <a href="index.php?page=register">Créer un compte</a></footer>
        
    </form>
</main>
</body>
</html>
