<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "mariage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    // Récupérer l'ID de l'utilisateur à supprimer
    $id_utilisateur = $_POST["id_utilisateur"];

    // Suppression des données
    $sql = "DELETE FROM utilisateur WHERE id_utilisateur='$id_utilisateur'";

    if ($conn->query($sql) === TRUE) {
        echo "Utilisateur supprimé avec succès";
        header("Location: liste_utilisateur.php");
    } else {
        echo "Erreur: " . $conn->error;
    }

    // Fermer la connexion
    $conn->close();
}
?>
