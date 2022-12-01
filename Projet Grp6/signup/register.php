<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body>
<main>
    <form action="index.php?page=register" method="post">
        <h1>Créer un compte</h1>
        <div>
            <label for="username">Nom :</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Mot de Passe :</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="password2">Confirmez votre Mot de Passe : <br>
                <?php
                if(isset($error)){
                    echo $error;
                }
                ?>
            </label>
            <input type="password" name="password2" id="password2" required>
        </div>
        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes" required/> J'accepte les 
                <a href="#" title="term of services">conditions d'utilisation</a>
            </label>
        </div>
        <button type="submit">Envoyer</button>
        <footer>Déjà membre ? <a href="index.php?page=login">Se connecter ici</a></footer>
    </form>
    
</main>
</body>
</html>