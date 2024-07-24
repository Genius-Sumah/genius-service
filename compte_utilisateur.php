<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user.css">
    <title>Créer un compte utilisateur</title>
  
</head>
<body>

<form action="insert_utilisateur.php" method="post">
    <div class="title"><B><U>Créer un compte</U></B></div><br><br>

        <div class="form-row">
            <div class="form-group">
                <label for="nom_utilisateur">Nom d'utilisateur</label>
                <input type="text" name="nom_utilisateur" id="nom_utilisateur" required placeholder="entrer votre nom">
            </div>
            <div class="form-group">
                <label for="prenom_utilisateur">Prénom d'utilisateur</label>
                <input type="text" name="prenom_utilisateur" id="prenom_utilisateur" required placeholder="entrer votre prenom">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required required placeholder="exemple@gmail.com">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="mot_de_passe">Mot de passe</label>
                <input type="password" name="mot_de_passe" id="mot_de_passe" required placeholder="entrer votre mot de passe">
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" id="adresse" required placeholder="entrer votre adresse">
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="tel" name="telephone" id="telephone" pattern="[0-9]{10}" required placeholder="+243900001234">
            </div>
        </div>

       <button type="submit">Créer compte</button>

    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

