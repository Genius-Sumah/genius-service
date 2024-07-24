<?php
include 'db_connect.php'; // fichier contenant le code de connexion

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_epoux = $_POST['nom_epoux'];
    $lieu_nais_epoux = $_POST['lieu_nais_epoux'];
    $date_nais_epoux = $_POST['date_nais_epoux'];
    $nom_epouse = $_POST['nom_epouse'];
    $lieu_nais_epouse = $_POST['lieu_nais_epouse'];
    $date_nais_epouse = $_POST['date_nais_epouse'];
    $lieu_mariage = $_POST['lieu_mariage'];
    $date_mariage = $_POST['date_mariage'];

    $sql = "INSERT INTO declaration_mariage (nom_epoux, lieu_nais_epoux, date_nais_epoux, nom_epouse, lieu_nais_epouse, date_nais_epouse, lieu_mariage, date_mariage)
            VALUES ('$nom_epoux', '$lieu_nais_epoux', '$date_nais_epoux', '$nom_epouse', '$lieu_nais_epouse', '$date_nais_epouse', '$lieu_mariage','$date_mariage')";

    if ($conn->query($sql) === TRUE) {
        echo "Nouvel enregistrement créé avec succès";
        header("Location: Liste_declaration.php");
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


