<?php
include 'db_connect.php'; // fichier contenant le code de connexion

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_utilisateur = $_POST['nom_utilisateur'];
    $prenom_utilisateur = $_POST['prenom_utilisateur'];
    $email = $_POST['email'];
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_BCRYPT); // Hachage du mot de passe
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];

    $sql = "INSERT INTO utilisateur (nom_utilisateur, prenom_utilisateur, email, mot_de_passe, adresse, telephone)
            VALUES ('$nom_utilisateur', '$prenom_utilisateur', '$email', '$mot_de_passe', '$adresse', '$telephone')";

    if ($conn->query($sql) === TRUE) {
        echo "Nouvel enregistrement créé avec succès";
        header("Location: liste_utilisateur.php");
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


