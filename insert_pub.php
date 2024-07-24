<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mariage";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Gestion des fichiers uploadés
$target_dir = "img/";
$photo_epoux = $target_dir . basename($_FILES["photo_epoux"]["name"]);
$photo_epouse = $target_dir . basename($_FILES["photo_epouse"]["name"]);
move_uploaded_file($_FILES["photo_epoux"]["tmp_name"], $photo_epoux);
move_uploaded_file($_FILES["photo_epouse"]["tmp_name"], $photo_epouse);


$nom_epoux = $_POST['nom_epoux'];
$lieu_nais_epoux = $_POST['lieu_nais_epoux'];
$date_nais_epoux = $_POST['date_nais_epoux'];
$age_epoux = $_POST['age_epoux'];
$profession_epoux = $_POST['profession_epoux'];
$nom_pere_epoux = $_POST['nom_pere_epoux'];
$nom_mere_epoux = $_POST['nom_mere_epoux'];

$nom_epouse = $_POST['nom_epouse'];
$lieu_nais_epouse = $_POST['lieu_nais_epouse'];
$date_nais_epouse = $_POST['date_nais_epouse'];
$age_epouse = $_POST['age_epouse'];
$profession_epouse = $_POST['profession_epouse'];
$nom_pere_epouse = $_POST['nom_pere_epouse'];
$nom_mere_epouse = $_POST['nom_mere_epouse'];

$jour_pub = $_POST['jour_pub'];
$heure_pub = $_POST['heure_pub'];
$ceremonie = $_POST['ceremonie'];
$annee_pub = $_POST['annee_pub'];
$jour_pubb = $_POST['jour_pubb'];
$mois_pub = $_POST['mois_pub'];
$nom_officier = $_POST['nom_officier'];

$sql = "INSERT INTO pub_mariage (photo_epoux, nom_epoux, lieu_nais_epoux, date_nais_epoux, age_epoux, profession_epoux, nom_pere_epoux, nom_mere_epoux, photo_epouse, nom_epouse, lieu_nais_epouse, date_nais_epouse, age_epouse, profession_epouse, nom_pere_epouse, nom_mere_epouse, jour_pub, heure_pub, ceremonie, annee_pub, jour_pubb, mois_pub, nom_officier)
VALUES ('$photo_epoux', '$nom_epoux', '$lieu_nais_epoux', '$date_nais_epoux', '$age_epoux', '$profession_epoux', '$nom_pere_epoux', '$nom_mere_epoux', '$photo_epouse', '$nom_epouse', '$lieu_nais_epouse', '$date_nais_epouse', '$age_epouse', '$profession_epouse', '$nom_pere_epouse', '$nom_mere_epouse', '$jour_pub', '$heure_pub', '$ceremonie', '$annee_pub', '$jour_pubb', '$mois_pub', '$nom_officier')";

if ($conn->query($sql) === TRUE) {
    echo "Publication de mariage";
    header("Location:index.php");
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
