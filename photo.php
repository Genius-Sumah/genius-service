<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Insertion des Informations de Mariage</title>
</head>
<body>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <label for="nomEpoux">Nom complet de l'époux :</label>
        <input type="text" id="nomEpoux" name="nomEpoux" required><br><br>
        
        <label for="photoEpoux">Photo de l'époux :</label>
        <input type="file" id="photoEpoux" name="photoEpoux" accept="image/*" required><br><br>
        
        <label for="nomEpouse">Nom complet de l'épouse :</label>
        <input type="text" id="nomEpouse" name="nomEpouse" required><br><br>
        
        <label for="photoEpouse">Photo de l'épouse :</label>
        <input type="file" id="photoEpouse" name="photoEpouse" accept="image/*" required><br><br>
        
        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>


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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomEpoux = $_POST['nomEpoux'];
    $nomEpouse = $_POST['nomEpouse'];

    // Récupérer les images et les convertir en données binaires
    $photoEpoux = addslashes(file_get_contents($_FILES['photoEpoux']['tmp_name']));
    $photoEpouse = addslashes(file_get_contents($_FILES['photoEpouse']['tmp_name']));

    // Préparer la requête d'insertion
    $sql = "INSERT INTO Mariage (nomEpoux, photoEpoux, nomEpouse, photoEpouse) VALUES ('$nomEpoux', '$photoEpoux', '$nomEpouse', '$photoEpouse')";

    if ($conn->query($sql) === TRUE) {
        echo "Nouveaux enregistrements ajoutés avec succès";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mariageDB";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}

// Requête de sélection
$sql = "SELECT nomEpoux, photoEpoux, nomEpouse, photoEpouse FROM Mariage";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table border="1">';
    echo '<tr><th>Nom complet de l\'époux</th><th>Photo de l\'époux</th><th>Nom complet de l\'épouse</th><th>Photo de l\'épouse</th></tr>';
    
    // Afficher les données
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["nomEpoux"] . '</td>';
        echo '<td><img src="data:image/jpeg;base64,'.base64_encode($row['photoEpoux']).'" height="100" width="100"/></td>';
        echo '<td>' . $row["nomEpouse"] . '</td>';
        echo '<td><img src="data:image/jpeg;base64,'.base64_encode($row['photoEpouse']).'" height="100" width="100"/></td>';
        echo '</tr>';
    }
    
    echo '</table>';
} else {
    echo "0 résultats";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des Informations de Mariage</title>
</head>
<body>
    <h2>Liste des Mariages</h2>
    <?php include 'display.php'; ?>
</body>
</html>