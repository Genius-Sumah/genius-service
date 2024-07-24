<!DOCTYPE html>
<html>
<head>
    <title>Supprimer l'utilisateur</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Supprimer l'utilisateur</h2>
    <?php
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "mariage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Echéc de la connexion: " . $conn->connect_error);
}

    // Récupérer l'ID de l'utilisateur
    $id_utilisateur = $_GET["id_utilisateur"];

    // Récupérer les données de l'utilisateur
    $sql = "SELECT * FROM utilisateur WHERE id_utilisateur='$id_utilisateur'";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();

    // Fermer la connexion
    $conn->close();
    ?>
    <form action="supprimer_utilisateur.php" method="post">
        <input type="hidden" name="id_utilisateur" value="<?php echo $user['id_utilisateur']; ?>">
        <p> Êtes-vous sûr de vouloir supprimer cet utilisateur ?</p>
        <button type="submit">Supprimer</button>
    </form>
</body>
</html>
