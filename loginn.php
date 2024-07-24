<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mariage";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}

$nom_utilisateur = $_POST['nom_utilisateur'];
$mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_BCRYPT); // Hachage du mot de passe

// Requête de sélection
$sql = "SELECT `nom_utilisateur`,  `mot_de_passe`FROM `utilisateur`  nom_utilisateur = 'nom_utilisateur' and mot_de_passe = '$mot_de_passe'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "le nom d'utilisateur ou mot de passe incorrect.";
} else {
    echo "connexion reussi";
    }

$conn->close();
            ?>