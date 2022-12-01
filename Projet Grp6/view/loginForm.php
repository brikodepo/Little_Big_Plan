<form action="index.php?page=login" method="POST">
    <?php
        if(isset($error)){
            echo $error;
        }
    ?>
    Enter e-mail address: <br>
    <input type="email" placeholder= "Adresse e-mail" value="" name="email"><br>
    Enter password: <br>
    <input type="password" placeholder= "Mot de Passe" value="" name="password"><br>
    <input type="submit" value="Submit">
</form>