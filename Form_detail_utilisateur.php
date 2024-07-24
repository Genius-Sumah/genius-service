<!DOCTYPE html>
<html>
<head>
    <title>Détails de l'utilisateur</title>
</head>
<body>
    <form>
        <div class="detail">
    <h2><U>Détails de l'utilisateur</U></h2>
    <a href="liste_utilisateur.php" class="btn">Retour</a>
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

    // Récupérer l'ID de l'utilisateur
    $id_utilisateur = $_GET["id_utilisateur"];

    // Récupérer les données de l'utilisateur
    $sql = "SELECT * FROM utilisateur WHERE id_utilisateur='$id_utilisateur'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Afficher les données de l'utilisateur
        while($row = $result->fetch_assoc()) {
            echo "<p>Nom                : " . $row["nom_utilisateur"]. "</p>";
            echo "<p>Prénom             : " . $row["prenom_utilisateur"]. "</p>";
            echo "<p>E-mail             : " . $row["email"]. "</p>";
            echo "<p>Mot de passe       : " . $row["mot_de_passe"]. "</p>";
            echo "<p>Adresse            : " . $row["adresse"]. "</p>";
            echo "<p>Téléphone          : " . $row["telephone"]. "</p>";
            echo "<p>Date de création   : " . $row["creation"]. "</p>";
        }
    } else {
        echo "0 résultats";
    }

    // Fermer la connexion
    $conn->close();
    ?>
</div>
</form>
<style>
body {
    display: flex; 
    height: 100vh;
    justify-content: center;
    align-items: center;
    background: beige;
   font-family: 'Poppins', sans-serif;
}

.form {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

form .detail {
    width: 100%;
    border: 1px solid #ccc;
    padding: 10px;
    margin: 10px;
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
    border-radius: 15px;
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



.publication .detail, .publication .title {
    text-align: justify;
}
h2 {
    text-align: center;
}
p{
    padding: 10px;
    margin: 10px;
    

}
</style>


</body>
</html>
