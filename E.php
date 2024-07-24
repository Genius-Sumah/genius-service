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

$sql = "SELECT * FROM details_mariage ORDER BY id DESC LIMIT 10";
$result = $conn->query($sql);

$publications = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $publications[] = $row;
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Publications de Mariage</title>
    <link rel="stylesheet" href="body.css">
</head>
<body>
    <div class="container">
        <?php foreach ($publications as $publication): ?>
        <div class="publication">
            <img src="<?php echo $publication['photo_epoux']; ?>" alt="Photo de l'époux" class="photo">
            <img src="<?php echo $publication['photo_epouse']; ?>" alt="Photo de l'épouse" class="photo">
            <span class="detail"><b>Mariage projeté ce <?php echo $publication['jour_pub']; ?> à <?php echo $publication['heure_pub']; ?>, cérémonie: <?php echo $publication['ceremonie']; ?> </b></span>
            <div class="title"><b>REPUBLIQUE DEMOCRATIQUE DU CONGO</b></div>
            <p>L'an deux mille <?php echo $publication['annee_pub']; ?> le <?php echo $publication['jour_pubb']; ?> jour du mois de <?php echo $publication['mois_pub']; ?>, L'officier de l'État-Civil à <?php echo $publication['nom_officier']; ?> conformément à l'article 384 du code de la famille publions par affichage le mariage projeté entre le nommé <?php echo $publication['nom_epoux']; ?> né à <?php echo $publication['lieu_nais_epoux']; ?> le <?php echo $publication['date_nais_epoux']; ?>, âgé de <?php echo $publication['age_epoux']; ?> ans, profession <?php echo $publication['profession_epoux']; ?>, fils de <?php echo $publication['nom_pere_epoux']; ?> et de <?php echo $publication['nom_mere_epoux']; ?>, et la nommée <?php echo $publication['nom_epouse']; ?> née à <?php echo $publication['lieu_nais_epouse']; ?> le <?php echo $publication['date_nais_epouse']; ?>, âgée de <?php echo $publication['age_epouse']; ?> ans, profession <?php echo $publication['profession_epouse']; ?>, fille de <?php echo $publication['nom_pere_epouse']; ?> et de <?php echo $publication['nom_mere_epouse']; ?>. Affiché pendant 15 jours avant le mariage à la valve du bureau de l'officier de l'État-Civil.</p>
        </div>
        <?php endforeach; ?>
