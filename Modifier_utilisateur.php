<?php
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

    // Récupérer les données du formulaire
    $id_utilisateur = $_POST['id_utilisateur'];
    $nom_utilisateur = $_POST['nom_utilisateur'];
    $prenom_utilisateur = $_POST['prenom_utilisateur'];
    $email = $_POST['email'];
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_BCRYPT); // Hachage du mot de passe
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];

    // Mise à jour des données
    $sql = "UPDATE utilisateur SET id_utilisateur = '$id_utilisateur', nom_utilisateur='$nom_utilisateur', prenom_utilisateur='$prenom_utilisateur', email='$email', adresse='$adresse', mot_de_passe ='$mot_de_passe', telephone='$telephone' WHERE id_utilisateur='$id_utilisateur'";

    if ($conn->query($sql) === TRUE) {
        echo "Données modifiées avec succès";
        header("Location:liste_utilisateur.php");
    } else {
        echo "Erreur: " . $conn->error;
    }

    // Fermer la connexion
    $conn->close();

?>

