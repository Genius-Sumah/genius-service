<!DOCTYPE html>
<html>
<head>
    <title>Liste des utilisateurs</title>
    <link rel="stylesheet" type="text/css" href="css/table_utilisateur.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <form>
    <h2><B>Liste des utilisateurs<B></h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>E-mail</th>
            <th>Adresse</th>
            <th>Téléphone</th>
            <th>Mot de passe</th>
            <th>Date de création</th>
            <th>Action</th>
        </tr>
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


        // Récupérer les données des utilisateurs
        $sql = "SELECT * FROM utilisateur";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $numero = 1;
            // Afficher les données de chaque utilisateur
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $numero . "</td>";
                echo "<td>" . $row["nom_utilisateur"] . "</td>";
                echo "<td>" . $row["prenom_utilisateur"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["adresse"] . "</td>";
                echo "<td>" . $row["telephone"] . "</td>";
                echo "<td>" . $row["mot_de_passe"] . "</td>";
                echo "<td>" . $row["creation"] . "</td>";
                echo "<td>
                        <a href='form_modifier_utilisateur.php?id_utilisateur=" . $row["id_utilisateur"] . "' class = 'action-icon edit'><i class = 'fas fa-edit'></i></a>
                        <a href='supprimer.php?id_utilisateur=" . $row["id_utilisateur"] . "' class = 'action-icon delete'><i class = 'fas fa-trash'></i></a>
                        <a href='form_detail_utilisateur.php?id_utilisateur=" . $row["id_utilisateur"] . "' class = 'action-icon edit' detail><i class = 'fas fa-info-circle'></i></a>
                      </td>";
                echo "</tr>";
                $numero++;
            }
        } else {
            echo "<tr><td colspan='7'>Aucun utilisateur trouvé</td></tr>";
        }

        // Fermer la connexion
        $conn->close();
        ?>
    </table>
</form>
</body>
</html>
