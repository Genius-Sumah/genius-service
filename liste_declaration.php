<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table des Informations</title>
</head>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 1em;
    min-width: 400px;
}

table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: center;
}

table th,
table td {
    padding: 12px 15px;
    border: 1px solid #dddddd;
}

table tbody tr {
    border-bottom: 1px solid #dddddd;
}

table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.title{
    font-size: 25px;
    font-weight: 500;
    position: relative;
    text-align: center;
}
.btn{
    display: inline-block;
    padding: 10px 20px;
    margin: 10px 0;
    font-size: 16px;
    color: white;
    background-color: #007BFF;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    text-align: center;
    cursor: pointer;
}
.btn:hover{
    background-color: #0056b3;
}
</style>
<body>

<div class="title"><B> LISTE DE DECLARATION DE MARIAGE</B></div>
<a href="declaration_mariage.php" class="btn">AJouter</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom de l'époux</th>
                <th>Lieu de naissance de l'époux</th>
                <th>Date de naissance de l'époux</th>
                <th>Nom de l'épouse</th>
                <th>Lieu de naissance de l'épouse</th>
                <th>Date de naissance de l'épouse</th>
                <th>Lieu de mariage</th>
                <th>Date de mariage</th>
            </tr>
        </thead>
        <tbody>
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

// Requête de sélection
$sql = "SELECT `id_declara`, `nom_epoux`, `lieu_nais_epoux`, `date_nais_epoux`, `nom_epouse`, `lieu_nais_epouse`, `date_nais_epouse`, `lieu_mariage`, `date_mariage` FROM `declaration_mariage` ";
$result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id_declara"] . '</td>';
        echo '<td>' . $row["nom_epoux"] . '</td>';
        echo '<td>' . $row["lieu_nais_epoux"] . '</td>';
        echo '<td>' . $row["date_nais_epoux"] . '</td>';
        echo '<td>' . $row["nom_epouse"] . '</td>';
        echo '<td>' . $row["lieu_nais_epouse"] . '</td>';
        echo '<td>' . $row["date_nais_epouse"] . '</td>';
        echo '<td>' . $row["lieu_mariage"] . '</td>';
        echo '<td>' . $row["date_mariage"] . '</td>';
        echo '</tr>';
    }
$conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>

