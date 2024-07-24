<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user.css">
    <title>Modifier l'utilisateur</title>
  
</head>
<body>

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
    $utilisateur= $result->fetch_assoc();

    // Fermer la connexion
    $conn->close();
    ?>
<form action="Modifier_utilisateur.php" method="post">
    <input type="hidden" name="id_utilisateur" value="<?php echo $_GET['id_utilisateur']; ?>">
    <div class="title"><B><U>Modifier l'utilisateur</U></B></div><br><br>
        <div class="form-row">
            <div class="form-group">
                <label for="nom_utilisateur">Nom d'utilisateur</label>
                <input type="text" name="nom_utilisateur" id="nom_utilisateur" value="<?php echo $utilisateur['nom_utilisateur']; ?>" required placeholder="entrer votre nom">
            </div>
            <div class="form-group">
                <label for="prenom_utilisateur">Prénom d'utilisateur</label>
                <input type="text" name="prenom_utilisateur" id="prenom_utilisateur" value="<?php echo $utilisateur['prenom_utilisateur']; ?>"required placeholder="entrer votre prenom">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" value="<?php echo $utilisateur['email']; ?>" required required placeholder="exemple@gmail.com">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="mot_de_passe">Mot de passe</label>
                <input type="password" name="mot_de_passe" id="mot_de_passe" value="<?php echo $utilisateur['mot_de_passe']; ?>"required placeholder="entrer votre mot de passe">
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" id="adresse" value="<?php echo $utilisateur['adresse']; ?>" required placeholder="entrer votre adresse">
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="tel" name="telephone" id="telephone" pattern="[0-9]{10}" value="<?php echo $utilisateur['telephone']; ?>" required required placeholder="+243900001234">
            </div>
        </div>

       <button type="submit">Modifier</button>

    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>