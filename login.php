<?php
// login.php
// Logic for handling login goes here

echo '<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/body.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="compte_utilisateur.php">Créer Compte Utilisateur</a></li>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="historique.php">Historique</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>

        <h1>Se connecter</h1>
        <form id = "registration-form" action="loginn.php" method="post">
            <label for="nom_utilisateur">Nom d\'utilisateur:</label>
            <input type="text" id="nom_utilisateur" name="nom_utilisateur" required><br>
            <label for="mot_de_passe">Mot de passe:</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required><br>
            <input type="submit" value="Se connecter">
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Votre Entreprise</p>
    </footer>
</body>
</html>';
?>
