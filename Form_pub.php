<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/form_pub.css">
    <title>Formulaire de Mariage</title>
    <header>

</head>
<body>
    <form action="insert_pub.php" method="post" enctype="multipart/form-data">
            <div class="title">FORMULAIRE DE LA PUBLICATION DE MARIAGE</div><br>
<br>
<br>
        <!-- Informations sur l'époux -->
        <div class="form-row">
            <div class="form-group">
                <label for="photo_epoux">Photo de l'époux:</label>
                <input type="file" name="photo_epoux" id="photo_epoux" required>
            </div>
            <div class="form-group">
                <label for="nom_epoux">Nom de l'époux:</label>
                <input type="text" name="nom_epoux" id="nom_epoux" required>
            </div>
            <div class="form-group">
                <label for="lieu_nais_epoux">Lieu de naissance de l'époux:</label>
                <input type="text" name="lieu_nais_epoux" id="lieu_nais_epoux" required>
            </div>
            <div class="form-group">
                <label for="date_nais_epoux">Date de naissance de l'époux:</label>
                <input type="date" name="date_nais_epoux" id="date_nais_epoux" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="age_epoux">Âge de l'époux:</label>
                <input type="number" name="age_epoux" id="age_epoux" required>
            </div>
            <div class="form-group">
                <label for="profession_epoux">Profession de l'époux:</label>
                <input type="text" name="profession_epoux" id="profession_epoux" required>
            </div>
            <div class="form-group">
                <label for="nom_pere_epoux">Nom du père de l'époux:</label>
                <input type="text" name="nom_pere_epoux" id="nom_pere_epoux" required>
            </div>
            <div class="form-group">
                <label for="nom_mere_epoux">Nom de la mère de l'époux:</label>
                <input type="text" name="nom_mere_epoux" id="nom_mere_epoux" required>
            </div>
        </div>

        <!-- Informations sur l'épouse -->
        <div class="form-row">
            <div class="form-group">
                <label for="photo_epouse">Photo de l'épouse:</label>
                <input type="file" name="photo_epouse" id="photo_epouse" required><br>
            </div>
            <div class="form-group">
                <label for="nom_epouse">Nom de l'épouse:</label>
                <input type="text" name="nom_epouse" id="nom_epouse" required><br>
            </div>
            <div class="form-group">
                <label for="lieu_nais_epouse">Lieu de naissance de l'épouse:</label>
                <input type="text" name="lieu_nais_epouse" id="lieu_nais_epouse" required><br>
            </div>
            <div class="form-group">
                <label for="date_nais_epouse">Date de naissance de l'épouse:</label>
                <input type="date" name="date_nais_epouse" id="date_nais_epouse" required><br>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="age_epouse">Âge de l'épouse:</label>
                <input type="number" name="age_epouse" id="age_epouse" required><br>
            </div>

            <div class="form-group">
                <label for="profession_epouse">Profession de l'épouse:</label>
                <input type="text" name="profession_epouse" id="profession_epouse" required><br>
            </div>

            <div class="form-group">
                <label for="nom_pere_epouse">Nom du père de l'épouse:</label>
                <input type="text" name="nom_pere_epouse" id="nom_pere_epouse" required><br>
            </div>
            <div class="form-group">
                <label for="nom_mere_epouse">Nom de la mère de l'épouse:</label>
                <input type="text" name="nom_mere_epouse" id="nom_mere_epouse" required><br>
            </div> 
        </div>

        <!-- Informations sur la cérémonie -->
        <div class="form-row">
            <div class="form-group">
                <label for="jour_pub">Jour de la publication:</label>
                <input type="text" name="jour_pub" id="jour_pub" required><br>
            </div>

            <div class="form-group">
                <label for="ceremonie">Cérémonie:</label>
                <input type="text" name="ceremonie" id="ceremonie" required><br>
            </div>
            <div class="form-group">
                <label for="annee_pub">Année de publication:</label>
                <input type="text" name="annee_pub" id="annee_pub" required><br>
            </div>
            <div class="form-group">
                <label for="jour_pubb">Nombre de Jour:</label>
                <input type="text" name="jour_pubb" id="jour_pubb" required><br>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="mois_pub">Mois de publication:</label>
                <input type="text" name="mois_pub" id="mois_pub" required><br>
            </div>
            <div class="form-group">
                <label for="heure_pub">Heure de publication:</label>
                <input type="time" name="heure_pub" id="heure_pub" required><br>
            </div>
        
            <div class="form-group">
                <label for="nom_officier">Nom de l'officier:</label>
                <input type="text" name="nom_officier" id="nom_officier" required><br>
            </div>
        </div>
          <button type="submit">Publier</button>

    </form>
    </div>
</body>
</html>